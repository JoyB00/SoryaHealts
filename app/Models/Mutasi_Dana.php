<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi_Dana extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'mutasi_danas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_transaksi',
        'id_pengadaan',
        'detail_mutasi',
        'saldo',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
    public function pengadaan()
    {
        return $this->belongsTo(Pengadaan_Obat::class, 'id_pengadaan');
    }
}
