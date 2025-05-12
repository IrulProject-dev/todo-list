@extends('layouts.aplikasi')

@section('konten')
<div class="table-wrapper">
    <h4 class="mb-3">Daftar User</h4>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <div>
                    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
                        <i class="bi bi-plus-circle"></i>
                    </a>
                </div>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $i => $user)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm me-2">
                            <i class="bi bi-eye"></i>
                        </a>

                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-success btn-sm me-2">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
