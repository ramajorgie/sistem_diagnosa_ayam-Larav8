@extends('pagecore.app')
@section('konten')

     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <form action="/gejala-baru" method="post">
              @csrf
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                <div class="mdc-card p-0 "> 
                  
                  <div class="card-header text-white" style="text-align: center; background-color: #291D5B;">   
                      <h3 style="color: white;"><b>Form Input Gejala</b></h3>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                        Catatan
                      </button>
                  </div>  
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                    
            
                  </div>
                </div>
                
                    <button type="submit" class="btn btn-lg btn-block btn-danger">Tambah Gejala</button>

              </form>

              <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Catatan Pengisian Gejala</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{URL::asset('select/listketerangan.png')}}" alt="">
                        <p style="color: red;">Pengisian Bobot mengunakan satuan (0.0 - 1) dengan mengunakan titik(.)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                    </div>
                    </div>
                </div>
                </div>
              

              
    

    @Endsection