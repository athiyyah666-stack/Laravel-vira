@extends('layouts.app')

@section('content')

<style>
    /* ================================
       HALAMAN SEWA KAMERA
    ================================= */

    .camera-page {
        padding: 50px;
        animation: pageFadeIn 0.5s ease-out;
    }

    @keyframes pageFadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    /* ================================
       JUDUL
    ================================= */

    .camera-title {
        margin-bottom: 35px;
    }

    .camera-title h1 {
        margin: 0;
        font-size: 30px;
        font-weight: 700;
        color: #222;
    }

    .camera-title p {
        margin-top: 8px;
        font-size: 13px;
        color: #777;
    }


    /* ================================
       LAYOUT
    ================================= */

    .camera-layout {
        display: grid;
        grid-template-columns: 220px 1fr;
        gap: 35px;
        align-items: start;
    }


    /* ================================
       SIDEBAR
    ================================= */

    .camera-sidebar {
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 20px;
        background: #fff;
        animation: sidebarFade 0.6s ease-out;
    }

    @keyframes sidebarFade {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .camera-sidebar h3 {
        margin: 0 0 18px;
        font-size: 15px;
        color: #222;
    }

    .filter-item {
        display: block;
        padding: 9px 0;
        font-size: 13px;
        color: #666;
        text-decoration: none;
        transition: 0.2s;
    }

    .filter-item:hover {
        color: #e96a9b;
        padding-left: 4px;
    }

    .filter-item.active {
        color: #e96a9b;
        font-weight: 600;
    }


    /* ================================
       PRODUK KAMERA
    ================================= */

    .camera-products {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }


    /* ================================
       CARD
    ================================= */

    .camera-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.25s ease;
        animation: cardFade 0.6s ease-out both;
    }

    .camera-card:nth-child(1) {
        animation-delay: 0.05s;
    }

    .camera-card:nth-child(2) {
        animation-delay: 0.10s;
    }

    .camera-card:nth-child(3) {
        animation-delay: 0.15s;
    }

    .camera-card:nth-child(4) {
        animation-delay: 0.20s;
    }

    .camera-card:nth-child(5) {
        animation-delay: 0.25s;
    }

    .camera-card:nth-child(6) {
        animation-delay: 0.30s;
    }

    .camera-card:nth-child(7) {
        animation-delay: 0.35s;
    }

    .camera-card:nth-child(8) {
        animation-delay: 0.40s;
    }

    @keyframes cardFade {
        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .camera-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
    }


    /* ================================
       GAMBAR
    ================================= */

    .camera-image {
        width: 100%;
        height: 170px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #fafafa;
    }

    .camera-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: 0.25s ease;
    }

    .camera-card:hover .camera-image img {
        transform: scale(1.03);
    }


    /* ================================
       INFORMASI
    ================================= */

    .camera-info {
        padding: 15px;
    }

    .camera-category {
        display: inline-block;
        margin-bottom: 7px;
        padding: 4px 8px;
        border-radius: 20px;
        background: #fff0f6;
        color: #e96a9b;
        font-size: 10px;
        font-weight: 600;
    }

    .camera-name {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
        color: #222;
    }

    .camera-rating {
        margin-top: 7px;
        font-size: 12px;
        color: #777;
    }

    .camera-rating span {
        color: #f3b33d;
    }

    .camera-price {
        margin-top: 10px;
        font-size: 14px;
        font-weight: 700;
        color: #e96a9b;
    }


    /* ================================
       BUTTON
    ================================= */

    .camera-button {
        display: block;
        width: 100%;
        margin-top: 13px;
        padding: 9px 12px;
        border: 1px solid #e96a9b;
        border-radius: 7px;
        background: transparent;
        color: #e96a9b;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        transition: 0.2s ease;
    }

    .camera-button:hover {
        background: #e96a9b;
        color: white;
    }


    /* ================================
       RESPONSIVE
    ================================= */

    @media (max-width: 1100px) {

        .camera-products {
            grid-template-columns: repeat(3, 1fr);
        }

    }


    @media (max-width: 850px) {

        .camera-page {
            padding: 35px 25px;
        }

        .camera-layout {
            grid-template-columns: 1fr;
        }

        .camera-sidebar {
            width: auto;
        }

        .camera-products {
            grid-template-columns: repeat(2, 1fr);
        }

    }


    @media (max-width: 550px) {

        .camera-page {
            padding: 25px 15px;
        }

        .camera-title h1 {
            font-size: 25px;
        }

        .camera-products {
            grid-template-columns: 1fr;
        }

    }


    /* ================================
       KURANGI ANIMASI JIKA USER MEMILIH
    ================================= */

    @media (prefers-reduced-motion: reduce) {

        .camera-page,
        .camera-sidebar,
        .camera-card {
            animation: none;
        }

        .camera-card,
        .camera-image img,
        .camera-button,
        .filter-item {
            transition: none;
        }

    }

</style>


<div class="camera-page">

    <!-- JUDUL -->
    <div class="camera-title">
        <h1>SEWA KAMERA</h1>

        <p>
            Pilih kamera yang sesuai dengan kebutuhanmu
        </p>
    </div>


    <!-- LAYOUT -->
    <div class="camera-layout">


        <!-- SIDEBAR -->
        <aside class="camera-sidebar">

            <h3>Filter Kamera</h3>

            <a href="{{ route('camera') }}"
               class="filter-item active">
                Semua Kamera
            </a>

            <a href="#" class="filter-item">
                DSLR
            </a>

            <a href="#" class="filter-item">
                Mirrorless
            </a>

            <a href="#" class="filter-item">
                Compact
            </a>

            <a href="#" class="filter-item">
                Action Camera
            </a>

        </aside>


        <!-- PRODUK -->
        <div class="camera-products">

            @foreach ($cameras as $camera)

                <div class="camera-card">

                    <!-- GAMBAR -->
                    <div class="camera-image">

                        <img
                            src="{{ $camera['image'] }}"
                            alt="{{ $camera['name'] }}"
                        >

                    </div>


                    <!-- INFO -->
                    <div class="camera-info">

                        <span class="camera-category">
                            {{ $camera['category'] }}
                        </span>

                        <h3 class="camera-name">
                            {{ $camera['name'] }}
                        </h3>


                        <div class="camera-rating">

                            <span>★</span>
                            {{ $camera['rating'] }}

                        </div>


                        <div class="camera-price">

                            Rp {{ number_format($camera['price'], 0, ',', '.') }}
                            /hari

                        </div>


                        <a
                            href="{{ route('camera.detail', $camera['id']) }}"
                            class="camera-button"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</div>

@endsection