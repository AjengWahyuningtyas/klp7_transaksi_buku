@extends('layouts.admin')
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<div class="container">
<div class=row>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              Edit Data Peminjam
            </div>
            <div class="card-body">

{!! Form::model($data, ['route'=>['peminjam.update',$data->id],'method'=>'PUT']) !!}

    <div class="mb-3">
        <label for="nama" >Nama Peminjam</label>
        {!! Form::text('nama', null, ['class'=>'form-control','nama']) !!}
    </div>

    <div class="mb-3">
        <label for="alamat" >Alamat</label>
        {!! Form::text('alamat', null, ['class'=>'form-control','alamat']) !!}
    </div>

    <div class="mb-3">
        <label for="telepon" >No Telepon</label>
        {!! Form::text('telepon', null, ['class'=>'form-control','telepon']) !!}
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" >Tanggal Lahir</label>
        {!! Form::date('tanggal_lahir', null, ['class'=>'form-control','tanggal_lahir']) !!}
    </div>


    <div class="mb-3">
        {!! Form::submit('simpan', ['class'=>'btn-sm btn-success']) !!}
    </div>

{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>

@endsection