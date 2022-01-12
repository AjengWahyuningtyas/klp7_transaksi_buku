<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= peminjam::all();
        return view('peminjam.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjam.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validator = validator::make($request->all(), [
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'telepon' => 'required|max:20',
            'tanggal_lahir'=>'required'
        ]);
        if($Validator->fails()){
            return redirect('peminjam/create')
            ->withErrors($Validator)
            ->withInput();
        }
        $data = new peminjam();
        $hasil=$data->create($request->all());
        if ($hasil){
            Alert::success('Informasi','Data Berhasil Disimpan');
            return redirect()->route('peminjam.index');
        }else{
            Alert::error('Error','Ups Data Gagal Disimpan');
            return redirect()->route('peminjam.index');
        }
       
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
        $data = peminjam::findOrfail($id); 
        return view('peminjam.edit', compact('data'));
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
        $data = peminjam::findOrfail($id);
        $simpan=$data->update($request->all());
        if($simpan) {
            toast('Data Berhasil Diupdate','success','top-right');
            return redirect()->route('peminjam.index');
        }else{
            alert()->error('Pesan error','Data Gagal Diupdate');
        return redirect()->route('peminjam.index');
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
        $data = peminjam::findOrfail($id);
        $hapus=$data->delete();
        if($hapus) {
            toast('Data Berhasil Dihapus','success','top-right');
            return redirect()->route('peminjam.index');
        }else{
            alert()->error('Pesan error','Data Gagal Dihapus');
        return redirect()->route('peminjam.index');
    }
}
}
