<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan_Obat extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pengadaan_obats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_supplier',
        'tanggal_pengadaan',
        'status'

    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
