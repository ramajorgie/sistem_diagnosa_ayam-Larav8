@extends('pagecore.app')
@section('konten')
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <div class="card ">  
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;" >   
                          <h3 style="color: white;"><b>History Diagnosa</b></h3>
                      </div>
                  <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr  >
                          <th style="text-align: center; "><b><u>No</u></b></th>
                          <!-- <th style="text-align: center; ">ID GEJALA</th> -->
                          <th style="text-align: center; "><b><u>Judul History</u></b></th>
                          <th style="text-align: center; "><b><u>Hasil Perhitungan</u></b></th>
                          <th style="text-align: center; "><b><u>Hasil Diagnosa</u></b></th>
                          <th style="text-align: center; "><b><u>Jumlah Kesamaan</u></b></th>
                          <th style="text-align: center; "><b><u>Tanggal</u></b></th>
                          <th style="text-align: center; "><b><u>Lihat Solusi</u></b></th>
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($history as $datahistory)
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        <td style="text-align: center;">{{ $no}}</td>
                        <th scope="row" style="text-align: center;">{{ $datahistory -> judul_history }}</th>
                        <td style="text-align: center;">{{ $datahistory -> hasil_diagnosa }}</td>
                        <td style="text-align: center;">{{ $datahistory -> hasil_hitung }}</td>
                        <td style="text-align: center;">{{ $datahistory -> gejala_sama }}</td>
                        <td style="text-align: center;">{{ $datahistory -> tanggal }}</td>
                        <td style="text-align: center;">
                        <i data-toggle="modal" data-target="#exampleModal{{ $datahistory -> id }}" data-whatever="@mdo" class="material-icons" data-toggle="tooltip" style="color: orange ; cursor: pointer;" title="VIew">&#xE417;</i>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                 </div>
                </div>
             </div>
            </div>

            @foreach($daftarsolusi as $lihatsolusi)
            @foreach($history as $datahistory)
            <div class="modal fade" id="exampleModal{{ $datahistory -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="text" class="form-control" id="recipient-name" name="kode_gejala" value="{{$lihatsolusi -> solusi1}}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nama Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="nama_gejala" value="" disabled>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Bobot Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="bobot_gejala" value="" disabled>
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Cangkupan Gejala:</label>
                              <input type="text" class="form-control" id="recipient-name" name="cangkupan" value="" disabled>
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
                  @endforeach
        </main>

        
    @Endsection