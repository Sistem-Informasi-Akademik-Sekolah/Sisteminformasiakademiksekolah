<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Siswa;

class KelasController extends Controller
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
        $kelass = Kelas::all();
        return view('kelas.index',compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function create()
    {
        $siswas = Siswa::all();
        $kelas = Kelas::all();
        return view('kelas.create',compact('siswas','kelas'));
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
            'kelas' => 'required',
            'siswas_id'=>'required',
            'walas' => 'required',
            'tahunajaran'=>'required|numeric',
            'keterangan'=>'required',
        ]);
        Kelas::create($request->all());
        return redirect('kelass')->with('status','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('kelas.show',['kelas'=>Kelas::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        $siswas = Siswa::all();
        return view('kelas.edit',compact('kelas','siswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        Kelas::where('id', $kelas->id)->update([
            'siswas_id'=>$request->siswas_id,
            'kelas' => $request->kelas,
            'walas' => $request->walas,
            'tahunajaran' => $request->tahunajaran,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('kelass')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect('kelass')->with('status','data berhasil di hapus');
    }
}
