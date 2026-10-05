<?php

namespace App\Http\Controllers;

class CameraController extends Controller
{
    private $cameras = [

        [
            'id' => 1,
            'name' => 'Canon EOS R6',
            'category' => 'Mirrorless',
            'rating' => '4.9',
            'price' => 250000,
            'image' => '/images/camera/canon-r6.png',
            'description' => 'Kamera mirrorless dengan kualitas gambar yang sangat baik dan cocok untuk berbagai kebutuhan fotografi.'
        ],

        [
            'id' => 2,
            'name' => 'Sony A7 III',
            'category' => 'Mirrorless',
            'rating' => '4.8',
            'price' => 275000,
            'image' => '/images/camera/sony-a7iii.png',
            'description' => 'Kamera mirrorless Sony dengan performa tinggi untuk foto maupun video.'
        ],

        [
            'id' => 3,
            'name' => 'Canon EOS 90D',
            'category' => 'DSLR',
            'rating' => '4.7',
            'price' => 200000,
            'image' => '/images/camera/canon-90d.png',
            'description' => 'Kamera DSLR yang cocok untuk fotografi sehari-hari dan berbagai kegiatan.'
        ],

        [
            'id' => 4,
            'name' => 'Sony ZV-E10',
            'category' => 'Mirrorless',
            'rating' => '4.8',
            'price' => 175000,
            'image' => '/images/camera/sony-zve10.png',
            'description' => 'Kamera ringan yang cocok untuk membuat konten foto dan video.'
        ],

    ];


    public function index()
    {
        return view('camera', [
            'cameras' => $this->cameras
        ]);
    }


    public function detail($id)
    {
        $camera = collect($this->cameras)
            ->firstWhere('id', (int) $id);

        if (!$camera) {
            abort(404);
        }

        return view('detail', [
            'camera' => $camera
        ]);
    }
}