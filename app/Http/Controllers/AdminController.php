<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests\PropertyValidateRequest;

use App\Property;

use App\Attribute;

use App\PropertieAttribute;

use App\PropertieType;







use Str;



class AdminController extends Controller

{

    public function show_dashboard()

    {



        return view("admin.properties.show");

    }



    public function get_properties(Request $request)

    {

        if ($request->value == "all") {

            $properties = Property::limit(20)->get();

            return view('admin.properties.show-tabel', compact('properties'));

        }

    }



    public function get_properties_featured(Request $request)

    {

        $properties = Property::limit(8)->get();

        return view('properties.featured', compact('properties'));

    }
    public function get_properties_featured2(Request $request)

    {

        $properties = Property::limit(8)->get();

        return view('properties.featured', compact('properties'));

    }


    public function importa(Request $request)

    {

        set_time_limit(6000);

        $properties = file_get_contents("https://oryon.crmrebs.com/api/public/property/?api_key=282acf90e90fa5c428202fc9e60c63dc5fb7adc7&limit=59");



        $properties = json_decode($properties);

        $nr = 0;



        foreach ($properties->objects as $elem) {

            $jsonel = array();

            $array = json_decode(json_encode($elem), true);



            foreach ($array as $key => $a) {



                $attribute = Attribute::where('key', $key)->first();



                if ($attribute != null) {





                    if (!is_array($a)) {



                        if ($a != null) {



                            $jsonel[$attribute->id] = $a;

                        }

                    }

                }

                if ($key == 'tags') {



                    $itema = PropertieAttribute::where('propertie_id', $elem->id)->where('type', '=', 'tags')->first();

                    if ($itema) {

                        $itema->value = json_encode($a);

                        $itema->type = "tags";

                        $itema->save();

                    } else {



                        $itema = new PropertieAttribute();

                        $itema->propertie_id = $elem->id;

                        $itema->value = json_encode($a);

                        $itema->type = "tags";

                        $itema->save();

                    }

                }

            }



            $property = Property::where('id', $elem->id)->first();

            if (!$property &&  $elem->title != null) {



                $property = new Property();

                $property->id = $elem->id;

                $property->title = $elem->title;

                $property->slug = str_slug($elem->title);

                $property->description = $elem->description;

                $property->localitate = $elem->city;

                $property->judet = $elem->region;

                $images = array();

                for ($i = 0; $i < count($elem->resized_images); $i++) {



                    $image = file_get_contents($elem->resized_images[$i]);

                    $time = time() . rand() . '.jpg';

                    if (!is_dir(storage_path() . '/app/public/properties/' .  $property->slug . '/')) {

                        mkdir(storage_path() . '/app/public/properties/' .    $property->slug . '/');

                    }

                    $output = storage_path() . '/app/public/properties/' .  $property->slug . '/' . $time;

                    if (file_put_contents($output, $image))

                        $images[] = $time;

                }



                $property->strada = $elem->street;

                $property->images = json_encode($images);

                $property->lat = $elem->lat;

                $property->long = $elem->lng;

                $property->type = $elem->property_type;

                if ($elem->for_sale == true) {

                    $property->transaction_type = 1;

                    $property->pret = $elem->price_sale;

                } else {

                    $property->transaction_type = 2;

                    $property->pret = $elem->price_rent;

                }

                $property->save();

                $itema = PropertieAttribute::where('propertie_id', $elem->id)->where('type', '!=', 'tags')->first();

                if ($itema) {

                    $itema->value = json_encode($jsonel);

                    $itema->save();

                } else {

                    $itema = new PropertieAttribute();

                    $itema->propertie_id = $elem->id;

                    $itema->value = json_encode($jsonel);

                    $itema->save();

                }

            }

        }



        return response('Completed');

    }



    // create

    public function create_property()

    {

        $estates = PropertieType::distinct()->get();

        $attribute=Attribute::all();

        return view('admin.properties.create', compact('estates','attribute'))->with('success', 'Property created successfully.');

    }



