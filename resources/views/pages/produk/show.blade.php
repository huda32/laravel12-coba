@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Halaman Produk</h1>
                <a href="/produk/create" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Produk
                </a>
            </div>

            <div class="alert alert-primary mb-4">
                <strong>{{ $datatoko['toko'] }}</strong><br>
                <small>{{ $datatoko['alamat'] }} | {{ $datatoko['telepon'] }}</small>
            </div>

            @if (session('message'))
                <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Data Produk</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td><a href="/produk/{{$item->id_produk}}{{ $item->id }}" class="text-primary fw-bold text-decoration-none">{{ $item->nama_produk }}</a></td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>{{ Str::limit($item->deskripsi_produk, 50) }}</td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $item->kategori->nama_kategori }}</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline-warning me-1">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Tidak ada data produk.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection