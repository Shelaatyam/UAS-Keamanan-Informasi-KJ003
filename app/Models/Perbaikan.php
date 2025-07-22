<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'kendaraan_id',
        'pekerja_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    // Relasi dengan model 'Kendaraan'
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    // Relasi dengan model 'Pekerja'
    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class);
    }

    // Relasi dengan model 'Layanan' (Jika ada layanan yang terkait)
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
