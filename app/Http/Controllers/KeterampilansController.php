<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keterampilan;
use App\Siswa;
use App\Kelas;

class KeterampilansController extends Controller
{
    public function index(){
        $keterampilans = Keterampilan::all();
        return view('keterampilan.index',compact('keterampilans'));
    }
    public function create(){
        $siswas = Siswa::all();
        $kelass = kelas::all();
        return view('keterampilan.create',compact('siswas','kelass'));
    }
    public function simpan(Request $request){
        $request->validate([
        'nilaikd1' => 'required',
        'nilaikd2' => 'required',
        'nilaikd3' => 'required',
        'nilaikd4' => 'required',
        'nilaikd5' => 'required',
        'nilaikd6' => 'required',
        'nilaikd7' => 'required',
        'nilaikd8' => 'required',
        'nilaikd9' => 'required',
        'nilaikd10' => 'required',
        ]);
        Keterampilan::create($request->all());
        return redirect('keterampilans')->with('status','data berhasil di tambah');
    }
}
