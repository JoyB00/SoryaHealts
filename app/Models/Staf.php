<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'stafs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_staf',
        'email_staf',
        'password_staf',
    ];
}
