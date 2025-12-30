@extends('layouts.master')

@section('content')
    <h1>Selamat Datang di Halaman Produk</h1>
    <br>
    <button type="button" class="btn btn-primary mb-3">Tambah Produk</button>
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
      <th scope="col">Stock</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop</td>
      <td>25</td>
      <td>harga</td>
      <td>
        <button type="button" class="btn btn-sm btn-warning">Edit</button>
        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop</td>
      <td>25</td>
      <td>harga</td>
      <td>
        <button type="button" class="btn btn-sm btn-warning">Edit</button>
        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
      </td>
    </tr>

  </tbody>
</table>
    </div>
   </div>
@endsection