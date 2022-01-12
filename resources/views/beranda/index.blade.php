@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
        <!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">BUNNY Library</h1>
    </div>
              @if(Session::has('berhasil'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success,</strong>
                {{ Session::get('berhasil') }}
            </div>
             @endif
    <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Peminjam</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$var_peminjam}} Orang</div>
                    
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
                <br>
                <a href="{{route('peminjam.index')}}"class="btn btn-primary  " > Lihat</a>
              </div>
            </div>
          </div>
          
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pinjaman</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$var_pinjaman}} Buah</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  <br>
                  <a href="{{route('pinjaman.index')}}"class="btn btn-success  " > Lihat</a>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Buku Tersedia</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$var_buku}} buah</div>

                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: " aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  <br>
                  <a href="{{route('buku.index')}}"class="btn btn-info  " > Lihat</a>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pegawai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$var_pegawai}} orang</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  <br>
                  <a href="{{route('pegawai.index')}}"class="btn btn-warning  " > Lihat</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Welcome Message !!</h6>
        </div>
            <div class="card-body">
                  <p>Selamat Datang Admin <b class="text-uppercase ">{{ Auth::user()->name }}, </b></p>
                  <p class="mb-0">Sistem Informasi Manajemen Perpustakaan "Bunny Library" <br> Jangan Berikan Email dan Password Anda pada Siapapun</p>
            </div>
        </div>
    </div>
</div>

@endsection
