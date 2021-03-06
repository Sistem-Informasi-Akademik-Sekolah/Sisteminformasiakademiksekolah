<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengetahuan;
use App\Siswa;
use App\Kelas;

class PengetahuanController extends Controller
{

    public function index(){
        $pengetahuans = Pengetahuan::all();
        return view('pengetahuan.index',compact('pengetahuans'));
    }
    public function create(){
        $siswas = Siswa::all();
        $kelass = kelas::all();
        return view('pengetahuan.create',compact('siswas','kelass'));
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
        Pengetahuan::create($request->all());
        return redirect('pengetahuan')->with('status','data berhasil di tambah');
    }
}
