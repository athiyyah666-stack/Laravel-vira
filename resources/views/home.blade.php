@extends('layouts.app')

@section('content')

<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-container">

        <!-- BAGIAN KIRI -->
        <div class="hero-content">

            <span class="welcome">
                SELAMAT DATANG DI DIGICAM
            </span>

            <h1>
                Abadikan Momen,
                <br>
                <span>Simpan Kenangan!</span>
            </h1>

            <p>
                Temukan kamera dan aksesoris berkualitas
                untuk menemani setiap momen berharga Anda.
            </p>

            <div class="hero-buttons">

                <a href="{{ route('camera') }}"
                   class="btn-primary">
                    Sewa Kamera
                </a>

                <a href="{{ route('aksesoris') }}"
                   class="btn-secondary">
                    Lihat Aksesoris
                </a>

            </div>

        </div>


        <!-- =========================
             FOTO SONY
        ========================= -->

        <div class="hero-image">

            <div class="hero-circle"></div>

            <img
                src="{{ asset('images/kamera/sony(1).jpg') }}"
                alt="Kamera Sony"
            >

        </div>

    </div>

</section>


<!-- =========================
     FEATURES
========================= -->

<section class="features">

    <div class="feature">

        <i data-lucide="truck"></i>

        <div>
            <b>Pengiriman Cepat</b>
            <small>Aman dan terpercaya</small>
        </div>

    </div>


    <div class="feature">

        <i data-lucide="camera"></i>

        <div>
            <b>Kamera Berkualitas</b>
            <small>Selalu terawat dengan baik</small>
        </div>

    </div>


    <div class="feature">

        <i data-lucide="shield-check"></i>

        <div>
            <b>Pembayaran Aman</b>
            <small>Transaksi 100% aman</small>
        </div>

    </div>


    <div class="feature">

        <i data-lucide="headphones"></i>

        <div>
            <b>Customer Support</b>
            <small>Siap membantu Anda</small>
        </div>

    </div>

</section>


<!-- =========================
     KAMERA POPULER
========================= -->

<section class="popular">

    <div class="section-heading">

        <h2>Kamera Populer</h2>

        <a href="{{ route('camera') }}">
            Lihat Semua →
        </a>

    </div>


    <div class="camera-grid">


        <!-- SONY 1 -->

        <div class="camera-card">

            <div class="camera-photo">

                <img
                    src="{{ asset('images/kamera/sony.jpg') }}"
                    alt="Sony Cyber-shot"
                >

            </div>

            <h3>Sony Cyber-shot</h3>

            <div class="rating">
                ★★★★★
            </div>

            <strong>
                Rp150.000
                <small>/ hari</small>
            </strong>

        </div>


        <!-- SONY 2 -->

        <div class="camera-card">

            <div class="camera-photo">

                <img
                    src="{{ asset('images/kamera/sony.jpg') }}"
                    alt="Sony Alpha"
                >

            </div>

            <h3>Sony Alpha</h3>

            <div class="rating">
                ★★★★★
            </div>

            <strong>
                Rp180.000
                <small>/ hari</small>

            </strong>

        </div>


        <!-- SONY 3 -->

        <div class="camera-card">

            <div class="camera-photo">

                <img
                    src="{{ asset('images/kamera/sony.jpg') }}"
                    alt="Sony Camera"
                >

            </div>

            <h3>Sony Camera</h3>

            <div class="rating">
                ★★★★★
            </div>

            <strong>
                Rp200.000
                <small>/ hari</small>
            </strong>

        </div>


        <!-- SONY 4 -->

        <div class="camera-card">

            <div class="camera-photo">

                <img
                    src="{{ asset('images/kamera/sony.jpg') }}"
                    alt="Sony Digital Camera"
                >

            </div>

            <h3>Sony Digital Camera</h3>

            <div class="rating">
                ★★★★★
            </div>

            <strong>
                Rp175.000
                <small>/ hari</small>
            </strong>

        </div>


    </div>

</section>


<!-- =========================
     PROMO
========================= -->

<section class="promo-banner">

    <div>

        <h2>
            Dapatkan Promo Spesial!
        </h2>

        <p>
            Diskon hingga <b>30%</b> untuk penyewaan
            kamera tertentu.
            Jangan lewatkan kesempatan ini!
        </p>

    </div>


    <a href="{{ route('promo') }}">
        Lihat Promo
    </a>


    <div class="gift">
        🎁
    </div>

</section>


<script>
    lucide.createIcons();
</script>

@endsection