<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_controller extends Controller
{
    public function index(){
        $title='dashboard';
        
        return view('beranda.beranda_index',compact('title'));
    }
}
