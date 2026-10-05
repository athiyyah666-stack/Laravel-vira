@extends('layouts.app')

@section('content')

<style>
/* ==========================================
   HALAMAN AKSESORIS
========================================== */

.aksesoris-page {
    padding: 45px 50px 60px;
    background: #ffffff;
    min-height: 100vh;
}

/* ==========================================
   HEADER
========================================== */

.aksesoris-header {
    margin-bottom: 45px;
}

.aksesoris-header h1 {
    margin: 0 0 18px;
    font-size: 38px;
    font-weight: 800;
    color: #171717;
    letter-spacing: -1px;
}

.aksesoris-header p {
    margin: 0;
    font-size: 17px;
    color: #777;
}

/* ==========================================
   LAYOUT
========================================== */

.aksesoris-layout {
    display: grid;
    grid-template-columns: 285px 1fr;
    gap: 45px;
    align-items: start;
}

/* ==========================================
   SIDEBAR
========================================== */

.aksesoris-sidebar {
    border: 1px solid #eeeeee;
    border-radius: 16px;
    padding: 28px 25px;
    background: #ffffff;
}

.aksesoris-sidebar h3 {
    margin: 0 0 25px;
    font-size: 19px;
    font-weight: 700;
    color: #171717;
}

/* ==========================================
   KATEGORI
========================================== */

.filter-item {
    display: block;
    padding: 12px 0;

    color: #666;
    text-decoration: none;

    font-size: 16px;
    font-weight: 500;

    transition: color 0.2s ease;
}

.filter-item:hover {
    color: #ed6197;
}

.filter-item.active {
    color: #ed6197;
    font-weight: 700;
}

/* ==========================================
   PRODUK
========================================== */

.aksesoris-products {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 25px;
}

/* ==========================================
   CARD
========================================== */

