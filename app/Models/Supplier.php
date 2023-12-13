<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_supplier',
        'no_telp_supplier',
        'email_supplier'

    ];
}
