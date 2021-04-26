@extends('pagecore.app')
@section('konten')
     <!-- partial -->
    

     <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0"> <br>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container">
                <div class="row flex-lg-nowrap">
                <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                    <div class="card p-3">
                    <div class="e-navlist e-navlist--active-bg">
                        <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2" href="/dashboard"><i class="fa fa-fw fa-th mr-1"></i><span>Dashboard</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2 active" href="/diagnosa"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Diagnosa</span></a></li>
                      
                        </ul>
                    </div>
                    </div>
                </div>
                @foreach ($profile as $detail)
                <div class="col">
                    <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                        @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block" style="text-align: center;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                                </div>
                        @elseif ($message = Session::get('danger'))
                                <div class="alert alert-danger alert-block" style="text-align: center;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong>{{ $message }}</strong>
                                </div>
                         @endif
                        <div class="card-body">
                            <div class="e-profile">
                            <div class="row">
                                
                                <div class="col-12 col-sm-auto mb-3">
                                
                                <div class="mx-auto" style="width: 140px;">
                                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
            
                                    <img src="{{ asset('/asset_profile/'.$detail->foto) }}" alt="" style="width: 140px; height: 140px;">
                                    </div>
                                </div>
                                </div>
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $detail -> fullname}}</h4>
                                    <!-- <p class="mb-0">@johnny.s</p> -->
                                    <div class="text-muted" ><small > <b style="color: green;">* Aktif</b> </small></div>
                                    <div class="mt-2">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalfoto">
                                        <i class="fa fa-fw fa-camera"></i>
                                        <span>Change Photo</span>
                                    </button>
                                    </div>
                                </div>
                                <div class="text-center text-sm-right">
                                    <span class="badge badge-secondary"> {{ $detail -> status}}</span>
                                    <div class="text-muted"><small>Joined 2021</small></div>
                                </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                            </ul>
                            <div class="tab-content pt-3">
                                <div class="tab-pane active">
                                <form class="form" novalidate="" action="/update_profile" method="post">
                                @csrf
                                    <div class="row">
                                    <div class="col">
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="fullname"  value="{{ $detail -> fullname}}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username" " value="{{ $detail -> username}}" readonly>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                        @if ($message = Session::get('danger'))
                                                <div class="alert alert-danger alert-block" style="text-align: center;">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                        @endif
                                            <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email" value="{{ $detail -> email}}">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" type="text" name="aktivasi" value="{{ $detail -> aktivasi}}" readonly>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" value="{{$detail -> password}}">
                                            </div>
                                        </div>
                                        </div>
                                        <!-- <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Password Baru</label>
                                            <input class="form-control" type="password" name="password_baru" required>
                                            </div>
                                        </div>
                                        </div> -->
                                    </div>
                                    </div>
                                    <!-- <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <div class="mb-2"><b>Change Password</b></div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Current Password</label>
                                            <input class="form-control" type="password" name="password_lama"  value="{{ $detail -> password}}">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>New Password</label>
                                            <input class="form-control" type="password" name="password_baru"   value="{{ $detail -> password}}" >
                                            </div>
                                        </div>
                                        </div>
            
                                    </div> -->
                                    <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                        
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                    </div>
                                    </div>
                                </form>
                                @endforeach
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
                </div>
              </div>
            </div>
          </div>


                    
            <!-- Modal -->
        
        <div class="modal fade" id="exampleModalfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/profile_foto_upload" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <input type="file" name="foto" >
              </div>
              <div class="modal-footer">
              <button class="btn btn-primary" type="submit">Upload</button>
              </div>
            </div>
            </form>
          </div>
        </div>
        </main>



        
    @Endsection