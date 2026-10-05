<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>DigiCam</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body>

<!-- NAVBAR -->
<header class="navbar">

    <div class="navbar-inner">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="logo">
            <i data-lucide="camera"></i>
            Digi<span>Cam</span>
        </a>

        <!-- MENU TENGAH -->
        <nav class="menu">

            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ route('camera') }}"
               class="{{ request()->routeIs('camera*') ? 'active' : '' }}">
                Sewa Kamera
            </a>

            <a href="{{ route('aksesoris') }}"
               class="{{ request()->routeIs('aksesoris*') ? 'active' : '' }}">
                Aksesoris
            </a>

            <a href="{{ route('promo') }}"
               class="{{ request()->routeIs('promo') ? 'active' : '' }}">
                Promo
            </a>

            <a href="{{ route('tentang') }}"
               class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                Tentang Kami
            </a>

        </nav>

        <!-- KANAN -->
        <div class="nav-right">

            <a href="{{ route('cart') }}" class="nav-icon">
                <i data-lucide="shopping-cart"></i>
            </a>

            <a href="{{ route('account.profile') }}" class="nav-profile">

                <span class="user-circle">
                    <i data-lucide="user"></i>
                </span>

            </a>

        </div>

    </div>

</header>


<!-- ISI HALAMAN -->
<main>

    @yield('content')

</main>


<!-- FOOTER -->
<footer>

    <div class="footer-container">

        <div class="footer-brand">

            <a href="{{ route('home') }}" class="logo">
                <i data-lucide="camera"></i>
                Digi<span>Cam</span>
            </a>

            <p>
                Sewa kamera mudah, cepat,
                dan terpercaya untuk semua kebutuhan.
            </p>

        </div>


        <div class="footer-column">

            <h4>Menu</h4>

            <a href="{{ route('home') }}">Beranda</a>

            <a href="{{ route('camera') }}">Sewa Kamera</a>

            <a href="{{ route('aksesoris') }}">Aksesoris</a>

            <a href="{{ route('promo') }}">Promo</a>

        </div>


        <div class="footer-column">

            <h4>Bantuan</h4>

            <a href="#">Cara Sewa</a>

            <a href="#">Syarat & Ketentuan</a>

            <a href="#">FAQ</a>

        </div>


        <div class="footer-column">

            <h4>Kontak</h4>

            <p>☎ +62 812-3456-7890</p>

            <p>✉ halo@digicam.com</p>

            <p>📍 Jakarta, Indonesia</p>

        </div>


        <div class="footer-column">

            <h4>Ikuti Kami</h4>

            <div class="social">

                <span>◎</span>
                <span>f</span>
                <span>♪</span>
                <span>▶</span>

            </div>

        </div>

    </div>


    <div class="copyright">

        © 2026 DigiCam. All rights reserved.

    </div>

</footer>


<script>

    lucide.createIcons();

</script>

</body>

</html>