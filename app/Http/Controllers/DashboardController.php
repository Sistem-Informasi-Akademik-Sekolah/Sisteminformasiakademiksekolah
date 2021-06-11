<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Gurudankaryawan;
use App\DataMapel;
use App\DataNilai;

class DashboardController extends Controller
{
    //
    public function index()
    {   $siswas = Siswa::all();
        $kelases = Kelas::all();
        $gurudankaryawans = Gurudankaryawan::all();
        $datamapel = Datamapel::all();
        $datanilai = Datanilai::all();
        return view('admin',compact('siswas','kelases','gurudankaryawans','datamapel','datanilai'));
    }

    // public function Kelas()
    // {   $kelases = Kelas::all();
    //     return view('index',compact('kelases'));
    // }

    
    
}
