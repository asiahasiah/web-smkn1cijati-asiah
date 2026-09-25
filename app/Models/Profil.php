<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    protected $fillable = [
        'nama_sekolah',
        'sejarah',
        'npsn',
        'alamat',
        'akreditasi',
        'kabupaten',
        'tentang',
        'visi',
        'misi',
        'tujuan',
    ];
}