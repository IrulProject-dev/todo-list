@extends('layouts.aplikasi')

@section('konten')
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        @endforeach
    </table>
@endsection
