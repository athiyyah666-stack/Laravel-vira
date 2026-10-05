@extends('layouts.app')

@section('content')

<style>

    .aksesoris-page {
        max-width: 1120px;
        width: 90%;
        margin: auto;
        padding: 40px 0;

        /* ANIMASI HALAMAN */
        animation: halamanMasuk 0.6s ease-out;
    }

    .aksesoris-header {
        margin-bottom: 25px;

        /* ANIMASI HEADER */
        animation: headerMasuk 0.7s ease-out;
    }

    .aksesoris-header h1 {
        font-size: 30px;
        line-height: 1.2;
        font-weight: 700;
        color: #202020;
        margin: 0;
    }

    .aksesoris-header p {
        color: #888;
        font-size: 13px;
        line-height: 1.6;
        margin-top: 8px;
    }


    .aksesoris-layout {
        display: grid;
        grid-template-columns: 180px 1fr;
        gap: 18px;
        align-items: start;
    }


    /* SIDEBAR */

    .aksesoris-sidebar {
        border: 1px solid #eee;
        padding: 18px;
        border-radius: 8px;
        background: #fff;

        /* ANIMASI SIDEBAR */
        animation: sidebarMasuk 0.7s ease-out;
    }

    .aksesoris-sidebar h3 {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 18px;
    }

    .kategori-list {
        display: flex;
        flex-direction: column;
        gap: 13px;
    }

    .kategori-link {
        border: 0;
        outline: 0;
        background: transparent;
        padding: 0;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        color: #777;
        cursor: pointer;

        /* ANIMASI KATEGORI */
        transition: color 0.2s ease, transform 0.2s ease;
    }

    .kategori-link:hover {
        color: #f0527e;
        transform: translateX(3px);
    }

    .kategori-link.active {
        color: #f0527e;
        font-weight: 600;
    }


    /* PRODUK */

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 12px;
    }

    .aksesoris-product-card {
        min-width: 0;
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 10px;
        background: #fff;
        overflow: hidden;

        /* ANIMASI CARD */
        opacity: 0;
        animation: cardMasuk 0.6s ease-out forwards;

        /* ANIMASI HOVER */
        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }

    .aksesoris-product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
    }


    /* CARD MUNCUL SATU-SATU */

    .aksesoris-product-card:nth-child(1) {
        animation-delay: 0.15s;
    }

    .aksesoris-product-card:nth-child(2) {
        animation-delay: 0.25s;
    }

    .aksesoris-product-card:nth-child(3) {
        animation-delay: 0.35s;
    }

    .aksesoris-product-card:nth-child(4) {
        animation-delay: 0.45s;
    }


    /* GAMBAR */

    .aksesoris-product-image {
        height: 145px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        overflow: hidden;
    }

    .aksesoris-product-image img {
        width: auto;
        height: auto;
        max-width: 92%;
        max-height: 140px;
        object-fit: contain;
        display: block;

        /* ANIMASI GAMBAR */
        transition: transform 0.35s ease;
    }

    .aksesoris-product-card:hover .aksesoris-product-image img {
        transform: scale(1.05);
    }


    /* INFO */

    .aksesoris-product-info {
        padding: 2px 0 0;
    }

    .aksesoris-product-info h3 {
        font-size: 12px;
        line-height: 1.45;
        font-weight: 600;
        color: #202020;
        margin: 8px 0 0;
    }

    .aksesoris-category {
        display: block;
        color: #999;
        font-size: 9px;
        margin-top: 3px;
    }


    /* RATING */

    .aksesoris-rating {
        color: #f5b400;
        font-size: 10px;
        margin: 5px 0;
        font-weight: 500;
    }


    .aksesoris-price {
        color: #f0527e;
        font-size: 14px;
        font-weight: 700;
        margin: 9px 0;
    }


    /* TOMBOL DETAIL */

    .aksesoris-detail-btn {
        display: block;
        width: 100%;
        padding: 8px;
        text-align: center;
        border: 1px solid #f0527e;
        border-radius: 5px;
        color: #f0527e;
        background: #fff;
        font-size: 10px;
        font-weight: 600;
        text-decoration: none;

        /* ANIMASI TOMBOL */
        transition:
            background 0.2s ease,
            color 0.2s ease,
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .aksesoris-detail-btn:hover {
        background: #f0527e;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(240, 82, 126, 0.15);
    }


    .aksesoris-empty {
        grid-column: 1 / -1;
        text-align: center;
        color: #999;
        padding: 40px;
        font-size: 12px;
    }


    /* ANIMASI */

    @keyframes halamanMasuk {

        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes headerMasuk {

        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes sidebarMasuk {

        from {
            opacity: 0;
            transform: translateX(-15px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }

    }


    @keyframes cardMasuk {

        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    /* RESPONSIVE */

    @media (max-width: 1000px) {

        .aksesoris-page {
            width: 92%;
        }

        .aksesoris-layout {
            grid-template-columns: 200px minmax(0, 1fr);
            gap: 20px;
        }

    }


    @media (max-width: 800px) {

        .aksesoris-page {
            width: 92%;
        }

        .aksesoris-layout {
            grid-template-columns: 1fr;
        }

        .products-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

    }

</style>


<div class="aksesoris-page">

    {{-- HEADER --}}

    <div class="aksesoris-header">

        <h1>Aksesoris</h1>

        <p>
            Lengkapi kebutuhan fotografi dan videografi kamu
            dengan berbagai aksesoris.
        </p>

    </div>


    <div class="aksesoris-layout">


        {{-- SIDEBAR KATEGORI --}}

        <aside class="aksesoris-sidebar">

            <h3>Kategori</h3>

            <div class="kategori-list">

                <button
                    type="button"
                    class="kategori-link active"
                    data-category="Semua">
                    Semua
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Lensa">
                    Lensa
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Tripod & Stabilizer">
                    Tripod & Stabilizer
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Tas Kamera">
                    Tas Kamera
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Baterai & Charger">
                    Baterai & Charger
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Memory Card">
                    Memory Card
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Stabilizer">
                    Stabilizer
                </button>

                <button
                    type="button"
                    class="kategori-link"
                    data-category="Filter">
                    Filter
                </button>

            </div>

        </aside>


        {{-- PRODUK --}}

        <section class="aksesoris-products">

            <div class="products-grid">

                @php
                    $displayItems = array_slice($items ?? [], 0, 4);
                @endphp


                @forelse ($displayItems as $item)

                    <div
                        class="aksesoris-product-card"
                        data-category="{{ $item['category'] ?? '' }}">


                        {{-- FOTO --}}

                        <div class="aksesoris-product-image">

                            <img
                                src="{{ asset('images/aksesoris/' . $item['image']) }}"
                                alt="{{ $item['name'] }}">

                        </div>


                        {{-- DATA PRODUK --}}

                        <div class="aksesoris-product-info">

                            <h3>
                                {{ $item['name'] }}
                            </h3>


                            <span class="aksesoris-category">
                                {{ $item['category'] ?? 'Aksesoris' }}
                            </span>


                            {{-- RATING --}}

                            <div class="aksesoris-rating">
                                ★ {{ $item['rating'] ?? '0.0' }}
                            </div>


                            {{-- HARGA --}}

                            <div class="aksesoris-price">
                                {{ $item['price'] }}
                            </div>


                            {{-- KE HALAMAN DETAIL --}}

                            <a
                                href="{{ route('aksesoris.detail', ['id' => $item['id']]) }}"
                                class="aksesoris-detail-btn">

                                Lihat Detail

                            </a>

                        </div>

                    </div>

                @empty

                    <div class="aksesoris-empty">
                        Belum ada aksesoris tersedia.
                    </div>

                @endforelse

            </div>

        </section>

    </div>

</div>


{{-- FILTER KATEGORI --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const buttons =
        document.querySelectorAll('.kategori-link');

    const products =
        document.querySelectorAll('.aksesoris-product-card');


    buttons.forEach(function (button) {

        button.addEventListener('click', function () {

            const category =
                this.dataset.category;


            buttons.forEach(function (btn) {

                btn.classList.remove('active');

            });


            this.classList.add('active');


            products.forEach(function (product) {

                const productCategory =
                    product.dataset.category;


                if (
                    category === 'Semua' ||
                    productCategory === category
                ) {

                    product.style.display = '';

                } else {

                    product.style.display = 'none';

                }

            });

        });

    });

});

</script>

@endsection