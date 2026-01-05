<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index()
    {
        $datatoko = [
            'toko' => 'Laravel Store',
            'alamat' => 'Jl. Laravel No. 123, Jakarta',
            'telepon' => '021-12345678',
        ];
        $data = produk::with('kategori')->get();
        // dd($data);
        return view('pages.produk.show',[
            'datatoko' => $datatoko,
            'data' => $data
        ]);
    }
    public function createProduk()
    {
        return view('pages.addProduk');
    }
}
