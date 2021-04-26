<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caseGejalaModel extends Model
{
    protected $table = 'case_gejala';
    protected $primaryKey = 'id';
    protected $fillable = ['id','kode_gejala' ];
}
