<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        Buku::create([
            'judul' => 'One Piece',
            'penulis' => 'Eiichiro Oda',
            'penerbit' => 'Shueisha',
            'tahun_terbit' => 1997,
            'kategori' => 'Komik',
            'isbn' => '978-4-08-872509-3',
            'stok' => 15,
        ]);
    }
}
