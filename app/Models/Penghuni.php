<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'KTP',
        'nama_lengkap',
        'tanggal_masuk',
        'status_penghuni',
        'no_telp',
        'no_kontrakan',
    ];
}
