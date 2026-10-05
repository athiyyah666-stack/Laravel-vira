<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CameraController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| KAMERA
|--------------------------------------------------------------------------
*/

Route::get('/sewa', function () {
    return view('sewa');
})->name('sewa');

Route::get('/kamera', [CameraController::class, 'index'])
    ->name('camera');

Route::get('/kamera/{id}', [CameraController::class, 'detail'])
    ->name('camera.detail');


/*
|--------------------------------------------------------------------------
| DATA AKSESORIS
|--------------------------------------------------------------------------
*/

$accessories = [

    [
        'id' => 0,
        'name' => 'Lensa Canon 50mm',
        'price' => 'Rp150.000',
        'image' => 'lensa.jpg',
        'category' => 'Lensa',
        'description' =>
            'Lensa Canon 50mm yang cocok digunakan untuk kebutuhan fotografi portrait dan berbagai kegiatan fotografi.'
    ],

    [
        'id' => 1,
        'name' => 'Tripod Manfrotto',
        'price' => 'Rp75.000',
        'image' => 'tripod.jpg',
        'category' => 'Tripod',
        'description' =>
            'Tripod yang kokoh dan stabil untuk membantu menghasilkan foto dan video yang lebih stabil.'
    ],

    [
        'id' => 2,
        'name' => 'Tas Kamera',
        'price' => 'Rp80.000',
        'image' => 'tas.jpg',
        'category' => 'Tas Kamera',
        'description' =>
            'Tas kamera untuk membawa kamera dan perlengkapan fotografi dengan lebih aman.'
    ],

    [
        'id' => 3,
        'name' => 'Baterai Canon',
        'price' => 'Rp65.000',
        'image' => 'baterai.jpg',
        'category' => 'Baterai',
        'description' =>
            'Baterai cadangan untuk kamera Canon agar aktivitas fotografi dapat berlangsung lebih lama.'
    ],

];


/*
|--------------------------------------------------------------------------
| HALAMAN AKSESORIS
|--------------------------------------------------------------------------
*/

Route::get('/aksesoris', function () use ($accessories) {

    $kategori = request('kategori');

    // Jika tidak memilih kategori, tampilkan semua
    $items = $accessories;

    // Jika memilih kategori, tampilkan sesuai kategori
    if ($kategori) {

        $items = array_filter($accessories, function ($item) use ($kategori) {
            return $item['category'] === $kategori;
        });

    }

    return view('aksesoris.aksesoris', [
        'items' => $items,
        'kategori' => $kategori,
    ]);

})->name('aksesoris');


/*
|--------------------------------------------------------------------------
| DETAIL AKSESORIS
|--------------------------------------------------------------------------
*/

Route::get('/aksesoris/detail/{id}', function ($id) use ($accessories) {

    if (!isset($accessories[$id])) {
        abort(404);
    }

    return view('aksesoris.aksesoris-detail', [
        'item' => $accessories[$id],
    ]);

})->name('aksesoris.detail');


/*
|--------------------------------------------------------------------------
| PEMESANAN AKSESORIS
|--------------------------------------------------------------------------
*/

Route::post('/aksesoris/pesan/{id}', function ($id) use ($accessories) {

    if (!isset($accessories[$id])) {
        abort(404);
    }

    return redirect()->route('aksesoris.confirmation');

})->name('aksesoris.pesan');


/*
|--------------------------------------------------------------------------
| KONFIRMASI AKSESORIS
|--------------------------------------------------------------------------
*/

Route::get('/aksesoris/confirmation', function () {

    return view('aksesoris.aksesoris-confirmation');

})->name('aksesoris.confirmation');


/*
|--------------------------------------------------------------------------
| PROMO
|--------------------------------------------------------------------------
*/

Route::get('/promo', function () {

    return view('promo');

})->name('promo');


/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/

Route::get('/tentang', function () {

    return view('tentang');

})->name('tentang');


/*
|--------------------------------------------------------------------------
| AKUN
|--------------------------------------------------------------------------
|
| Akun sekarang bisa dibuka tanpa Login.
|
*/

Route::get('/akun', function () {
    return view('account.profile');
})->name('account.profile');

Route::get('/akun/pengaturan', function () {
    return view('account.settings');
})->name('account.settings');


/*
|--------------------------------------------------------------------------
| BOOKING KAMERA
|--------------------------------------------------------------------------
|
| Booking sekarang tidak membutuhkan Login.
|
*/

// Checkout langsung dari kamera
Route::get('/checkout/{id}', [BookingController::class, 'checkout'])
    ->name('booking.checkout');

Route::post('/checkout/{id}', [BookingController::class, 'process'])
    ->name('booking.process');

Route::get('/booking/confirmation', [BookingController::class, 'confirmation'])
    ->name('booking.confirmation');

Route::get('/booking/status', [BookingController::class, 'status'])
    ->name('booking.status');


/*
|--------------------------------------------------------------------------
| KERANJANG
|--------------------------------------------------------------------------
*/

// Halaman keranjang
Route::get('/keranjang', [CartController::class, 'index'])
    ->name('cart');

// Tambah barang
Route::post('/keranjang/tambah/{id}', [CartController::class, 'add'])
    ->name('cart.add');

// Hapus barang
Route::post('/keranjang/hapus/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

// Checkout keranjang
Route::get('/keranjang/checkout', [CartController::class, 'checkout'])
    ->name('cart.checkout');


    