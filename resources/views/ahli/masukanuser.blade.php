
@extends('pagecore.app')
@section('konten')
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                 
                <div class="card">  
                    <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;">
                    <h4 class="text-uppercase text-center">Report Sistem User</h4>    
                        <a href="https://ramajorgie.github.io/" style="text-decoration: none;"><button class="btn btn-primary">Biodata Peneliti</button></a>
                        <button class="btn btn-warning">Lihat Dataset</button> 
                        
                    </div>  
                        <div class="card-body">  
                            <form method="post" action="/validate_ahli"  enctype="multipart/form-data"> 
                            @csrf 
                            @if ($message = Session::get('message'))
                            <div class="alert alert-success" style="text-align: center;" >
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                                <div class="form-row">  
                                    <div class="col-md-6">  
                                        <label>Nama Lengkap</label>  
                                        <input type="text"  class="form-control" placeholder="Nama" name="nama" />  
                                    </div>  
                                    <div class="col-md-6">  
                                        <label>Pendidikan Terakhir</label>  
                                        <input type="text" placeholder="Pendidikan Akhir" class="form-control" name="pendidikan" required/>  
                                    </div>  
                                </div>  
                                <div class="form-row">  
                                    <div class="col-md-6">  
                                        <label>Tanggal Validasi</label>  
                                        <input type="text" class="form-control" value="<?php echo date("d-m-Y"); ?>" readonly name="tanggal" required/>  
                                    </div>  
                                    <div class="col-md-6">  
                                        <label>Revisi Untuk Gejala yang diberikan</label>  
                                        <input type="text" class="form-control" placeholder="Revisi Gejala"  name="revisi_gejala" required/> 
                                    </div>  
                                </div>  
                                <div class="form-row">  
                                    <div class="col-md-6">  
                                        <label>Revisi Untuk Tingkat Akurasi Diagnosa yang diberikan</label>  
                                        <input type="text" class="form-control" placeholder="Revisi Tingkat Akurasi" name="revisi_diagnosa" required/>  
                                    </div>  
                                    <div class="col-md-6">  
                                        <label>Revisi Untuk Solusi Penyakit yang diberikan</label>  
                                        <input type="text" class="form-control" placeholder="Revisi Penyakit" name="revisi_penyakit" required/>
                                    </div>  
                                </div>  
                                
                                <div class="form-row">  
                                    <div class="col-md-6">  
                                        <label>Laporakn Program Error</label>  
                                        <input type="text" placeholder="Program Error" class="form-control" name="laporan_error" required/>  
                                    </div>  
                                    <div class="col-md-6">  
                                        <label>Laporkan Program Tidak Sesuai</label>  
                                        <input type="text" placeholder="Program Tidak Sesuai" class="form-control" name="laporan_program_tidak_sesuai" required/>  
                                    </div>  
                                </div>  
 
                                <div style="margin-top:15px; text-align: center;" >   
                                    <button type="submit" class="btn btn-primary rounded-5">Kirim</button>  
                                </div>  
                            </form>  
                        </div>  
                    </div>  
                </div> 
                 </div>
                </div>
             </div>
            </div>
        </main>

        
    @Endsection