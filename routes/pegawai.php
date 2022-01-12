<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
   protected $table = 'pegawais';
   protected $fillable = ['id','nama','alamat','telepon','jenis_kelamin'];
}

