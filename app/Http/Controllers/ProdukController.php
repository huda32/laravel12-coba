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
        return view('pages.produk.add');
    }
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
            'deskripsi_produk' => 'required',
        ]);
        // dd($validatedData);
        // Simpan data produk baru
        produk::create($validatedData);
        // produk::create([
        //     'nama_produk' => $validatedData['nama_produk'],
        //     'harga' => $validatedData['harga'],
        //     'kategori_id' => $validatedData['kategori_id'],
        //     'deskripsi_produk' => $validatedData['deskripsi_produk'],
        // ]);
        // Redirect ke halaman produk dengan pesan sukses
        return redirect('/produk')->with('message', 'Produk berhasil ditambahkan!');
    }

    public function show($id)
    {
        $data = produk::findOrFail($id);
        return view('pages.produk.detail', compact('data'));
    }
}
