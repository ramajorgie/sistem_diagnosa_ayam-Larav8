<?php

namespace App\Http\Controllers;

use App\Models\caseGejalaModel;
use App\Models\firebase;
use App\Models\HistoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PenyakitController extends Controller
{
    public function knn_diagnosa ()
    {   
    $status_user = session()->get('login_done');
        // KNN METODE
    $case_tetelo = DB::table('case_tetelo')
    ->join('gejala_user', 'case_tetelo.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();
       
    $case_marek = DB::table('case_marek')
    ->join('gejala_user', 'case_marek.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_tipusayam = DB::table('case_tipusayam')
    ->join('gejala_user', 'case_tipusayam.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_kepalabengkak = DB::table('case_kepalabengkak')
    ->join('gejala_user', 'case_kepalabengkak.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_gumboro = DB::table('case_gumboro')
    ->join('gejala_user', 'case_gumboro.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_fluburung = DB::table('case_fluburung')
    ->join('gejala_user', 'case_fluburung.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_berakkapur = DB::table('case_berakkapur')
    ->join('gejala_user', 'case_berakkapur.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_batukdarah = DB::table('case_batukdarah')
    ->join('gejala_user', 'case_batukdarah.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $case_batukayammenahun = DB::table('case_batukayammenahun')
    ->join('gejala_user', 'case_batukayammenahun.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();



    $kondisidb =DB::table('setting_gejala')->where('status','bobot umum')->count();
        if($kondisidb !=0){
            $bobotP001 ='bobot_gejala';
            $bobotP002 ='bobot_gejala';
            $bobotP003 ='bobot_gejala';
            $bobotP004 ='bobot_gejala';
            $bobotP005 ='bobot_gejala';
            $bobotP006 ='bobot_gejala';
            $bobotP007 ='bobot_gejala';
            $bobotP008 ='bobot_gejala';
            $bobotP009 ='bobot_gejala';

            $keterangandb ='Mengunakan Bobo Umum';
            
        }
        else{
            $bobotP001 ='bobotP001';
            $bobotP002 ='bobotP002';
            $bobotP003 ='bobotP003';
            $bobotP004 ='bobotP004';
            $bobotP005 ='bobotP005';
            $bobotP006 ='bobotP006';
            $bobotP007 ='bobotP007';
            $bobotP008 ='bobotP008';
            $bobotP009 ='bobotP009';

            $keterangandb ='Mengunakan Bobo Khusus';
        }
        
    


    $hasilperhitungan_tetelo=0;
    foreach($case_tetelo as $totalkan){
        $data= array(
  
            'bobotP001'              =>  $totalkan->$bobotP001,
        );
        $temp = $data['bobotP001'];
        $hasilperhitungan_tetelo = $hasilperhitungan_tetelo + $temp;

    }
    
   
    $hasilperhitungan_fluburung =0;
    foreach($case_fluburung as $totalkan){
        $data= array(
  
            'bobotP002'              =>  $totalkan->$bobotP002,
        );
        $temp = $data['bobotP002'];
        $hasilperhitungan_fluburung = $hasilperhitungan_fluburung + $temp;
        
    }
   
       
    $hasilperhitungan_batukayammenahun=0;
    foreach($case_batukayammenahun as $totalkan){
        $data= array(
  
            'bobotP003'              =>  $totalkan->$bobotP003,
        );
        $temp = $data['bobotP003'];
        $hasilperhitungan_batukayammenahun = $hasilperhitungan_batukayammenahun + $temp;

    }
   
   
     
    $hasilperhitungan_marek=0;
    foreach($case_marek as $totalkan){
        $data= array(
  
            'bobotP004'              =>  $totalkan->$bobotP004,
        );
        $temp = $data['bobotP004'];
        $hasilperhitungan_marek = $hasilperhitungan_marek + $temp;

    }
    $hasilperhitungan_tipusayam=0;
    foreach($case_tipusayam as $totalkan){
        $data= array(
  
            'bobotP005'              =>  $totalkan->$bobotP005,
        );
        $temp = $data['bobotP005'];
        $hasilperhitungan_tipusayam = $hasilperhitungan_tipusayam + $temp;

    }
    $hasilperhitungan_berakkapur=0;
    foreach($case_berakkapur as $totalkan){
        $data= array(
  
            'bobotP006'              =>  $totalkan->$bobotP006,
        );
        $temp = $data['bobotP006'];
        $hasilperhitungan_berakkapur = $hasilperhitungan_berakkapur   + $temp;

    }
    $hasilperhitungan_gumboro=0;
    foreach($case_gumboro as $totalkan){
        $data= array(
  
            'bobotP007'              =>  $totalkan->$bobotP007,
        );
        $temp = $data['bobotP007'];
        $hasilperhitungan_gumboro = $hasilperhitungan_gumboro + $temp;

    }
    $hasilperhitungan_kepalabengkak=0;
    foreach($case_kepalabengkak as $totalkan){
        $data= array(
  
            'bobotP008'              =>  $totalkan->$bobotP008,
        );
        $temp = $data['bobotP008'];
        $hasilperhitungan_kepalabengkak = $hasilperhitungan_kepalabengkak + $temp;

    }
    $hasilperhitungan_batukdarah=0;
    foreach($case_batukdarah as $totalkan){
        $data= array(
  
            'bobotP009'              =>  $totalkan->$bobotP009,
        );
        $temp = $data['bobotP009'];
        $hasilperhitungan_batukdarah = $hasilperhitungan_batukdarah + $temp;

    }

  

    

  
    
    
    // PERHITUNGAN KNN (GEJALA YANG DIAMBIL KNN)
    $knn_tipusayam = $hasilperhitungan_tipusayam;
    $knn_tetelo = $hasilperhitungan_tetelo;
    $knn_marek = $hasilperhitungan_marek;
    $knn_kepalabengkak = $hasilperhitungan_kepalabengkak;
    $knn_gumboro = $hasilperhitungan_gumboro;
    $knn_fluburung = $hasilperhitungan_fluburung;
    $knn_berakkapur = $hasilperhitungan_berakkapur;
    $knn_batukdarah = $hasilperhitungan_batukdarah;
    $knn_batukayammenahun = $hasilperhitungan_batukayammenahun;


    // PERHITUNGAN KESAMAAN
    $kesamaan_tetelo= count($case_tetelo);
    $kesamaan_marek= count($case_marek);
    $kesamaan_tipusayam= count($case_tipusayam);
    $kesamaan_kepalabengkak= count($case_kepalabengkak);
    $kesamaan_gumboro= count($case_gumboro);
    $kesamaan_fluburung= count($case_fluburung);
    $kesamaan_berakkapur= count($case_berakkapur);
    $kesamaan_batukdarah= count($case_batukdarah);
    $kesamaan_batukayammenahun= count($case_batukayammenahun);

    $cek_setting = DB::table('setting_gejala')->where('status','bobot_umum')->count();
   if ($cek_setting !=0 ){
       $bobot = 'bobot_gejala';
   }
   else{
       $bobot ='bobot_khusus';
   }


    // PENTOTALAN BOBOT PEMBAGI KNN
    $total_tipusayam = DB::table('case_tipusayam')->sum($bobot);
    $total_tetelo = DB::table('case_tetelo')->sum($bobot);
    $total_marek = DB::table('case_marek')->sum($bobot);
    $total_kepalabengkak = DB::table('case_kepalabengkak')->sum($bobot);
    $total_gumboro = DB::table('case_gumboro')->sum($bobot);
    $total_fluburung = DB::table('case_fluburung')->sum($bobot);
    $total_berakkapur = DB::table('case_berakkapur')->sum($bobot);
    $total_batukdarah = DB::table('case_batukdarah')->sum($bobot);
    $total_batukayammenahun = DB::table('case_batukayammenahun')->sum($bobot);
    


       // Menghitung dan membullatkan nilai perhitungan knn
       $round_tetelo = $knn_tetelo / $total_tetelo;
       $round_marek = $knn_marek / $total_marek;
       $round_tipusayam = $knn_tipusayam / $total_tipusayam;
       $round_kepalabengkak = $knn_kepalabengkak / $total_kepalabengkak;
       $round_gumboro = $knn_gumboro / $total_gumboro;
       $round_fluburung = $knn_fluburung / $total_fluburung;
       $round_berakkapur = $knn_berakkapur / $total_berakkapur;
       $round_batukdarah = $knn_batukdarah / $total_batukdarah;
       $round_batukayammenahun = $knn_batukayammenahun / $total_batukayammenahun;



    $hasil_tetelo = round($round_tetelo,3);
    $hasil_marek = round($round_marek,3);
    $hasil_tipusayam = round($round_tipusayam,3);
    $hasil_kepalabengkak = round($round_kepalabengkak,3);
    $hasil_gumboro = round($round_gumboro,3);
    $hasil_fluburung = round($round_fluburung,3);
    $hasil_berakkapur = round($round_berakkapur,3);
    $hasil_batukdarah = round($round_batukdarah,3);
    $hasil_batukayammenahun = round($round_batukayammenahun,3);
    $hasil_kosong = 0.00;


        ///JUMLAH GEJALA PER KASUS
        $case_tetelo_total= DB::table('case_tetelo')->count();
        $case_marek_total = DB::table('case_marek')->count();
        $case_tipusayam_total= DB::table('case_tipusayam')->count();
        $case_kepalabengkak_total = DB::table('case_kepalabengkak')->count(); 
        $case_gumboro_total = DB::table('case_gumboro')->count(); 
        $case_fluburung_total = DB::table('case_fluburung')->count();
        $case_berakkapur_total = DB::table('case_berakkapur')->count();
        $case_batukdarah_total = DB::table('case_batukdarah')->count();
        $case_batukayammenahun_total = DB::table('case_batukayammenahun')->count();

         

        $hasil_kasus =  max($hasil_tetelo,$hasil_marek,$hasil_tipusayam,$hasil_kepalabengkak,$hasil_gumboro,
                            $hasil_fluburung,$hasil_berakkapur,$hasil_batukdarah,$hasil_batukayammenahun,$hasil_kosong);
 

        
        if($hasil_kasus == $hasil_kosong){
            $nama_diagnosa ='Belum Input Gejala';
            $kasus_exit ='';
            $kesamaan = 'tidak ada kesamaan';
        }
        elseif ($hasil_kasus == $hasil_tetelo ){
            $nama_diagnosa ='Tetelo';
            $kasus_exit ='case_tetelo';
            $kesamaan = $kesamaan_tetelo;
        }
        elseif($hasil_kasus == $hasil_marek){
            $nama_diagnosa ='Marek';
            $kasus_exit ='case_marek';
            $kesamaan = $kesamaan_marek;

        }
        elseif($hasil_kasus == $hasil_tipusayam){
            $nama_diagnosa ='Tipus ayam';
            $kasus_exit ='case_tipusayam';
            $kesamaan = $kesamaan_tipusayam;
        }
        elseif($hasil_kasus == $hasil_kepalabengkak){
            $nama_diagnosa ='Kepala Bengkak';
            $kasus_exit ='case_kepalabengkak';
            $kesamaan = $kesamaan_kepalabengkak;
        }
        elseif($hasil_kasus == $hasil_gumboro){
            $nama_diagnosa ='Gumboro';
            $kasus_exit ='case_gumboro';
            $kesamaan = $kesamaan_gumboro;
        }
        elseif($hasil_kasus == $hasil_fluburung){
            $nama_diagnosa ='Flu Burung';
            $kasus_exit ='case_fluburung';
            $kesamaan = $kesamaan_fluburung;
        }
        elseif($hasil_kasus == $hasil_berakkapur){
            $nama_diagnosa ='Berak Kapur';
            $kasus_exit ='case_berakkapur';
            $kesamaan = $kesamaan_berakkapur;
        }
        elseif($hasil_kasus == $hasil_batukdarah){
            $nama_diagnosa ='Batuk Darah';
            $kasus_exit ='case_batukdarah';
            $kesamaan = $kesamaan_batukdarah;
        }
        elseif($hasil_kasus == $hasil_batukayammenahun){
            $nama_diagnosa ='Batuk Ayam Menahaun';
            $kasus_exit ='case_batukayammenahun';
            $kesamaan = $kesamaan_batukayammenahun;
        }
        else{
            $nama_diagnosa ='Tidak Diketahui';
            $kasus_exit ='Tidak Diketahui';
            $kesamaan = 'Tidak Diketahui';
        }
        
        $nama_diagnosa=$nama_diagnosa;
        $kasus_exit = $kasus_exit;
        $data_solusi = DB::table('solusi')->where('penyakit',$kasus_exit)->get();
        
        // detail setiap kasus
     $detail_tetelo = DB::table('case_tetelo')
    ->join('gejala_user', 'case_tetelo.kode_gejala', '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->where('gejala_user.status_user', $status_user)
    ->pluck('gejala_user.kode_gejala','gejala_user.nama_gejala');


    return view('admin.hasil-diagnosa',['listsolusi' => $data_solusi ,'detail_tetelo' => $detail_tetelo],compact(
                'kesamaan',
                'kesamaan_tetelo','kesamaan_marek','kesamaan_tipusayam',
                'kesamaan_kepalabengkak','kesamaan_gumboro','kesamaan_fluburung',
                'kesamaan_berakkapur','kesamaan_batukdarah','kesamaan_batukayammenahun',
                'hasil_tetelo','hasil_marek','hasil_tipusayam','hasil_kepalabengkak','hasil_gumboro',
                'hasil_fluburung','hasil_berakkapur','hasil_batukdarah','hasil_batukayammenahun', 'case_tetelo_total',
                'case_marek_total', 'case_tipusayam_total', 'case_kepalabengkak_total', 'case_gumboro_total', 'case_fluburung_total',
                'case_berakkapur_total', 'case_batukdarah_total', 'case_batukayammenahun_total','hasil_kasus','nama_diagnosa','detail_tetelo','keterangandb')); 

    
    }

       
    public function save_history (Request $data)
    {
     $status_user = session()->get('login_done');

     $user                       = new HistoryModel;
     $user->judul_history        = $data->input('judul_history');
     $user->hasil_diagnosa       = $data->input('hasil_diagnosa');
     $user->hasil_hitung         = $data->input('hasil_hitung');
     $user->gejala_sama          = $data->input('gejala_sama');
     $user->tanggal              = date("d-m-Y");
     $user->status               = $status_user;

     // $user->confirmation_code    = str_random(60);
     $user->save();

     DB::table('gejala_user')->where('status_user',$status_user)->delete();
     return redirect('diagnosa')->with('message','Berhasil Menyimpan Diagnosa');
    }
}
    
    
    


