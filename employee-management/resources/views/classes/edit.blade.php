@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Class</h2>
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
                <form action="{{ route('classes.update', $class->class_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="class_name">Class Name:</label>
                        <input type="text" name="class_name" class="form-control" id="class_name" value="{{ $class->class_name }}">
                    </div>
                    <div class="form-group">
                        <label for="schedule">Schedule:</label>
                        <input type="text" name="schedule" class="form-control" id="schedule" value="{{ $class->schedule }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
