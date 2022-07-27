<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Ubm;
use Illuminate\Http\Request;

class UbmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $ubm = Ubm::all();
        return view('page.ubm.index', compact('ubm','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        return view('page.ubm.form', compact('pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ubm = new Ubm();

        $ubm->pasiens_id    = $request->nama;
        $ubm->konseling      = $request->konseling;
        $ubm->car   = $request->car;
        $ubm->rujuk_ubm   = $request->rujuk_ubm;
        $ubm->kondisi   = $request->kondisi;
        $ubm->save();

        return redirect('/ubm');
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
        $pasien      = Pasien::all();
        $ubm  = Ubm::find($id);
        return view('page.ubm.edit',compact('ubm','pasien'));
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
        $ubm = Ubm::find($id);

        $ubm->pasiens_id    = $request->nama;
        $ubm->konseling      = $request->konseling;
        $ubm->car   = $request->car;
        $ubm->rujuk_ubm   = $request->rujuk_ubm;
        $ubm->kondisi   = $request->kondisi;
        $ubm->save();

        return redirect('/ubm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubm  = Ubm::find($id);
        $ubm->delete();
        return redirect('/ubm');
    }
}
