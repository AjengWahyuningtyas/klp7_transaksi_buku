@extends('layouts.admin')
@section('content')
<div class=row>
    <div class="col-md-10">
        <div>
        <a href="{{route('pinjaman.index')}}"class="btn-sm btn-success"> Kembali</a>
        </div>
        <div class="card">
            <div class="card-header">
              Data Detail Pinjaman
            </div>
            <div class="card-body">
                <table class="table table-striped"> 
                    
                    <tr>
                        
                        <th scope="col">Id Pinjaman</th>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Status</th>
                    </tr>
                    
                    
                    @foreach ($pinjaman_detail as $datas)
                    <tr>
                        
                        <td>{{$datas->pinjaman->id}}</td>
                        <td>{{$datas->buku->id}}</td>
                        <td>{{$datas->status}}</td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="id" value="{{$datas->pinjaman->id}}" disabled>
                        </div>  
                        <div class="form-group">
                            <input type="text" class="form-control" name="id" value="{{$datas->buku->id}}" disabled>
                        </div> 
                        
                        
                        
                    </tr>
                
                    @endforeach
            
                </table>
            </div>
          </div>
    </div>
</div>
 
@endsection