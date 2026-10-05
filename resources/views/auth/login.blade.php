<!-- @extends('layouts.app')

@section('content')

<div class="auth-page">

    <div class="auth-box">

        {{-- PESAN LOGIN SALAH --}}
        @if ($errors->has('login'))

            <div class="alert alert-danger">
                {{ $errors->first('login') }}
            </div>

        @endif


        <div class="auth-logo">
            📷 Digi<span>Cam</span>
        </div>


        <h1>Selamat Datang!</h1>

        <p>
            Login untuk melanjutkan ke akun DigiCam.
        </p>


        <form method="POST" action="{{ route('login.process') }}">

            @csrf


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


            <button type="submit">
                Login
            </button>

        </form>


        <p class="auth-footer">

            Belum punya akun?

            <a href="{{ route('register') }}">
                Daftar sekarang
            </a>

        </p>

    </div>

</div>

@endsection -->