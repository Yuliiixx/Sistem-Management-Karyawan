@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Kelas</h2>
                <a class="btn btn-success mb-3" href="{{ route('classes.create') }}">Create New Class</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Schedule</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $class->class_name }}</td>
                            <td>{{ $class->schedule }}</td>
                            <td>
                                <form action="{{ route('classes.destroy', $class->class_id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('classes.show', $class->class_id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('classes.edit', $class->class_id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
