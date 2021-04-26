<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;




class AkunController extends Controller
{
    public function akun_view ( Request $request){
       $status_aktivasi= $request->status_aktivasi;

       $akunBB = DB::table('akun')->where('aktivasi',$status_aktivasi)->get();

       if ($status_aktivasi == 'semua_akun'){
        $akunBB = DB::table('akun')->get();
       }
     
       return view('akun.akun',['listakun' => $akunBB],compact('status_aktivasi'));
       
    }


    public function update_akun (Request $request){


        $id = $request->id;
        $status = $request->status;

        if ($status == 'aktif'){
            DB::table('akun')->where('id',$id)
            ->update([
             'aktivasi' => 'tidak aktif',
             ///tidak aktif
        ]);
        }
        else{
            DB::table('akun')->where('id',$id)
            ->update([
             'aktivasi' => 'aktif',
             ]);
        }
        $status_aktivasi= $request->aktivasi;
        $akunBB = DB::table('akun')->where('aktivasi',$status_aktivasi)->get();
        if ($status_aktivasi == 'semua_akun'){
            $akunBB = DB::table('akun')->get();
           }
        return view('akun.akun',['listakun' => $akunBB],compact('status_aktivasi'));

         
        
    }

    public function profile (){

        $username  = session()->get('login_done');
        $cek_akun = DB::table('akun')->where('username', $username)->get();

        return view('akun.profile',['profile' => $cek_akun]);
    }

    public function profile_update(Request $request){
        $cek_email = DB::table('akun')->where('email',$request->email)->count();

        
        if($cek_email == 1){
            DB::table('akun')->where('username',$request -> username)
            ->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'password' => $request->password,
                'aktivasi' => 'aktif',
             ]);
             return redirect('/profile')->with('success', 'Akun Diupdate!, Email Tidak berubah')->with('danger', 'Email Sudah Digunakan/Tidak Berubah');            
        }

        else {
            DB::table('akun')->where('username',$request -> username)
            ->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'password' => $request->password,
                'email'    => $request->email,
                'aktivasi' => 'aktif',
             ]);
             return redirect('/profile')->with('success', 'Akun Diupdate! , Email Berubah');
        }

    }

    public function upload_foto(Request $request)
        {
            $username = session()->get('login_done');
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('asset_profile'), $imageName);
            DB::table('akun')->where('username',$username)->update([
            
                'foto' => $imageName,
                
            ]);

            return redirect()->back()->with('success', 'Foto Diupdate!');
        
        }
        
}
