<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GurudanKaryawan;

class GurudankaryawansController extends Controller
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
        $gurudankaryawans = Gurudankaryawan::all();
        return view('gurudankaryawans.index',compact('gurudankaryawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gurudankaryawans.create");
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
            'nutpk' => 'required',
            'nik' => 'required',
            'namalengkap' => 'required',
            'jeniskelamin' => 'required',
            'ttl' => 'required',
            'tmt' => 'required',
            'nohp' => 'required',
            'usernametelegram' => 'required',
        ]);
        Gurudankaryawan::create($request->all());
        return redirect('gurudankaryawans')->with('status','berhasil di tambahkan');
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
    public function edit(Gurudankaryawan $gurudankaryawan)
    {
        return view('gurudankaryawans.edit',compact('gurudankaryawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gurudankaryawan $gurudankaryawan)
    {
        Gurudankaryawan::where('id', $gurudankaryawan->id)->update([
            'nutpk' => $request->nutpk,
            'nik' => $request->nik,
            'namalengkap' => $request->namalengkap,
            'jeniskelamin' => $request->jeniskelamin,
            'ttl' => $request->ttl,
            'statuspegawai' => $request->statuspegawai,
            'tmt' => $request->tmt,
            'nohp' => $request->nohp,
            'usernametelegram' => $request->usernametelegram,
        ]);
        return redirect('gurudankaryawans')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gurudankaryawan $gurudankaryawan)
    {
        Gurudankaryawan::destroy($gurudankaryawan->id);
        return redirect('gurudankaryawans')->with('status','data berhasil di hapus');
    }
}
