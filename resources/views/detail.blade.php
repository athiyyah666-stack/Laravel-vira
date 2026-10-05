@extends('layouts.app')

@section('content')

<style>
    .detail-page {
        width: 90%;
        max-width: 1150px;
        margin: 0 auto;
        padding: 35px 0 70px;
        animation: detailFade .5s ease;
    }

    @keyframes detailFade {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* KEMBALI */
    .back {
        display: inline-block;
        text-decoration: none;
        color: #7424a8;
        font-size: 17px;
        font-weight: 500;
        margin-bottom: 30px;
        transition: .2s ease;
    }

    .back:hover {
        color: #ff4f87;
        transform: translateX(-4px);
    }

    /* KOTAK DETAIL */
    .detail-box {
        display: grid;
        grid-template-columns: 48% 52%;
        gap: 55px;
        align-items: center;
    }

    /* GAMBAR */
    .detail-image {
        width: 100%;
        height: 470px;
        background: #fff5f8;
        border-radius: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        padding: 25px;
        box-sizing: border-box;
    }

    .detail-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        transition: transform .3s ease;
    }

    .detail-image img:hover {
        transform: scale(1.04);
    }

    /* INFORMASI */
    .detail-info {
        padding: 10px 0;
    }

    .category {
        display: inline-block;
        background: #fff0f5;
        color: #ff4f87;
        padding: 7px 15px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 14px;
    }

    .detail-info h1 {
        margin: 0 0 13px;
        font-size: 42px;
        line-height: 1.2;
        color: #181818;
        font-weight: 800;
    }

    /* RATING */
    .rating.big {
        display: flex;
        align-items: center;
        gap: 9px;
        color: #ff4f87;
        font-size: 18px;
        margin-bottom: 22px;
    }

    .rating.big span {
        font-size: 15px;
        color: #ff4f87;
    }

    /* DESKRIPSI */
    .detail-info > p {
        color: #555;
        font-size: 16px;
        line-height: 1.8;
        margin: 0 0 20px;
    }

    /* HARGA */
    .detail-price {
        color: #ff4f87;
        font-size: 26px;
        font-weight: 800;
        margin-bottom: 25px;
    }

    .detail-price small {
        color: #777;
        font-size: 14px;
        font-weight: 400;
    }

    /* SPESIFIKASI */
    .specifications {
        margin-bottom: 28px;
    }

    .specifications > div {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 11px;
        font-size: 15px;
        color: #555;
    }

    .specifications b {
        color: #181818;
        min-width: 105px;
    }

    .available {
        color: #20a05a;
        font-weight: 600;
    }

    /* TOMBOL */
    .rent-btn {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        background: #ff4f87;
        color: white;
        padding: 14px 30px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 700;
        transition: .25s ease;
    }

    .rent-btn:hover {
        background: #f23875;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 79, 135, .25);
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {

        .detail-box {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .detail-image {
            height: 400px;
        }

        .detail-info h1 {
            font-size: 34px;
        }
    }

    @media (max-width: 600px) {

        .detail-page {
            width: 92%;
            padding-top: 25px;
        }

        .detail-image {
            height: 300px;
        }

        .detail-info h1 {
            font-size: 30px;
        }
    }
</style>


<div class="detail-page">

    {{-- KEMBALI --}}
    <a href="{{ route('camera') }}" class="back">
        ← Kembali ke Sewa Kamera
    </a>


    <div class="detail-box">

        {{-- =========================
             GAMBAR KAMERA
        ========================== --}}

        <div class="detail-image">

            @php
                $image = $camera['image'] ?? '';

                /*
                 * Kalau controller menyimpan:
                 * /images/camera/canon-r6.png
                 * maka langsung digunakan.
                 *
                 * Kalau hanya:
                 * camera/canon-r6.png
                 * juga tetap bisa.
                 */
                if (str_starts_with($image, 'http')) {
                    $imageUrl = $image;
                } elseif (str_starts_with($image, '/')) {
                    $imageUrl = asset(ltrim($image, '/'));
                } elseif (str_starts_with($image, 'images/')) {
                    $imageUrl = asset($image);
                } else {
                    $imageUrl = asset('images/' . $image);
                }
            @endphp

            <img
                src="{{ $imageUrl }}"
                alt="{{ $camera['name'] }}"
            >

        </div>


        {{-- =========================
             INFORMASI KAMERA
        ========================== --}}

        <div class="detail-info">

            <span class="category">
                {{ $camera['category'] }}
            </span>


            <h1>
                {{ $camera['name'] }}
            </h1>


            {{-- RATING --}}
            <div class="rating big">

                <span>
                    ★★★★★
                </span>

                <span>
                    {{ $camera['rating'] }}
                </span>

            </div>


            {{-- DESKRIPSI --}}
            <p>
                {{ $camera['description'] }}
            </p>


            {{-- HARGA --}}
            <div class="detail-price">

                Rp{{ number_format($camera['price'], 0, ',', '.') }}

                <small>/ hari</small>

            </div>


            {{-- SPESIFIKASI --}}
            <div class="specifications">

                <div>
                    <b>Kondisi</b>
                    <span>Sangat Baik</span>
                </div>

                <div>
                    <b>Sensor</b>
                    <span>Full Frame / APS-C</span>
                </div>

                <div>
                    <b>Ketersediaan</b>
                    <span class="available">
                        Tersedia
                    </span>
                </div>

            </div>


            {{-- SEWA --}}
            <a
                href="{{ route('booking.checkout', $camera['id']) }}"
                class="rent-btn"
            >
                Sewa Sekarang
            </a>

        </div>

    </div>

</div>

@endsection