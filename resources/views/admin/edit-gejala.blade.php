@extends('pagecore.app')
@section('konten')

@if(session()->get('login_done') != 'admin')
<script>window.location = "/not-found";</script>
@endif
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="card">  
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B ;">   
                          <h3 style="color: white;"><b> List Gejala Berdasarkan Penyakit</b></h3>
                          <a href="/input-gejala"><button type="button" class="btn btn-primary" >Tambah Gejala</button></a>
                      </div>
                    <div class="col-sm-4">
                  
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr >
                        <th style="text-align: center; "><b><u>No</u></b></th>
                          <!-- <th style="text-align: center; ">ID GEJALA</th> -->
                          <th style="text-align: center; "><b><u>KODE GEJALA</u></b></th>
                          <th style="text-align: center; "><b><u>NAMA GEJALA</u></b></th>
                          <th style="text-align: center; "><b><u>Satus Bobot</u></b></th>
                          @if(session()->get('login_done') == 'admin')
                          <th style="text-align: center;"><b><u>ACTION</u></b></th>
                          @endif
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($listgejala as $gejalaedit)
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        <td style="text-align: center;">{{ $no}}</td>
                        <!-- <th scope="row" style="text-align: center;">{{ $gejalaedit -> id }}</th> -->
                        <td style="text-align: center;">{{ $gejalaedit -> kode_gejala }}</td>
                        <td style="text-align: center;">{{ $gejalaedit -> nama_gejala }}</td>
                        <td style="text-align: center;">{{ $status }}</td>
                        <!-- <td style="text-align: center;">{{ $gejalaedit -> cangkupan }}</td> -->
                        @if(session()->get('login_done') == 'admin')
                        <td style="text-align: center;">

                        <a href="/edit_cangkupan/{{ $gejalaedit -> kode_gejala }}" class="settings" title="Setting" data-toggle="tooltip"><i class="material-icons" style="color: yellowgreen;">&#xE8B8;</i></a>
                         <!-- <i data-toggle="modal" data-target="#exampleModal{{ $gejalaedit -> id }}" data-whatever="@mdo" class="material-icons" data-toggle="tooltip" style="color: blue; cursor: pointer;" title="Edit">&#xE254;</i> -->
                          <a href="/delete_gejala_all/{{ $gejalaedit -> kode_gejala }}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>                          
                          <i data-toggle="modal" data-target="#exampleModal{{ $gejalaedit -> kode_gejala }}" data-whatever="@mdo" class="material-icons" data-toggle="tooltip" style="color: blue ; cursor: pointer;" title="VIew">&#xE417;</i>
                          
                        </td>
                        @endif
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                          
                  <!-- modal edit -->
                  @foreach($listgejala as $gejalaedit)
                    <div class="modal fade" id="exampleModal{{ $gejalaedit -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Gejala</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/update_data_gejala" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kode Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="kode_gejala" value="{{ $gejalaedit -> kode_gejala }}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="nama_gejala" value="{{ $gejalaedit -> nama_gejala }}">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Bobot Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="bobot_gejala" value="{{ $gejalaedit -> bobot_gejala }}">
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- modal view -->
                  @foreach($listgejala as $gejalaedit)
                    <div class="modal fade" id="exampleModal{{ $gejalaedit -> kode_gejala }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">View Gejala </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/update_data_gejala" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kode Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="kode_gejala" value="{{ $gejalaedit -> kode_gejala }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="nama_gejala" value="{{ $gejalaedit -> nama_gejala }}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Cangkupan Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="cangkupan" value="{{ $gejalaedit -> cangkupan }}" disabled>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
              
              </main>
              </div>


    @Endsection