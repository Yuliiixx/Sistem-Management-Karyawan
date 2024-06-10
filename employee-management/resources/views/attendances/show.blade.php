@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="mb-4">Detail Kehadiran</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Kehadiran Karyawan
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Nama Karyawan:</div>
                        <div class="col-md-8">{{ $attendance->employee->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Tanggal:</div>
                        <div class="col-md-8">{{ $attendance->date }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Status Kehadiran:</div>
                        <div class="col-md-8">
                            <span class="badge badge-pill 
                            @if($attendance->status == 'Present') badge-success 
                            @elseif($attendance->status == 'Absent') badge-danger 
                            @elseif($attendance->status == 'Late') badge-warning 
                            @elseif($attendance->status == 'On Leave') badge-info 
                            @endif">
                                {{ $attendance->status }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
