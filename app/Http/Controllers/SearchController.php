<?php



namespace App\Http\Controllers;



use App\Models\Blog;

use App\Models\BlogCategory;

use Illuminate\Http\Request;

use App\Property;

use App\PropertieType;

use App\PropertieAttribute;

use Illuminate\Support\Facades\Validator;



class SearchController extends Controller

{

  public function welcome()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    $locations = Property::distinct()->get('localitate', 'transaction_type');

    $estates = PropertieType::distinct()->get();

    $properties=Property::where('status','1')->limit(8)->get();
    $properties_featured=Property::where('status','1')->limit(4)->get();

    return view('welcome', compact('locations', 'estates', 'last_properties','properties','properties_featured'));

  }



  public function redProperties()

  {

    return redirect('/');

  }



  public function get_data(Request $request)

  {

  
    if($request->has('location') && $request->has('tip_tranzactie') && $request->has('estate'))

    {

      $properties=Property::where('localitate','like','%'.$request->location.'%')

      ->where('transaction_type','like','%'.$request->tip_tranzactie.'%')

      ->where('type','like','%'.$request->estate.'%')

      ->get();

    }





// verific

    $first_property=Property::where('localitate','like','%'.$request->location.'%')

    ->where('transaction_type','like','%'.$request->tip_tranzactie.'%')

    ->where('type','like','%'.$request->estate.'%')

    ->first();

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    if (count($properties )>0) {

      return view('properties.search-property', compact('properties', 'first_property','last_properties'));

    } else {

      return redirect('/')

        ->withErrors('Nu exista rezultate pentru selectia facuta!');

    }

  }



  public function get_data_prop(Request $request){

    if($request->has('location') && $request->has('tip_tranzactie') && $request->has('estate') && $request->has('suprafata') && $request->has('pret') && $request->has('bedrooms'))

    {

      $properties = [];

      $re_properties=Property::where('localitate','like','%'.$request->location.'%')

      ->where('transaction_type','like','%'.$request->tip_tranzactie.'%')

      ->where('type','like','%'.$request->estate.'%')

      ->where('pret','like','%'.$request->pret.'%')

      ->get();

      // dd($re_properties);

      if(count($re_properties)>0){

        foreach($re_properties as $property){

          $attribute = PropertieAttribute::where('propertie_id', $property->id)->where('type', null)

          ->where('value','like','%"43":'.$request->bedrooms.'%')->get();

          if($attribute){

            $properties[]=$property;

          }

        }

      }

      dd($properties);

    }

    

  }





  public function get_home_search($type)

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    $first_property = Property::where('type', '=', $type)

      ->first();

    $properties = Property::with('user')->where('type', '=', $type)

      ->get();



    if (count($properties) > 0) {

      return view('properties.search-property', compact('properties', 'first_property', 'last_properties'));

    } else {

      return redirect('/')

        ->withErrors('Nu exista rezultate pentru selectia facuta.');

    }

  }



  public function get_trans_type($trans_type){

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    $first_property = Property::where('transaction_type', '=', $trans_type)->first();

    $properties = Property::where('transaction_type', '=', $trans_type)->get();



    if (count($properties) > 0) {

      return view('properties.search-property', compact('properties', 'first_property', 'last_properties'));

    } else {

      return redirect('/')

        ->withErrors('Nu exista rezultate pentru selectia facuta.');

    }

  }





  public function despre()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.despre', compact('last_properties'));

  }

  public function contact()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.contact', compact('last_properties'));

  }

  public function blog()

  {

    $blog_categories = BlogCategory::get();

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    $blogs = Blog::with('blogUser')->where('status', 1)->orderBy('id', 'DESC')->paginate(3);

    // dd($blogs);

    return view('frontend.blog', compact('last_properties', 'blogs', 'blog_categories'));

  }



  public function blogsearch($propertie_types)

  {

    // vali pls 

    // dd($propertie_types);

    $blog_categories = BlogCategory::get();

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    $blogs = Blog::with('blogUser')->where('status', 1)->where('propertie_types', '=' , $propertie_types)->orderBy('id', 'DESC')->paginate(3);

    return view('frontend.blogsearch', compact('last_properties', 'blogs', 'blog_categories'));

  }



  public function curs()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.curs', compact('last_properties'));

  }

  public function termeni_si_conditii()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.termeni-si-conditii', compact('last_properties'));

  }

  public function cariere()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.cariere', compact('last_properties'));

  }

  public function informatii_utile()

  {

    $last_properties = Property::orderBy('id', 'desc')->take(3)->get();

    return view('frontend.informatii-utile', compact('last_properties'));

  }
  

}

