<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\PropertyAttribute;
use App\PropertieType;
use Auth;
class PropertyController extends Controller
{
    public function show_one_property($slug)
    {
        $property = Property::with('propertyAtr')->where('slug', $slug)->first();
        $locations = Property::distinct()->get('localitate', 'transaction_type');
        $estates = PropertieType::distinct()->get();
        $last_properties = Property::orderBy('id', 'desc')->take(3)->get();
        $similar_properties = Property::inRandomOrder()->where('slug', '!=', $slug)
            ->orWhere('localitate', 'like', '%' . $property->localitate . '%')
            ->orWhere('transaction_type', 'like', '%' . $property->transaction_type . '%')
            ->orWhere('type', 'like', '%' . $property->type . '%')->limit(2)->get();
        // get_atribute($property->id, $property->type);
        // dd($property);
        if ($property) {
            return view('properties.show-one', compact('property', 'last_properties', 'locations', 'estates', 'similar_properties'));
        }
        return redirect('/');
    }

    public function add_property()
    {
        $types = PropertieType::all();
        return view('properties/add-property', compact("types"));
    }

    public function save_property(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'transaction_type' => 'required',
            'type' => 'required',
            'price' => 'required',
            'adresa' => 'required',
            'oras' => 'required',
            'judet' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'description' => 'required',
            'tos'=>'required'

        ]);

        $property = new Property();
        $property->title = $validated['title'];
        $property->transaction_type = $validated['transaction_type'];
        $property->type = $validated['type'];
        $property->pret = $validated['price'];
        $property->adresa = $validated['adresa'];
        $property->localitate = $validated['oras'];
        $property->judet = $validated['judet'];
        $property->lat = $validated['lat'];
        $property->long = $validated['long'];
        $property->description = $validated['description'];
        $property->slug = str_slug($validated['title']);
        if (count($request->images) > 0) {
            foreach ($request->images as $image) {
                $file = file_get_contents($image->getRealPath());

                $name = $image->getClientOriginalName();

                if (!is_dir(storage_path() . '/app/public/properties/' .  str_slug($request->title) . '/')) {

                    mkdir(storage_path() . '/app/public/properties/' .    str_slug($request->title) . '/');
                }

                $output = storage_path() . '/app/public/properties/' .   str_slug($request->title) . '/' . $name;

                if (file_put_contents($output, $file))

                    $images[] = $name;
            }
        }
        $property->images = json_encode($images);
        $property->contact_name=$request->contact_name;
        $property->contact_email=$request->contact_email;
        $property->contact_telefon=$request->contact_telefon;
        $property->dotari=json_encode($request->optiuni);
        $property->user_id=Auth::user()->id;
        $property->save();
        return redirect ('/');
    }
}
