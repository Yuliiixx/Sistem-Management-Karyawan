@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Salary Management</h2>
                <a class="btn btn-success mb-3" href="{{ route('salaries.create') }}">Create New Salary</a>
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
                            <!-- <th>Month</th>
                            <th>Year</th> -->
                            <th>Total Jam</th>
                            <th>Bonus</th>
                            <th>Potongan</th>
                            <th>Total Salary</th>
                            <th width="160px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 0; @endphp
                        @foreach ($salaries as $salary)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $salary->employee->name }}</td>
                                <!-- <td>{{ $salary->month }}</td>
                                <td>{{ $salary->year }}</td> -->
                                <td>{{ $salary->total_hours }}</td>
                                <td>{{ $salary->bonus }}</td>
                                <td>{{ $salary->deductions }}</td>
                                <td>{{ $salary->total_salary }}</td>
                                <td>
                                    <form action="{{ route('salaries.destroy', $salary->salary_id) }}" method="POST" style="display:inline-block;">
                                        <a class="btn btn-info" href="{{ route('salaries.show', $salary->salary_id) }}"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ route('salaries.edit', $salary->salary_id) }}"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $salaries->links() !!}
            </div>
        </div>
    </div>
@endsection
