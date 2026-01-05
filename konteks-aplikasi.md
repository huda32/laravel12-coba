# Konteks Aplikasi Laravel - Sistem Manajemen Produk

## 📋 Ringkasan Aplikasi

Ini adalah aplikasi Laravel sederhana untuk mengelola produk dan kategori. Aplikasi ini memiliki fitur dasar untuk menampilkan daftar produk, menambahkan produk baru, dan mengorganisir produk berdasarkan kategori.

## 🏗️ Struktur Database

### Tabel `tb_produk`
- **Primary Key**: `id_produk` (Auto increment)
- **Kolom**:
  - `nama_produk` (string, 150 karakter) - Nama produk
  - `harga` (integer) - Harga produk dalam Rupiah
  - `deskripsi_produk` (text) - Deskripsi detail produk
  - `kategori_id` (integer) - Foreign key ke tabel kategori
  - `created_at`, `updated_at` (timestamps) - Waktu pembuatan dan update

### Tabel `tb_kategori`
- **Primary Key**: `id_kategori` (Auto increment)
- **Kolom**:
  - `nama_kategori` (string, 150 karakter) - Nama kategori
  - `deskripsi` (text) - Deskripsi kategori
  - `created_at`, `updated_at` (timestamps) - Waktu pembuatan dan update

## 🔗 Hubungan Model (Eloquent Relationships)

### Model `produk` (app/Models/produk.php)
- **Tabel**: `tb_produk`
- **Primary Key**: `id_produk`
- **Relationship**: `belongsTo(Kategori::class, 'kategori')`
- **Mass Assignment**: Dilarang (protected $guarded)

### Model `Kategori` (app/Models/Kategori.php)
- **Tabel**: `tb_kategori`
- **Primary Key**: `id_kategori`
- **Relationship**: `hasMany(produk::class, 'kategori_id', 'id_kategori')`

## 🎮 Kontroller dan Routes

### ProdukController (app/Http/Controllers/ProdukController.php)
- **Method `index()`**: Menampilkan halaman daftar produk dengan:
  - Data toko (nama, alamat, telepon)
  - Semua produk dengan relasi kategori
  - View: `pages.produk.show`
- **Method `createProduk()`**: Menampilkan form tambah produk
  - View: `pages.addProduk`

### Routes (routes/web.php)
```php
// Route utama
Route::get('/', function () { return view('pages.beranda'); });
Route::get('/about', function () { return view('pages.about'); });
Route::get('/contact', function () { return view('pages.contact'); });

// Route produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'createProduk']);
```

## 🎨 Struktur Frontend (Views)

### Layout Utama
- **Master Layout**: `resources/views/layouts/master.blade.php`
  - Menggunakan Bootstrap 5.0.2
  - Includes navbar dan footer
  - `@yield('content')` untuk konten dinamis

### Komponen Layout
- **Navbar**: `resources/views/layouts/navbar.blade.php`
  - Bootstrap navbar dengan warna primary
  - Menu: Beranda, About, Contact, Produk
- **Footer**: `resources/views/layouts/footer.blade.php`
  - Posisi absolute di bawah
  - Copyright notice

### Halaman
- **Beranda**: `resources/views/pages/beranda.blade.php`
  - Halaman welcome sederhana
- **Produk**: `resources/views/pages/produk/show.blade.php`
  - Tabel daftar produk dengan kolom: No, Nama, Harga, Deskripsi, Kategori, Aksi
  - Tombol "Tambah Produk"
  - Info toko dalam alert
- **Add Produk**: `resources/views/pages/addProduk.blade.php`
  - Halaman placeholder untuk form tambah produk

## 📊 Data Seed

### DatabaseSeeder (database/seeders/DatabaseSeeder.php)
- Menjalankan `ProdukSeeder` dan `KategoriSeeder`

### KategoriSeeder (database/seeders/KategoriSeeder.php)
- **Kategori 1**: Elektronik (TV, radio, dll)
- **Kategori 2**: Pakaian (baju, celana, dll)

### ProdukSeeder (database/seeders/ProdukSeeder.php)
- **Produk A**: Rp 10.000, kategori Elektronik
- **Produk B**: Rp 20.000, kategori Pakaian
- **Produk C**: Rp 15.000, kategori Elektronik

## ⚡ Fitur Utama

1. **Menampilkan Daftar Produk**: Tabel dengan data produk lengkap termasuk kategori
2. **Informasi Toko**: Menampilkan nama toko, alamat, dan telepon
3. **Navigasi**: Menu navigasi yang mudah digunakan
4. **Responsive Design**: Menggunakan Bootstrap untuk tampilan responsif
5. **Database Relationship**: Produk terkait dengan kategori menggunakan Eloquent

## 🛠️ Teknologi yang Digunakan

- **Framework**: Laravel
- **Database**: MySQL/SQLite (konfigurasi Laravel default)
- **Frontend**: Bootstrap 5.0.2
- **Template Engine**: Blade
- **PHP Version**: Sesuai dengan requirement Laravel

## 📝 Catatan Pengembangan

### Issues yang Perlu Diperhatikan:
1. **Konsistensi Penamaan**: Model `produk` menggunakan lowercase, sebaiknya konsisten dengan naming convention Laravel (PascalCase)
2. **Form Add Produk**: Halaman addProduk masih placeholder, belum ada form actually
3. **CRUD Operations**: Hanya Read operation yang implemented, belum ada Create, Update, Delete
4. **Validation**: Belum ada validasi input
5. **Error Handling**: Belum ada error handling

### Saran Pengembangan:
1. Implementasi form tambah/edit produk
2. Implementasi delete produk dengan konfirmasi
3. Implementasi search dan filter produk
4. Upload gambar produk
5. Validasi input dengan Laravel Form Request
6. Implementasi pagination untuk daftar produk
7. Implementasi authentication untuk keamanan

## 🚀 Cara Menjalankan Aplikasi

1. Jalankan `composer install`
2. Copy `.env.example` ke `.env` dan konfigurasi database
3. Jalankan `php artisan migrate` untuk membuat tabel
4. Jalankan `php artisan db:seed` untuk populate data
5. Jalankan `php artisan serve` untuk menjalankan development server

## 📂 Struktur File Penting

```
app/
├── Http/Controllers/ProdukController.php
├── Models/
│   ├── produk.php
│   └── Kategori.php
database/
├── migrations/
│   ├── 2026_01_02_042227_create_produks_table.php
│   └── 2026_01_02_071053_create_kategori_table.php
└── seeders/
    ├── DatabaseSeeder.php
    ├── ProdukSeeder.php
    └── KategoriSeeder.php
resources/views/
├── layouts/
│   ├── master.blade.php
│   ├── navbar.blade.php
│   └── footer.blade.php
└── pages/
    ├── beranda.blade.php
    ├── about.blade.php
    ├── contact.blade.php
    ├── produk/
    │   └── show.blade.php
    └── addProduk.blade.php
routes/web.php
```

---

*Generated on: 2026-01-05T01:08:09Z*  
*Timezone: Asia/Bangkok (UTC+7)*