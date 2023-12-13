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
        'id_staf',
        'tanggal_transaksi',
        'status',
        'metode_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function staf()
    {
        return $this->belongsTo(Staf::class, 'id_staf');
    }
}
