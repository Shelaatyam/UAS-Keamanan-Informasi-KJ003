<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'keahlian',
        'status_pekerja',
    ];

    // Relasi dengan model 'Perbaikan'
    public function perbaikan()
    {
        return $this->hasMany(Perbaikan::class);
    }
}
