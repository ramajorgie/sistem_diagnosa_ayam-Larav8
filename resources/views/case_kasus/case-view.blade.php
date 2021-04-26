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
                  <form>
                  
                  @csrf
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;">   
                          <h3 style="color: white;" ><b>Daftar Gejala <b>{{$nama_penyakit}}</b></h3>
                          @if(session()->get('login_done') == 'admin')
                          <a href="/input-gejala"><button type="button" class="btn btn-primary">Tambah Gejala</button></a>       
                          @endif	
                          
                      </div>
			          		<div class="col-sm-4">
                  </div>
                </div>

                  <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr>
                          <th style="text-align: center; ;"><b><u>No</u></b></th>
                          <!-- <th style="text-align: center; ;">ID GEJALA</th> -->
                          <th style="text-align: center; ;"><b><u>Kode</u></b></th>
                          <th style="text-align: center; ;"><b><u>Gejala</u></b></th>
                          <!-- <th style="text-align: center; ;"><b><u>Bobot Umum</u></b></th>
                          <th style="text-align: center; ;"><b><u>Bobot Khusus</u></b></th> -->
                          <th style="text-align: center; ;"><b><u>ACTION</u></b></th>
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($list_case as $case_view)
                    
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        
                        <td style="text-align: center;">{{ $no}}</td>
                        <!-- <th scope="row" style="text-align: center;">{{ $case_view -> id }}</th> -->
                        <td style="text-align: center;"  >{{ $case_view -> kode_gejala }}</td>
                        <td style="text-align: center;"  >{{ $case_view -> nama_gejala  }}</td>
                        <!-- <td style="text-align: center;">{{ $case_view -> bobot_gejala }}</td>
                        <td style="text-align: center;">{{ $case_view -> bobot_khusus }}</td> -->
                        <td style="text-align: center;">
                        @if(session()->get('login_done') == 'admin')
                       <a href="/edit_cangkupan/{{ $case_view -> kode_gejala }}"> <i data-toggle="modal" data-whatever="@mdo" class="material-icons " data-toggle="tooltip" style="color: green; cursor: pointer;" title="View">&#xE254;</i></a>
                        <i data-toggle="modal" data-target="#exampleModalview{{ $case_view -> kode_gejala }}" data-whatever="@mdo" class="material-icons " data-toggle="tooltip" style="color: blue; cursor: pointer;" title="View">&#xE417;</i>
                        <i data-toggle="modal" data-target="#exampleModal{{ $case_view -> kode_gejala }}" data-whatever="@mdo" class="material-icons " data-toggle="tooltip" style="color: red; cursor: pointer;" title="View">&#xE872;</i>
                        </td>
                        @else
                        <i data-toggle="modal" data-target="#exampleModalview{{ $case_view -> kode_gejala }}" data-whatever="@mdo" class="material-icons " data-toggle="tooltip" style="color: blue; cursor: pointer;" title="View">&#xE417;</i>
                        </td>
                        @endif
                        </tr>
                        @endforeach
                   
                      </tbody>
                      
                    </table>
                    </form>
        
                 </div>
                </div>
             </div>
            </div>

            <!-- modal edit -->

            @foreach($list_case as $case_view)
              <div class="modal fade" id="exampleModalview1{{  $case_view -> kode_gejala }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Gejala Penyakit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode Gejala:</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $case_view -> kode_gejala }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Gejala:</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $case_view -> nama_gejala }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Bobot Umum: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> bobot_gejala }}"  >
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Bobot Khusus: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> {$kode_penyakit} }}"  >
                      </div>

                      <input type="text" value="{{$name_case}}" hidden>
                      

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                  </div>
                </div>
              </div>
            </div>
            @endforeach

              <!-- modal view -->
              @foreach($list_case as $case_view)
              <div class="modal fade" id="exampleModalview{{  $case_view -> kode_gejala }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode Gejala:</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $case_view -> kode_gejala }}" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Gejala:</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $case_view -> nama_gejala }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Bobot Umum: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> bobot_gejala }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Bobot Khusus: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> {$kode_penyakit} }}" readonly>
                      </div>
                      <!-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cangkupan: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> cangkupan }}" readonly>
                      </div> -->
                      <div class="form-group">
                      <label for="exampleFormControlTextarea1">Gejala Sama</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{ $case_view -> cangkupan }}</textarea>
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
             <!-- modal hapus -->
             @foreach($list_case as $case_view)
              <div class="modal fade" id="exampleModal{{  $case_view -> kode_gejala }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Menghapus!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="/delete_case_gejala" method="post">
                  @csrf
                    <input type="text" name="database" value="{{$name_case}}" hidden>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode Gejala:</label>
                        <input type="text" class="form-control" id="recipient-name" name="kode_gejala" value="{{ $case_view -> kode_gejala }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Bobot Gejala: </label>
                        <input type="text" class="form-control" id="recipient-name" value=" {{ $case_view -> bobot_gejala }}">
                      </div>
                      <input type="text" name="nama_case" value="{{$name_case}}" hidden>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yakin</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </main>
     </div>

        
    @Endsection