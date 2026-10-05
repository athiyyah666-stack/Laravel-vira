@extends('layouts.app')

@section('content')

<div class="cart-page">

    {{-- HEADER --}}
    <div class="cart-header">
        <h1>Keranjang Saya</h1>

        <p>
            Periksa kamera dan aksesoris yang ingin kamu sewa.
        </p>
    </div>


    {{-- PESAN BERHASIL --}}
    @if(session('success'))

        <div class="alert-success">
            ✓ {{ session('success') }}
        </div>

    @endif


    {{-- ERROR --}}
    @if(session('error'))

        <div class="alert-error">
            ✕ {{ session('error') }}
        </div>

    @endif


    {{-- JIKA KERANJANG KOSONG --}}
    @if(empty($cart))

        <div class="empty-cart">

            <div class="empty-icon">
                🛒
            </div>

            <h2>
                Keranjang masih kosong
            </h2>

            <p>
                Yuk pilih kamera atau aksesoris
                yang ingin kamu sewa.
            </p>


            <div class="empty-buttons">

                <a
                    href="{{ route('camera') }}"
                    class="btn-primary"
                >
                    📷 Lihat Kamera
                </a>


                <a
                    href="{{ route('aksesoris') }}"
                    class="btn-secondary"
                >
                    🎒 Lihat Aksesoris
                </a>

            </div>

        </div>


    @else

        {{-- JIKA ADA BARANG --}}
        <div class="cart-layout">


            {{-- DAFTAR BARANG --}}
            <div class="cart-list">

                <h2>
                    Barang Pilihan
                </h2>


                @foreach($cart as $id => $item)

                    @php

                        /*
                        |------------------------------------------
                        | AMBIL HARGA
                        |------------------------------------------
                        */

                        $rawPrice = $item['price'] ?? 0;

                        // Kalau harga berbentuk "Rp150.000"
                        // ubah menjadi 150000
                        $price = is_numeric($rawPrice)
                            ? (int) $rawPrice
                            : (int) preg_replace('/[^0-9]/', '', $rawPrice);

                        $quantity = (int) ($item['quantity'] ?? 1);

                        $itemTotal = $price * $quantity;

                    @endphp


                    <div class="cart-item">


                        {{-- GAMBAR --}}
                        <div class="cart-image">

                            @if(!empty($item['image']))

                                <img
                                    src="{{ asset('images/' . $item['image']) }}"
                                    alt="{{ $item['name'] ?? 'Barang' }}"
                                >

                            @else

                                <div class="no-image">
                                    📷
                                </div>

                            @endif

                        </div>


                        {{-- INFORMASI BARANG --}}
                        <div class="cart-info">

                            <h3>
                                {{ $item['name'] ?? 'Barang' }}
                            </h3>


                            @if(!empty($item['type']))

                                <span class="cart-type">
                                    {{ $item['type'] }}
                                </span>

                            @endif


                            <div class="price">

                                Rp {{ number_format(
                                    $price,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                                <span>
                                    / hari
                                </span>

                            </div>


                            <div class="quantity">

                                Jumlah:

                                <strong>
                                    {{ $quantity }}
                                </strong>

                            </div>

                        </div>


                        {{-- TOTAL --}}
                        <div class="cart-right">

                            <div class="item-total">

                                Rp {{ number_format(
                                    $itemTotal,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </div>


                            {{-- HAPUS --}}
                            <form
                                action="{{ route('cart.remove', $id) }}"
                                method="POST"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="btn-remove"
                                >
                                    🗑 Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>


            {{-- RINGKASAN --}}
            <div class="cart-summary">

                <h2>
                    Ringkasan Sewa
                </h2>


                <div class="summary-row">

                    <span>
                        Total Barang
                    </span>

                    <span>
                        {{ count($cart) }} item
                    </span>

                </div>


                <div class="summary-row">

                    <span>
                        Status
                    </span>

                    <span class="available">
                        Siap Disewa
                    </span>

                </div>


                <div class="summary-line"></div>


                <div class="summary-total">

                    <span>
                        Total
                    </span>

                    <strong>

                        Rp {{ number_format(
                            $total,
                            0,
                            ',',
                            '.'
                        ) }}

                    </strong>

                </div>


                {{-- CHECKOUT --}}
                @php
                    $firstCartId = array_key_first($cart);
                @endphp

                @if($firstCartId !== null)

                    <a
                        href="{{ route('booking.checkout', ['id' => $cart[$firstCartId]['id'] ?? $firstCartId]) }}"
                        class="btn-checkout"
                    >
                        Lanjut ke Checkout →
                    </a>

                @endif


                {{-- KEMBALI BELANJA --}}
                <a
                    href="{{ route('camera') }}"
                    class="btn-continue"
                >
                    ← Lanjut Belanja
                </a>

            </div>

        </div>

    @endif

</div>


<style>

/* =========================================
   CART PAGE
========================================= */

.cart-page {
    max-width: 1100px;
    margin: 45px auto;
    padding: 0 20px;
}


/* HEADER */

.cart-header {
    margin-bottom: 30px;
}

.cart-header h1 {
    margin: 0 0 8px;
    font-size: 34px;
    color: #111;
}

.cart-header p {
    margin: 0;
    color: #777;
}


/* =========================================
   ALERT
========================================= */

.alert-success {
    background: #eaf7ee;
    color: #247a42;
    border: 1px solid #ccebd6;

    padding: 14px 18px;

    border-radius: 8px;

    margin-bottom: 25px;
}

.alert-error {
    background: #fdecec;
    color: #b42318;
    border: 1px solid #f5c2c0;

    padding: 14px 18px;

    border-radius: 8px;

    margin-bottom: 25px;
}


/* =========================================
   EMPTY CART
========================================= */

.empty-cart {
    background: white;

    border: 1px solid #e8e8e8;

    border-radius: 14px;

    padding: 70px 25px;

    text-align: center;
}

.empty-icon {
    font-size: 60px;
    margin-bottom: 15px;
}

.empty-cart h2 {
    margin-bottom: 10px;
}

.empty-cart p {
    color: #777;
    margin-bottom: 25px;
}

.empty-buttons {
    display: flex;

    justify-content: center;

    gap: 12px;

    flex-wrap: wrap;
}


/* BUTTON */

.btn-primary,
.btn-secondary {
    display: inline-block;

    padding: 12px 20px;

    border-radius: 8px;

    text-decoration: none;

    font-weight: 600;
}

.btn-primary {
    background: #111;
    color: white;
}

.btn-secondary {
    background: #eee;
    color: #222;
}


/* =========================================
   LAYOUT
========================================= */

.cart-layout {
    display: grid;

    grid-template-columns: 1fr 330px;

    gap: 25px;

    align-items: start;
}


/* =========================================
   CART LIST
========================================= */

.cart-list h2 {
    margin-bottom: 18px;
}


/* ITEM */

.cart-item {
    display: flex;

    align-items: center;

    gap: 20px;

    background: white;

    border: 1px solid #e8e8e8;

    border-radius: 12px;

    padding: 18px;

    margin-bottom: 15px;
}


/* =========================================
   IMAGE
========================================= */

.cart-image {
    width: 120px;
    height: 100px;

    flex-shrink: 0;

    border-radius: 9px;

    overflow: hidden;

    background: #f5f5f5;

    display: flex;

    align-items: center;

    justify-content: center;
}

.cart-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;
}

.no-image {
    font-size: 40px;
}


/* =========================================
   INFO
========================================= */

.cart-info {
    flex: 1;
}

.cart-info h3 {
    margin: 0 0 7px;

    font-size: 19px;
}

.cart-type {
    display: block;

    color: #777;

    font-size: 13px;

    margin-bottom: 10px;
}

.price {
    font-weight: 600;
}

.price span {
    color: #777;

    font-weight: normal;
}

.quantity {
    margin-top: 8px;

    color: #777;
}


/* =========================================
   RIGHT SIDE
========================================= */

.cart-right {
    min-width: 130px;

    text-align: right;
}

.item-total {
    font-weight: 700;

    margin-bottom: 15px;
}


/* HAPUS */

.btn-remove {
    border: none;

    background: #f1f1f1;

    color: #555;

    padding: 8px 12px;

    border-radius: 7px;

    cursor: pointer;
}

.btn-remove:hover {
    background: #e5e5e5;
}


/* =========================================
   SUMMARY
========================================= */

.cart-summary {
    background: white;

    border: 1px solid #e8e8e8;

    border-radius: 12px;

    padding: 25px;

    position: sticky;

    top: 20px;
}

.cart-summary h2 {
    margin-top: 0;
}


/* ROW */

.summary-row {
    display: flex;

    justify-content: space-between;

    padding: 13px 0;

    color: #666;
}

.summary-row span:last-child {
    color: #222;

    font-weight: 600;
}


/* STATUS */

.available {
    color: #258a4a !important;
}


/* LINE */

.summary-line {
    height: 1px;

    background: #eee;

    margin: 8px 0;
}


/* TOTAL */

.summary-total {
    display: flex;

    justify-content: space-between;

    padding: 15px 0 20px;
}

.summary-total strong {
    font-size: 20px;
}


/* =========================================
   CHECKOUT
========================================= */

.btn-checkout {
    display: block;

    box-sizing: border-box;

    width: 100%;

    text-align: center;

    text-decoration: none;

    background: #111;

    color: white;

    padding: 13px;

    border-radius: 8px;

    font-weight: 600;
}

.btn-checkout:hover {
    background: #333;
}


/* CONTINUE */

.btn-continue {
    display: block;

    text-align: center;

    margin-top: 14px;

    color: #555;

    text-decoration: none;

    font-size: 14px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 800px) {

    .cart-layout {
        grid-template-columns: 1fr;
    }

    .cart-summary {
        position: static;
    }

}


@media (max-width: 600px) {

    .cart-item {
        align-items: flex-start;

        flex-wrap: wrap;
    }

    .cart-right {
        width: 100%;

        text-align: left;
    }

}

</style>

@endsection