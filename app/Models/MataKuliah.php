<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah'; // pastikan nama tabel sesuai database

    protected $fillable = [
        'nama_mk',
        'sks',
    ];

    public $incrementing = true; // biar id auto increment
    protected $keyType = 'int';  // tipe id-nya integer, bukan UUID
}
