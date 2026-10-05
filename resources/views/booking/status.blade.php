@extends('layouts.app')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    .status-page {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding: 35px 25px 60px;
        font-family: Arial, sans-serif;
        color: #171717;
    }

    /* ================= HEADER ================= */

    .status-top {
        margin-bottom: 25px;
    }

    .status-top a {
        text-decoration: none;
        color: #f34f75;
        font-size: 13px;
    }

    .status-top h1 {
        margin: 15px 0 5px;
        font-size: 28px;
        font-weight: 700;
    }

    .status-top p {
        margin: 0;
        color: #888;
        font-size: 13px;
    }


    /* ================= INFO PESANAN ================= */

    .order-summary {
        background: #fff;
        border: 1px solid #f0e2e6;
        border-radius: 12px;
        padding: 18px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
    }

    .summary-item {
        flex: 1;
        padding: 0 20px;
        border-right: 1px solid #eeeeee;
    }

    .summary-item:first-child {
        padding-left: 0;
    }

    .summary-item:last-child {
        border: none;
    }

    .summary-item span {
        display: block;
        font-size: 11px;
        color: #999;
        margin-bottom: 7px;
    }

    .summary-item strong {
        font-size: 14px;
    }

    .booking-code {
        color: #f34f75;
    }

    .paid {
        display: inline-block;
        padding: 6px 11px;
        border-radius: 20px;
        background: #effaf4;
        color: #2d9860;
        font-size: 11px;
        font-weight: 600;
    }


    /* ================= PROSES ================= */

    .process-card {
        background: #fff;
        border: 1px solid #f0e2e6;
        border-radius: 12px;
        padding: 24px 25px 28px;
        margin-bottom: 18px;
    }

    .process-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 35px;
    }

    .process-title h2 {
        margin: 0;
        font-size: 18px;
    }

    .process-title span {
        font-size: 11px;
        color: #f34f75;
        background: #fff1f5;
        padding: 7px 12px;
        border-radius: 20px;
    }


    /* ================= TIMELINE ================= */

    .steps {
        position: relative;
        display: flex;
        justify-content: space-between;
    }

    .steps::before {
        content: "";
        position: absolute;
        top: 17px;
        left: 45px;
        right: 45px;
        height: 2px;
        background: #e9e9e9;
        z-index: 0;
    }

    .steps::after {
        content: "";
        position: absolute;
        top: 17px;
        left: 45px;
        width: 31%;
        height: 2px;
        background: #f34f75;
        z-index: 0;
    }

    .step {
        width: 16%;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .circle {
        width: 35px;
        height: 35px;
        margin: 0 auto 10px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #ededed;
        color: #999;
        border: 4px solid #fff;
        font-size: 12px;
        font-weight: bold;
    }

    .step.done .circle {
        background: #f34f75;
        color: #fff;
    }

    .step.active .circle {
        background: #fff;
        color: #f34f75;
        border: 2px solid #f34f75;
        box-shadow: 0 0 0 5px #fff1f5;
    }

    .step strong {
        display: block;
        font-size: 11px;
        line-height: 1.4;
    }

    .step.active strong {
        color: #f34f75;
    }

    .step small {
        display: block;
        margin-top: 5px;
        color: #999;
        font-size: 9px;
        line-height: 1.4;
    }


    /* ================= DETAIL ================= */

    .detail-card {
        background: #fff;
        border: 1px solid #f0e2e6;
        border-radius: 12px;
        padding: 24px 25px;
    }

    .detail-title {
        margin-bottom: 20px;
    }

    .detail-title h2 {
        margin: 0;
        font-size: 18px;
    }

    .detail-title p {
        margin: 5px 0 0;
        font-size: 11px;
        color: #999;
    }


    /* ================= PRODUK ================= */

    .product {
        display: flex;
        align-items: center;
        gap: 18px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eeeeee;
    }

    .product-image {
        width: 135px;
        height: 95px;
        border: 1px solid #eeeeee;
        border-radius: 9px;
        background: #fafafa;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }

    .product-image img {
        width: 115px;
        height: 80px;
        object-fit: contain;
    }

    .product-info h3 {
        margin: 0 0 7px;
        font-size: 17px;
    }

    .tag {
        display: inline-block;
        padding: 5px 9px;
        border-radius: 5px;
        background: #fff1f5;
        color: #f34f75;
        font-size: 9px;
        margin-bottom: 9px;
    }

    .specs {
        display: flex;
        gap: 15px;
        color: #777;
        font-size: 10px;
    }


    /* ================= DETAIL ROW ================= */

    .details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 60px;
        margin-top: 12px;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 13px 0;
        border-bottom: 1px solid #f2f2f2;
    }

    .detail-row span {
        color: #888;
        font-size: 11px;
    }

    .detail-row strong {
        font-size: 11px;
        font-weight: 600;
        text-align: right;
    }

    .success {
        color: #2d9860 !important;
    }


    /* ================= FOOTER CARD ================= */

    .thanks {
        margin-top: 20px;
        padding: 16px;
        border-radius: 9px;
        background: #fff8fa;
        border: 1px solid #ffe3e9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .thanks-text strong {
        display: block;
        font-size: 12px;
        margin-bottom: 4px;
    }

    .thanks-text p {
        margin: 0;
        font-size: 10px;
        color: #999;
    }

    .back-home {
        display: inline-block;
        padding: 10px 18px;
        border-radius: 7px;
        background: #f34f75;
        color: #fff;
        text-decoration: none;
        font-size: 10px;
        white-space: nowrap;
    }

    .back-home:hover {
        background: #e9446b;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 800px) {

        .order-summary {
            flex-direction: column;
            align-items: stretch;
        }

        .summary-item {
            padding: 12px 0;
            border-right: none;
            border-bottom: 1px solid #eee;
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .steps {
            overflow-x: auto;
            justify-content: flex-start;
            gap: 30px;
            padding-bottom: 10px;
        }

        .step {
            min-width: 110px;
        }

        .steps::before,
        .steps::after {
            display: none;
        }

        .details {
            grid-template-columns: 1fr;
        }

        .thanks {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .back-home {
            width: 100%;
            text-align: center;
        }
    }
</style>


<div class="status-page">

    <!-- HEADER -->

    <div class="status-top">

        <a href="/">
            ← Kembali ke Beranda
        </a>

        <h1>
            Status Pesanan
        </h1>

        <p>
            Berikut informasi dan proses penyewaan kamera kamu.
        </p>

    </div>


    <!-- INFORMASI PESANAN -->

    <div class="order-summary">

        <div class="summary-item">

            <span>
                KODE PESANAN
            </span>

            <strong class="booking-code">
                DC-2026-001
            </strong>

        </div>


        <div class="summary-item">

            <span>
                TANGGAL PESANAN
            </span>

            <strong>
                28 Agustus 2026, 14:30 WIB
            </strong>

        </div>


        <div class="summary-item">

            <span>
                STATUS PEMBAYARAN
            </span>

            <span class="paid">
                ✓ Pembayaran Berhasil
            </span>

        </div>

    </div>


    <!-- PROSES PENYEWAAN -->

    <div class="process-card">

        <div class="process-title">

            <h2>
                Proses Penyewaan
            </h2>

            <span>
                Sedang Diproses
            </span>

        </div>


        <div class="steps">


            <!-- STEP 1 -->

            <div class="step done">

                <div class="circle">
                    ✓
                </div>

                <strong>
                    Pesanan Dibuat
                </strong>

                <small>
                    28 Agu<br>
                    14:30 WIB
                </small>

            </div>


            <!-- STEP 2 -->

            <div class="step done">

                <div class="circle">
                    ✓
                </div>

                <strong>
                    Pembayaran
                </strong>

                <small>
                    Berhasil
                </small>

            </div>


            <!-- STEP 3 -->

            <div class="step active">

                <div class="circle">
                    3
                </div>

                <strong>
                    Pesanan Diproses
                </strong>

                <small>
                    Sedang diproses
                </small>

            </div>


            <!-- STEP 4 -->

            <div class="step">

                <div class="circle">
                    4
                </div>

                <strong>
                    Kamera Disiapkan
                </strong>

                <small>
                    Menunggu
                </small>

            </div>


            <!-- STEP 5 -->

            <div class="step">

                <div class="circle">
                    5
                </div>

                <strong>
                    Siap Diambil
                </strong>

                <small>
                    Menunggu
                </small>

            </div>


            <!-- STEP 6 -->

            <div class="step">

                <div class="circle">
                    6
                </div>

                <strong>
                    Selesai
                </strong>

                <small>
                    Menunggu
                </small>

            </div>

        </div>

    </div>


    <!-- DETAIL SEWA -->

    <div class="detail-card">

        <div class="detail-title">

            <h2>
                Detail Sewa
            </h2>

            <p>
                Informasi kamera dan jadwal penyewaan.
            </p>

        </div>


        <!-- PRODUK -->

        <div class="product">

            <div class="product-image">

                <img
                    src="{{ asset('images/canon-eos-2000d.png') }}"
                    alt="Canon EOS 2000D II"
                >

            </div>


            <div class="product-info">

                <h3>
                    Canon EOS 2000D II
                </h3>

                <span class="tag">
                    Kamera DSLR
                </span>

                <div class="specs">

                    <span>
                        24.1 MP
                    </span>

                    <span>
                        Full HD
                    </span>

                    <span>
                        WiFi
                    </span>

                </div>

            </div>

        </div>


        <!-- DETAIL -->

        <div class="details">


            <div class="detail-row">

                <span>
                    Durasi Sewa
                </span>

                <strong>
                    3 Hari
                </strong>

            </div>


            <div class="detail-row">

                <span>
                    Tanggal Mulai
                </span>

                <strong>
                    28 Agustus 2026
                </strong>

            </div>


            <div class="detail-row">

                <span>
                    Tanggal Kembali
                </span>

                <strong>
                    29 Agustus 2026
                </strong>

            </div>


            <div class="detail-row">

                <span>
                    Lokasi Pengambilan
                </span>

                <strong>
                    DigiCam Store, Jakarta
                </strong>

            </div>


            <div class="detail-row">

                <span>
                    Metode Pengambilan
                </span>

                <strong>
                    Ambil di Toko
                </strong>

            </div>


            <div class="detail-row">

                <span>
                    Status Pembayaran
                </span>

                <strong class="success">
                    ✓ Lunas
                </strong>

            </div>

        </div>


        <!-- TERIMA KASIH -->

        <div class="thanks">

            <div class="thanks-text">

                <strong>
                    Terima kasih telah memilih DigiCam ❤️
                </strong>

                <p>
                    Pesanan kamu sedang kami siapkan.
                    Silakan tunggu informasi selanjutnya.
                </p>

            </div>


            <a href="/" class="back-home">
                ← Kembali ke Beranda
            </a>

        </div>

    </div>

</div>

@endsection