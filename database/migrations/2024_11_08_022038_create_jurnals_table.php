<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jurnals', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->year('tahun_terbit');
            $table->text('abstrak');
            $table->integer('volume');
            $table->integer('nomor');
            $table->string('kategori');
            $table->string('link_akses')->nullable();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('jurnals');
    }
};
