<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
    }
}
