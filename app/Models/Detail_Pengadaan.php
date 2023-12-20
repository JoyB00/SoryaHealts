<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pengadaan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'detail_pengadaans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_pengadaan',
        'id_obat',
        'jumlah_obat'
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    public function pengadaan()
    {
        return $this->belongsTo(Pengadaan_Obat::class, 'id_pengadaan');
    }
}
