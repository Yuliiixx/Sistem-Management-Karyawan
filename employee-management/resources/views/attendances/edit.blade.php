@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Attendance</h2>
            </div>
        </div>
        <div class="row mt-4">
            <form action="{{ route('attendances.update', $attendance->attendance_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="employee_id">Employee</label>
                    <select name="employee_id" class="form-control">
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->employee_id }}" {{ $employee->employee_id == $attendance->employee_id ? 'selected' : '' }}>{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" value="{{ $attendance->date }}" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="Present" {{ $attendance->status == 'Present' ? 'selected' : '' }}>Present</option>
                        <option value="Absent" {{ $attendance->status == 'Absent' ? 'selected' : '' }}>Absent</option>
                        <option value="Late" {{ $attendance->status == 'Late' ? 'selected' : '' }}>Late</option>
                        <option value="On Leave" {{ $attendance->status == 'On Leave' ? 'selected' : '' }}>On Leave</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
