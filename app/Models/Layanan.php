<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nama_layanan',
        'biaya',
    ];

    // Relasi dengan model 'Perbaikan' (Jika ada layanan yang berhubungan dengan perbaikan tertentu)
    public function perbaikan()
    {
        return $this->hasMany(Perbaikan::class);
    }
}