    // edit

    public function edit_property($id)

    {

        $estates = PropertieType::distinct()->get();

        $property = Property::where('id', $id)->firstOrFail();

        $propertie_attributes=PropertieAttribute::where("propertie_id",$property->id)->where('type',null)->first();

        $attribute=Attribute::all();

        return view('admin.properties.edit', compact('property', 'estates','propertie_attributes','attribute'));

    }



    // store

    public function store_property(Request $request)

    {



        if(count($request->images)>0)

        {

            foreach($request->images as $image)

            {

               

                $file=file_get_contents($image->getRealPath());

                $name = $image->getClientOriginalName();

                if (!is_dir(storage_path() . '/app/public/properties/' .  str_slug($request->title) . '/')) {

                    mkdir(storage_path() . '/app/public/properties/' .    str_slug($request->title) . '/');

                }

                $output = storage_path() . '/app/public/properties/' .   str_slug($request->title). '/' . $name;

                if (file_put_contents($output, $file)) 

                    $images[] = $name;

            }

           

        }

        $request->request->set('slug', str_slug($request->title));

        $request->request->set('images',json_encode($images));

        $property=Property::where('title',$request->title)->first();

        if(!$property){

            $property=new Property();

            foreach($request->request as $key=>$elem)

            { 

                 if($key=="_token" || $key=='keys' || $key=="values")

                 {

                    

                 }

                 else

                 {

                    $property->$key=$elem;

                 }

                 

            }

            $attributes=[];

            if($request->has('keys'))

            {

                

           

                for($i=0;$i<count($request->keys);$i++)

                {

                    

                    if(!array_key_exists($request->keys[$i],$attributes))

                    {

                        $attributes[$request->keys[$i]]=$request->values[$i];

                    }

                }

            }

           

            

            $property->save();

            

            $itema = new PropertieAttribute();

            $itema->propertie_id = $property->id;

            $itema->value = json_encode($attributes);

            $itema->save();

            

        }

        return redirect()->route('show-table');

    }

    // update

    public function update_property(Request $request, $id)

    {

         $property=Property::where('id', $id)->first();

         if($property)

         {



         

         foreach($request->request as $key=>$elem)

         { 

              if($key=="_token" || $key=='keys' || $key=="values")

              {

                 

              }

              else

              {

                 $property->$key=$elem;

              }

              

         }

         

         $attributes=[];

         if($request->has('keys'))

         {

             

        

             for($i=0;$i<count($request->keys);$i++)

             {

                 

                 if(!array_key_exists($request->keys[$i],$attributes))

                 {

                     $attributes[$request->keys[$i]]=$request->values[$i];

                 }

             }

         }

         $images=$request->images;

         if(count($request->images_upload)>0)

        {

            

            foreach($request->images_upload as $image)

            {

               

                $file=file_get_contents($image->getRealPath());

                $name = $image->getClientOriginalName();

                if (!is_dir(storage_path() . '/app/public/properties/' .   $property->slug . '/')) {

                    mkdir(storage_path() . '/app/public/properties/' .    $property->slug . '/');

                }

                $output = storage_path() . '/app/public/properties/' .   $property->slug. '/' . $name;

                if (file_put_contents($output, $file)) 

                    $images[] = $name;

            }

           

        }

        

        $property->images=json_encode($images);

         $property->save();

         

         $itema =PropertieAttribute::where('propertie_id',$property->id)->where('type',null)->first();

       

         if($itema)

         {

            $itema->value = json_encode($attributes);

            $itema->save();

         }

         else

         {

            $itema = new PropertieAttribute();

            $itema->propertie_id = $property->id;

            $itema->value = json_encode($attributes);

            $itema->save();

         }

        

        }

        return redirect()->route('show-table')->with('success', 'Property updated successfully');

    }



    // delete

    public function delete_property($id)

    {

        $property = Property::where('id', $id)->firstOrFail();

        $property->delete();

        return redirect()->route('show-table')->with('success', 'Property deleted successfully');

    }

}

