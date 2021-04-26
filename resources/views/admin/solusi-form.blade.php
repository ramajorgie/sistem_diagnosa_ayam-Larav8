@extends('pagecore.app')
@section('konten')
     <!-- partial -->
     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <form action="/edit-solusi" method="post">
              @csrf
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-12">
                            <div class="mdc-card">
                            @if(session()->get('login_done') == 'admin')
                            <h6 class="card-title">Edit Solusi Penyakit</h6>
                            @endif
                            @if(session()->get('login_done') == 'user')
                            <h6 class="card-title">Lihat Solusi Penyakit</h6>
                            @endif
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field">
                                    <select class="custom-select" id="inputGroupSelect01" name="nama_penyakit">
                                        <option value="case_tipusayam"><td>Tipus Ayam</td></option>
                                        <option value="case_tetelo">Tetelo</option>
                                        <option value="case_marek">Marek</option>
                                        <option value="case_kepalabengkak"><td>Kepala Bengkak</td></option>
                                        <option value="case_gumboro">Gumboro</option>
                                        <option value="case_fluburung">Flu Burung</option>
                                        <option value="case_berakkapur"><td>Berak Kapur</td></option>
                                        <option value="case_batukdarah">Batuk Darah</option>
                                        <option value="case_batukayammenhun">Batuk Ayam Menahun</option>
                                    </select>`
                                    <div class="mdc-line-ripple"></div>
                                    <!-- <label for="text-field-hero-input" class="mdc-floating-label">Asal Penyakit</label> -->
                                    </div>
                                </div>
                                
                                <div style="text-align: center;">
                                <br><input class="btn btn-primary " style="text-align: center;" type="submit" value="Tampilkan">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
            </form>
        </main>

     </div>

        
    @Endsection