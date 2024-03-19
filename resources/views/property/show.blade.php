@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card horizontal-card text-center">
                <div class="card-body d-flex align-items-center">
                    <div class="mr-3">
                        <img src="{{ asset('storage/photos/' . $property->photo) }}" alt="Property Photo" class="img-fluid rounded">
                    </div>
                    <div>
                        <p><strong>Description:</strong> {{ $property->description }}</p>
                        <p><strong>Rooms:</strong> {{ $property->rooms }}</p>
                        <p><strong>Bathrooms:</strong> {{ $property->bathrooms }}</p>
                        <p><strong>Price:</strong> ${{ $property->price }}</p>
                        <p><strong>Property Type:</strong> {{ $property->property_type }}</p>
                        <p><strong>Location:</strong> {{ $property->location }}</p>

                        <a href="{{ url('/properties') }}" class="btn btn-primary mt-3">Back to Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
