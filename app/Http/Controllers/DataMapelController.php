<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataMapel;
// use App\Siswa;
// use App\Kelas;
use App\GurudanKaryawan;

class DataMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $datamapel = DataMapel::latest()->paginate();
    return view('datamapel.index',compact('datamapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $siswass = Siswa::all();
        // $kelass = Kelas::all();
        $gurudankaryawans = GurudanKaryawan::all();
        return view('datamapel.create',compact('gurudankaryawans'));
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
            'kode_mapel' => 'required',
            // 'siswas_id'=>'required',
            'nama_mapel'=>'required',
            // 'kelass_id'=>'required',
            'gurudankaryawans_id'=>'required',
        ]);

        DataMapel::create($request->all());
        return redirect('datamapel')->with('status','Data Mapel Berhasil Di Tambah');
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
    public function edit(DataMapel $datamapel)
    {
        return view('datamapel.edit',compact('datamapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMapel $datamapel)
    {
        
        Datamapel::where('id', $datamapel->id)->update([
            'kode_mapel' => $request->kode_mapel,
            // 'siswas_id' => $request->siswas_id,
            'nama_mapel' => $request->nama_mapel,
            // 'gurudankaryawans_id'=>$request->gurudankaryawans_id,
        ]);
        return redirect('datamapel')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataMapel $datamapel)
    {
        DataMapel::destroy($datamapel->id);
        return redirect('datamapel')->with('status','data berhasil di hapus');
    }
}
