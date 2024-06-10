@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create New Salary</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Salary</div>
                    <div class="card-body" style="max-height: 380px; overflow-y: auto;">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('salaries.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="employee_id">Employee:</label>
                                <select class="form-control" name="employee_id" id="employee_id">
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->employee_id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="month">Month:</label>
                                <input type="number" name="month" class="form-control" id="month" placeholder="Enter Month">
                            </div>
                            <div class="form-group">
                                <label for="year">Year:</label>
                                <input type="number" name="year" class="form-control" id="year" placeholder="Enter Year">
                            </div>
                            <div class="form-group">
                                <label for="total_hours">Total Hours:</label>
                                <input type="number" name="total_hours" class="form-control" id="total_hours" placeholder="Enter Total Hours">
                            </div>
                            <div class="form-group">
                                <label for="bonus">Bonus:</label>
                                <input type="number" step="0.01" name="bonus" class="form-control" id="bonus" placeholder="Enter Bonus">
                            </div>
                            <div class="form-group">
                                <label for="deductions">Deductions:</label>
                                <input type="number" step="0.01" name="deductions" class="form-control" id="deductions" placeholder="Enter Deductions">
                            </div>
                            <div class="form-group">
                                <label for="total_salary">Total Salary:</label>
                                <input type="number" step="0.01" name="total_salary" class="form-control" id="total_salary" placeholder="Enter Total Salary">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
