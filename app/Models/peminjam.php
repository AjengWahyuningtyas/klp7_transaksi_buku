<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $table ='peminjams';
    protected $fillable = ['id','nama','alamat','telepon','tanggal_lahir'];

public function pinjama ()
{
    return $this->belongsTo('pinjaman','id');
    
}

}