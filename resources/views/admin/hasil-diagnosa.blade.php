@extends('pagecore.app')  
   <!-- partial -->
   @section('konten')
   <script src="{{URL::asset('assets/js/preloader.js')}}"></script>
   
   <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

            
                <div class="mdc-card" >
                <div class="card-header text-white" style="text-align: center; background-color: #291D5B;">   
                      <h3 style="color: white;"><b>Hasil Diagnosa: {{$hasil_kasus}} ({{$nama_diagnosa}})</b></h3>
                      
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalsimpan" data-whatever="@mdo">
                        Simpan Diagnosa
                      </button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Lihat Solusi
                      </button>
                  </div>  
                    <!-- <div style="text-align: center;">
                    <h3 style="color: red;">Hasil Diagnosa: {{$hasil_kasus}} ({{$nama_diagnosa}})</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Lihat Solusi
                    </button>
                    </div> -->
                </div> 
              </div>
              
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                  
                    <h6 class="card-title">Tetelo (Newcastle Disease)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_tetelo}} / {{$case_tetelo_total}} </b> </h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_tetelo}} / {{$case_tetelo_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" ><p>
                    Kemiripan {{$hasil_tetelo}}</p>
                    </button>
                    <input type="hidden" name="nama_case" value="case_tetelo" hidden >
                    <input type="hidden" name="kode_penyakit" value="P001" >
                    <input type="hidden" name="bobot_gejala" value="bobotP001" >
                    <input type="hidden" name="nama_penyakit" value="Tetelo" >

                    <div class="card-icon-wrapper">
                    
                    <button type="submit" class="btn btn-success">Detail</button>
                   
                    </div>
                  </div>

                  </form>
                </div>
                
              </div>
             
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Flu Burung (Avian Influenza)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_fluburung}} / {{$case_fluburung_total}}</b> </h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_fluburung}} / {{$case_fluburung_total}}</h6></b></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_fluburung}}</p>
                    <input type="hidden" name="nama_case" value="case_fluburung" >
                    <input type="hidden" name="kode_penyakit" value="P002" >
                    <input type="hidden" name="bobot_gejala" value="bobotP002" >
                    <input type="hidden" name="nama_penyakit" value="Flu Burung" >
                    </button>
                    <div class="card-icon-wrapper">
                    
                    <button type="submit" class="btn btn-danger">Detail</button>
                    
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Batuk Menahun (Inf Bronchitis)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_batukayammenahun}} / {{$case_batukayammenahun_total}}</b></h6> 
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_batukayammenahun}} / {{$case_batukayammenahun_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                     Kemiripan {{$hasil_batukayammenahun}}</p>
                    </button>
                    <input type="hidden" name="nama_case" value="case_batukayammenahun" >
                    <input type="hidden" name="kode_penyakit" value="P003" >
                    <input type="hidden" name="bobot_gejala" value="bobotP003" >
                    <input type="hidden" name="nama_penyakit" value="Batuk Ayam Menahun" >
                    <div class="card-icon-wrapper">
                    
                    <button type="submit" class="btn btn-primary">Detail</button>
                    
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Marek (Marek's disease)</h6> 
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_marek}} / {{$case_marek_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_marek}} / {{$case_marek_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_marek}}</p>
                    <input type="hidden" name="nama_case" value="case_marek" >
                    <input type="hidden" name="kode_penyakit" value="P004" >
                    <input type="hidden" name="bobot_gejala" value="bobotP004" >
                    <input type="hidden" name="nama_penyakit" value="Marek" >
                    </button>
                    <div class="card-icon-wrapper">
                   
                    <button type="submit" class="btn btn-info">Detail</button>
                    
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              

              
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
               
              </div>
           </div>

            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Tipus Ayam (Fowl Typhoid)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_tipusayam}} / {{$case_tipusayam_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_tipusayam}} / {{$case_tipusayam_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_tipusayam}}</p>
                    </button>
                    <div class="card-icon-wrapper">
                    <input type="hidden" name="nama_case" value="case_tipusayam" >
                    <input type="hidden" name="kode_penyakit" value="P005" >
                    <input type="hidden" name="bobot_gejala" value="bobotP005" >
                    <input type="hidden" name="nama_penyakit" value="Tipus Ayam" >
                    <button type="submit" class="btn btn-success">Detail</button>
                    
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Berak Kapur (pullorum disease)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;"> Kesamaan: {{$kesamaan_berakkapur}}/ {{$case_berakkapur_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_berakkapur}}/ {{$case_berakkapur_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                   Kemiripan {{$hasil_berakkapur}}
                    </button>
                    <div class="card-icon-wrapper">
                    <input type="hidden" name="nama_case" value="case_berakkapur" >
                    <input type="hidden" name="kode_penyakit" value="P006" >
                    <input type="hidden" name="bobot_gejala" value="bobotP006" >
                    <input type="hidden" name="nama_penyakit" value="Berak Kapur" >
                    <button type="submit" class="btn btn-danger">Detail</button>
                   
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Gumboro (infectious bursal)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_gumboro}}/ {{$case_gumboro_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_gumboro}} / {{$case_gumboro_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_gumboro}}
                    </button>
                    <div class="card-icon-wrapper">
                    <input type="hidden" name="nama_case" value="case_gumboro" >
                    <input type="hidden" name="kode_penyakit" value="P007" >
                    <input type="hidden" name="bobot_gejala" value="bobotP007" >
                    <input type="hidden" name="nama_penyakit" value="Gumboro" >
                    <button type="submit" class="btn btn-primary">Detail</button>
                    
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Kepala Bengkak (Rhinotracheitis)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_kepalabengkak}} / {{$case_kepalabengkak_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_kepalabengkak}} / {{$case_kepalabengkak_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_kepalabengkak}}
                    </button>
                    <div class="card-icon-wrapper">
                    <input type="hidden" name="nama_case" value="case_kepalabengkak" >
                    <input type="hidden" name="kode_penyakit" value="P008" >
                    <input type="hidden" name="bobot_gejala" value="bobotP008" >
                    <input type="hidden" name="nama_penyakit" value="Kepala Bengkak" >
                    <button type="submit" class="btn btn-info">Detail</button>
                    
                    </div>
                  </div>
                </form>
                </div>
              </div>

              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                <form action="/diagnosa_detail" method="post">
                @csrf
                  <div class="card-inner">
                    <h6 class="card-title">Batuk Darah (laryngotracheitis)</h6>
                    <h6 class="font-weight-light pb-2 mb-1 border-bottom"><b style="color: red;">Kesamaan: {{$kesamaan_batukdarah}} / {{$case_batukdarah_total}}</b></h6>
                    <!-- <p class="tx-12 text-muted"><h6>Kesamaan: {{$kesamaan_batukdarah}} / {{$case_batukdarah_total}}</h6></p> -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaltetelo"><p>
                    Kemiripan {{$hasil_batukdarah}}
                    </button>
                    <div class="card-icon-wrapper">
                    <input type="hidden" name="nama_case" value="case_batukdarah" >
                    <input type="hidden" name="kode_penyakit" value="P009" >
                    <input type="hidden" name="bobot_gejala" value="bobotP009" >
                    <input type="hidden" name="nama_penyakit" value="Batuk Darah" >
                    <button type="submit" class="btn btn-success">Detail</button>
                    
                    </div>
                  </div>
                </form>
                </div>
              </div>
                <!-- modalsimpandata -->
              <div class="modal fade" id="exampleModalsimpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Simpan Diagnosa Ke History</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="/save_diagnosa" >
                      @csrf
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Judul History:</label>
                          <input type="text" class="form-control" value="" name="judul_history" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Hasil Diagnosa:</label>
                          <input type="text" class="form-control" value="{{$nama_diagnosa}}" name="hasil_diagnosa" id="recipient-name" readonly>
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Rincian Hasil Hitung:</label>
                          <input type="text" class="form-control" value="{{$hasil_kasus}}" name="hasil_hitung" id="recipient-name" readonly>
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Total Gejala Sama</label>
                          <input type="text" class="form-control" value="{{$kesamaan}}" name="gejala_sama" id="recipient-name" readonly>
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Tanggal</label>
                          <input type="text" class="form-control" value="<?php echo date("d-m-Y"); ?> "  id="recipient-name" readonly>
                        </div>
                        <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>


                          <!-- MODAL SOLUSI -->
                          <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solusi Kasus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  @foreach($listsolusi as $solusi)
                  <h3>Rangkuman : </h3>
                  <p>{{$solusi->rangkuman}}</p>
                  <h3>Pencegahan :</h3>
                  <p>{{$solusi->pencegahan}}</p>
                  <h3>Solusi 1 :</h3>
                  <p>{{$solusi->solusi1}}</p>
                  <h3>Solusi 2 :</h3>
                  <p>{{$solusi->solusi2}}</p>
                  @endforeach
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
                  </div>
                </div>
              </div>
            </div>
                      <!-- Modal -->
              <div class="modal fade" id="exampleModaltetelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detai Kasus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Kode Gejala</th>
                        <th scope="col">Nama Gejala</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($detail_tetelo as $detail)
                      <tr>
                        <td>{{$detail}}</td>
                        <td>Masih Error</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Oke</button>
                  </div>
                </div>
              </div>
            </div>

                </div>
              </div>
 
            </div>
          </div>

          

          
        </main>
        <!-- partial:partials/_footer.html -->
        @endsection