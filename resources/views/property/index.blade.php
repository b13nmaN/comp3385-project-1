@extends('layouts.app')

@section('content')
<div class="mb-3">
    @if (session('onSuccess'))
    <div class="alert alert-success" role="alert">
        {{ session('onSuccess') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
</div>
<div class="d-flex justify-content-between mb-5">
    <h1 class="display-5 fw-bold text-body-emphasis">Properties</h1>
</div>
<div class="row g-3">
    @foreach ($properties as $property)
    <div class="col-md-3"> <!-- Adjust the column size based on your preference -->
        <div class="card">
            <img src="{{ asset('storage/photos/' . $property->photo) }}" alt="Property Photo" class="mb-3 img-fluid">
            <div class="card-body">
                <h5 class="card-title">{{ $property->property_title }}</h5>
                <p class="card-text">{{ $property->location }}</p>
                <div class="d-flex px-3 py-2 bg-primary text-white rounded-4 mb-3 justify-content-center" style="width: 25%;">
                    <div class="col-md-auto"> <!-- Adjust the column size based on your preference -->
                        <p class="card-text">${{ $property->price }}</p>
                    </div>
                </div>
                
                <div class="card-footer ">
                    <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary w-100">View Property</a>
                </div>
              
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
{{-- bootstrapp padding: py-5, px-4 --}}
