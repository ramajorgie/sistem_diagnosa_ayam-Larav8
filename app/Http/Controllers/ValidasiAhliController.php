<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ValidasiAhliController extends Controller
{
    
    function validate_upload(Request $request)
    {

        $nama_file = NULL;
        if ($request->hasFile('file_ttd')) {
           
            $file = $request->file('file_ttd');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move('save_bukti', $nama_file);
            // echo $nama_file;
        }

        $nama_file2 = NULL;
        if ($request->hasFile('file_foto')) {
            
            $file = $request->file('file_foto');
            $nama_file2 = time() . "_" . $file->getClientOriginalName();
            $file->move('save_bukti', $nama_file2);
          



        DB::table('validasi_ahli')->insert([
            
            'nama_ahli' => $request->nama,
            'pendidikan' => $request->pendidikan,
            'tanggal' => $request->tanggal,
            'revisi_gejala' => $request->revisi_gejala,
            'revisi_diagnosa' => $request->revisi_diagnosa,
            'revisi_penyakit' => $request->revisi_penyakit,
            'laporan_error' => $request->laporan_error,
            'laporan_program_tidak_sesuai' => $request->laporan_program_tidak_sesuai,
            'file_ttd' => $request->file_ttd,
            'file_foto' => $request->file_foto,
            
        ]);
        return redirect('masukan-ahli')->with('message','Validasi Berhasil Ditambah');
        }


}
}