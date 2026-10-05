@extends('layouts.app')

@section('content')

<style>

.confirmation-container {
    max-width: 700px;
    margin: 60px auto;
    padding: 0 25px;
}

.confirmation-box {
    text-align: center;

    padding: 45px 35px;

    background: white;

    border: 1px solid #eeeeee;

    border-radius: 15px;
}

.confirmation-icon {
    width: 70px;
    height: 70px;

    margin: 0 auto 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #fff1f4;

    color: #f24f76;

    font-size: 32px;
}

.confirmation-box h1 {
    margin-bottom: 10px;

    font-size: 26px;
}

.confirmation-box p {
    color: #777;

    line-height: 1.6;
}

.confirmation-number {
    margin: 25px 0;

    padding: 15px;

    background: #fafafa;

    border-radius: 8px;

    color: #555;
}

.confirmation-btn {
    display: inline-block;

    padding: 11px 25px;

    background: #f24f76;

    color: white;

    text-decoration: none;

    border-radius: 7px;

    font-size: 13px;

    font-weight: 600;
}

.confirmation-btn:hover {
    background: #df4268;
}

</style>


<div class="confirmation-container">

    <div class="confirmation-box">


        <div class="confirmation-icon">
            ✓
        </div>


        <h1>
            Pesanan Berhasil!
        </h1>


        <p>
            Pesanan aksesoris kamu telah berhasil
            dibuat dan sedang diproses.
        </p>


        <div class="confirmation-number">

            <strong>
                Pesanan Aksesoris
            </strong>

            <br>

            Terima kasih telah menggunakan DigiCam.

        </div>


        <a
            href="{{ route('aksesoris') }}"
            class="confirmation-btn"
        >
            Kembali ke Aksesoris
        </a>

    </div>

</div>

@endsection