@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body d-flex align-items-center w-75 rounded" style="border: 1px solid #E5E7EB;">
                    <div class="mr-3 w-75 h-100 bg-primary">
                        <img src="{{ asset('storage/photos/' . $property->photo) }}" alt="Property Photo" class="img-fluid rounded-start" style="object-fit: cover;">
                    </div>
                    <div class="d-flex flex-column w-100 text-left p-3 ">
                        <h5 class="card-title mb-2">{{ $property->property_title }}</h5>
                        <div class="d-flex flex-row mb-3 ">

                            <div class="d-flex justify-content-between align-items-center me-3 ">
                                <div class="chip text-white rounded-pill fw-medium" style="padding: 0.25rem 0.5rem; font-size: 0.875rem; background-color: #60A5FA;">${{ number_format($property->price, 0) }}</div>
                                <!-- Create a chip for the price element -->
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="chip text-white rounded-pill fw-medium" style="padding: 0.25rem 0.5rem; font-size: 0.875rem; background-color: #FBBF23;">{{ $property->property_type }}</div>
                                <!-- Create a chip for the price element -->
                            </div>
                        </div>
                        <p class="card-text text-muted">{{ $property->description }}</p>
                        <div class="d-flex flex-row mb-3 align-items-center">
                            <div class="d-flex flex-row  me-3 justify-content-center align-items-center">
                                <i class="fa-solid fa-bed me-1"></i>
                                <p class="card-text text-muted fw-normal">{{ $property->rooms }} Bedrooms</p>
                            </div>
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <i class="fa-solid fa-shower me-1"></i>
                                <p class="card-text text-muted fw-normal">{{ $property->bathrooms }} Bathrooms</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-3">
                            <i class="bi bi-geo-alt text-muted me-1"></i>
                            <p class="card-text text-muted fw-normal">{{ $property->location }}</p>
                        </div>

                        <a href="{{ url('#') }}" style="background-color: #15B8A7; width: 40%; font-size: 0.875rem" class="btn mt-3 fw-medium text-white float-end">Email Realtor</a>

                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
