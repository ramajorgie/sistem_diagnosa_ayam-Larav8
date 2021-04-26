@extends('pagecore.app')
@section('konten')
<!-- @if(session()->get('login_done') == 'user')
<script>window.location = "/not-found";</script>
@endif -->
<link rel="stylesheet" href="{{URL::asset('select/style.css')}}">
     <!-- partial -->

     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="card">  
                      <div class="card-header  text-white" style="text-align: center; background-color: #291D5B;">   
                          <h3 style="color: white;"><b>Form Solusi (Basis Pengetahuan)</b></h3>
                      </div>
                <div class="container">
                  
                           
                          <form  action="/insert-solusi" method="post" >	

                                @csrf
                              
                                <div class="form-body">

                                  <!-- Firstname and Lastname -->
                                  @foreach ($listsolusi as $solusi)
                                  <div class="horizontal-group">
                                    <div class="form-group left">
                                      <label for="firstname" class="label-title">Kode Solusi</label>
                                      <input type="text" id="firstname" class="form-input"  name="kode_solusi" value="{{ $solusi -> kode_solusi}}" required="required"  readonly/> 
                                    </div>
                                    <div class="form-group right">
                                      <label for="lastname" class="label-title">Nama Penyakit</label>
                                      <input type="text" id="lastname" class="form-input" name="nama_penyakit" value="{{ $solusi -> nama_penyakit}}" />
                                    </div>
                                  </div>

                                  <!-- Bio -->
                                  <div class="form-group">
                                    <label for="choose-file" class="label-title">Rangkuman</label>
                                    <textarea  class="form-input" rows="8" cols="50" style="height:auto" name="rangkuman" >{{ $solusi -> rangkuman}}</textarea>
                                    <label for="choose-file" class="label-title">Pencegahan</label>
                                    <textarea class="form-input" rows="8" cols="50" style="height:auto" name="pencegahan">{{ $solusi -> pencegahan}}</textarea>
                                    <label for="choose-file" class="label-title">Solusi 1</label>
                                    <textarea class="form-input" rows="8" cols="50" style="height:auto" name="solusi1">{{ $solusi -> solusi1}}</textarea>
                                    <label for="choose-file" class="label-title">Solusi 2</label>
                                    <textarea class="form-input" rows="8" cols="50" style="height:auto" name="solusi2">{{ $solusi -> solusi2}}</textarea>
                                  </div>
                                  @if(session()->get('login_done') == 'admin')  
                                  <div style="text-align: center;">
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  </div>
                                  @endif
                                </div>
                                

                                
                                  @endforeach
                                </form>
                           </div>
                </div>
                       </div>
        </main>

        
    @Endsection