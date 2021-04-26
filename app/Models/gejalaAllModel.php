<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejalaAllModel extends Model
{
    protected $table = 'gejala_all';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'barang_gejala', 'nama_gejala', 'bobot_gejala', 'cangkupan' ];
}
