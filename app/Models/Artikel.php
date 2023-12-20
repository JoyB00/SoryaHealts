<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'artikels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'gambar_artikel',
        'judul',
        'topik',
        'author',
        'tanggal_publish',
        'deskripsi',
    ];
}
