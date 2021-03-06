<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataRaport;
use App\Siswa;
use App\Kelas;
use App\DataMapel;
use App\DataNilai;
use App\Keterampilan;
use App\Pengetahuan;

class DataRaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataraport = DataRaport::latest()->paginate();
        // dd($dataraport);
        return view('dataraport.index',compact('dataraport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        $kelass = Kelas::all();
        $datamapel = DataMapel::all();
        $datanilai = DataNilai::all();
        $keterampilans = Keterampilan::all();
        $pengetahuans = Pengetahuan::all();
        return view('dataraport.create',compact('siswas','kelass','datamapel','datanilai','keterampilans','pengetahuans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataRaport::create($request->all());
        // $pengetahuans_id->$request->input('pengetahuans_id');
        // $keterampilans_id->$request->input('keterampilans_id');
        // $nilaiakhir = ($pengetahuans_id + $keterampilans_id)/2;
        // echo $nilaiakhir;
        return redirect('dataraport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dataraport.show',['dataraport'=>DataRaport::findorFail($id)]);
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
