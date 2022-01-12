<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Models\pinjaman;
use App\Models\pinjaman_detail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\buku;
use Illuminate\Support\Facades\DB;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= pinjaman::all();
        $buku= buku::all();
        $peminjam= peminjam::all();
        //dd($data);
        return view('pinjaman.index',compact('data','buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = DB::table('bukus')
         ->groupBy('kategori')
         ->get();
        $peminjam = peminjam::all();
        $pinjaman = pinjaman::all();
        return view('pinjaman.tambah',compact('buku','peminjam','pinjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new pinjaman();
        $data->save($request->all());
        return redirect ()->route ('pinjaman.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= pinjaman::all();
        return view('pinjaman.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = pinjaman::findOrfail($id);
        $simpan=$data->update($request->all());
        if($simpan) {
            toast('Data Berhasil Diupdate','success','top-right');
            return redirect()->route('pinjaman.index');
        }else{
            alert()->error('Pesan error','Data Gagal Diupdate');
        return redirect()->route('pinjaman.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pinjaman::findOrfail($id);
        $hapus=$data->delete();
        if($hapus) {
            toast('Data Berhasil Dihapus','success','top-right');
            return redirect()->route('pinjaman.index');
        }else{
            alert()->error('Pesan error','Data Gagal Dihapus');
        return redirect()->route('pinjaman.index');
    }
    } 
    public function newpinjaman(Request $request)
    {
        $data=pinjaman::create
        ([
            $tanggal_kembali =$request->input('tanggal_kembali')

        ]);
        

    }
    
}
