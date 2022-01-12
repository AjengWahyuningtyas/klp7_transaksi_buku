<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data= buku::all();
        return view('buku.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $name = 'test_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/test');
            $image->move($destinationPath, $name);
        }
        $Validator = validator::make($request->all(), [
            
            'kode' => 'required|max:100',
            'judul' => 'required'
            
        ]);

        if($Validator->fails()){
            return redirect('buku/create')
            ->withErrors($Validator)
            ->withInput();
        }
        $buku = new buku();
        $simpan=$buku->create($request->all());
        if ($simpan){
            Alert::success('Informasi','Data Berhasil Disimpan');
            return redirect()->route('buku.index');
        }else{
            Alert::error('Error','Ups Data Gagal Disimpan');
            return redirect()->route('buku.index');
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
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=buku::findOrfail($id);
        return view('buku.edit',compact('data'));
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
        $buku= buku::findOrfail($id);
        $simpan= $buku->update($request->all());
        
        if($simpan) {
        toast('Data Berhasil Diupdate','success','top-right');
        return redirect()->route('buku.index');
        }else{
        alert()->error('Pesan error','Data Gagal Diupdate');
        return redirect()->route('buku.index');
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
        $buku=buku::findOrfail($id);
        $hapus=$buku->delete();
        if($hapus) {
            toast('Data Berhasil Dihapus','success','top-right');
            return redirect()->route('buku.index');
        }else{
            alert()->error('Pesan error','Data Gagal Dihapus');
        return redirect()->route('buku.index');
    }
    }
}
