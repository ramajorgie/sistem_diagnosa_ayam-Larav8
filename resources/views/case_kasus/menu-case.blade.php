
    @extends('pagecore.app') 
 
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
   <!-- partial -->
   @section('konten')
   <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card" >
                      <div class="container">
                        <div class="row">
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
                                <div class="card bg-c-green order-card">
                                    <a href="/list-penyakit" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">List Penyakit</h6>
                                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>Total 9</span></h2>
                                        <p class="m-b-0">Penyakit Dideteksi<span class="f-right"></span></p>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-yellow order-card">
                                    <a href="/history" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Riwayat</h6>
                                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>History</span></h2>
                                        <p class="m-b-0">Lihat<span class="f-right"></span></p>
                                    </div>
                                </a>
                                </div>
                            </div>
                            

                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-pink order-card">
                                    <a href="https://drive.google.com/file/d/1ogUxvX7RHI9dCj0L3GBnrqrU6slxRsB4/view?usp=sharing" style="text-decoration:none">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Data</h6>
                                        <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>Validasi</span></h2>
                                        <p class="m-b-0">Data Ahli<span class="f-right">Lihat</span></p>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c- order-card">
                                <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCentersolusiedit">
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Dataset</h6>
                                        <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>Solusi</span></h2>
                                        <p class="m-b-0"><span class="f-right">Penyakit</span></p>
                                    </div>
                                </button>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <div class="card bg-c-pink order-card">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                             
                                    <div class="card-block" style="color: white;">
                                        <h6 class="m-b-20">Data Training</h6>
                                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>Case</span></h2>
                                        <p class="m-b-0"> <span class="f-right">Case</span></p>
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

              <!-- Modal -->
              <form action="/view-case" method="post">
                        @csrf
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                      <option value="case_tipusayam"><td>Tipus Ayam</td></option>
                                      <option value="case_tetelo">Tetelo</option>
                                      <option value="case_marek">Marek</option>
                                      <option value="case_kepalabengkak"><td>Kepala Bengkak</td></option>
                                      <option value="case_gumboro">Gumboro</option>
                                      <option value="case_fluburung">Flu Burung</option>
                                      <option value="case_berakkapur"><td>Berak Kapur</td></option>
                                      <option value="case_batukdarah">Batuk Darah</option>
                                      <option value="case_batukayammenahun">Batuk Ayam Menahun</option>
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

            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        @endsection