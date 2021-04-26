@extends('pagecore.app')
@section('konten')
     <!-- partial -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
}
</style>
<!------ Include the above in your HEAD tag ---------->

     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">   
                <div class="card ">  
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;" >   
                          <h3 style="color: white;"><b> Detail Diagnosa  {{$nama_penyakit}}</b></h3>
                      </div> 
                   
                    <div class="container mb-5 mt-5">
                        <div class="pricing card-deck flex-column flex-md-row mb-3">
                        <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Data Gejala Kasus</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">1<span class="price"></span><span class="h6 text-muted ml-2"> Total Bobot :  {{$totalbobotgejala}}</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Up to 5 users</li>
                                        <li>Basic support on Github</li>
                                        <li>Monthly updates</li>
                                        <li>Free cancelation</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsemuagejala">
                                    Lihat
                                    </button>
                                </div>
                            </div>
                            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Gejala Sama</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">2<span class="price"></span><span class="h6 text-muted ml-2">Total Bobot :  <br>{{$knn}}</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Up to 5 users</li>
                                        <li>Basic support on Github</li>
                                        <li>Monthly updates</li>
                                        <li>Free cancelation</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalgejalasama">
                                    Lihat
                                    </button>
                                </div>
                            </div>
                            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Hasil Perhitungan</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">3<span class="price"></span><span class="h6 text-muted ml-2">Nilai Diagnosa: {{$hasil}}</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Up to 5 users</li>
                                        <li>Basic support on Github</li>
                                        <li>Monthly updates</li>
                                        <li>Free cancelation</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltotaldiagnosa">
                                    Lihat
                                    </button>
                                </div>
                            </div>
                            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Solusi Diberikan</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">4<span class="price"></span><span class="h6 text-muted ml-2">Solusi Penyakit: {{$nama_penyakit}}</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Up to 5 users</li>
                                        <li>Basic support on Github</li>
                                        <li>Monthly updates</li>
                                        <li>Free cancelation</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsolusi" data-whatever="@mdo">
                                        Lihat
                                    </button>
                                </div>
                            </div>

                
                 </div>
                </div>
             </div>
            </div>
        </main>
     </div>

                            <!-- Modal semua gejala -->
                        <div class="modal fade" id="exampleModalsemuagejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Gejala {{$nama_penyakit}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="table-responsive">
                                        <table class="table ">
                                        <thead>
                                            <tr  >
                                            <th style="text-align: center; "><b><u>KODE </u></b></th>
                                            <th style="text-align: center; "><b><u>NAMA </u></b></th>
                                            <th style="text-align: center; "><b><u>BOBOT </u></b></th>
                                           
                                            </tr>
                                        </thead>
                                        <?php $no = 0;?>

                                        @foreach($gejalaall as $semuagejala)
                                        
                                        <?php $no++ ;?>

                                        <tbody>
                                            <tr>
                                            <td style="text-align: center;">{{ $semuagejala -> kode_gejala }}</td>
                                            <td style="text-align: center;">{{ $semuagejala -> nama_gejala }}</td>
                                            <!-- <td style="text-align: center;">{{ $semuagejala -> bobot_gejala }}</td> -->
                                            @if( $status_bobot == 'P001')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP001 }}</td>
                                            @elseif( $status_bobot == 'P002')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP002 }}</td>
                                            @elseif( $status_bobot == 'P003')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP003 }}</td>
                                            @elseif( $status_bobot == 'P004')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP004 }}</td>
                                            @elseif( $status_bobot == 'P005')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP005 }}</td>
                                            @elseif( $status_bobot == 'P006')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP006 }}</td>
                                            @elseif( $status_bobot == 'P007')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP007 }}</td>
                                            @elseif( $status_bobot == 'P008')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP008 }}</td>
                                            @elseif( $status_bobot == 'P009')
                                            <td style="text-align: center;">{{ $semuagejala -> bobotP009 }}</td>
                                            @else
                                            <td style="text-align: center;">{{ $semuagejala -> bobot_gejala }}</td>
                                            @endif
                                           
                                            
                                            </tr>
                                         @endforeach                                      
                                        </tbody>
                                            <div style="text-align: center;">
                                                <h5> Total Perhitungan : {{$totalbobotgejala}}</h5>
                                            </div>
                                        </table>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>

                           <!-- Modal gejala sama-->
                        <div class="modal fade" id="exampleModalgejalasama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Gejala Sama {{$nama_penyakit}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="table-responsive">
                                        <table class="table ">
                                        <thead>
                                            <tr  >
                                            <th style="text-align: center; "><b><u>KODE </u></b></th>
                                            <th style="text-align: center; "><b><u>NAMA </u></b></th>
                                            <th style="text-align: center; "><b><u>BOBOT </u></b></th>
                                            
                                            </tr>
                                        </thead>
                                        <?php $no = 0;?>

                                        @foreach($gejalacase as $semuagejalacase)
                                        
                                        <?php $no++ ;?>

                                        <tbody>
                                            <tr>
                                            <td style="text-align: center;">{{ $semuagejalacase -> kode_gejala }}</td>
                                            <td style="text-align: center;">{{ $semuagejalacase -> nama_gejala }}</td>
                                            
                                            @if( $status_bobot == 'P001')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP001 }}</td>
                                            @elseif( $status_bobot == 'P002')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP002 }}</td>
                                            @elseif( $status_bobot == 'P003')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP003 }}</td>
                                            @elseif( $status_bobot == 'P004')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP004 }}</td>
                                            @elseif( $status_bobot == 'P005')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP005 }}</td>
                                            @elseif( $status_bobot == 'P006')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP006 }}</td>
                                            @elseif( $status_bobot == 'P007')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP007 }}</td>
                                            @elseif( $status_bobot == 'P008')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP008 }}</td>
                                            @elseif( $status_bobot == 'P009')
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobotP009 }}</td>
                                            @else
                                            <td style="text-align: center;">{{ $semuagejalacase -> bobot_gejala }}</td>
                                            @endif
                                            </tr>
                                            @endforeach                                      
                                        </tbody>
                                            <div style="text-align: center;">
                                                <h5> Total Perhitungan : {{$knn}}</h5>
                                            </div>
                                        </table>
                                       
                                        
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- modal solusi -->
                        @foreach($listsolusi as $solusi)
                        <div class="modal fade" id="exampleModalsolusi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Solusi Penyakit : {{$nama_penyakit}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama Penyakit : </label>
                                        <input type="text" class="form-control" id="recipient-name" value="{{$nama_penyakit}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Rangkuman:</label>
                                        <textarea  class="form-control" rows="8" cols="50" style="height:auto" id="message-text">{{$solusi -> rangkuman}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Solusi 1:</label>
                                        <textarea  class="form-control" rows="8" cols="50" style="height:auto" id="message-text">{{$solusi -> solusi1}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Solusi 2:</label>
                                        <textarea  class="form-control" rows="8" cols="50" style="height:auto" id="message-text">{{$solusi -> solusi2}}</textarea>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                </div>
                                </div>
                            </div>
                            </div>
                            @endforeach


                     <!-- Modal Total Diagnosa-->
                        <div class="modal fade" id="exampleModaltotaldiagnosa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Total Nilai : {{$nama_penyakit}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                            <h5>Rumus Perhitungan KNN :</h5>
                            <img src="{{URL::asset('select/rumusknn.png')}}" alt="">
                            <img src="{{URL::asset('select/rumusknn2.png')}}" alt=""><br>
                            Perhitungan = {{$knn}} / {{$totalbobotgejala}} <br>
                            </div>
                            <div style="text-align: center;">
                                
                            <b> Hasil = {{$hasilknn}}</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>


        
    @Endsection