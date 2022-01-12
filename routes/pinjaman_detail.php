<?php

namespace App\Models;
use App\Models\pinjaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman_detail extends Model
{
    protected $table ='pinjaman_details';

public function pinjaman_details ()
{
    return $this->belongsTo('app/pinjaman','id');
    
}



}
