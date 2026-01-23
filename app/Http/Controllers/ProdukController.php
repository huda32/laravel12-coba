<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $datatoko = [
            'toko' => 'Laravel Store',
            'alamat' => 'Jl. Laravel No. 123, Jakarta',
            'telepon' => '021-12345678',
        ];
        $search = $request->keyword;
       

        $data = produk::when($search, function ($query, $search) {
            return $query->where('nama_produk', 'like', "%{$search}%")
                         ->orWhere('deskripsi_produk', 'like', "%{$search}%");
        })->with('kategori')->get();
       
        // dd($data);
        return view('pages.produk.show',[
            'datatoko' => $datatoko,
            'data' => $data
        ]);
    }
    public function createProduk()
    {
        $kategoris = \App\Models\Kategori::all();
        return view('pages.produk.add', compact('kategoris'));
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
        $data = produk::with('kategori')->findOrFail($id);
        return view('pages.produk.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = produk::findOrFail($id);
        $kategoris = \App\Models\Kategori::all();
        return view('pages.produk.edit', compact('data', 'kategoris'));
    }

    public function update(Request $request, $id)
    {   
        // Validasi input
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
            'deskripsi_produk' => 'required',
        ]);

        // Update data produk
        $produk = produk::findOrFail($id);
        $produk->update($validatedData);

        // Redirect ke halaman produk dengan pesan sukses
        return redirect('/produk')->with('message', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();

        return redirect('/produk')->with('message', 'Produk berhasil dihapus!');
    }
}
