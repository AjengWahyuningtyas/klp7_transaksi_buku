<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    protected $table='pinjamen';
    protected $fillable=['id','peminjam_id','buku_id','tanggal_pinjaman','tanggal_kembali'];

    public function buku()
    {
        return $this->hasMany(buku::class,'id');
    }
    public function peminjam()
    {
        return $this->hasMany(peminjam::class,'id');
    }
}
