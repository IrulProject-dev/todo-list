@extends('layouts.aplikasi')

@section('konten')

@push('style')

<style>
    body {
        background: url('/images/bg.jpg') no-repeat center center fixed;
        background-size: cover;
        backdrop-filter: blur(8px);
    }

    .blur-overlay {
        backdrop-filter: blur(8px);
        min-height: 100vh;
    }

    .card-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 500px;
    }

    .table-wrapper {
        background-color: rgba(255, 255, 255, 0.75);
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
    }
    </style>
@endpush

<div class="container-fluid blur-overlay p-4">
    <div class="card card-center shadow-lg">
        <div class="card-body">
            <h5 class="card-title mb-4 text-center">Tambah User Baru</h5>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
