<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'testimonis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'ulasan',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
