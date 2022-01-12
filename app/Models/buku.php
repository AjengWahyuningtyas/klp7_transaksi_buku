<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table ='bukus';
    protected $fillable= ['id','kode','judul','kategori','deskripsi','penerbit','tahun_terbit','Pengarang','jumlah_halaman','Kondisi','stok','Status','Foto_sampul'];
    
    public function pinjaman(){
        return $this->belongsTo(pinjaman::class,'id');
    }
}

