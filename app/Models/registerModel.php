<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'fullname', 'email', 'username', 'password','status','aktivasi' ];
}
