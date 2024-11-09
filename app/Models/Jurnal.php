<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'abstrak',
        'volume',
        'nomor',
        'kategori',
        'link_akses',
    ];
}