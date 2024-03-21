<!-- resources/views/property/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('onSuccess'))
        <div class="alert alert-success">
            {{ session('onSuccess') }}
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-8 offset-md-2" >
            <div class="d-flex justify-content-between mb-4">
                <h1 class="display-5 fw-bold text-body-emphasis">Properties</h1>
            </div>
            <div class="card"  >
                <div class="card-body" style="max-width: 600px">
                    <form method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label  class="form-label fw-bold" for="property_title">Property Title</label>
                            <input type="text" id="property_title" name="property_title" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label  class="form-label fw-bold" for="rooms">No. of Rooms</label>
                                    <input type="number" id="rooms" name="rooms" class="form-control" required>
                                </div>
                        
                                <div class="form-group mb-3">
                                    <label  class="form-label fw-bold " for="bathrooms">No. of Bathrooms</label>
                                    <input type="number" id="bathrooms" name="bathrooms" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label  class="form-label fw-bold" for="location">Location</label>
                                    <input type="text" id="location" name="location" class="form-control" required>
                                </div>

                                <div class="d-flex flex-column mb-2" style="width: 35%;">
                                    <label class="form-label fw-bold" for="photo">Photo</label>
                                    <div class="form-group mb-3 border btn">
                                        <label for="photo">Browse</label>
                                        <input type="file" id="photo" name="photo" class="form-control-file" style="display: none;">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold" for="price">Price</label>
                                    <input type="number" id="price" name="price" class="form-control" step="0.01" required>
                                </div>
                        
                                <div class="form-group mb-3">
                                    <label  class="form-label fw-bold" for="property_type">Property Type</label>
                                    <select id="property_type" name="property_type" class="form-control" required>
                                        <option value="house">House</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condo">Condo</option>
                                        <!-- Add more options if needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add Property</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
