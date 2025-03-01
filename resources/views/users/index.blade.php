@extends('../layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ route('data-users.create') }}" class="btn btn-success btn-labeled">
                        <span class="btn-label">
                            <i class="fa fa-plus"></i>
                        </span>
                        Tambah
                    </a>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\User::all() as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>
                                        <a href="{{ $u->id }}" class="btn btn-warning btn-labeled">
                                            <span class="btn-label">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            Edit
                                        </a>
                                        |
                                        <a href="{{ $u->id }}" class="btn btn-danger btn-labeled">
                                            <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
