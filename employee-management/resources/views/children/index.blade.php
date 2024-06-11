@extends('layouts.app')

@section('content')
    <div class="container mt-0">
        <div class="row">
            <div class="col-lg-12">
                <h2>Management Anak</h2>
                <a class="btn btn-success mb-3" href="{{ route('children.create') }}">Create New Child</a>
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
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Orangtua</th>
                            <th>Package</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($children as $child)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $child->name }}</td>
                                <td>{{ $child->birthdate }}</td>
                                <td>{{ $child->gender }}</td>
                                <td>{{ $child->parent_name }}</td>
                                <td>{{ $child->package->package_name }}</td>
                                <td>
                                    <form action="{{ route('children.destroy', $child->child_id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('children.show', $child->child_id) }}"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ route('children.edit', $child->child_id) }}"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $children->links() !!}
            </div>
        </div>
    </div>
@endsection
