<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswasController extends Controller
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
        $siswas = Siswa::all();
        return view('siswas.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswas.create');
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
            'gambar'=>'mimes:png,jpg,jpeg,gif,svg',
            'namalengkap' => 'required',
            'nipd' => 'required',
            'jeniskelamin' => 'required',
            'kelas'  => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'nik' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenistinggal' => 'required',
            'transportasi' => 'required',
            'nohp'  => 'required',
            'email' => 'required',
            'beratbadan' => 'required',
            'tinggibadan' => 'required',
            'jarakrumah' => 'required',
            'anak_ke'  => 'required',
            'jumlah_sudara' => 'required',
            'kebutuhankhusus' => 'required',
            'noakte' => 'required',
        ]);
        // dd($request);
        $kirimgambar = $request->gambar->getClientOriginalName().'-'. time().'.'. $request->gambar->extension();
        $request->gambar->move(public_path('images'),$kirimgambar);
        // Siswa::create($request->all());
        Siswa::create([
            'namalengkap'=>$request['namalengkap'],
            'gambar'=>$kirimgambar,
            'nipd'=>$request['nipd'],
            'jeniskelamin'=>$request['jeniskelamin'],
            'kelas'=>$request['kelas'],
            'nisn'=>$request['nisn'],
            'ttl'=>$request['ttl'],
            'nik'=>$request['nik'],
            'agama'=>$request['agama'],
            'alamat'=>$request['alamat'],
            'jenistinggal'=>$request['jenistinggal'],
            'transportasi'=>$request['transportasi'],
            'nohp'=>$request['nohp'],
            'email'=>$request['email'],
            'beratbadan'=>$request['beratbadan'],
            'tinggibadan'=>$request['tinggibadan'],
            'jarakrumah'=>$request['jarakrumah'],
            'anak_ke'=>$request['anak_ke'],
            'jumlah_sudara'=>$request['jumlah_sudara'],
            'kebutuhankhusus'=>$request['kebutuhankhusus'],
            'noakte'=>$request['noakte'],
        ]);
        return redirect('siswas')->with('status','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('siswas.show',['siswa' => Siswa::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswas.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $kirimgambar = null;
        
        if ($request->gambar) {
            $kirimgambar = $request->gambar->getClientOriginalName().'-'. time().'.'. $request->gambar->extension();
        $request->gambar->move(public_path('images'),$kirimgambar);
        }

        Siswa::where('id', $siswa->id)->update([
            'namalengkap' => $request->namalengkap,
            'gambar'=>$kirimgambar,
            'nipd' => $request->nipd,
            'jeniskelamin' => $request->jeniskelamin,
            'kelas' => $request->kelas,
            'nisn' => $request->nisn,
            'ttl' => $request->ttl,
            'nik' => $request->nik,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            // 'jenistinggal' => $request->jenistinggal,
            // 'transportasi' => $request->transportasi,
            'nohp' => $request->nohp,
            'email' => $request->email,
            // 'beratbadan' => $request->beratbadan,
            // // 'tinggibadan' => $request->tinggibadan,
            // 'jarakrumah' => $request->jarakrumah,
            // 'anak_ke' => $request->anak_ke,
            // 'jumlah_sudara' => $request->jumlah_sudara,
            // 'kebutuhankhusus' => $request->kebutuhankhusus,
            // 'noakte' => $request->noakte,
        ]);
        return redirect('siswas')->with('status','data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('siswas')->with('status','data berhasil di hapus');
    }
}
