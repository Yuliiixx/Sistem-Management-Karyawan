@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Show Salary</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Salary Details</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Employee:</div>
                            <div class="col-md-8">{{ $salary->employee->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Month:</div>
                            <div class="col-md-8">{{ $salary->month }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Year:</div>
                            <div class="col-md-8">{{ $salary->year }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Total Hours:</div>
                            <div class="col-md-8">{{ $salary->total_hours }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Bonus:</div>
                            <div class="col-md-8">{{ $salary->bonus }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Deductions:</div>
                            <div class="col-md-8">{{ $salary->deductions }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Total Salary:</div>
                            <div class="col-md-8">{{ $salary->total_salary }}</div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
