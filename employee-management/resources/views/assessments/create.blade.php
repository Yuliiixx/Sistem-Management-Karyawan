@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create New Assessment</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Assessment</div>
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
                        <form action="{{ route('assessments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="child_id">Child:</label>
                                <select class="form-control" name="child_id" id="child_id">
                                    @foreach ($children as $child)
                                        <option value="{{ $child->child_id }}">{{ $child->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="result">Result:</label>
                                <textarea name="result" class="form-control" id="result" placeholder="Enter result"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
