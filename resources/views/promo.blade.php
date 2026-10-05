@extends('layouts.app')

@section('content')

<div class="page-container">

    <div class="page-title">

        <h1>Promo</h1>

        <p>
            Temukan berbagai penawaran menarik dari DigiCam.
        </p>

    </div>


    <div class="promo-grid">


        <div class="promo-card">

            <div>

                <span>DISKON HINGGA</span>

                <h2>30%</h2>

                <p>
                    Diskon Sewa Kamera DSLR
                </p>

                <a href="{{ route('camera') }}">
                    Lihat Detail
                </a>

            </div>

            <div class="promo-picture">
                🎁
            </div>

        </div>


        <div class="promo-card">

            <div>

                <span>PAKET BUNDLE</span>

                <h2>HEMAT</h2>

                <p>
                    Sewa Kamera + Lensa
                </p>

                <a href="{{ route('camera') }}">
                    Lihat Detail
                </a>

            </div>

            <div class="promo-picture">
                📷
            </div>

        </div>


        <div class="promo-card">

            <div>

                <span>DISKON</span>

                <h2>20%</h2>

                <p>
                    Semua Aksesoris Kamera
                </p>

                <a href="{{ route('aksesoris') }}">
                    Lihat Detail
                </a>

            </div>

            <div class="promo-picture">
                🎥
            </div>

        </div>


        <div class="promo-card">

            <div>

                <span>GRATIS ONGKIR</span>

                <h2>SE-JABODETABEK</h2>

                <p>
                    Minimal sewa Rp200.000
                </p>

                <a href="{{ route('camera') }}">
                    Lihat Detail
                </a>

            </div>

            <div class="promo-picture">
                🚚
            </div>

        </div>

    </div>

</div>

@endsection