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
            $table->text('agama');
            $table->text('alamat_rmh');
            $table->string('notelp');
            $table->text('alamat_skl');
            $table->string('nofax');
            $table->string('jurusan');
            $table->string('nis');
            $table->string('periode');
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
