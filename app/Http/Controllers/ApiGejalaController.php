<?php

namespace App\Http\Controllers;

use App\Models\gejalaAllModel;
use Illuminate\Http\Request;


class ApiGejalaController extends Controller
{
    public function view_gejala( ){
    return  gejalaAllModel :: all();
    }
}
