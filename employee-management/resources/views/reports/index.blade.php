@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Laporan Harian Anak</h2>
                <a class="btn btn-success mb-3" href="{{ route('reports.create') }}">Create New Report</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anak</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $report->child->name }}</td>
                                <td>{{ $report->date }}</td>
                                <td>{{ $report->description }}</td>
                                <td>
                                    <form action="{{ route('reports.destroy', $report->report_id) }}" method="POST" style="display: inline;">
                                        <a class="btn btn-info" href="{{ route('reports.show', $report->report_id) }}"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ route('reports.edit', $report->report_id) }}"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $reports->links() !!}
            </div>
        </div>
    </div>
@endsection
