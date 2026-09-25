<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'nip',
        'nama',
        'mapel',
        'foto',
    ];
}