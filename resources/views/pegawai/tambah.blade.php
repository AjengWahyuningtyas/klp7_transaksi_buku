@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              Input Data Pegawai
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
                <form action="{{route('pegawai.store')}}" method="POST">
                     {{ csrf_field() }}
                    
                    <div class="mb-3">
                      <label for="nama" >Nama Pegawai</label>
                      <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama Pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="jenis kelamin" >Jenis kelamin</label>
                        <select name="jenis_kelamin" id=""class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="telepon" >No telepon</label>
                        <input type="number" name="telepon" class="form-control" id="telepon" placeholder="Kontak pegawai">
                      </div>
                      <div class="mb-3">
                        <label for="alamat" >Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                
            </div>
          </div>
    </div>
</div>
 
@endsection