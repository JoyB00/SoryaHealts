<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'alamats';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'deskripsi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
