@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create New Kehadiran</h2>
            </div>
        </div>
        <div class="row mt-4">
            <form action="{{ route('attendances.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="employee_id">Nama</label>
                    <select name="employee_id" class="form-control">
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->employee_id }}">{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <option value="Late">Late</option>
                        <option value="On Leave">On Leave</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
