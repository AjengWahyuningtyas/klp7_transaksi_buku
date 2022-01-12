@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div>
        <a href="{{route('pinjaman.create')}}"class="btn-sm btn-success"> Tambah Pinjaman</a>
        <a href="{{route('pinjaman_detail.index')}}"class="btn-sm btn-warning ">Detail</a>
        </div>
        <div class="card">
            <div class="card-header">
              Data Pinjaman
            </div>
            <div class="card-body">
                <table class="table table-striped"> 
                    
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Buku</th>
                        <th scope="col">tanggal pinjam</th>
                        <th scope="col">tanggal kembali</th>
                    </tr>
                    
                    @php $id=1;
                    @endphp
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{$id++}}</td>
                        @foreach  ($datas-> peminjam as $peminjams)
                            <td>{{$peminjams->nama}}
                        @endforeach
                        @foreach ($datas->buku as $bukus)
                            <td>{{$bukus->judul}}</td>
                        @endforeach
                        <td>{{$datas->tanggal_pinjaman}}</td>
                        <td>{{$datas->tanggal_kembali}}</td>
                        
                        
                        <td>
                            <form action="{{route('pinjaman.destroy',[ $datas->id])}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            
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
