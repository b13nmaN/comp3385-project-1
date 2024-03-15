<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property.index');
    }

    public function create()
    {
        return view('property.create');
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
            'photo' => 'nullable|string', // Assuming photo path will be stored
        ]);
        
        $property_title = $request->input('property_title');
        $description = $request->input('description');
        $rooms = $request->input('rooms');
        $bathrooms = $request->input('bathrooms');
        $price = $request->input('price');
        $property_type = $request->input('property_type');
        $location = $request->input('location');
        $photo = $request->file('photo');

        $filename = $property_title . time() . '.' . $photo->getClientOriginalExtension();

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

        return redirect('/properties')->with('onSuccess', 'Property created successfully!');
    }


}
