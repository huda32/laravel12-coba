@extends('layouts.master')

@section('content')
    <h1>Selamat Datang di Halaman Produk</h1>
    <br>
    <a href="/produk/create" type="button" class="btn btn-primary mb-3">Tambah Produk</a>
   <div class="alert alert-primary">
       <strong>{{ $datatoko['toko'] }}</strong><br>
       {{ $datatoko['alamat'] }}<br>
       {{ $datatoko['telepon'] }}
   </div>
    <div class="card">
    <div class="card-header">
        Data Produk
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama_produk }}</td>
      <td>{{ $item->harga }}</td>
      <td>{{ $item->deskripsi_produk }}</td>
      <td>{{ $item->kategori->nama_kategori }}</td>
      <td>
        <button type="button" class="btn btn-sm btn-warning">Edit</button>
        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
    </div>
   </div>
@endsection