<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Civi;
use App\Perusahaan;
use Session;
use Illuminate\Support\Facades\Auth;

class CivisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $civi = Civi::all();
        return view('civis.index', compact('civi'));
    }

    public function tambah($id)
    {
        //
        $lowongan = Perusahaan::find($id);
        return view('civis.index', compact('lowongan'));
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
        $civi = new Civi;
        $civi->nama = $request->nama;
        $civi->ttl = $request->ttl;
        $civi->alamat = $request->alamat;
        $civi->notlp = $request->notlp;
        $civi->jk = $request->jk;
        $civi->agama = $request->agama;
        $civi->kewarganegaraan = $request->kewarganegaraan;
        $civi->status = $request->status;
        $civi->email = $request->email;
        $civi->hoby = $request->hoby;
        $civi->sd = $request->sd;
        $civi->smp = $request->smp;
        $civi->sma = $request->sma;
        $civi->pt = $request->pt;
        $civi->pk = $request->pk;
        $civi->lowongan_id = $request->lowongan_id;
        $jj = Perusahaan::find($request->lowongan_id);
        $civi->akun_id = $jj->akun_id;

        if($request->hasFile('cover'))
        {
            $uploaded_cover=$request->file('cover');
            $extension=$uploaded_cover->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_cover->move($destinationPath, $filename);
            $civi->cover=$filename;
            
        }

        $civi->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $civi->nama"]);
        return redirect()->route('lowongans.index');
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
        $civi = Civi::find($id);
        return view('civis.show', compact('civi'));
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
