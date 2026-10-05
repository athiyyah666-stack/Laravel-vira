@extends('layouts.app')

@section('content')

<style>
    .page-container {
        width: 90%;
        max-width: 900px;
        margin: 0 auto;
        padding: 45px 0 70px;
        animation: fadeIn .5s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .page-title {
        text-align: center;
        margin-bottom: 35px;
    }

    .page-title h1 {
        margin: 0 0 8px;
        font-size: 38px;
        font-weight: 800;
        color: #191919;
    }

    .page-title p {
        margin: 0;
        color: #777;
        font-size: 16px;
    }

    .checkout-box {
        background: white;
        border: 1px solid #f1e3e9;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
    }

    .checkout-box form {
        display: flex;
        flex-direction: column;
    }

    .checkout-box label {
        margin-bottom: 8px;
        margin-top: 18px;
        font-size: 15px;
        font-weight: 600;
        color: #252525;
    }

    .checkout-box label:first-child {
        margin-top: 0;
    }

    .checkout-box input,
    .checkout-box select,
    .checkout-box textarea {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 13px 15px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #333;
        background: #fff;
        outline: none;
        transition: .2s ease;
    }

    .checkout-box input:focus,
    .checkout-box select:focus,
    .checkout-box textarea:focus {
        border-color: #ff4f87;
        box-shadow: 0 0 0 3px rgba(255, 79, 135, .10);
    }

    .checkout-box textarea {
        resize: vertical;
        min-height: 100px;
    }

    #alamat-pengantaran {
        animation: alamatShow .25s ease;
    }

    @keyframes alamatShow {
        from {
            opacity: 0;
            transform: translateY(-5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .checkout-box button {
        margin-top: 30px;
        width: 100%;
        border: none;
        border-radius: 11px;
        padding: 14px;
        background: #ff4f87;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: .25s ease;
    }

    .checkout-box button:hover {
        background: #f23875;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 79, 135, .20);
    }

    @media (max-width: 600px) {
        .page-container {
            width: 92%;
            padding: 30px 0 50px;
        }

        .checkout-box {
            padding: 25px 20px;
        }

        .page-title h1 {
            font-size: 30px;
        }
    }
</style>


<div class="page-container">

    <div class="page-title">

        <h1>Checkout</h1>

        <p>
            Lengkapi data penyewaan kamera.
        </p>

    </div>


    <div class="checkout-box">

        <form
            method="POST"
            action="{{ route('booking.process', $cameraId) }}">

            @csrf


            {{-- NAMA --}}
            <label>Nama Lengkap</label>

            <input
                type="text"
                name="nama"
                placeholder="Nama lengkap"
                required>


            {{-- TELEPON --}}
            <label>Nomor Telepon</label>

            <input
                type="text"
                name="telepon"
                placeholder="08xxxxxxxxxx"
                required>


            {{-- TANGGAL MULAI --}}
            <label>Tanggal Mulai</label>

            <input
                type="date"
                name="tanggal_mulai"
                required>


            {{-- TANGGAL SELESAI --}}
            <label>Tanggal Selesai</label>

            <input
                type="date"
                name="tanggal_selesai"
                required>


            {{-- METODE PENGAMBILAN --}}
            <label>Metode Pengambilan</label>

            <select name="metode_pengambilan" required>

                <option value="" selected disabled>
                    Pilih metode pengambilan
                </option>

                <option value="Ambil di Toko">
                    Ambil di Toko
                </option>

                <option value="Antar ke Alamat">
                    Antar ke Alamat
                </option>

            </select>


            {{-- ALAMAT --}}
            <div id="alamat-pengantaran" style="display: none;">

                <label>Alamat Pengantaran</label>

                <textarea
                    name="alamat"
                    placeholder="Masukkan alamat lengkap pengantaran..."
                    rows="4"></textarea>

            </div>


            {{-- PEMBAYARAN --}}
            <label>Metode Pembayaran</label>

            <select name="pembayaran" required>

                <option value="" selected disabled>
                    Pilih metode pembayaran
                </option>

                <option value="Transfer Bank">
                    Transfer Bank
                </option>

                <option value="QRIS">
                    QRIS
                </option>

                <option value="E-Wallet">
                    E-Wallet
                </option>

            </select>


            {{-- BUTTON --}}
            <button type="submit">
                Konfirmasi Sewa
            </button>

        </form>

    </div>

</div>


<script>

    const metodePengambilan =
        document.querySelector('select[name="metode_pengambilan"]');

    const alamatPengantaran =
        document.getElementById('alamat-pengantaran');

    const alamatTextarea =
        alamatPengantaran.querySelector('textarea');


    metodePengambilan.addEventListener('change', function () {

        if (this.value === 'Antar ke Alamat') {

            alamatPengantaran.style.display = 'block';

            alamatTextarea.setAttribute('required', 'required');

        } else {

            alamatPengantaran.style.display = 'none';

            alamatTextarea.removeAttribute('required');

            alamatTextarea.value = '';

        }

    });

</script>

@endsection