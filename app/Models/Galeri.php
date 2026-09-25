<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Galeri extends Model
{
    protected $table = 'galeris';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    /**
     * Satu galeri memiliki banyak foto.
     */
    public function fotos(): HasMany
    {
        return $this->hasMany(GaleriFoto::class, 'galeri_id');
    }
}