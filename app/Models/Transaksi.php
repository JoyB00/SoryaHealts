<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'transaksis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'tanggal_transaksi',
        'status',
        'id_alamat',
        'metode_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'id_alamat');
    }
}
