<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
        public function massAssignment(){
        Cart::create(
        [
        'id' => '001',
        'nama' => 'Brokoli',
        'kategori' => 'Sayuran',
        'jumlah_tersisa' => '1500',
        'tanggal_sampai' =>'2025-08-22',
        ]
        );
        return "Berhasil di proses";
    }
}