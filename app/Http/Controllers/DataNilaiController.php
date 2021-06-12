<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNilai;
use Auth;
use App\Siswa;
class DataNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // untuk mengantisipasi user nekat
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
    $datanilai = DataNilai::all();
    return view('datanilai.index',compact('datanilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        return view('datanilai.create',compact('siswas'));
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
            // 'nama_siswa' => 'required',
            // 'kelas' => 'required',
            // 'nama_mapel' => 'required',
            // 'nilai_pengetahuan' => 'required',
            // 'nilai_keterampilan' => 'required',
            // 'nilai_KKM'=>'required',
            // 'deskripsi'=>'required',
            // 'predikat'=>'required',
            'siswas_id'=>'required',
            'nilai'=>'required',
            'kkm'=>'required',
        ]);

        DataNilai::create($request->all());
        return redirect('datanilai')->with('status','Data nilai Berhasil Di Tambah');
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
    public function edit(DataNilai $datanilai)
    {
        return view('datanilai.edit',compact('datanilai'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataNilai $datanilai)
    {
        
        Datanilai::where('id', $datanilai->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'nama_mapel' => $request->nama_mapel,
            'nilai_pengetahuan' => $request->nilai_pengetahuan,
            'nilai_keterampilan' => $request->nilai_keterampilan,
            'nilai_KKM'=>$request->nilai_KKM,
            'deskripsi'=>$request->deskripsi,
            'predikat'=>$request->predikat,
        ]);
        return redirect('datanilai')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataNilai $datanilai)
    {
        DataNilai::destroy($datanilai->id);
        return redirect('datanilai')->with('status','data berhasil di hapus');
    }
}
