@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Hubungi Kami</h1>
        <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan isi formulir di bawah ini atau gunakan informasi kontak yang tersedia.</p>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
    <div class="col-md-6">
        <h2>Informasi Kontak</h2>
        <ul class="list-unstyled">
            <li><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Contoh, Indonesia</li>
            <li><strong>Telepon:</strong> +62 123 4567 890</li>
            <li><strong>Email:</strong> info@contoh.com</li>
            <li><strong>Jam Kerja:</strong> Senin - Jumat, 09:00 - 17:00 WIB</li>
        </ul>
        <h3>Ikuti Kami</h3>
        <a href="#" class="btn btn-outline-primary me-2">Facebook</a>
        <a href="#" class="btn btn-outline-primary me-2">Twitter</a>
        <a href="#" class="btn btn-outline-primary">Instagram</a>
    </div>
</div>
@endsection