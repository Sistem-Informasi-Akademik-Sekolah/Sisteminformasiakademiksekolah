<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UasdanUts;
use App\Siswa;
use App\DataMapel;

class UasdanUtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uasdanuts = UasdanUts::latest()->paginate();
        return view('uasdanuts.index',compact('uasdanuts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        $datamapel = DataMapel::all();
        return view('uasdanuts.create',compact('siswas','datamapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nilai_utsatu' => 'required',
        'nilai_utsdua' => 'required',
        'nilai_uasatu' => 'required',
        'nilai_uasdua' => 'required',
        'jumlah_uts'=>'required',
        'jumlah_uas'=>'required',
        'jumlahsemua' => 'required',
        ]);
        $uasdanuts = new UasdanUts;
        $uasdanuts->siswas_id = $request->siswas_id;
        $uasdanuts->datamapel_id = $request->datamapel_id;
        $uasdanuts->nilai_utsatu = $request->nilai_utsatu;
        $uasdanuts->nilai_utsdua = $request->nilai_utsdua;
        $uasdanuts->jumlah_uts = $request->jumlah_uts;
        $uasdanuts->nilai_uasatu = $request->nilai_uasatu;
        $uasdanuts->nilai_uasdua = $request->nilai_uasdua;
        $uasdanuts->jumlah_uas = $request->jumlah_uas;
        $uasdanuts->jumlahsemua = $request->jumlahsemua;
        $uasdanuts->save();
        return redirect('uasdanuts')->with('status','data berhasil di tambah');
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
