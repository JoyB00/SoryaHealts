<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'obats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_obat',
        'deskripsi',
        'jenis_obat',
        'harga_obat',
        'stok_obat',
        'kategori_obat',
        'dosis',
        'golongan_obat',
    ];
}
