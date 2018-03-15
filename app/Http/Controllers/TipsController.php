<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
use Session;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   		$tip = Tip::all();
        return view('tips.index', compact('tip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tips.create');
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
        $tip = new Tip();
        $tip->Tips = $request->Tips;
        $tip->Isi = $request->Isi;
        $tip->save();
        return redirect('tips.index');
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
        $tip = Tip::find($id);
        return view('tips.show', compact('tip'));
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
        $tip = Tip::findOrFail($id);
        return view('tips.edit', compact('tip'));
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
        $tip = Tip::findOrFail($id);
        $tip->Tips = $request->Tips;
        $tip->Isi = $request->Isi;
        $tip->save();
        return redirect()->route('tips.index');
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
        $tip = Tip::findOrFail($id);
        $tip->delete();
        return redirect()->route('tips.index');
    }
}
