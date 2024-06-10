@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Class</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Class Name:</strong>
                    {{ $class->class_name }}
                </div>
                <div class="form-group">
                    <strong>Schedule:</strong>
                    {{ $class->schedule }}
                </div>
            </div>
        </div>
    </div>
@endsection
