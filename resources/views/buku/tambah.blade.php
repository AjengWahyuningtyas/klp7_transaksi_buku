@extends('layouts.admin')
@section('content')
<div class="container">
<div class=row>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              Input Data Buku
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
                <form action="{{route('buku.store')}}" method="POST"attribute enctype="multipart/form-data">
                     {{ csrf_field() }}
                    
                    <div class="mb-3">
                      <label for="kode" >Kode Buku</label>
                      <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode Buku">
                    </div>

                      <div class="mb-3">
                        <label for="judul" >Judul Buku</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Buku">
                      </div>
                    
                      <div class="mb-3">
                        <label for="kategori" >Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori Buku">
                      </div>

                      <div class="mb-3">
                        <label for="deskripsi" >Deskripsi Buku</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi Buku">
                      </div>

                      <div class="mb-3">
                        <label for="Penerbit" >Penerbit</label>
                        <select name="penerbit" id=""class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Bloomsbury">Bloomsbury</option>
                            <option value="HarperCollins">HarperCollins</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="tahun_terbit" >Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit">
                      </div>

                      <div class="mb-3">
                        <label for="Pengarang" >Pengarang</label>
                        <input type="text" name="Pengarang" class="form-control" id="Pengarang" placeholder="Pengarang">
                      </div>
                      <div class="mb-3">
                        <label for="jumlah_halaman" >Jumlah Halaman</label>
                        <input type="text" name="jumlah_halaman" class="form-control" id="jumlah_halaman" placeholder="Jumlah Halaman">
                      </div>

                      <div class="mb-3">
                        <label for="Kondisi" >Kondisi</label>
                        <select name="Kondisi" id=""class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Baik">Baik</option>
                            <option value="rusak">Rusak</option>
                        </select>
                        <div class="mb-3">
                          <label for="stok" >jumlah</label>
                          <input type="number" name="stok" class="form-control" id="stok" placeholder="Stok">
                        </div>
                        
                      </div>
                      <div class="mb-3">
                        <label for="Status" >Status</label>
                        <select name="Status" id=""class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Bebas">Bebas</option>
                            <option value="Terpinjam">Terpinjam</option>
                        </select>
                      </div>
                      <label for="Foto_sampul" >Foto Sampul</label>
                      <div id="Foto_sampul" class="picture">
                        <label for="Foto_sampul">Select a file:</label>
                        <input type="file"class="form-control-file" name="Foto_sampul" id="Foto_sampul">
                        
                    </div>
                      

                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                
            </div>
          </div>
    </div>
</div>
 
@endsection