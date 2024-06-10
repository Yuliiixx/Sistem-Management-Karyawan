@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Salary</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Salary</div>
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
                        <form action="{{ route('salaries.update', $salary->salary_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="employee_id">Employee:</label>
                                <select class="form-control" name="employee_id" id="employee_id">
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->employee_id }}" {{ $employee->employee_id == $salary->employee_id ? 'selected' : '' }}>{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="month">Month:</label>
                                <input type="number" name="month" class="form-control" id="month" value="{{ $salary->month }}">
                            </div>
                            <div class="form-group">
                                <label for="year">Year:</label>
                                <input type="number" name="year" class="form-control" id="year" value="{{ $salary->year }}">
                            </div>
                            <div class="form-group">
                                <label for="total_hours">Total Hours:</label>
                                <input type="number" name="total_hours" class="form-control" id="total_hours" value="{{ $salary->total_hours }}">
                            </div>
                            <div class="form-group">
                                <label for="bonus">Bonus:</label>
                                <input type="number" step="0.01" name="bonus" class="form-control" id="bonus" value="{{ $salary->bonus }}">
                            </div>
                            <div class="form-group">
                                <label for="deductions">Deductions:</label>
                                <input type="number" step="0.01" name="deductions" class="form-control" id="deductions" value="{{ $salary->deductions }}">
                            </div>
                            <div class="form-group">
                                <label for="total_salary">Total Salary:</label>
                                <input type="number" step="0.01" name="total_salary" class="form-control" id="total_salary" value="{{ $salary->total_salary }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
