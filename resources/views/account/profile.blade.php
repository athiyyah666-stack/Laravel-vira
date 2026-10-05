@extends('layouts.app')

@section('content')

<style>
    /* ================================
       HALAMAN AKUN
    ================================= */

    .account-page {
        width: 90%;
        max-width: 1250px;
        margin: 45px auto 70px;
    }

    /* HEADER PROFILE */

    .account-profile-box {
        width: 100%;
        min-height: 130px;
        border: 1px solid #eeeeee;
        border-radius: 16px;
        background: #ffffff;
        padding: 28px;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 26px;
    }

    .account-profile-icon {
        width: 70px;
        height: 70px;
        min-width: 70px;
        border-radius: 50%;
        background: #fff0f5;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .account-profile-icon i {
        width: 32px;
        height: 32px;
        color: #f15b8a;
    }

    .account-profile-info h1 {
        margin: 0 0 5px;
        font-size: 22px;
        font-weight: 700;
        color: #222222;
    }

    .account-profile-info p {
        margin: 0;
        font-size: 14px;
        color: #999999;
    }


    /* ================================
       MENU AKUN
    ================================= */

    .account-menu-title {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 15px;
        color: #222222;
    }

    .account-menu {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 26px;
    }

    .account-menu-card {
        min-height: 120px;
        border: 1px solid #eeeeee;
        border-radius: 14px;
        background: #ffffff;
        padding: 22px;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #222222;
        transition: 0.2s ease;
    }

    .account-menu-card:hover {
        border-color: #f3b2c7;
        transform: translateY(-2px);
    }

    .account-menu-icon {
        width: 48px;
        height: 48px;
        min-width: 48px;
        border-radius: 10px;
        background: #fff0f5;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 17px;
    }

    .account-menu-icon i {
        width: 22px;
        height: 22px;
        color: #f15b8a;
    }

    .account-menu-text {
        flex: 1;
    }

    .account-menu-text h3 {
        margin: 0 0 5px;
        font-size: 16px;
        font-weight: 600;
    }

    .account-menu-text p {
        margin: 0;
        font-size: 13px;
        line-height: 1.5;
        color: #999999;
    }

    .account-menu-arrow {
        width: 19px;
        height: 19px;
        color: #999999;
        flex-shrink: 0;
    }


    /* ================================
       PESANAN
    ================================= */

    .account-order-box {
        width: 100%;
        border: 1px solid #eeeeee;
        border-radius: 16px;
        background: #ffffff;
        padding: 25px;
    }

    .account-order-box h2 {
        margin: 0 0 18px;
        font-size: 18px;
        font-weight: 700;
        color: #222222;
    }

    .account-empty {
        min-height: 100px;
        border: 1px dashed #e3e3e3;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
    }

    .account-empty i {
        width: 28px;
        height: 28px;
        color: #f15b8a;
        margin-bottom: 8px;
    }

    .account-empty p {
        margin: 0;
        font-size: 13px;
        color: #999999;
    }


    /* ================================
       RESPONSIVE
    ================================= */

    @media (max-width: 768px) {

        .account-page {
            width: 92%;
            margin-top: 30px;
        }

        .account-menu {
            grid-template-columns: 1fr;
        }

        .account-profile-box {
            padding: 22px;
        }

        .account-profile-info h1 {
            font-size: 20px;
        }
    }
</style>


<div class="account-page">

    <!-- =========================
         PROFILE
    ========================== -->

    <div class="account-profile-box">

        <div class="account-profile-icon">
            <i data-lucide="user"></i>
        </div>

        <div class="account-profile-info">

            <h1>Pengguna DigiCam</h1>

            <p>Email belum tersedia</p>

        </div>

    </div>


    <!-- =========================
         MENU AKUN
    ========================== -->

    <h2 class="account-menu-title">
        Akun
    </h2>

    <div class="account-menu">

        <!-- PESANAN -->

        <a href="{{ route('booking.status') }}"
           class="account-menu-card">

            <div class="account-menu-icon">
                <i data-lucide="package"></i>
            </div>

            <div class="account-menu-text">

                <h3>Pesanan Saya</h3>

                <p>
                    Lihat status sewa kamera dan
                    pesanan kamu
                </p>

            </div>

            <i data-lucide="arrow-right"
               class="account-menu-arrow"></i>

        </a>


        <!-- PENGATURAN -->

        <a href="{{ route('account.settings') }}"
           class="account-menu-card">

            <div class="account-menu-icon">
                <i data-lucide="settings"></i>
            </div>

            <div class="account-menu-text">

                <h3>Pengaturan</h3>

                <p>
                    Kelola informasi dan pengaturan
                    akun
                </p>

            </div>

            <i data-lucide="arrow-right"
               class="account-menu-arrow"></i>

        </a>

    </div>


    <!-- =========================
         PESANAN TERBARU
    ========================== -->

    <div class="account-order-box">

        <h2>Pesanan Terbaru</h2>

        <div class="account-empty">

            <i data-lucide="package-open"></i>

            <p>
                Belum ada pesanan.
            </p>

        </div>

    </div>

</div>


<script>
    lucide.createIcons();
</script>

@endsection