<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CartController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | MENAMPILKAN KERANJANG
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item) {
            $price = (int) $item['price'];
            $quantity = (int) $item['quantity'];

            $total += $price * $quantity;
        }

        return view('cart', compact('cart', 'total'));
    }


    /*
    |--------------------------------------------------------------------------
    | TAMBAH KE KERANJANG
    |--------------------------------------------------------------------------
    */

    public function add(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        /*
        | Harga bisa dikirim seperti:
        | 150000
        | Rp150.000
        | Rp 150.000
        |
        | Kita bersihkan agar menjadi angka.
        */

        $price = preg_replace('/[^0-9]/', '', $request->price);

        $price = (int) $price;

        /*
        | Tentukan jenis barang
        */

        $type = $request->type ?? 'Kamera';

        /*
        | Supaya ID kamera dan aksesoris
        | tidak bentrok.
        */

        $cartId = strtolower($type) . '_' . $id;


        /*
        | Jika barang sudah ada
        */

        if (isset($cart[$cartId])) {

            $cart[$cartId]['quantity']++;

        } else {

            $cart[$cartId] = [

                'id' => $id,

                'name' => $request->name ?? 'Barang DigiCam',

                'price' => $price,

                'image' => $request->image ?? '',

                'type' => $type,

                'quantity' => 1,

            ];
        }


        /*
        | Simpan ke session
        */

        session()->put('cart', $cart);


        return redirect()
            ->route('cart')
            ->with(
                'success',
                $request->name . ' berhasil ditambahkan ke keranjang!'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS DARI KERANJANG
    |--------------------------------------------------------------------------
    */

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            unset($cart[$id]);

        }

        session()->put('cart', $cart);

        return redirect()
            ->route('cart')
            ->with(
                'success',
                'Barang berhasil dihapus dari keranjang.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | CHECKOUT DARI KERANJANG
    |--------------------------------------------------------------------------
    */

    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {

            return redirect()
                ->route('cart')
                ->with(
                    'success',
                    'Keranjang masih kosong.'
                );
        }


        $total = 0;

        foreach ($cart as $item) {

            $total +=
                ((int) $item['price']) *
                ((int) $item['quantity']);
        }


        return view(
            'booking.checkout',
            compact('cart', 'total')
        );
    }
}