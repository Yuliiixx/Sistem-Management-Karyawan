@extends('layouts.app')

@section('content')
    <div class="container mt-0">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Child</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Child</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">

                     
                        <form action="{{ route('children.update', $child->child_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $child->name }}">
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Birthdate:</label>
                                <input type="date" name="birthdate" class="form-control" id="birthdate" value="{{ $child->birthdate }}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male" {{ $child->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $child->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parent_name">Parent Name:</label>
                                <input type="text" name="parent_name" class="form-control" id="parent_name" value="{{ $child->parent_name }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" class="form-control" id="address" value="{{ $child->address }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ $child->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $child->email }}">
                            </div>
                            <div class="form-group">
                                <label for="package_id">Package:</label>
                                <select class="form-control" name="package_id" id="package_id">
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->package_id }}" {{ $child->package_id == $package->package_id ? 'selected' : '' }}>{{ $package->package_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
