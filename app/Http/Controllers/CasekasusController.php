<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CasekasusController extends Controller
{
    public function view_case(Request $request){
        $select = $request->nama_case.'.kode_gejala';
        $select_kode = $request->nama_case;
        $name_case =  $request->nama_case;

        if($select_kode == 'case_tetelo') {$kode_penyakit = 'bobotP001';$nama_penyakit = 'Tetelo';  }
        if($select_kode == 'case_fluburung') { $kode_penyakit = 'bobotP002';$nama_penyakit = 'Flu Burung';  }
        if($select_kode == 'case_batukayammenahun') { $kode_penyakit = 'bobotP003'; $nama_penyakit = 'Batuk Ayam Menahun'; }
        if($select_kode == 'case_marek') { $kode_penyakit = 'bobotP004'; $nama_penyakit = 'Mareks'; }
        if($select_kode == 'case_tipusayam') { $kode_penyakit = 'bobotP005';$nama_penyakit = 'Tipus Ayam'; }
        if($select_kode == 'case_berakkapur'){ $kode_penyakit = 'bobotP006'; $nama_penyakit = 'Berak Kapur'; }
        if($select_kode == 'case_gumboro') { $kode_penyakit = 'bobotP007'; $nama_penyakit = 'Gumboro';  }
        if($select_kode == 'case_kepalabengkak') {$kode_penyakit = 'bobotP008'; $nama_penyakit = 'Kepala Bengkak';  }
        if($select_kode == 'case_batukdarah') {$kode_penyakit = 'bobotP009';$nama_penyakit = 'Batuk Darah';  }

        $select_case = DB::table($select_kode)
        ->join('gejala_all', $select, '=', 'gejala_all.kode_gejala')
        ->get();

        // $case_kasus = DB::table($select)->get();
        $all_gejala = DB::table('gejala_all')->get();
        return view('case_kasus.case-view',['list_case' => $select_case,'list_gejala' => $all_gejala], compact('name_case','kode_penyakit', 'nama_penyakit'));
        

    }
}