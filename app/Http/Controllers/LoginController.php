<?php

namespace App\Http\Controllers;

use App\Mail\Akun_Mail;
use App\Models\registerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Illuminate\Events\queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;


class LoginController extends Controller
{

        public function auth(Request $req){
            $username = $req->username;
            $password   = $req->password;

            $auth_level_1 = DB::table('akun')->where('username',$username)->where('password',$password)->where('status','user')->Where('aktivasi','aktif')->count();
            $auth_level_2 = DB::table('akun')->where('username',$username)->where('password',$password)->where('status','admin')->Where('aktivasi','aktif')->count();
           
            if($auth_level_1 != 0)
            {
               session(['login_done'=>$username]);
               $username = $req->username;
               session(['status'=>'user']);
               return redirect('/dashboard')->with('success', 'Selamat Datang Kembali');
            }
            elseif($auth_level_2 != 0){
               
              session(['login_done'=>'admin']);
              
                session(['status'=>'admin']);
                return redirect('/dashboard')->with('success', 'Selamat Datang Kembali');
            }
            else
            {
                alert()->error('Login Gagal!!  Periksa Kembali Username dan Password Anda', 'Akses Ditolak');
                return redirect('/auth');
            }
          
        }

        public function logout(Request $request)
        {
            $request->session()->flush();
            return view ('index');
        }

        // public function register(Request $request)
        // {
            
        //     $status= 'user';
        //     DB::table('akun')->insert([
        //         'username' => $request->username,
        //         'fullname' => $request->fullname,
        //         'email' => $request->email,
        //         'password' => $request->password,
        //         'status' => $status,
        //         'aktivasi' => 'belum aktivasi',
    
        //     ]);
        //     $this->sendEmail($request->email);
        //     return redirect('/auth')->with('message','Akun Telah Dibuat, Silahkan Akun Dengan Email Anda'); 
        // }
        
       public function add_register (Request $data)
       {

     
        $usercek_username= DB::table('akun')->where('username',$data->username)->count();
        $usercek_email= DB::table('akun')->where('email',$data->email)->count();

        if($usercek_username  != 0){
        return redirect('/auth')->with('message','Usernama dan Email Telah Digunakan'); 
        }
        if($usercek_email  != 0){
            return redirect('/auth')->with('message','Usernama dan Email Telah Digunakan'); 
        }
        $status ='user';
        $aktivasi ='aktif';
        $user                       = new registerModel;
        $user->username             = $data->input('username');
        $user->fullname             = $data->input('fullname');
        $user->email                = $data->input('email');
        $user->password             = $data->input('password');
        $user->status               = $status;
        $user->aktivasi             = $aktivasi;
        $user->foto                 = 'profile.png';
        $user->save();
       
        $key = DB:: table('akun')->where('username',$data->username);
        Mail::to($data->email)->send(new Akun_Mail($user));
        alert()->error('Akun Anda Berhasil Dibuat', 'Sukses');
        return redirect('/auth'); 
   


    }

    public function akun_berhasil_aktif(){
        return view('mail.verif');
    }
}