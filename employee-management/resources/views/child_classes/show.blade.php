@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Child Class</h2>
              
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Child Class Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Child:</strong>
                            {{ $childClass->child->name }}
                        </div>
                        <div class="form-group">
                            <strong>Class:</strong>
                            {{ $childClass->class->class_name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               
                <a class="btn btn-primary" href="{{ route('child_classes.index') }}">Back</a>
            </div>
        </div>
    </div>
@endsection
