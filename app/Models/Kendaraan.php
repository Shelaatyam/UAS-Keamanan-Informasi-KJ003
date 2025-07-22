<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nomor_plat',
        'jenis_kendaraan',
        'status_perbaikan',
    ];

    // Relasi dengan model 'Perbaikan'
    public function perbaikan()
    {
        return $this->hasMany(Perbaikan::class);
    }
}
