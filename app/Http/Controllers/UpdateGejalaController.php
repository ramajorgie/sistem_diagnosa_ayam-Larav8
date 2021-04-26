<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UpdateGejalaController extends Controller
{
    public function update_gejala(Request $request)
    {

            // dd($request->kode_gejala);
        DB::table('gejala_all')->where('kode_gejala',$request->kode_gejala)
       ->update([
        'kode_gejala' => $request->kode_gejala,
        'nama_gejala' => $request->nama_gejala,
        'bobot_gejala' => $request->bobot_gejala,
        ]);

        DB::table('case_tetelo')->where('kode_gejala',$request->kode_gejala)
        ->update([
         'kode_gejala' => $request->kode_gejala,
         // 'nama_gejala' => $request->nama_gejala,
         'bobot_gejala' => $request->bobot_gejala,
        //  'bobot_khusus' => $request->bobotP001,
         
         ]);
         DB::table('case_fluburung')->where('kode_gejala',$request->kode_gejala)
         ->update([
          'kode_gejala' => $request->kode_gejala,
          // 'nama_gejala' => $request->nama_gejala,
          'bobot_gejala' => $request->bobot_gejala,
        //   'bobot_khusus' => $request->bobotP002,
          ]);

          DB::table('case_batukayammenahun')->where('kode_gejala',$request->kode_gejala)
          ->update([
           'kode_gejala' => $request->kode_gejala,
           // 'nama_gejala' => $request->nama_gejala,
           'bobot_gejala' => $request->bobot_gejala,
        //    'bobot_khusus' => $request->bobotP003,
           ]);

           DB::table('case_marek')->where('kode_gejala',$request->kode_gejala)
            ->update([
            'kode_gejala' => $request->kode_gejala,
            // 'nama_gejala' => $request->nama_gejala,
            'bobot_gejala' => $request->bobot_gejala,
            // 'bobot_khusus' => $request->bobotP004,
            ]);

            DB::table('case_tipusayam')->where('kode_gejala',$request->kode_gejala)
            ->update([
             'kode_gejala' => $request->kode_gejala,
             // 'nama_gejala' => $request->nama_gejala,
             'bobot_gejala' => $request->bobot_gejala,
            //  'bobot_khusus' => $request->bobotP005,
             ]);

             DB::table('case_berakkapur')->where('kode_gejala',$request->kode_gejala)
            ->update([
             'kode_gejala' => $request->kode_gejala,
             // 'nama_gejala' => $request->nama_gejala,
             'bobot_gejala' => $request->bobot_gejala,
            //  'bobot_khusus' => $request->bobotP006,
             ]);

             DB::table('case_gumboro')->where('kode_gejala',$request->kode_gejala)
             ->update([
              'kode_gejala' => $request->kode_gejala,
              // 'nama_gejala' => $request->nama_gejala,
              'bobot_gejala' => $request->bobot_gejala,
            //   'boboy_khusus' => $request->bobotP007,
            
              ]);

              DB::table('case_kepalabengkak')->where('kode_gejala',$request->kode_gejala)
                ->update([
                'kode_gejala' => $request->kode_gejala,
                // 'nama_gejala' => $request->nama_gejala,
                'bobot_gejala' => $request->bobot_gejala,
                // 'bobot_khusus' => $request->bobotP008,
                ]);

                DB::table('case_batukdarah')->where('kode_gejala',$request->kode_gejala)
                ->update([
                'kode_gejala' => $request->kode_gejala,
                // 'nama_gejala' => $request->nama_gejala,
                'bobot_gejala' => $request->bobot_gejala,
                // 'bobot_khusus' => $request->bobotP009,
                ]);


    

       
        
     

        

         

         

        
            

             

             

        return redirect('edit-gejala');
    }

    public function edit_cangkupan(Request $request)
    {
        
        $ambil_data = DB::table('gejala_all')->where('kode_gejala', $request->kode_gejala)->get();
        return view('admin.edit-cangkupan',['kirimdata' => $ambil_data]);
    }
    public function update_cangkupan(Request $request)
    {
        
        $bantu = 0;
        $select1 = $request->bobotP001 + $bantu;
        $select2 = $request->bobotP002 + $bantu;
        $select3 = $request->bobotP003 + $bantu;
        $select4 = $request->bobotP004 + $bantu;
        $select5 = $request->bobotP005 + $bantu;
        $select6 = $request->bobotP006 + $bantu;
        $select7 = $request->bobotP007 + $bantu;
        $select8 = $request->bobotP008 + $bantu;
        $select9 = $request->bobotP009 + $bantu;
       
        if($select1 != 0){ $cangkupan1 = 'Tetelo'; }
        else{ $cangkupan1 = '';}
        if($select2 != 0){ $cangkupan2 = 'Flu Burung';}
        else{ $cangkupan2 = '';}
        if($select3 != 0){ $cangkupan3 = 'Batuk Ayam Menahun';}
        else{  $cangkupan3 = '';}
        if($select4 != 0){ $cangkupan4 = 'Marek'; }
        else{$cangkupan4 = '';}
        if($select5 != 0){ $cangkupan5 = 'Tipus Ayam ';}
        else{$cangkupan5 = '';}
        if($select6 != 0){ $cangkupan6 = 'Berak Kapur'; }
        else{$cangkupan6 = '';}
        if($select7 != 0){$cangkupan7 = 'Gumboro'; }
        else{ $cangkupan7 = '';}
        if($select8 != 0){$cangkupan8 = 'Kepala Bengkak'; }
        else{$cangkupan8 = ')';}
        if($select9 != 0){ $cangkupan9 = 'Batuk Darah'; }
        else{$cangkupan9 = '';}
        $all_select = $cangkupan1.'+'. $cangkupan2 .'+'. $cangkupan3 .'+'. $cangkupan4 .'+'. $cangkupan5 .'+'. $cangkupan6 .'+'. $cangkupan7 .'+'. $cangkupan8 .'+'.$cangkupan9;

            DB::table('case_tipusayam')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_tetelo')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_marek')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_kepalabengkak')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_gumboro')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_fluburung')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_berakkapur')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_batukdarah')->where('kode_gejala', '=', $request->kode_gejala)->delete();
            DB::table('case_batukayammenahun')->where('kode_gejala', '=', $request->kode_gejala)->delete();

            if($request->nilai_bersama !=null){
                $select1 = $request->bobot_gejala;
                $select2 = $request->bobot_gejala;
                $select3 = $request->bobot_gejala;
                $select4 = $request->bobot_gejala;
                $select5 = $request->bobot_gejala;
                $select6 = $request->bobot_gejala;
                $select7 = $request->bobot_gejala;
                $select8 = $request->bobot_gejala;
                $select9 = $request->bobot_gejala;
       
               } 
             

                      
            DB::table('gejala_all')->where('kode_gejala',$request->kode_gejala)
            ->update([
             'kode_gejala' => $request->kode_gejala,
             'nama_gejala' => $request->nama_gejala,
             'bobot_gejala' => $request->bobot_gejala,
             'bobotP001' => $select1,
             'bobotP002' => $select2,
             'bobotP003' => $select3,
             'bobotP004' => $select4,
             'bobotP005' => $select5,
             'bobotP006' => $select6,
             'bobotP007' => $select7,
             'bobotP008' => $select8,
             'bobotP009' => $select9,
             'cangkupan' => $all_select,
             ]);

             if($select1 != null){
                DB::table('case_tetelo')->insert([
                    'kode_gejala' => $request->kode_gejala,
                    'bobot_gejala' => $request->bobot_gejala,
                    'bobot_khusus' => $request->bobotP001,
                ]);
                }
        
                if($select2 != null){
                DB::table('case_fluburung')->insert([
                    'kode_gejala' => $request->kode_gejala,
                    'bobot_gejala' =>  $request->bobot_gejala,
                    'bobot_khusus' => $request->bobotP002,
                ]);
                }
                
                if($select3 != null){
                    DB::table('case_batukayammenahun')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' =>  $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP003,
                    ]);
                }
        
                if($select4 != null){
                    DB::table('case_marek')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' =>  $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP004,
                    ]);
                }
                
                if($select5 != null){
                    DB::table('case_tipusayam')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' => $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP005,
                    ]);
                }
        
                if($select6 !=null){
                    DB::table('case_berakkapur')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' => $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP006,
                    ]);
                }
                
                if($select7 != null){
                    DB::table('case_gumboro')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' =>  $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP007,
                    ]);
                }
        
                if($select8 != null){
                    DB::table('case_kepalabengkak')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' =>  $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP008,
                    ]);
                }
                
                if($select9 != null){
                    DB::table('case_batukdarah')->insert([
                        'kode_gejala' => $request->kode_gejala,
                        'bobot_gejala' => $request->bobot_gejala,
                        'bobot_khusus' => $request->bobotP009,
                    ]);
                }
        
        

        return redirect('edit-gejala');

       }
    
}
