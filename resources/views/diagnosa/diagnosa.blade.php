@extends('pagecore.app')
@section('konten')
     <!-- partial -->
    

     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0"><br>
                <div class="row " style="text-align: center;">
					<div class="col-sm-6">
            <h2>Gejala <b>Dialami</b></h2> 
                       
					</div>
             <div class="col-sm-5">

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Gejala</button>
                          <a href="/delete-all"><button type="button" class="btn btn-warning" data-toggle="modal">Clean</button></a>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1"> Diagnosa</button>
                              
                </div>
              </div>
                  <div class="table-responsive">
                    <table class="table ">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success" style="text-align: center;" >
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    <br>
                      <thead>
                        <tr  > 
                          <th style="text-align: center;"><b><u>No</u></b></th>
                          <!-- <th style="text-align: center;">ID GEJALA</th> -->
                          <th style="text-align: center;"><b><u>KODE</u></b></th>
                          <th style="text-align: center;"><b><u>NAMA</u></b></th>
                          <!-- <th style="text-align: center;"><b><u>BOBOT GEJALA</u></b></th> -->
                          <!-- <th style="text-align: center;"><b><u>Bobot</u></b></a></th> -->
                          <th style="text-align: center;"><b><u>OPTION</u></b></a></th>
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($gejalauser as $gejalauser)
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        <td style="text-align: center;">{{ $no}}</td>
                        <!-- <th scope="row" style="text-align: center;">{{ $gejalauser -> id }}</th> -->
                        <td style="text-align: center;">{{ $gejalauser -> kode_gejala }}</td>
                        <td style="text-align: center;">{{ $gejalauser -> nama_gejala }}</td>
                        <!-- <td style="text-align: center;">{{ $setting }}</td> -->
                        <td style="text-align: center;">
							          <a style="text-decoration: none;" href="/delete_gejala_user/{{ $gejalauser -> id }}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                       <!-- MODAL -->
                    
                   
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                       <div class="modal-content">
                       <div class="table-responsive">
                         <table class="table table">
                    <thead>
                        <tr>
                        <!-- <th scope="col" style="text-align: center;">id</th>
                        <th scope="col" style="text-align: center;">Kode Gejala</th> -->
                        <th  scope="col" style="text-align: center;"><b>Nama Gejala</b> </th>
                        <!-- <th scope="col" style="text-align: center;">Bobot Gejala</th> -->
                        <th scope="col" style="text-align: center;"><b>Opt</b> </th>
                        </tr>
                    </thead>
                    @foreach($listgejala as $gejala)
                    <tbody>
                        <tr>
                        <!-- <th scope="row" style="text-align: center;">{{ $gejala -> id }}</th>
                        <th scope="row" style="text-align: center;">{{ $gejala -> kode_gejala }}</th> -->
                        <td style="text-align: center;">{{ $gejala -> nama_gejala }}</td>
                        <!-- <td style="text-align: center;">{{ $gejala -> bobot_gejala }}</td> -->
                        <td style="text-align: center;">
                        <div style="text-align: center;">
                        <button class="btn btn-info"><a style="color: white; text-decoration: none;" href="/add_gejala_user/{{ $gejala -> kode_gejala }}">Ada</a></button>
                        </div>
                        </td>
                        </tr>
                        </tbody>
                    @endforeach
                    </table>
                       </div>
                            </div>
                            </div>
                        

                     </div>
                     <!-- Modal -->
                      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Perhatian!!!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah Anda Ingin Mendiagnosa Berdasarkan Gejala yang anda Input?<br><br><br>


                             <p style="color: red;"> Gejala akan tetep disimpan sampai langkah selanjutnya <a href="">Pelajari ini</a></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <a href="/hasil"><button type="button" class="btn btn-warning">Diagnosa</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                 </div>
                </div>
             </div>
            </div>
        </main>

        
    @Endsection