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
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;">   
                          <h3 style="color: white;"><b> List Penyakit</b></h3>
                      </div>

                  <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr >
                        <th style="text-align: center; "><b> <u>No</u> </b></th>
                          <!-- <th style="text-align: center; ">ID PENYAKIT</th> -->
                          <th style="text-align: center; "><b> <u> KODE PENYAKIT </u></b></th>
                          <th style="text-align: center; "><b><u>NAMA PENYAKIT(NON ILMIAH)</u></b></th>
                          <th style="text-align: center; "><b><u>NAMA PENYAKIT (ILMIAH)</u></b> </th>
                          <th style="text-align: center; "><b><u>ACTION</u></b></th>
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($listpenyakit as $penyakit)
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        <td style="text-align: center;">{{ $no}}</td>
                        <!-- <th scope="row" style="text-align: center;">{{ $penyakit -> id }}</th> -->
                        <td style="text-align: center;">{{ $penyakit -> kode_penyakit }}</td>
                        <td style="text-align: center;">{{ $penyakit -> nama_penyakit1 }}</td>
                        <td style="text-align: center;">{{ $penyakit -> nama_penyakit2 }}</td>
                        <td style="text-align: center;">
                        <i data-toggle="modal" data-target="#exampleModal{{ $penyakit -> id }}" data-whatever="@mdo" class="material-icons" data-toggle="tooltip" style="color: blue; cursor: pointer;" title="Edit">&#xE254;</i>
					            	<!-- <a href="" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                 </div>
                </div>
             </div>
            </div>
        </main>
           <!-- modal edit -->
           @foreach($listpenyakit as $penyakit)
              <div class="modal fade" id="exampleModal{{ $penyakit -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="/update_data_penyakit">
                    @csrf
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode Penyakit:</label>
                        <input type="text" class="form-control" id="recipient-name" name="kode_penyakit" value="{{ $penyakit -> kode_penyakit }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Penyakit (Non Ilmiah): </label>
                        <input type="text" class="form-control" id="recipient-name" name="nama_penyakit1" value="{{ $penyakit -> nama_penyakit1 }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Penyakit (Ilmiah):</label>
                        <input type="text" class="form-control" id="recipient-name" name="nama_penyakit2" value="{{ $penyakit -> nama_penyakit2 }}">
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
     </div>




    @Endsection