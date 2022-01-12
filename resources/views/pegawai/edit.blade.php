@extends('layouts.admin')
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<div class="container">
<div class=row>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              Edit Data Pegawai
            </div>
            <div class="card-body">

{!! Form::model($data, ['route'=>['pegawai.update',$data->id],'method'=>'PUT']) !!}
    <div class="mb-3">
        <label for="id" >Id Pegawai</label>
        {!! Form::text('id', null, ['class'=>'form-control','id']) !!}
    </div>

    <div class="mb-3">
        <label for="nama" >Nama Pegawai</label>
        {!! Form::text('nama', null, ['class'=>'form-control','nama']) !!}
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" >Jenis Kelamin</label>
        <select name="jenis_kelamin" id=""class="form-control">
            <option {{old('jenis_kelamin',$data->jenis_kelamin)=="laki-laki"? 'selected':''}}value="laki-laki">Laki-laki</option>
            <option {{old('jenis_kelamin',$data->jenis_kelamin)=="perempuan"? 'selected':''}}value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="telepon" >Telepon</label>
        {!! Form::text('telepon', null, ['class'=>'form-control','telepon']) !!}
    </div>

    <div class="mb-3">
        <label for="alamat" >Alamat</label>
        {!! Form::text('alamat', null, ['class'=>'form-control','alamat']) !!}
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