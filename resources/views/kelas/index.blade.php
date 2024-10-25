@extends('layouts.app_bs')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-success" href="{{ route('data-kelas.create') }}">Tambah Data</a>
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
                                <td>
                                    <div class="d-flex">

                                        <a class="btn btn-warning" href="{{ route('data-kelas.edit', $dk->id) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('data-kelas.delete', $dk->id) }}"
                                            method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Hapus
                                            </button>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
