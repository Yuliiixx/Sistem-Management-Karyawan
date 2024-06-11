@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Management Karyawan</h2>
                <a class="btn btn-success" href="{{ route('employees.create') }}">Create New Karyawan</a>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Posisi</th>
                    <th>Basic Salary</th>
                    <th>Tanggal Bergabung</th>
                    <th width="180px">Action</th> <!-- Lebar kolom dikurangi karena ikon lebih kecil -->
                </tr>
                @php $i = 0; @endphp
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->basic_salary }}</td>
                    <td>{{ $employee->date_joined }}</td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->employee_id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('employees.show', $employee->employee_id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-primary btn-sm" href="{{ route('employees.edit', $employee->employee_id) }}"><i class="fas fa-edit"></i></a>
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
