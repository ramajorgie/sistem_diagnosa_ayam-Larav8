@extends('pagecore.app')
@section('konten')
@if(session()->get('login_done') == 'user')
<script>window.location = "/not-found";</script>
@endif
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
                          <h3 style="color: white;"><b>List User Aktif   </b></h3>
                      </div>
                <div class="container">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
              
                  <div class="table-responsive">
                    <table class="table ">
                    
                      <thead>
                        <tr >
                          <th style="text-align: center;">Email</th>
                          <th style="text-align: center;">Nama</th>
                          <th style="text-align: center;">Usename</th> 
                          <th style="text-align: center;">Status</th>
                          <th style="text-align: center;">Opt</th>
                         
                        </tr>
                      </thead>
                      @foreach ($listakun as $akunlist)
                      <tbody>
                        <tr  >
                          <td style="text-align: center;">{{ $akunlist -> email}}</td>
                          <td style="text-align: center;">{{ $akunlist -> fullname}}</td>
                          <td style="text-align: center;">{{ $akunlist -> username}}</td>
                         
                          @if ( $akunlist -> aktivasi == 'aktif' )
                           <td style="text-align: center; color: green;"><b>{{ $akunlist -> aktivasi}}</b> </td>
                          @else
                          <td style="text-align: center; color: red;"><b>{{ $akunlist -> aktivasi}}</b> </td>
                          @endif
                          <td style="text-align: center;">
                          @if ( $akunlist -> aktivasi == 'aktif' )
                          <form action="/update_status_akun" method="post">
                          @csrf
                          <input type="text" name="aktivasi" value="{{$status_aktivasi}}" hidden>
                          <input type="text" name="id" value="{{ $akunlist -> id}}" hidden>
                          <input type="text" name="status" value="{{ $akunlist -> aktivasi}}" hidden>
                          <button class="btn btn-danger">X</button>
                          </form>
                          @else
                          <form action="/update_status_akun" method="post">
                          @csrf
                          <input type="text" name="aktivasi" value="{{$status_aktivasi}}" hidden>
                          <input type="text" name="id" value="{{ $akunlist -> id}}" hidden>
                          <input type="text" name="status" value="{{ $akunlist -> aktivasi}}" hidden>
                          <button class="btn btn-success">✓</button>
                          @endif
                          </form>
                          </td>
                       
                        <tr>                    
                      </tbody>
                      @endforeach
                    </table>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                  
                         
        </main>

        
    @Endsection