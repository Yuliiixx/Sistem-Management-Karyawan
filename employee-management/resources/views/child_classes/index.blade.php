@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Management Kelas Anak</h2>
                <a class="btn btn-success mb-3" href="{{ route('child_classes.create') }}">
                    <i class="fas fa-plus"></i> Create New Child Class
                </a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($childClasses as $childClass)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $childClass->child->name }}</td>
                            <td>{{ $childClass->class->class_name }}</td>
                            <td>
                                <form action="{{ route('child_classes.destroy', $childClass->child_class_id) }}" method="POST" style="display:inline;">
                                    <a class="btn btn-info" href="{{ route('child_classes.show', $childClass->child_class_id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('child_classes.edit', $childClass->child_class_id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $childClasses->links() !!}
            </div>
        </div>
    </div>
@endsection
