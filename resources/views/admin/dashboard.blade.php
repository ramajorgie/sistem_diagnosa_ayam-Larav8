@extends('pagecore.app')  
   <!-- partial -->
   @section('konten')

 
   <div class="page-wrapper mdc-toolbar-fixed-adjust">
   @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block" style="text-align: center;">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

  @include('sweet::alert')
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                  <a href="/diagnosa" style="text-decoration: none;">
                  <div class="card-inner" >
                    <h5 class="card-title" style="color: black;">Diangnosa</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom" style="color: black;">Sekarang</h5>
                    <p class="tx-12 text-muted">Klik</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">dvr</i>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <a href="/list-penyakit" style="text-decoration: none;">
                  <div class="card-inner">
                    <h5 class="card-title" style="color: black;">Penyakit Dideteksi</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom" style="color: black;">9 Penyakit</h5>
                    <p class="tx-12 text-muted">Lihat</p>
                    <div class="card-icon-wrapper">
                    <i class="material-icons">dvr</i>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <a href="/menu-case" style="text-decoration: none;">
                  <div class="card-inner">
                    <h5 class="card-title" style="color: black;">Solusi Penyakit</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom" style="color: black;">Solusi Penyakit</h5>
                    <p class="tx-12 text-muted">Lihat</p>
                    <div class="card-icon-wrapper">
                    </a>
                    <i class="material-icons">dvr</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                  <a href="/menu-case" style="text-decoration: none;">
                  <div class="card-inner">
                    <h5 class="card-title" style="color: black;">Case Kasus</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom" style="color: black;">Kasus lama</h5>
                    <p class="tx-12 text-muted">Lihat</p>
                    <div class="card-icon-wrapper">
                    <i class="material-icons">dvr</i>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card" >
                <img src="{{URL::asset('assets/img/ayam1.png')}}" style=" margin-left: auto; margin-right: auto; width: 150;"/>
                </div> 
              </div>
                </div>
              </div>

            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        @endsection