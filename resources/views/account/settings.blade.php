@extends('layouts.app')

@section('content')

<style>

.account-container {
    max-width: 1000px;
    margin: 50px auto;
    padding: 0 30px;
}

.account-title {
    margin-bottom: 30px;
}

.account-title h1 {
    margin: 0 0 8px;
    font-size: 30px;
    color: #222;
}

.account-title p {
    margin: 0;
    color: #777;
    font-size: 14px;
}

.settings-box {
    display: grid;
    grid-template-columns: 220px 1fr;
    gap: 25px;
}

/* MENU */

.settings-menu {
    border: 1px solid #eee;
    border-radius: 12px;
    background: white;
    padding: 15px;
}

.settings-menu a {
    display: block;
    padding: 12px 14px;
    margin-bottom: 5px;

    color: #666;
    text-decoration: none;

    border-radius: 7px;
    font-size: 13px;
}

.settings-menu a:hover,
.settings-menu a.active {
    background: #fff1f4;
    color: #f24f76;
}

/* CONTENT */

.settings-content {
    border: 1px solid #eee;
    border-radius: 12px;
    background: white;
    padding: 30px;
}

.settings-content h2 {
    margin: 0 0 25px;
    font-size: 21px;
    color: #222;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 7px;

    font-size: 13px;
    font-weight: 600;
    color: #333;
}

.form-group input {
    width: 100%;
    height: 42px;

    box-sizing: border-box;

    padding: 0 12px;

    border: 1px solid #ddd;
    border-radius: 7px;

    font-family: inherit;
    font-size: 13px;

    outline: none;
}

.form-group input:focus {
    border-color: #f24f76;
}

/* BUTTON */

.button-group {
    display: flex;
    gap: 10px;

    margin-top: 25px;
}

.save-btn {
    padding: 11px 25px;

    border: none;
    border-radius: 7px;

    background: #f24f76;
    color: white;

    font-size: 13px;
    font-weight: 600;

    cursor: pointer;
}

.save-btn:hover {
    background: #df4268;
}

.cancel-btn {
    display: flex;
    align-items: center;

    padding: 11px 25px;

    border: 1px solid #ddd;
    border-radius: 7px;

    color: #666;
    text-decoration: none;

    font-size: 13px;
}

/* RESPONSIVE */

@media (max-width: 700px) {

    .settings-box {
        grid-template-columns: 1fr;
    }

}

</style>


<div class="account-container">

    <div class="account-title">

        <h1>
            Pengaturan Akun
        </h1>

        <p>
            Kelola informasi dan keamanan akun DigiCam kamu.
        </p>

    </div>


    <div class="settings-box">


        <!-- MENU -->

        <div class="settings-menu">

            <a
                href="{{ route('account.profile') }}"
            >
                Profil Saya
            </a>

            <a
                href="{{ route('account.settings') }}"
                class="active"
            >
                Pengaturan Akun
            </a>

            <a href="#">
                Keamanan
            </a>

            <a href="#">
                Notifikasi
            </a>

        </div>


        <!-- FORM -->

        <div class="settings-content">

            <h2>
                Informasi Akun
            </h2>


            <form>

                <div class="form-group">

                    <label>
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        value="Virah"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Email
                    </label>

                    <input
                        type="email"
                        value="adtongi@gmail.com"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Nomor Telepon
                    </label>

                    <input
                        type="text"
                        value="+62 kepode"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Alamat
                    </label>

                    <input
                        type="text"
                        placeholder="Masukkan alamat"
                    >

                </div>


                <div class="button-group">

                    <a
                        href="{{ route('account.profile') }}"
                        class="cancel-btn"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="save-btn"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection