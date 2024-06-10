@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Package Management</h2>
                <a class="btn btn-success mb-3" href="{{ route('packages.create') }}">Create New Package</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Package Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $package->package_name }}</td>
                            <td>{{ $package->description }}</td>
                            <td>{{ $package->price }}</td>
                            <td>
                                <form action="{{ route('packages.destroy', $package->package_id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('packages.show', $package->package_id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('packages.edit', $package->package_id) }}"><i class="fas fa-edit"></i></a>
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
