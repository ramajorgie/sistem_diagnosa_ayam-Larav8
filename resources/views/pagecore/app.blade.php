<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Diagnosa</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/css/vendor.bundle.base.css')}}">
  
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/demo/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('modal/bootstrap.js')}}">

  <script src="https://cdn.jsdelivr.net/npm/vue"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">        
  
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />


 
</head>
<body>
  
<!-- <script src="{{URL::asset('assets/js/preloader.js')}}"></script> -->
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header" style="text-align: center;">
        <a href="/dashboard" class="brand-logo" style="text-decoration: none;">
          <img  width="80" height="80" src="https://www.upnjatim.ac.id/wp-content/uploads/2019/12/logoupnbaru-300x294-min.png" alt="logo">
          <h5 style="color: yellow; margin-top: 8px;">SISTEM DIAGNOSA AYAM</h5>
        </a>


      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="/dashboard">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="diagnosa">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Diagnosa
              </a>
            </div>

            @if(session()->get('login_done') == 'admin')
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{('/admin-menu')}}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Setting
              </a>
            </div>
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{('/list-penyakit')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Penyakit 
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{('/view-gejala')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                Gejala
              </a>
            </div> -->

            

            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="/solusi">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Basis
              </a>
            </div> -->
            @else
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{('/menu-case')}}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Training
              </a>
            </div>
            @endif

            
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="/history">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">history</i>
               History
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{('/rekap')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Rekap
              </a>
            </div> 

              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="https://drive.google.com/file/d/1ogUxvX7RHI9dCj0L3GBnrqrU6slxRsB4/view?usp=sharing">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Validasi
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="/masukan-user">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
              Report
              </a>
            </div>
            
            <br>
            <div class="mdc-list-item mdc-drawer-item center" >
              <a class="mdc-drawer-link" href="/exit" target="_blank" >
                <button class="mdc-button mdc-button--raised filled-button--secondary mdc-ripple-upgraded">Log Out</button>
              </a>
            </div>
          </nav>
        </div>

      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">
             <button type="button" class="mdc-button mdc-button--raised mdc-ripple-upgraded"" data-toggle="modal" data-target="#exampleModal4">
                Alur Kerja
              </button>
           <a href="/profile" style="text-decoration: none;"> <button class="rounded-pill mdc-button filled-button--warning mdc-ripple-upgraded">{{ session()->get('status') }}</button></a>
            </span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
             <a href="/profile" style="text-decoration: none;"> 
             <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="fig">
                  <span class="user-name"> {{ session()->get('login_done') }}</span>
                    <img  width="25" height="25" src="https://k00228961.github.io/RWD/img/picon.png" alt="user" class="user rounded-image">
                  </span>
                </span>
              </button>
              </a>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Setting</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                  </li>
                </ul>
              </div>
           
          </div>
        </div>
      </header>
                    @yield('konten')
   
        <!-- <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">Sistem Diagnosa Ayam </a>2021</span>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end"> <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Template <a href="" target="_blank"> Material  </a> dashboards  <a href="" target="_blank"></a></span>
               
              </div>
            </div>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
    </div>
  </div>
  
  <!-- plugins:js -->
  <script src="{{URL::asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{URL::asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
  <script src=".{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{URL::asset('assets/js/material.js')}}"></script>
  <script src="{{URL::asset('assets/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- End custom js for this page-->
</body>



        <!-- Modal -->
        @if(session()->get('login_done') == 'admin')
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cara Pengunaan Sistem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Anda Login Sebagai : {{ session()->get('login_done') }}, <br>
                1) ini admin
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Mengerti</button>
              </div>
            </div>
          </div>
        </div>
        @else
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cara Pengunaan Sistem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Anda Login Sebagai : {{ session()->get('login_done') }}, (User) <br>
                1) ini user
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Mengerti</button>
              </div>
            </div>
          </div>
        </div>
        @endif

</html> 