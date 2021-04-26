@extends('pagecore.app') 
@if(session()->get('login_done') == 'user')
<script>window.location = "/not-found";</script>
@endif 
<style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

   @section('konten')
   <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
              </div>
              
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                     <!-- partial -->
                    <div class="page-wrapper mdc-toolbar-fixed-adjust">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block" style="text-align: center;">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                <div class="mdc-card" >
                
                    
               
                      <div class="container">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        Status Bobot : {{$setting}}
                        </button><br><br>
                        @if ($message = Session::get('message'))
                        <div class="alert alert-success" style="text-align: center;" >
                            <p>{{ $message }} </p>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-blue order-card">
                                    
                                <a href="/input-gejala" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Tambah Gejala</h6>
                                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>Gejala +</span></h2>
                                        <p class="m-b-0">Tambahkan Gejala Baru<span class="f-right"></span></p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-green order-card">
                                    <a href="/penyakit-edit" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Edit Penyakit</h6>
                                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>Total 9</span></h2>
                                        <p class="m-b-0">Penyakit Dideteksi<span class="f-right"></span></p>
                                    </div>
                                </a>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-yellow order-card">
                                <a href="/edit-gejala" style="text-decoration:none">
                                    <div class="card-block" style="color: white; text-decoration: none;">
                                        <h6 class="m-b-20">Edit Gejala</h6>
                                        <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>Perbaruhi</span></h2>
                                        <p class="m-b-0">Perbaruhi gejala<span class="f-right">yang ada</span></p>
                                    </div>
                                    </a>
                                </div>
                            </div> 
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-blue order-card">
                                <a href="/view-gejala" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">List Gejala Gejala</h6>
                                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>Gejal</span></h2>
                                        <p class="m-b-0">Lihat<span class="f-right"></span></p>
                                    </div>
                                    </a>
                                </div>
                            </div>           
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c- order-card">
                                <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCentersolusiedit">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Edit Solusi</h6>
                                        <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>Solusi</span></h2>
                                        <p class="m-b-0"><span class="f-right">Penyakit</span></p>
                                    </div>
                                </button>
                                    
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-pink order-card">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCentercase">
                             
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Data Training</h6>
                                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>Case</span></h2>
                                        <p class="m-b-0"> <span class="f-right">Case</span></p>
                                    </div>
                                   
                                    </button>

                                </div>
                            </div>

                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-black order-card">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenterakun">
                             
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">User Verifikasi</h6>
                                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>Akun</span></h2>
                                        <p class="m-b-0"> <span class="f-right">Pengguna</span></p>
                                    </div>
                                   
                                    </button>

                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div> 
              </div>
                </div>
              </div>
                <!-- Modal -->
                <form action="/status-gejala-update" method="post">
                @csrf
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Status Bobot Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="template-demo">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                     <select class="custom-select" id="inputGroupSelect01" name="status_bobot" >
                       <option value="bobot_khusus"><td>Bobot Khusus</td></option>
                        <option value="bobot_umum">Bobot Umum</option>
                     </select>

                      </div>
                      </div>
                      <div >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>

            </div>
          </div>
           <!-- Modal -->
           <form action="/view-case" method="post">
                        @csrf
                <div class="modal fade" id="exampleModalCentercase" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Case Base Kasus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                  <div class="mdc-text-field">
                                  <select class="custom-select" id="inputGroupSelect01" name="nama_case" >
                                    <option value="case_tetelo">1.Tetelo (P001)</option>
                                    <option value="case_fluburung">2.Flu Burung (P002)</option>
                                    <option value="case_batukayammenahun">3.Batuk Ayam Menahun (P003)</option>
                                    <option value="case_marek">4.Marek (P004)</option>
                                    <option value="case_tipusayam" ><td>5.Tipus Ayam (P005)</td></option>
                                    <option value="case_berakkapur"><td>6.Berak Kapur (P006)</td></option>
                                    <option value="case_gumboro">7.Gumboro (P007)</option>
                                    <option value="case_kepalabengkak"><td>8.Kepala Bengkak (P008)</td></option>
                                    <option value="case_batukdarah">9.Batuk Darah (P009)</option>
                                  </select>

                                  </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
                <!-- Modal -->
           <form action="/edit-solusi" method="post">
                        @csrf
                <div class="modal fade" id="exampleModalCentersolusiedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Case Solusi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                  <div class="mdc-text-field">
                                  <select class="custom-select" id="inputGroupSelect01" name="nama_penyakit">
                                        <option value="case_tipusayam"><td>Tipus Ayam</td></option>
                                        <option value="case_tetelo">Tetelo</option>
                                        <option value="case_marek">Marek</option>
                                        <option value="case_kepalabengkak"><td>Kepala Bengkak</td></option>
                                        <option value="case_gumboro">Gumboro</option>
                                        <option value="case_fluburung">Flu Burung</option>
                                        <option value="case_berakkapur"><td>Berak Kapur</td></option>
                                        <option value="case_batukdarah">Batuk Darah</option>
                                        <option value="case_batukayammenahun">Batuk Ayam Menahun</option>
                                    </select>`

                                  </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>


                <form action="/view-case" method="post">
                        @csrf
                <div class="modal fade" id="exampleModalCentercase" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Case Base Kasus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                  <div class="mdc-text-field">
                                  <select class="custom-select" id="inputGroupSelect01" name="nama_case" >
                                    <option value="case_tetelo">1.Tetelo (P001)</option>
                                    <option value="case_fluburung">2.Flu Burung (P002)</option>
                                    <option value="case_batukayammenahun">3.Batuk Ayam Menahun (P003)</option>
                                    <option value="case_marek">4.Marek (P004)</option>
                                    <option value="case_tipusayam" ><td>5.Tipus Ayam (P005)</td></option>
                                    <option value="case_berakkapur"><td>6.Berak Kapur (P006)</td></option>
                                    <option value="case_gumboro">7.Gumboro (P007)</option>
                                    <option value="case_kepalabengkak"><td>8.Kepala Bengkak (P008)</td></option>
                                    <option value="case_batukdarah">9.Batuk Darah (P009)</option>
                                  </select>

                                  </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>


                <!-- Modal akun -->
           <form action="/akun" method="post">
                        @csrf
                <div class="modal fade" id="exampleModalCenterakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Lihat AKUN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                  <div class="mdc-text-field">
                                  <select class="custom-select" id="inputGroupSelect01" name="status_aktivasi">
                                       <option value="semua_akun"><td>Semua User</td></option>
                                        <option value="aktif"><td>User Aktif</td></option>
                                        <option value="tidak aktif">User Tidak Aktif</option>
                                    </select>`

                                  </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
        </main>
        <!-- partial:partials/_footer.html -->
        @endsection