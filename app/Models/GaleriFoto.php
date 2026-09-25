<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GaleriFoto extends Model
{
    protected $table = 'galeri_fotos';

    protected $fillable = [
        'galeri_id',
        'foto',
    ];

    /**
     * Setiap foto dimiliki oleh satu galeri.
     */
    public function galeri(): BelongsTo
    {
        return $this->belongsTo(Galeri::class, 'galeri_id');
    }
}