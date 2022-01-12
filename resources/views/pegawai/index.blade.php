@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div>
        <a href="{{route('pegawai.create')}}"class="btn-sm btn-success"> Tambah pegawai</a>
        </div>
        <div class="card">
            <div class="card-header">
              Data pegawai
            </div>
            <div class="card-body">
                <table class="table table-striped" id="myTable"> 
                    <tr>
                        <th scope="col">Id pegawai</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No hp</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @php $id=1;
                    @endphp
                    <tr role="row" class="odd">
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>
                            <a href="{{route('pegawai.edit',[$data->id])}}"class="btn btn-warning ">Edit</a>
                            <form action="{{route('pegawai.destroy',[ $data->id])}}" method="POST">
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