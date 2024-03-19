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
    <div class="col-md-3" > <!-- Adjust the column size based on your preference -->
        <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border:none; ">
            <img src="{{ asset('storage/photos/' . $property->photo) }}" alt="Property Photo" class="img-fluid" style="object-fit: cover; max-height: 12rem; border-radius: 5px 5px 0px 0px;">
            <div class="card-body">
                <h5 class="card-title m-0">{{ $property->property_title }}</h5>
                <div class="d-flex flex-row mb-3">
                    <i class="bi bi-geo-alt text-muted me-1"></i>
                    <p class="card-text text-muted fw-normal">{{ $property->location }}</p>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="chip text-white rounded-pill fw-medium" style="padding: 0.25rem 0.5rem; font-size: 0.875rem; background-color: #60A5FA;">${{ number_format($property->price, 0) }}</div>
                    <!-- Create a chip for the price element -->
                </div>
                
            </div>
            <div class="card-footer d-grid" style="padding: 0; margin-top: auto; border:none;"> <!-- Adjusted button class to take full width without padding or margin -->
                <a href="{{ route('properties.show', $property->id) }}" style="border-radius: 0; background-color: #15B8A7; border-radius: 0 0 5px 5px;" class="btn btn-block text-white fw-medium">View Property</a>
            </div>
        </div>
        
    </div>
    
    @endforeach
</div>

@endsection
{{-- bootstrapp padding: py-5, px-4 --}}
