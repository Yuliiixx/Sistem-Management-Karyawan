@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create New Class</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('classes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="class_name">Class Name:</label>
                        <input type="text" name="class_name" class="form-control" id="class_name" placeholder="Enter Class Name">
                    </div>
                    <div class="form-group">
                        <label for="schedule">Schedule:</label>
                        <input type="text" name="schedule" class="form-control" id="schedule" placeholder="Enter Schedule">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
