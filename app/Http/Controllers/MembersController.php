<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawais;
use App\Members;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama'=>'required',
            'ttl'=>'required',
            'alamat'=>'required',
            'notlp'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'kewarganegaraan'=>'required',
            'status'=>'required',
            'email'=>'required',
            'hoby'=>'required',
            'sd'=>'required',
            'smp'=>'required',
            'sma'=>'required',
            'pt'=>'required',
            'pk'=>'required']);
        $pegawai = Members::create($request->only('nama','alamat','notlp','keterangan_perusahaan','jenis_pekerjaan'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $pegawai->nama"]);
        return redirect()->route('members.index');
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
        $pegawai = User::find($id);
        return view('pegawais.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
