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
                          <h3 style="color: white;"><b> List Gejala Berdasarkan Penyakit</b></h3>
                      </div>
                  <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr  >
                          <th style="text-align: center; "><b><u>No</u></b></th>
                          <!-- <th style="text-align: center; ">ID GEJALA</th> -->
                          <th style="text-align: center; "><b><u>KODE </u></b></th>
                          <th style="text-align: center; "><b><u>NAMA </u></b></th>
                          <th style="text-align: center; "><b><u>BOBOT UMUM</u></b></th>
                          <th style="text-align: center; "><b><u> P001</b></th>
                          <th style="text-align: center; "><b><u> P002</b></th>
                          <th style="text-align: center; "><b><u> P003</b></th>
                          <th style="text-align: center; "><b><u> P004</b></th>
                          <th style="text-align: center; "><b><u> P005</b></th>
                          <th style="text-align: center; "><b><u> P006</b></th>
                          <th style="text-align: center; "><b><u> P007</b></th>
                          <th style="text-align: center; "><b><u> P008</b></th>
                          <th style="text-align: center; "><b><u> P009</b></th>
                        </tr>
                      </thead>
                      <?php $no = 0;?>

                      @foreach($gejalaall as $semuagejala)
                      <?php $no++ ;?>

                      <tbody>
                        <tr>
                        <td style="text-align: center;">{{ $no}}</td>
                        <!-- <th scope="row" style="text-align: center;">{{ $semuagejala -> id }}</th> -->
                        <td style="text-align: center;">{{ $semuagejala -> kode_gejala }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> nama_gejala }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobot_gejala }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP001 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP002 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP003 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP004 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP005 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP006 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP007 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP008 }}</td>
                        <td style="text-align: center;">{{ $semuagejala -> bobotP009 }}</td>

                        </tr>
                        @endforeach
                      </tbody>
                     
                      
                    </table>
                 </div>
                </div>
             </div>
            </div>
        </main>

        
    @Endsection