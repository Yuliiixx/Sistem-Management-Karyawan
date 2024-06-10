@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Attendance Management</h2>
                <a class="btn btn-success" href="{{ route('attendances.create') }}">Create New Attendance</a>
            </div>
        </div>
        <div class="row mt-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th width="150px">Action</th>
                </tr>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $attendance->employee->name }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->status }}</td>
                    <td>
                        <form action="{{ route('attendances.destroy', $attendance->attendance_id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('attendances.show', $attendance->attendance_id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-primary btn-sm" href="{{ route('attendances.edit', $attendance->attendance_id) }}"><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
