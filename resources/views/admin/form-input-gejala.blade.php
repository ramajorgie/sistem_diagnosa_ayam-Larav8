@extends('pagecore.app')
@section('konten')
@if(session()->get('login_done') != 'admin')
<script>window.location = "/not-found";</script>
@endif
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <form action="/gejala-baru" method="post">
              @csrf
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                <div class="mdc-card p-0 "> 
                  
                  <div class="card-header text-white" style="text-align: center; background-color: #291D5B;">   
                      <h3 style="color: white;"><b>Form Input Gejala</b></h3>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                        Catatan
                      </button>
                  </div>  
              <form class="form-horizontal" role="form">
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label for="password1" class="col-sm-2 control-label">Kode Gejala:</label>
                  <div class="col-sm-5 s">
                    <input type="text" class="form-control inputstl" id="password1" placeholder="Kode Gejala" name="kode_gejala"> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="email1" class="col-sm-2 control-label">Nama Gejala:</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control inputstl" id="email1" placeholder="Nama Gejala" name="nama_gejala">
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="email1" class="col-sm-2 control-label">Bobot Umum:</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control inputstl" id="email1" placeholder="Bobot Gejala" name="bobot_gejala">
                    <input id="chkboot" class="styled" type="checkbox"  name="nilai_bersama" value="1">
                    <label for="chkcss">
                                Gunakan untuk semua
                    </label>
                  </div>
                </div>
          

                

                <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr  >
                          <th style="text-align: left; "><b><u> P001</b></th>
                          <th style="text-align: left; "><b><u> P002</b></th>
                          <th style="text-align: left; "><b><u> P003</b></th>
                          <th style="text-align: left; "><b><u> P004</b></th>
                          <th style="text-align: left; "><b><u> P005</b></th>
                          <th style="text-align: left; "><b><u> P006</b></th>
                          <th style="text-align: left; "><b><u> P007</b></th>
                          <th style="text-align: left; "><b><u> P008</b></th>
                          <th style="text-align: left; "><b><u> P009</b></th>
                        </tr>
                      </thead>
                      

                      <tbody>
                        <tr>
                        
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP001"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP002"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP003"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP004"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP005"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP006"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP007"></td>
                        <td style="width: 80px;" ><input type="text" style="width: 80px;" name="bobotP008"></td>
                        <td style="width: 70px;" ><input type="text" style="width: 70px;" name="bobotP009"></td>
                        

                        </tr>
                        
                      </tbody>
                     
                      
                    </table>
                 </div>
                </div>
                

                <div class="form-group">
                <!-- <label for="Email1msg" class="col-sm-2 control-label">Bobot Khusus :</label>
                  <div class="col-sm-5">
                  <div class="checkbox checkbox-success">
                        <input id="chkcss" class="styled" type="checkbox"  name="penyakit2" value="case_tetelo" >
                            <label for="chkcss">
                                Tetelo (Newcastle Disease) (P001) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-success">
                        <input id="chkcss" class="styled" type="checkbox"  name="penyakit6" value="case_fluburung">
                            <label for="chkcss">
                                Flu Burung (Avian Influenza) (P002) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-success">
                        <input id="chkjquery" class="styled" type="checkbox"  name="penyakit9" value="case_batukayammenahun">
                            <label for="chkjquery">
                                Batuk Ayam Menahun (Bronchitis) (P003) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-success">
                        <input id="chkcss" class="styled" type="checkbox" name="penyakit3" value="case_marek" >
                            <label for="chkcss">
                              Marek (Marek's disease) (P004) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>

                  <div class="checkbox checkbox-success">
                        <input id="chkphp" class="styled" type="checkbox" name="penyakit1" value="case_tipusayam" >
                            <label for="chkphp">
                               Tipus Ayam (Fowl Typhoid) (P005) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-warning">
                        <input id="chkhtml" class="styled" type="checkbox"  name="penyakit7" value="case_berakkapur">
                            <label for="chkhtml">
                                Berak Kapur (pullorum disease) (P006) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-success">
                        <input id="chkcss" class="styled" type="checkbox"  name="penyakit5" value="case_gumboro" >
                            <label for="chkcss">
                                Gumboro (bursal disease) (P007) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  
                  <div class="checkbox checkbox-success">
                        <input id="chkcss" class="styled" type="checkbox"  name="penyakit4" value="case_kepalabengkak">
                            <label for="chkcss">
                                Kepala Bengkak (rhinotracheitis) (P008) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
                  <div class="checkbox checkbox-danger">
                        <input id="chkboot" class="styled" type="checkbox"  name="penyakit8" value="case_batukdarah">
                            <label for="chkboot">
                                Batuk Darah (laryngotracheitis) (P009) <input type="number" style="width: 40px; border: 5;">
                            </label>
                  </div>
          -->
                  </div>
                </div>
                
                    <button type="submit" class="btn btn-lg btn-block btn-danger">Tambah Gejala</button>

              </form>

              <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Catatan Pengisian Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{URL::asset('select/listketerangan.png')}}" alt="">
                        <p style="color: red;">Pengisian Bobot mengunakan satuan (0.0 - 1) dengan mengunakan titik(.)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                    </div>
                    </div>
                </div>
                </div>
              

              
    

    @Endsection