<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {

         DB::table('tb_kategori')->insert([
        [
            'nama_kategori' => 'Elektronik',
            'deskripsi' => 'Kategori untuk produk elektronik seperti TV, radio, dll.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama_kategori' => 'Pakaian',
            'deskripsi' => 'Kategori untuk produk pakaian seperti baju, celana, dll.',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ],);

        DB::table('tb_produk')->insert([
            [
                'kode_produk' => 'PROD001',
                'nama_produk' => 'Produk A',
                'harga' => 10000,
                'deskripsi_produk' => 'Deskripsi untuk Produk A',
                'stok' => 50,
                'gambar' => 'produk_a.jpg',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_produk' => 'PROD002',
                'nama_produk' => 'Produk B',
                'harga' => 20000,
                'deskripsi_produk' => 'Deskripsi untuk Produk B',
                'stok' => 30,
                'gambar' => 'produk_b.jpg',
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_produk' => 'PROD003',
                'nama_produk' => 'Produk C',
                'harga' => 15000,
                'deskripsi_produk' => 'Deskripsi untuk Produk C',
                'stok' => 40,
                'gambar' => 'produk_c.jpg',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
