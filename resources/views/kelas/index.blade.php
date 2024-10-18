@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kelas') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Action</th>
                        </thead>
                        @foreach ($dataKelas as $dk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $dk->nama_kelas }} </td>
                                <td> --- </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
