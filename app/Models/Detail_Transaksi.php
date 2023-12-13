<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'detail_transaksis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_transaksi',
        'id_obat',
        'jumlah_obat',
        'review',
        'ratings',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
