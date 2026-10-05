@extends('layouts.app')

@section('content')

<style>
    .success-page {
        min-height: 650px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 20px;
        box-sizing: border-box;
        animation: fadeSuccess .5s ease;
    }

    @keyframes fadeSuccess {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .success-box {
        width: 100%;
        max-width: 600px;
        background: #ffffff;
        border-radius: 24px;
        padding: 45px 40px;
        text-align: center;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .07);
        border: 1px solid #f3e4ea;
        box-sizing: border-box;
    }

    .success-icon {
        width: 75px;
        height: 75px;
        margin: 0 auto 22px;
        border-radius: 50%;
        background: #ff4f87;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 38px;
        font-weight: 700;
    }

    .success-box h1 {
        margin: 0 0 12px;
        color: #202020;
        font-size: 32px;
        font-weight: 800;
    }

    .success-box p {
        margin: 0 auto 25px;
        color: #666;
        font-size: 15px;
        line-height: 1.7;
        max-width: 450px;
    }

    .booking-number {
        background: #fff4f7;
        border-radius: 12px;
        padding: 16px;
        margin-bottom: 25px;
        color: #555;
        font-size: 14px;
    }

    .booking-number strong {
        display: block;
        margin-top: 6px;
        color: #ff4f87;
        font-size: 20px;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 220px;
        padding: 13px 25px;
        background: #ff4f87;
        color: white;
        text-decoration: none;
        border-radius: 11px;
        font-size: 15px;
        font-weight: 700;
        transition: .25s ease;
    }

    .btn-primary:hover {
        background: #f23875;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 79, 135, .22);
    }

    @media (max-width: 600px) {
        .success-page {
            padding: 30px 15px;
        }

        .success-box {
            padding: 35px 22px;
        }

        .success-box h1 {
            font-size: 27px;
        }
    }
</style>


<div class="success-page">

    <div class="success-box">

        <div class="success-icon">
            ✓
        </div>

        <h1>
            Booking Berhasil!
        </h1>

        <p>
            Terima kasih telah melakukan pemesanan
            di DigiCam.
        </p>

        <div class="booking-number">
            Kode Booking:

            <strong>
                DCM-2026-001
            </strong>
        </div>

        {{-- 
            Untuk sementara tombol diarahkan ke halaman kamera
            supaya tidak error karena route booking.status belum ada.
        --}}

        <a
            href="{{ route('camera') }}"
            class="btn-primary">

            Kembali ke Kamera

        </a>

    </div>

</div>

@endsection