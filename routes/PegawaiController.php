<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = pegawai::all();
        return view('pegawai.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.tambah');
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
            'id'  => 'required|max:10',
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|max:20',
            'alamat'=>'required|max:255'
        ]);
        if($Validator->fails()){
            return redirect('pegawai/create')
            ->withErrors($Validator)
            ->withInput();
        }
        $data = new pegawai();
        $hasil=$data->create($request->all());
        if ($hasil){
            Alert::success('Informasi','Data Berhasil Disimpan');
            return redirect()->route('pegawai.index');
        }else{
            Alert::error('Error','Ups Data Gagal Disimpan');
            return redirect()->route('pegawai.index');
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
    public function edit( $id)
    {
        $data = pegawai::findOrfail($id); 
        return view('pegawai.edit', compact('data'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        $data = pegawai::findOrfail($id);
        $simpan=$data->update($request->all());
        if($simpan) {
            toast('Data Berhasil Diupdate','success','top-right');
            return redirect()->route('pegawai.index');
        }else{
            alert()->error('Pesan error','Data Gagal Diupdate');
        return redirect()->route('pegawai.index');
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
        $data = pegawai::findOrfail($id);
        $hapus=$data->delete();
        if($hapus) {
            toast('Data Berhasil Dihapus','success','top-right');
            return redirect()->route('pegawai.index');
        }else{
            alert()->error('Pesan error','Data Gagal Dihapus');
        return redirect()->route('pegawai.index');
    }
}
}
    

