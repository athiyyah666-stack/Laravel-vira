<!-- ```php
@extends('layouts.app')

@section('content')

<div class="auth-page">

    <div class="auth-box">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="auth-logo">
            📷 Digi<span>Cam</span>
        </div>

        <h1>Buat Akun DigiCam</h1>

        <p>Daftar untuk menggunakan layanan DigiCam.</p>

        <form method="POST" action="{{ route('register.process') }}">

            @csrf

            <label>Nama</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Masukkan nama"
                required
            >

            <label>Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan Gmail"
                required
            >

            <label>Password</label>
            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

            <label>Konfirmasi Password</label>
            <input
                type="password"
                name="password_confirmation"
                placeholder="Ulangi password"
                required
            >

            <button type="submit">
                Daftar
            </button>

        </form>

        <p class="auth-footer">
            Sudah punya akun?
            <a href="{{ route('login') }}">
                Login sekarang
            </a>
        </p>

    </div>

</div>

@endsection
 -->
