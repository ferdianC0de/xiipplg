@extends('layouts.app_bs')

@section('content')
<div class="container-fluid">
    <form action="{{ route('data-kelas.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Nama Kelas">
        </div>

        <button type="submit" class="btn btn-success">
            Tambah Data
        </button>
    </form>
</div>
@endsection
