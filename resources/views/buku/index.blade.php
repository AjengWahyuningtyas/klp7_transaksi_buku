@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-12">
        <div>
        <a href="{{route('buku.create')}}"class="btn-sm btn-success"> Tambah Buku</a>
        </div>
        <div class="card">
            <div class="card-header">
              Data Buku
            </div>
            <div class="card-body">
                <table class="table table-striped" id="myTable"> 
                    <thead> 
                    <tr>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">stok</th>
                        <th scope="col">Status</th>
                        <th scope="col">Foto sampul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $id=1;
                    @endphp
                    <tr role="row" class="odd">
                    @foreach ($data as $datas)
                    <tr>
                        <th>{{$id++}}</th>
                        <td>{{$datas->kode}}</td>
                        <td>{{$datas->judul}}</td>
                        <td>{{$datas->kategori}}</td>
                        <td>{{$datas->deskripsi}}</td>
                        <td>{{$datas->penerbit}}</td>
                        <td>{{$datas->tahun_terbit}}</td>
                        <td>{{$datas->pengarang}}</td>
                        <td>{{$datas->jumlah_halaman}}</td>
                        <td>{{$datas->kondisi}}</td>
                        <td>{{$datas->stok}}</td>
                        <td>{{$datas->Status}}</td>
                        <td><img src="{{$datas->Foto_sampul}}" height="100" width="150"></td>
                        <td>
                            <a href="{{route('buku.edit',[$datas->id])}}"class="btn btn-warning ">Edit</a>
                            <form action="{{route('buku.destroy',[ $datas->id])}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn-sm btn-danger">Hapus</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
                </table>
            </div>
          </div>
    </div>
</div>
 
@endsection