<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('tgl');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']);
            $table->text('alamat_rmh');
            $table->string('notelp');
            $table->text('alamat_skl');
            $table->string('nofax');
            $table->enum('jurusan', ['Teknik Komputer Jaringan', 'Rekayasa Perangkat Lunak', 'Multimedia', 'Animasi', 'OTKP', 'BDP']);
            $table->string('nis');
            $table->enum('periode', ['4 April 2023 - 4 Juli 2023 (Batch 12)', '2 Mei 2023 - 1 Agustus 2023 (Batch 13)', '1 Agustus 2023 - 1 Febuari 2024 (Batch 14)']);
            $table->string('foto');
            $table->string('kartu');
            $table->string('cv');
            $table->string('surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};
