@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Assessments Psikology Anak</h2>
                <a class="btn btn-success mb-3" href="{{ route('assessments.create') }}">Create New Assessment</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Child</th>
                            <th>Date</th>
                            <th>Result</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessments as $assessment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $assessment->child->name }}</td>
                                <td>{{ $assessment->date }}</td>
                                <td>{{ $assessment->result }}</td>
                                <td>
                                    <form action="{{ route('assessments.destroy', $assessment->assessment_id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('assessments.show', $assessment->assessment_id) }}"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ route('assessments.edit', $assessment->assessment_id) }}"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $assessments->links() !!}
            </div>
        </div>
    </div>
@endsection
