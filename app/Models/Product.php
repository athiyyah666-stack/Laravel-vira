<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Hasfactory;
    protected $fillable= [
        'Nama Item',
        'Data Stok',
        'Harga Satuan',
    ];
}