.aksesoris-card {
    border: 1px solid #eeeeee;
    border-radius: 16px;

    background: #ffffff;
    overflow: hidden;
    min-width: 0;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.aksesoris-card:hover {
    transform: translateY(-6px);

    box-shadow:
        0 12px 28px rgba(0, 0, 0, 0.08);
}

/* ==========================================
   GAMBAR
========================================== */

.aksesoris-image {
    height: 235px;

    margin: 12px;

    background: #fafafa;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;
}

.aksesoris-image img {
    width: 100%;
    height: 100%;

    object-fit: contain;

    transition: transform 0.3s ease;
}

.aksesoris-card:hover .aksesoris-image img {
    transform: scale(1.05);
}

/* ==========================================
   INFORMASI
========================================== */

.aksesoris-info {
    padding: 12px 20px 20px;
}

/* ==========================================
   KATEGORI PRODUK
========================================== */

.aksesoris-category {
    display: inline-block;

    padding: 7px 11px;
    margin-bottom: 12px;

    background: #fff0f5;
    color: #ed6197;

    border-radius: 20px;

    font-size: 12px;
    font-weight: 700;
}

/* ==========================================
   NAMA
========================================== */

.aksesoris-name {
    margin: 0 0 15px;

    min-height: 38px;

    font-size: 14px;
    font-weight: 700;

    color: #171717;
}

/* ==========================================
   HARGA
========================================== */

.aksesoris-price {
    margin-bottom: 18px;

    color: #ed6197;

    font-size: 18px;
    font-weight: 800;
}

.aksesoris-price span {
    font-size: 13px;
    font-weight: 500;
}

/* ==========================================
   BUTTON
========================================== */

.aksesoris-button {
    display: flex;

    width: 100%;
    box-sizing: border-box;

    align-items: center;
    justify-content: center;

    min-height: 48px;

    border: 1px solid #ed6197;
    border-radius: 9px;

    background: #ffffff;

    color: #ed6197;

    text-decoration: none;

    font-size: 15px;
    font-weight: 700;

    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.aksesoris-button:hover {
    background: #ed6197;
    color: #ffffff;
}

/* ==========================================
   BUTTON PRODUK PERTAMA
========================================== */

.aksesoris-card:first-child .aksesoris-button {
    background: #ed6197;
    color: #ffffff;
}

.aksesoris-card:first-child .aksesoris-button:hover {
    background: #df4f89;
}

/* ==========================================
   RESPONSIVE
========================================== */

@media (max-width: 1200px) {

    .aksesoris-products {
        grid-template-columns: repeat(3, 1fr);
    }

}

@media (max-width: 950px) {

    .aksesoris-layout {
        grid-template-columns: 1fr;
    }

    .aksesoris-products {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media (max-width: 600px) {

    .aksesoris-page {
        padding: 30px 20px 40px;
    }

    .aksesoris-header h1 {
        font-size: 30px;
    }

    .aksesoris-layout {
        gap: 25px;
    }

    .aksesoris-products {
        grid-template-columns: 1fr;
    }

}
</style>

<div class="aksesoris-page">

```
{{-- ==========================================
     HEADER
=========================================== --}}

<div class="aksesoris-header">

    <h1>AKSESORIS</h1>

    <p>
        Lengkapi kebutuhan kameramu dengan aksesoris terbaik
    </p>

</div>


{{-- ==========================================
     LAYOUT
=========================================== --}}

<div class="aksesoris-layout">


    {{-- ======================================
         SIDEBAR KATEGORI
    ======================================= --}}

    <aside class="aksesoris-sidebar">

        <h3>Filter Aksesoris</h3>

        {{-- SEMUA --}}
        <a
            href="{{ route('aksesoris') }}"
            class="filter-item {{ !request('kategori') ? 'active' : '' }}"
        >
            Semua Aksesoris
        </a>

        {{-- LENSA --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Lensa']) }}"
            class="filter-item {{ request('kategori') == 'Lensa' ? 'active' : '' }}"
        >
            Lensa
        </a>

        {{-- TRIPOD --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Tripod']) }}"
            class="filter-item {{ request('kategori') == 'Tripod' ? 'active' : '' }}"
        >
            Tripod
        </a>

        {{-- TAS KAMERA --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Tas Kamera']) }}"
            class="filter-item {{ request('kategori') == 'Tas Kamera' ? 'active' : '' }}"
        >
            Tas Kamera
        </a>

        {{-- BATERAI --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Baterai']) }}"
            class="filter-item {{ request('kategori') == 'Baterai' ? 'active' : '' }}"
        >
            Baterai
        </a>

        {{-- MEMORY CARD --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Memory Card']) }}"
            class="filter-item {{ request('kategori') == 'Memory Card' ? 'active' : '' }}"
        >
            Memory Card
        </a>

        {{-- STABILIZER --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Stabilizer']) }}"
            class="filter-item {{ request('kategori') == 'Stabilizer' ? 'active' : '' }}"
        >
            Stabilizer
        </a>

        {{-- CHARGER --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Charger']) }}"
            class="filter-item {{ request('kategori') == 'Charger' ? 'active' : '' }}"
        >
            Charger
        </a>

        {{-- FILTER --}}
        <a
            href="{{ route('aksesoris', ['kategori' => 'Filter']) }}"
            class="filter-item {{ request('kategori') == 'Filter' ? 'active' : '' }}"
        >
            Filter
        </a>

    </aside>


    {{-- ======================================
         PRODUK AKSESORIS
    ======================================= --}}

    <div class="aksesoris-products">

        @php

            /*
            |--------------------------------------------------------------------------
            | HANYA 4 PRODUK
            |--------------------------------------------------------------------------
            */

            $items = [

                [
                    'name' => 'Lensa Canon 50mm',
                    'price' => 'Rp150.000',
                    'image' => 'lensa.jpg',
                    'category' => 'Lensa'
                ],

                [
                    'name' => 'Tripod Manfrotto',
                    'price' => 'Rp75.000',
                    'image' => 'tripod.jpg',
                    'category' => 'Tripod'
                ],

                [
                    'name' => 'Tas Kamera',
                    'price' => 'Rp80.000',
                    'image' => 'tas.jpg',
                    'category' => 'Tas Kamera'
                ],

                [
                    'name' => 'Baterai Canon',
                    'price' => 'Rp65.000',
                    'image' => 'baterai.jpg',
                    'category' => 'Baterai'
                ],

            ];

            /*
            |--------------------------------------------------------------------------
            | FILTER KATEGORI
            |--------------------------------------------------------------------------
            */

            $kategori = request('kategori');

            if ($kategori) {

                $items = array_filter($items, function ($item) use ($kategori) {

                    return $item['category'] === $kategori;

                });

            }

        @endphp


        {{-- ======================================
             LOOP PRODUK
        ======================================= --}}

        @forelse ($items as $id => $item)

            <div class="aksesoris-card">

                {{-- GAMBAR --}}

                <div class="aksesoris-image">

                    <img
                        src="{{ asset('images/kamera/' . $item['image']) }}"
                        alt="{{ $item['name'] }}"
                    >

                </div>


                {{-- INFORMASI --}}

                <div class="aksesoris-info">

                    {{-- KATEGORI PRODUK --}}

                    <span class="aksesoris-category">
                        {{ $item['category'] }}
                    </span>


                    {{-- NAMA --}}

                    <h3 class="aksesoris-name">
                        {{ $item['name'] }}
                    </h3>


                    {{-- HARGA --}}

                    <div class="aksesoris-price">

                        {{ $item['price'] }}

                        <span>/hari</span>

                    </div>


                    {{-- DETAIL --}}

                    <a
                        href="{{ route('aksesoris.detail', ['id' => $id]) }}"
                        class="aksesoris-button"
                    >
                        Lihat Detail
                    </a>

                </div>

            </div>

        @empty

            <p style="color:#777;">
                Tidak ada aksesoris pada kategori ini.
            </p>

        @endforelse

    </div>

</div>
```

</div>

@endsection
