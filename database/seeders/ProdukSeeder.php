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
        DB::table('tb_produk')->insert([
            [
                'nama_produk' => 'Produk A',
                'harga' => 10000,
                'deskripsi_produk' => 'Deskripsi untuk Produk A',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Produk B',
                'harga' => 20000,
                'deskripsi_produk' => 'Deskripsi untuk Produk B',
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Produk C',
                'harga' => 15000,
                'deskripsi_produk' => 'Deskripsi untuk Produk C',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
