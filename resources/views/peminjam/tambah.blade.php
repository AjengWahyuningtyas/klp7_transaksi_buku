@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              Input Data Peminjam
            </div>
            <div class="card-body">

              @if (Count($errors) >0)
              <div class="alert alert-danger">
                <ul class="list-unstyled">
                   @foreach ($errors -> all () as $pesan)
                   <li>{{$pesan}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
                <form action="{{route('peminjam.store')}}" method="POST">
                     {{ csrf_field() }}

                     <div class="mb-3">
                      <label for="peminjam_id" >ID Peminjam</label>
                      <input type="number" name="peminjam_id" class="form-control" id="peminjam_id" placeholder="ID Peminjam">
                    </div>
                  
                    <div class="mb-3">
                      <label for="nama" >Nama Peminjam</label>
                      <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama Peminjam">
                    </div>

                      <div class="mb-3">
                        <label for="alamat" >Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                      </div>
                      <div class="mb-3">
                        <label for="telepon" >No Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Nomor Telepon">
                      </div>
                      <div class="mb-3">
                        <label for="tanggal_lahir" >Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                
            </div>
          </div>
    </div>
</div>
 
@endsection