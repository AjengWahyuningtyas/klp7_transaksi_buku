@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="center"> Input Data Pinjaman </h3>
        <div class="card"> 
         
            
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
                <form action="{{route('pinjaman.create')}}" method="POST">
                     {{ csrf_field() }}
                   
                    <div class="form-group">
                      <label for="peminjam_id" >Id Peminjam</label>
                      <input type="text" name="peminjam_id" class="form-control" id="peminjam_id" placeholder="id peminjam">
                    </div>

                    <div class="form-group">
                      <label for="nama" >Nama Peminjam</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Peminjam">
                    </div>
                    
                      <div class="mb-3">
                        <label for="tanggal_pinjaman" >Tanggal Pinjaman</label>
                        <input type="date" name="tanggal_pinjaman" class="form-control" id="tanggal_pinjaman" placeholder="Tanggal pinjaman">
                      </div>
                      
                      <div class="mb-3">
                        <label for="tanggal_kembali" >Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" placeholder="Tanggal Kembali">
                      </div>
                      
                      
                      
                    
                  
                
            </div>
          </div>
    </div>
    <div class="col-md-6">
      
      <div class="card"> 
          
          <div class="card-body">
            <table class="table" id="tabel">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Buku</th>
                  <th>Judul</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                @php $id=1;
                @endphp
                @foreach ($buku as $bukus)
                <tr>
                  <td>{{$id++}}</td>
                  <td>{{$bukus->kode}}</td>
                  <td>{{$bukus->judul}}</td>
                  <td>{{$bukus->stok}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
</div>
      </div>

      
      <div class="card"> 
         
            <div class="col-md-10">
      
        <div class="card-body">
            <div class="form-group">
              <label for="kategori" >Kategori</label>
              <select name="kategori" class="form-control dinamis" id="" >
                @foreach ($buku as $bukus)
                <option value="{{$bukus->kategori}}">{{$bukus->kategori}}</option>
                
                @endforeach
              </select>

              <div class="form-group">
                <label for="kode" >Kode Buku</label>
                <select name="kode" class="form-control " id="">
                  @foreach ($buku as $bukus)
                <option value ="{{$bukus->id}}">{{$bukus->kode}}/{{$bukus->judul}} </option>
                @endforeach
                </select>
                
            </div>
            <div class="form-group">
              <button type="submit"class="buttn btn-success btn-block">Pinjam </button>
            </div>
          </form>
        </div>
            </div>
      </div>
    </div>
  </div>

 
@endsection

@push('script')

  <script>
    $(document).ready(function(){
      $('#tabel').DataTable();
        })
      
    
  </script>    
@endpush