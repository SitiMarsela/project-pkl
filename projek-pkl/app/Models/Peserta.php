<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable=[
        'email',
        'nama',
        'jk',
        'tgl',
        'agama',
        'alamat_rmh',
        'notelp',
        'alamat_skl',
        'nofax',
        'jurusan',
        'nis',
        'periode',
        'foto',
        'kartu',
        'cv',
        'surat',
    ];
}
