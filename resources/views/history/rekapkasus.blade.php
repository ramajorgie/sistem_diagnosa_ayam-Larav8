@extends('pagecore.app')
@section('konten')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <div class="card ">  
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;" >   
                          <h3 style="color: white;"><b>Rekap Kasus</b></h3>
                      </div><br>
                      <div class="container">
                    <p style="text-align: center;"><b>Tetelo (Newcastle Disease)</b></p>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" style="<?php echo $tetelo ?>%;"> <b>{{$tetelo}} Kasus</b> </div>
                    </div><br>
                    <p style="text-align: center;"><b> Flu Burung (Avian Influenza)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped" style="<?php echo $fluburung ?>%;"><b>{{$fluburung}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Batuk Ayam Menahun (Infectious Bronchitis)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-info progress-bar-striped" style="<?php echo $batukayammenahun ?>%;"><b>{{$batukayammenahun}} Kasus </b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Marek (Marek's disease)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" style="<?php echo $marek ?>%;"><b>{{$marek}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Tifus Ayam (Fowl Typhoid)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-danger progress-bar-striped" style="<?php echo $tipusayam ?>%;"><b>{{$tipusayam}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Berak Kapur (pullorum disease)</b></p>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped" style="<?php echo $berakkapur ?>%;"><b>{{$berakkapur}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Gumboro  (infectious bursal disease)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped" style="<?php echo $gumboro ?>%;"><b>{{$gumboro}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Kepala Bengkak (turkey rhinotracheitis)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-info progress-bar-striped" style="<?php echo $kepalabengkak ?>%;"><b>{{$kepalabengkak}} Kasus</b></div>
                    </div><br>
                    <p style="text-align: center;"><b>Batuk Darah (infectious laryngotracheitis)</b></p>
                    <div class="progress">
                      <div class="progress-bar bg-warning progress-bar-striped" style="<?php echo $batukdarah ?>%;">{{$batukdarah}} Kasus</div>
                    </div><br>
             </div>
            </div>

           
        </main>

        
    @Endsection