@extends('layouts.aplikasi')

@section('konten')
    <h1>Detail User</h1>
    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Tanggal</strong>{{ $user->created_at }}</p>

    <h2>Tasks</h2>
    @if ($user->tasks->isEmpty())
        <p>User ini tidak memiliki tugas.</p>
    @else
        <ul>
            @foreach ($user->tasks as $task)
                <li>{{ $task->title }} - {{ $task->description }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
