@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Report</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Report Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nama Anak:</strong>
                            {{ $report->child->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tanggal:</strong>
                            {{ $report->date }}
                        </div>
                        <div class="form-group">
                            <strong>Deskripsi:</strong>
                            {{ $report->description }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('reports.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
