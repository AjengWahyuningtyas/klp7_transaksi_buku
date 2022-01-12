@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div>
        <a href="{{route('peminjam.create')}}"class="btn-sm btn-success"> Tambah Peminjam</a>
        </div>
        <div class="card">
            <div class="card-header">
              Data Peminjam
            </div>
            <div class="card-body">
                <table class="table table-striped"> 
                    
                    <tr>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    
                    @php $id=1;
                    @endphp
                    <tr role="row" class="odd">
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{$datas->nama}}</td>
                        <td>{{$datas->alamat}}</td>
                        <td>{{$datas->telepon}}</td>
                        <td>{{$datas->tanggal_lahir}}</td>
                        
                        <td>
                            <a href="{{route('peminjam.edit',[$datas->id])}}"class="btn btn-warning ">Edit</a>
                            <form action="{{route('peminjam.destroy',[ $datas->id])}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn-sm btn-danger">Hapus</button>
                            </form>
                            
                        </td>
                    </tr>
                
                    @endforeach
            
                </table>
            </div>
          </div>
    </div>
</div>
 
@endsection