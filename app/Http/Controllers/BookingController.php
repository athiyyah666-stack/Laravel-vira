<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function checkout($id)
    {
        return view('booking.checkout', [
            'cameraId' => $id
        ]);
    }


    public function process(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        return redirect()
            ->route('booking.confirmation')
            ->with('success', 'Booking berhasil dibuat!');
    }


    public function confirmation()
    {
        return view('booking.confirmation');
    }


    public function status()
    {
        return view('booking.status');
    }
}