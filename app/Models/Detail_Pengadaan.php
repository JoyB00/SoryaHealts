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
        'fk_id_pengadaan',
        'fk_id_obat',
        'jumlah_obat'
    ];
}
