@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Assessment</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Assessment Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nama Anak:</strong>
                            {{ $assessment->child->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            {{ $assessment->date }}
                        </div>
                        <div class="form-group">
                            <strong>Hasil:</strong>
                            {{ $assessment->result }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('assessments.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
