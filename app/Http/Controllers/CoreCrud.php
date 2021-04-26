<?php

namespace App\Http\Controllers;

use App\Models\firebase;
use App\Models\gejalaAllModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CoreCrud extends Controller
{
    public function viewdata ()
    {   
        $status_user = session()->get('login_done');
        $daftargejala = DB::table('gejala_all')->orderByRaw('RAND()')->get();
        $op = DB::table('setting_gejala')->where('status','bobot umum')->count();
        if($op ==0){
            $setting = 'Bobot Khusus';
        }
        else{
            $setting = 'Bobot Umum';

        }

        
        $daftargejalauser = DB::table('gejala_user')->where('status_user', $status_user)->get();
        return view('diagnosa.diagnosa',['listgejala' => $daftargejala,'gejalauser' => $daftargejalauser,],compact('setting'));


    }

    public function admin_menu ()
    {   
        $op = DB::table('setting_gejala')->where('status','bobot umum')->count();
        if($op ==0){
            $setting = 'Khusus';
        }
        else{
            $setting = 'Umum';

        }
        return view('admin.menu',compact('setting'));


    }

    public function update_status_bobot(Request $request)
    {
        
        DB::table('setting_gejala')->where('id','1')
            ->update([
             'status' => $request->status_bobot,
        ]);

        $op = DB::table('setting_gejala')->where('status','bobot_umum')->count();
        if($op ==0){
            $setting = 'Khusus';
        }
        else{
            $setting = 'Umum';

        }
        return view('admin.menu',compact('setting'));
    }
    
    public function viewdata_history ()
    {   
        $status_user = session()->get('login_done');
        // $daftargejala =firebase::all()->random();
        $solusi = DB::table('solusi')->get();
        $user_history = DB::table('history')->where('status', $status_user)->get();
        return view('history.history',['history' => $user_history,'daftarsolusi' => $solusi]);

    }

    public function edit_gejala ()
    {
        $daftargejala = DB::table('gejala_all')->get();
        $statusbobot = DB::table('setting_gejala')->where('status','bobot umum')->count();
        if($statusbobot !=1){
            $status = 'Bobot Khusus';
        }
        else{
            $status = 'Bobot Umum';
        }
        return view('admin.edit-gejala',['listgejala' => $daftargejala],compact('status'));

    }


    public function view_penyakit ()
    {
        $daftarpenyakit = DB::table('penyakit_ayam')->get();
        return view('admin.list-penyakit',['listpenyakit' => $daftarpenyakit]);

    }


    public function edit_penyakit ()
    {
        $daftarpenyakit1 = DB::table('penyakit_ayam')->get();
        return view('admin.edit-penyakit',['listpenyakit' => $daftarpenyakit1]);


    }


    public function view_gejala ()
    {
        $daftargejala = DB::table('gejala_all')->get();
        return view('admin.list-gejala',['gejalaall' => $daftargejala]);

    }


    public function addgejala(Request $request)
    {
    
    $db_akses =session()->get('login_done');
    
    $user = DB::table('gejala_all')->where('kode_gejala',$request->kode_gejala)->get(); 
    $cek = DB::table('gejala_user')->where('kode_gejala',$request->kode_gejala)->where('status_user',$db_akses)->count(); 
    // dd($cek);
    
    if($cek >= 1){
        return redirect('diagnosa')->with('message','Gejala Sudah Ada'); 
    }
    else{
    foreach($user as $gejala_baru){
        $data= array(
            'id'                        =>  rand(),
            'kode_gejala'               =>  $gejala_baru->kode_gejala,
            'nama_gejala'               =>  $gejala_baru->nama_gejala,
            'bobot_gejala'              =>  $gejala_baru->bobot_gejala,
            'bobotP001'                 =>  $gejala_baru->bobotP001,
            'bobotP002'                 =>  $gejala_baru->bobotP002,
            'bobotP003'                 =>  $gejala_baru->bobotP003,
            'bobotP004'                 =>  $gejala_baru->bobotP004,
            'bobotP005'                 =>  $gejala_baru->bobotP005,
            'bobotP006'                 =>  $gejala_baru->bobotP006,
            'bobotP007'                 =>  $gejala_baru->bobotP007,
            'bobotP008'                 =>  $gejala_baru->bobotP008,
            'bobotP009'                 =>  $gejala_baru->bobotP009,
            'status_user'               =>  $db_akses,
        );
            firebase::insert($data); 
         
        }
        return redirect('diagnosa')->with('message','Gejala Ditambah');

    }
    }
             

    public function deletegejalauser(Request $request){

        firebase::where('id', '=', $request->id)->first()->delete();
        return redirect('diagnosa');
    }


    public function tambah_gejala_baru(Request $request)
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

         $cekDB =DB::table('gejala_all')->where('kode_gejala',$request->kode_gejala)->count();
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
        
         if(!$cekDB){

         DB::table('gejala_all')->insert([
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
			'bobot_gejala' => $select1,
            'bobot_khusus' =>  $request->bobotP001,
        ]);
        }

        if($select2 != null){
        DB::table('case_fluburung')->insert([
			'kode_gejala' => $request->kode_gejala,
			'bobot_gejala' =>  $select2,
            'bobot_khusus' =>  $request->bobotP002,
        ]);
        }
        
        if($select3 != null){
            DB::table('case_batukayammenahun')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select3,
                'bobot_khusus' =>  $request->bobotP003,
            ]);
        }

        if($select4 != null){
            DB::table('case_marek')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select4,
                'bobot_khusus' =>  $request->bobotP004,
            ]);
        }
        
        if($select5 != null){
            DB::table('case_tipusayam')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select5,
                'bobot_khusus' =>  $request->bobotP005,
            ]);
        }

        if($select6 !=null){
            DB::table('case_berakkapur')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select6,
                'bobot_khusus' =>  $request->bobotP006,
            ]);
        }
        
        if($select7 != null){
            DB::table('case_gumboro')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select7,
                'bobot_khusus' =>  $request->bobotP007,

            ]);
        }

        if($select8 != null){
            DB::table('case_kepalabengkak')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select8,
                'bobot_khusus' =>  $request->bobotP008,
            ]);
        }
        
        if($select9 != null){
            DB::table('case_batukdarah')->insert([
                'kode_gejala' => $request->kode_gejala,
                'bobot_gejala' =>  $select9,
                'bobot_khusus' =>  $request->bobotP009,
            ]);
        }


        return redirect('input-gejala');
    }
    else{
        return view('notification.error404');
    }
    

    }
    public function view_case(Request $request){
        $select = $request->nama_penyakit;
        
    }



    public function insert_solusi(Request $request)
    {
        // dd($request->kode_solusi);
        $nama_penyakit = $request->nama_penyakit;
        
        DB::table('solusi')->where('kode_solusi',$request->kode_solusi)
       ->update([
        'nama_penyakit' => $request->nama_penyakit,
        'solusi1' => $request->solusi1,
        'solusi2' => $request->solusi2,
        'rangkuman' => $request->rangkuman,
        'pencegahan' => $request->pencegahan,
        ]);



       
        return redirect('admin-menu')->with('message','Solusi Telah Diedit pada penyakit',$nama_penyakit);
    }


    public function cek_form_solusui_penyakit(Request $request)
    {
       
        $solusi = DB::table('solusi')->where('penyakit',$request->nama_penyakit)->get();
        return view('admin.solusi',['listsolusi' => $solusi]);


    }
    
    
    public function delete_all_gejala_user()
    {   
        $status_user = session()->get('login_done');
        DB::table('gejala_user')->where('status_user',$status_user)->delete();
        // firebase::truncate();
        return redirect('diagnosa');
    }


    public function update_penyakit(Request $request)
    {
        
        DB::table('penyakit_ayam')->where('kode_penyakit',$request->kode_penyakit)
       ->update([
        'kode_penyakit' => $request->kode_penyakit,
        'nama_penyakit1' => $request->nama_penyakit1,
        'nama_penyakit2' => $request->nama_penyakit2,
        ]);

        return redirect('penyakit-edit');
    }

    public function delete_gejala_all(Request $request){

       gejalaAllModel::where('kode_gejala', '=', $request->kode_gejala)->first()->delete();
        return redirect('edit-gejala');
    }


    public function detail_diagnosa(Request $request)
    {
    $cek = DB::table('cek_case')->where('nama_case',$request->nama_case)->count();
    if($cek !=1 ){
        return view('notification.error404');

    }
    
    $status_user = session()->get('login_done');
    $case = $request->nama_case.'.kode_gejala';
    $nama_penyakit = $request->nama_penyakit;


    $gejalacase = DB::table($request->nama_case)
    ->join('gejala_user', $case, '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->get();

    

    $gejalaALL= DB::table($request->nama_case)
    ->join('gejala_all', $case, '=', 'gejala_all.kode_gejala')
    ->get();

    $totalbobotgejala = DB::table($request->nama_case)->sum('bobot_gejala');
    $solusi = DB::table('solusi')->get();
    

    $kodeKNN = DB::table($request->nama_case)
    ->join('gejala_user', $case, '=', 'gejala_user.kode_gejala')
    ->where('gejala_user.status_user', $status_user)
    ->where('gejala_user.status_user', $status_user)
    ->get();

    $totalknn = count($kodeKNN);

    $dbstatus=DB::table('setting_gejala')->where('status','bobot umum')->count();

        if($dbstatus !=0){
            $status_bobot ='bobot_gejala';   
        }
        else{
            $status_bobot = $request->kode_penyakit;
        }



    $kondisidb =DB::table('setting_gejala')->where('status','bobot umum')->count();
        if($kondisidb !=0){
            $bobotP ='bobot_gejala';   
        }
        else{
            $bobotP = $request->bobot_gejala;
        }
     
    $hasilperhitungan=0;
    foreach($kodeKNN as $totalkan){
        $data= array(
  
            'bobot'              =>  $totalkan->$bobotP,
        );

        $temp = $data['bobot'];

        $hasilperhitungan = $hasilperhitungan + $temp;  
             
    }
    $knn = $hasilperhitungan;


    $round = $knn / $totalbobotgejala;

    $totalbobotgejala = round($totalbobotgejala,3);
    $hasil= round($round,3);

    $hasilknn = $knn / $totalbobotgejala;


    return view('diagnosa.detail_diagnosa',['gejalaall' => $gejalaALL,'gejalasama' => $kodeKNN,
                'gejalacase' => $gejalacase,'listsolusi' => $solusi], 
                compact('hasil','nama_penyakit','status_bobot','knn','totalbobotgejala','hasilknn'));
    
    }
    


    public function rekap_view()
    {
        $tetelo = DB::table('history')->where('hasil_diagnosa','Tetelo')->count();
        $fluburung = DB::table('history')->where('hasil_diagnosa','Flu Burung')->count();
        $batukayammenahun = DB::table('history')->where('hasil_diagnosa','Batuk Ayam Menahun')->count();
        $marek = DB::table('history')->where('hasil_diagnosa','Marek')->count();
        $tipusayam = DB::table('history')->where('hasil_diagnosa','Tipus Ayam')->count();
        $berakkapur = DB::table('history')->where('hasil_diagnosa','Berak Kapur')->count();
        $gumboro = DB::table('history')->where('hasil_diagnosa','Gumboro')->count();
        $kepalabengkak = DB::table('history')->where('hasil_diagnosa','Kepala Bengkak')->count();
        $batukdarah = DB::table('history')->where('hasil_diagnosa','Batuk Darah')->count();

       

        return view('history.rekapkasus',compact('tetelo','fluburung','batukayammenahun','marek','tipusayam','berakkapur','gumboro','kepalabengkak','batukdarah'));

    }




    

}