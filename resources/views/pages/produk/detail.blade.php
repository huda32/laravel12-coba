@extends('layouts.master')

@section('content')
<h1>Detail Produk Kami</h1>
<hr>
<div>
    <div class="card-body">
         <img src="https://placehold.co/600x400" alt="img-fluid" class="img-fluid mb-3">
        <h5 class="card-title">{{ $data->nama_produk }}</h5>
        <p class="card-text">Kategori: {{ $data->kategori->nama_kategori }}</p>
        <p class="card-text">Harga: Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
        <p class="card-text">Deskripsi: {{ $data->deskripsi_produk }}</p>
        <a href="/produk" class="btn btn-primary">Kembali ke Daftar Produk</a>
    </div>
</div>
@endsection