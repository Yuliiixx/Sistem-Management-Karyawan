@extends('layouts.app')

@section('content')
    <div class="container mt-0">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Child</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Child Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $child->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal Lahir:</strong>
                            {{ $child->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $child->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Nama Orangtua:</strong>
                            {{ $child->parent_name }}
                        </div>
                        <div class="form-group">
                            <strong>Alamat:</strong>
                            {{ $child->address }}
                        </div>
                        <div class="form-group">
                            <strong>No hp:</strong>
                            {{ $child->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $child->email }}
                        </div>
                        <div class="form-group">
                            <strong>Package:</strong>
                            {{ $child->package->package_name }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('children.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
