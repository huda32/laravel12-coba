@extends('layouts.master')

@section('content')
    <div class="card">
    <div class="card-header">UpdateData Produk</div>
        <div class="cardbody">
            <form action="/produk/{{ $data->id_produk}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                        <div class="col-sm-12">
                            <label for="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk" value="{{$data->nama_produk}}">
                            @error('nama_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label for="form-label">Harga Produk</label>
                            <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga Produk" value="{{ $data->harga}}">
                            @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <label for="form-label">Kategori Produk</label>
                            <select name="kategori_id" class="form-control">
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}" {{ (old('kategori_id') ?: $data->kategori_id) == $kategori->id_kategori ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="form-label">Deskripsi Produk</label>
                            <input type="text" name="deskripsi_produk" class="form-control" placeholder="Masukkan Deskripsi Produk" value="{{ $data->deskripsi_produk }}">
                            @error('deskripsi_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection