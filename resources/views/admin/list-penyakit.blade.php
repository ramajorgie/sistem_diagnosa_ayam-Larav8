@extends('pagecore.app')
@section('konten')
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                
                <div class="mdc-card p-0 "> 
                  
                      <div class="card-header text-white" style="text-align: center; background-color: #291D5B;">   
                          <h3 style="color: white;"><b> List Penyakit Dideteksi</b></h3>
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
                        
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                 </div>
                </div>
             </div>
            </div>
        </main>
     </div>


        
    @Endsection