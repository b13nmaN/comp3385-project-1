<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('property.index', compact('properties'));
    }

    public function create()
    {
        return view('property.create');
    }

    public function show(Property $property)
    {

        return view('property.show', compact('property'));
    }

    public function store (Request $request)
    { // Validate incoming request
        $validatedData = $request->validate([
            'property_title' => 'required|string',
            'description' => 'required|string',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'price' => 'required|numeric',
            'property_type' => 'required|string',
            'location' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assuming photo path will be stored
        ]);

        // dd($validatedData);
        
        $property_title = $request->input('property_title');
        $description = $request->input('description');
        $rooms = $request->input('rooms');
        $bathrooms = $request->input('bathrooms');
        $price = $request->input('price');
        $property_type = $request->input('property_type');
        $location = $request->input('location');
        $photo = $request->file('photo');

        $filename = $property_title ."_". time() . '.' . $photo->getClientOriginalExtension();

        // dd($photo);

        // add a new property to the database
        $property = new Property();
        $property->property_title = $property_title;
        $property->description = $description;
        $property->rooms = $rooms;
        $property->bathrooms = $bathrooms;
        $property->price = $price;
        $property->property_type = $property_type;
        $property->location = $location;
        $property->photo = $filename;

        $photo->storeAs('photos', $filename, 'public');
        $property->save();

        return redirect('/properties/create')->with('onSuccess', 'Property created successfully!');
    }


}
