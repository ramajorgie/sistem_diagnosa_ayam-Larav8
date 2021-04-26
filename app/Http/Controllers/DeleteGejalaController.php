<?php

namespace App\Http\Controllers;

use App\Models\gejalaAllModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DeleteGejalaController extends Controller
{
    public function delete_gejala_all(Request $request){
       

        gejalaAllModel::where('kode_gejala', '=', $request->kode_gejala)->first()->delete();
        DB::table('case_tipusayam')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_tetelo')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_marek')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_kepalabengkak')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_gumboro')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_fluburung')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_berakkapur')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_batukdarah')->where('kode_gejala', '=', $request->kode_gejala)->delete();
        DB::table('case_batukayammenahun')->where('kode_gejala', '=', $request->kode_gejala)->delete();

       return redirect('edit-gejala');

    }

    public function delete_gejala_case(Request $request){
        

        DB::table($request->database)->where('kode_gejala', '=', $request->kode_gejala)->delete();
        // $case_kasus = DB::table($request->database)->get();
        $select_kode = $request->database;

        // $select = $request->nama_case.'.kode_gejala';
        // $case_kasus = DB::table($select_kode)
        // ->join('gejala_all', $select, '=', 'gejala_all.kode_gejala')
        // ->get($request->kode_gejala);
        

       
        if($select_kode == 'case_tetelo') {$nama_penyakit = 'Tetelo';  }
        if($select_kode == 'case_fluburung') { $nama_penyakit = 'Flu Burung';  }
        if($select_kode == 'case_batukayammenahun') {  $nama_penyakit = 'Batuk Ayam Menahun'; }
        if($select_kode == 'case_marek') {  $nama_penyakit = 'Mareks'; }
        if($select_kode == 'case_tipusayam') { $nama_penyakit = 'Tipus Ayam'; }
        if($select_kode == 'case_berakkapur'){  $nama_penyakit = 'Berak Kapur'; }
        if($select_kode == 'case_gumboro') {  $nama_penyakit = 'Gumboro';  }
        if($select_kode == 'case_kepalabengkak') { $nama_penyakit = 'Kepala Bengkak';  }
        if($select_kode == 'case_batukdarah') {$nama_penyakit = 'Batuk Darah';  }
        
        return redirect ('admin-menu')->with('success', 'Gejala Penyakit  dengan telah dihapus' );


    }
}
