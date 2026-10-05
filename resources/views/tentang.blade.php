@extends('layouts.app')

@section('content')

<section class="about-page">

    <div class="about-container">

        <div class="about-header">
            <span class="about-label">TENTANG KAMI</span>
            <h1>Siapa Kami?</h1>
            <p>
                DigiCam adalah platform penyewaan kamera dan aksesoris
                terpercaya yang hadir untuk membantu Anda mengabadikan
                setiap momen.
            </p>
        </div>

        <div class="about-intro">

            <div class="about-text">
                <h2>Digi<span>Cam</span></h2>

                <p>
                    DigiCam adalah platform penyewaan kamera dan aksesoris
                    terpercaya yang hadir untuk membantu Anda mengabadikan
                    setiap momen. Kami menyediakan berbagai pilihan kamera
                    dengan harga terjangkau dan pelayanan terbaik.
                </p>
            </div>

            <div class="about-image">
                <img src="{{ asset('images/tentang.jpg') }}" alt="Tentang DigiCam">
            </div>

        </div>


        <div class="vision-mission">

            <div class="about-box">
                <div class="about-icon">
                    <i data-lucide="camera"></i>
                </div>

                <h3>Visi Kami</h3>

                <p>
                    Menjadi platform penyewaan kamera terbaik di Indonesia.
                </p>
            </div>


            <div class="about-box">
                <div class="about-icon">
                    <i data-lucide="heart"></i>
                </div>

                <h3>Misi Kami</h3>

                <p>
                    Memberikan pelayanan berkualitas, mudah dan terpercaya.
                </p>
            </div>

        </div>


        <div class="why-section">

            <div class="about-label">KEUNGGULAN KAMI</div>

            <h2>Kenapa Memilih DigiCam?</h2>

            <div class="why-grid">

                <div class="why-card">
                    <div class="about-icon">
                        <i data-lucide="camera"></i>
                    </div>

                    <h3>Kamera Berkualitas</h3>

                    <p>
                        Kamera terawat dan berkualitas.
                    </p>
                </div>


                <div class="why-card">
                    <div class="about-icon">
                        <i data-lucide="wallet"></i>
                    </div>

                    <h3>Harga Terjangkau</h3>

                    <p>
                        Harga sewa bersahabat.
                    </p>
                </div>


                <div class="why-card">
                    <div class="about-icon">
                        <i data-lucide="shield-check"></i>
                    </div>

                    <h3>Terpercaya</h3>

                    <p>
                        Pelayanan aman dan terpercaya.
                    </p>
                </div>


                <div class="why-card">
                    <div class="about-icon">
                        <i data-lucide="headphones"></i>
                    </div>

                    <h3>Pelayanan Terbaik</h3>

                    <p>
                        Siap membantu kebutuhan Anda.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection