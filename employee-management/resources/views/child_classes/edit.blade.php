@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Child Class</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Child Class</div>
                    <div class="card-body custom-scroll">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('child_classes.update', $childClass->child_class_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="child_id">Child:</label>
                                <select class="form-control" name="child_id" id="child_id">
                                    @foreach ($children as $child)
                                        <option value="{{ $child->child_id }}" {{ $child->child_id == $childClass->child_id ? 'selected' : '' }}>{{ $child->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="class_id">Class:</label>
                                <select class="form-control" name="class_id" id="class_id">
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->class_id }}" {{ $class->class_id == $childClass->class_id ? 'selected' : '' }}>{{ $class->class_name }}</option>
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
@endsection
