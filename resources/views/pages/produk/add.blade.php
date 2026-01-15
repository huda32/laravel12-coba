@extends('layouts.master')

@section('content')
    <div class="card">
    <div class="card-header">Tambah Data Produk</div>
        <div class="cardbody">
            <form action="/produk" method="POST">
                @csrf
                <div class="row">
                        <div class="col-sm-12">
                            <label for="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk" value="{{old('nama_produk')}}">
                            @error('nama_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label for="form-label">Harga Produk</label>
                            <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga Produk">
                        </div>
                        <div class="col-sm-12">
                            <label for="form-label">Kategori Produk</label>
                            <input type="number" name="kategori_id" class="form-control" placeholder="Masukkan Kategori Produk">
                        </div>
                        <div class="col-12">
                            <label for="form-label">Deskripsi Produk</label>
                            <input type="text" name="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi Produk">
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection