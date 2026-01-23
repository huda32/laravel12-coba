@extends('layouts.master')

@section('content')
<style>
    .warehouse-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    .warehouse-card {
        background: #ecf0f1;
        border: 1px solid #bdc3c7;
        border-radius: 8px;
        padding: 20px;
        margin: 10px 0;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .warehouse-btn {
        background: #e74c3c;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
    .warehouse-btn:hover {
        background: #c0392b;
        color: white;
    }
    body {
        background-color: #f8f9fa;
    }
</style>

<div class="warehouse-hero">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Sistem Manajemen Gudang</h1>
        <p class="lead">Kelola produk dan kategori dengan efisien di aplikasi Laravel kami.</p>
        <a href="" class="warehouse-btn">Lihat Produk</a>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="warehouse-card">
                <h3>Produk</h3>
                <p>Kelola inventaris produk Anda dengan mudah.</p>
                <a href="" class="warehouse-btn">Kelola Produk</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="warehouse-card">
                <h3>Kategori</h3>
                <p>Organisir produk berdasarkan kategori.</p>
                <a href="" class="warehouse-btn">Kelola Kategori</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="warehouse-card">
                <h3>Laporan</h3>
                <p>Lihat laporan dan statistik gudang.</p>
                <a href="#" class="warehouse-btn">Lihat Laporan</a>
            </div>
        </div>
    </div>
</div>
@endsection