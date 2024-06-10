@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Package</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Package Name:</strong>
                    {{ $package->package_name }}
                </div>
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $package->description }}
                </div>
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $package->price }}
                </div>
            </div>
        </div>
    </div>
@endsection
