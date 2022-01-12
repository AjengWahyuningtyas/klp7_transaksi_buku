@extends('layouts.admin')
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<div class="container">
<div class=row>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Edit Data Buku
            </div>
            <div class="card-body">

{!! Form::model($data, ['route'=>['buku.update',$data->id],'method'=>'PUT']) !!}
    <div class="mb-3">
        <label for="id" class="form-label">ID Buku</label>
        {!! Form::text('id', null, ['class'=>'form-control','id']) !!}
    </div>

    <div class="mb-3">
        <label for="kode" >Kode Buku</label>
        {!! Form::text('kode', null, ['class'=>'form-control','kode']) !!}
    </div>

    <div class="mb-3">
        <label for="judul" >Judul Buku</label>
        {!! Form::text('judul', null, ['class'=>'form-control','judul']) !!}
    </div>

    <div class="mb-3">
        <label for="deskripsi" >Deskripsi Buku</label>
        {!! Form::text('deskripsi', null, ['class'=>'form-control','deskripsi']) !!}
    </div>
    
    <div class="mb-3">
        <label for="Penerbit" >Penerbit</label>
        <select name="penerbit" id=""class="form-control">
            <option {{old('penerbit',$data->jenis_kelamin)=="Bloomsbury"? 'selected':''}}value="Bloomsbury">Bloomsbury</option>
            <option {{old('penerbit',$data->jenis_kelamin)=="HarperCollins"? 'selected':''}}value="HarperCollins">HarperCollins</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" >Tahun Terbit</label>
        {!! Form::text('tahun_terbit', null, ['class'=>'form-control','tahun_terbit']) !!}
    </div>
    
    <div class="mb-3">
        <label for="pengarang" >Pengarang</label>
        {!! Form::text('pengarang', null, ['class'=>'form-control','pengarang']) !!}
    </div>

    <div class="mb-3">
        <label for="jumlah_halaman" >Jumlah Halaman</label>
        {!! Form::text('jumlah_halaman', null, ['class'=>'form-control','jumlah_halaman']) !!}
    </div>

    <div class="mb-3">
        <label for="Kondisi" >Kondisi</label>
        <select name="kondisi" id=""class="form-control">
            <option {{old('kondisi',$data->kondisi)=="Baik"? 'selected':''}}value="Baik">Baik</option>
            <option {{old('kondisi',$data->kondisi)=="rusak"? 'selected':''}}value="rusak">rusak</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Status" >Status</label>
        <select name="status" id=""class="form-control">
            <option {{old('status',$data->status)=="bebas"? 'selected':''}}value="bebas">bebas</option>
            <option {{old('status',$data->status)=="terpinjam"? 'selected':''}}value="terpinjam">terpinjam</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Foto_sampul" >Foto Sampul</label>
        {!! Form::file('Foto_sampul', null, ['class'=>'form-control-file','Foto_sampul']) !!}
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