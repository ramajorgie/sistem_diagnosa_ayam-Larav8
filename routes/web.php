<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CasekasusController;
use App\Http\Controllers\CoreCrud;
use App\Http\Controllers\DeleteGejalaController;
use App\Http\Controllers\Email_ConfirmControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\UpdateGejalaController;
use App\Http\Controllers\ValidasiAhliController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------re---------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
Route::get('/confirm_email',[Email_ConfirmControler::class,'email_confrim']);
Route::get('/', function () {return view('index');});
Route::get('/auth', function () {return view('login');});
Route::post('/go-auth', [LoginController::class, 'auth']);
Route::get('/not-found', function () {return view('notification/error404');});
Route::post('/adduser', [LoginController::class, 'add_register']);
Route::get('/aktivasi', function () {return view('confirm.homepage');});
Route::get('/acc_akun',[LoginController::class, 'akun_berhasil_aktif']);



// ONLY FORNTEND NOT USE CONTROLLER
Route::group(['middleware' => 'CekLogin'],function(){
   
    Route::get('/dashboard', function () { return view('admin.dashboard');});
    // Route::get('/diagnosa_detail', function () {return view('diagnosa.detail_diagnosa');});
    // Route::get('/admin-menu', function () {return view('admin.menu');});
    Route::get('input-gejala', function () {return view('admin.form-input-gejala');});
    Route::get('/menu-case', function () {return view('case_kasus.menu-case');});
    Route::get('/solusi', function () { return view('admin.solusi-form');});
    Route::get('/masukan-ahli', function () {return view('ahli.masukan');});
    Route::get('/masukan-user', function () {return view('ahli.masukanuser');});
    Route::get('/data_validasi', function () {return view('ahli.data_validasi');});
 
    // Route::get('/profile', function () {return view('akun.profile');});
    // Route::get('/detail_diagnosa', function () {return view('diagnosa.detail_diagnosa');});

});



// USE CONTROLLER

Route::group(['middleware' => 'CekLogin'],function(){
    
    Route::get('/diagnosa', [CoreCrud::class, 'viewdata']);
    Route::get('/admin-menu', [CoreCrud::class, 'admin_menu']);
    Route::post('/status-gejala-update', [CoreCrud::class, 'update_status_bobot']);
    Route::get('/history', [CoreCrud::class, 'viewdata_history']);
    Route::post('/diagnosa_detail', [CoreCrud::class, 'detail_diagnosa']);
    Route::get('/add_gejala_user/{kode_gejala}', [CoreCrud::class, 'addgejala'] );
    Route::get('/delete_gejala_user/{id}', [CoreCrud::class, 'deletegejalauser'] );
    Route::get('/hasil', [PenyakitController::class, 'knn_diagnosa']);
    Route::post('/save_diagnosa', [PenyakitController::class, 'save_history']);
    Route::get('/edit-gejala', [CoreCrud::class, 'edit_gejala']);
    Route::get('/list-penyakit', [CoreCrud::class, 'view_penyakit'])->middleware('CekLogin');
    Route::get('/penyakit-edit', [CoreCrud::class, 'edit_penyakit']);
    Route::get('/view-gejala', [CoreCrud::class, 'view_gejala']);
    Route::post('/gejala-baru', [CoreCrud::class, 'tambah_gejala_baru']);
    Route::post('/view-case',[CasekasusController::class, 'view_case'] );
    Route::get('/delete-all', [CoreCrud::class, 'delete_all_gejala_user']);
    Route::post('/edit-solusi', [CoreCrud::class, 'cek_form_solusui_penyakit']);
    Route::post('/insert-solusi', [CoreCrud::class, 'insert_solusi']);
    Route::get('/exit', [LoginController::class, 'logout']);
    Route::post('/update_data_penyakit', [CoreCrud::class, 'update_penyakit']);
    Route::post('/update_data_gejala', [UpdateGejalaController::class, 'update_gejala']);
    Route::get('/delete_gejala_all/{kode_gejala}', [DeleteGejalaController::class, 'delete_gejala_all'] );
    Route::get('/edit_cangkupan/{kode_gejala}', [UpdateGejalaController::class, 'edit_cangkupan']);
    Route::post('/delete_case_gejala', [DeleteGejalaController::class, 'delete_gejala_case']);
    Route::post('/update_cangkupan', [UpdateGejalaController::class, 'update_cangkupan']);
    Route::post('/validate_ahli', [ValidasiAhliController::class, 'validate_upload']);
    // Route::get('/rekap', function () {return view('history.rekapkasus');});
    Route::get('/rekap', [CoreCrud::class, 'rekap_view']);
    Route::post('/akun',[AkunController::class,'akun_view']);
    Route::post('/update_status_akun',[AkunController::class,'update_akun']);
    Route::get('/profile',[AkunController::class,'profile']);
    Route::post('/update_profile',[AkunController::class,'profile_update']);
    Route::post('/profile_foto_upload',[AkunController::class,'upload_foto']);

});

