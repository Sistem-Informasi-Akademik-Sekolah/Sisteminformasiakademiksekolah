@extends('layout.index')

@section('title','Form Edit Siswa')

@section('judul','Form Edit Siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/siswas/{{$siswa->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{$siswa->namalengkap}}">
                </div>
                <div class="mb-3">
                <label for="nipd" class="form-label">Nipd</label>
                <input type="number" class="form-control" name="nipd" value="{{$siswa->nipd}}">
                </div>
                <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-control" aria-label="Default select example" name="jeniskelamin">
                <option selected readonly>{{$siswa->jeniskelamin}}</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <img src="/images/{{$siswa->gambar}}" width="100" alt="">
                <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                </div>
                <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}">
                </div>
                <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="number" class="form-control" name="nisn" value="{{$siswa->nisn}}">
                </div>
                <div class="mb-3">
                <label for="ttl" class="form-label">TTL</label>
                <input type="text" class="form-control" name="ttl" value="{{$siswa->ttl}}">
                </div>
                <div class="mb-3">
                <label for="nik" class="form-label">Nik</label>
                <input type="number" class="form-control" name="nik" value="{{$siswa->nik}}">
                </div>
                <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select form-control" name="agama">
                <option selected readonly>{{$siswa->agama}}</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$siswa->alamat}}">
                </div>
                {{-- <div class="mb-3">
                <label for="jenistinggal" class="form-label">Jenis Tinggal</label>
                <select class="form-select form-control" name="jenistinggal" aria-label="Default select example">
                <option>Rumah</option>
                <option>Kos</option>
                <option>Apartemen</option>  
                </select>
                </div>
                <div class="mb-3">
                <label for="transportasi" class="form-label">Transportasi</label>
                <select class="form-select form-control" name="transportasi" aria-label="Default select example">
                <option>Motor</option>
                <option>Mobil</option>
                <option>Sepeda</option>  
                </select>
                </div> --}}
                <div class="mb-3">
                <label for="nohp" class="form-label">No hp</label>
                <input type="number" class="form-control" name="nohp" value="{{$siswa->nohp}}">
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{$siswa->email}}">
                </div>
                {{-- <div class="mb-3">
                <label for="beratbadan" class="form-label">Berat Badan</label>
                <input type="number" class="form-control" name="beratbadan" value="{{$siswa->beratbadan}}">
                </div>
                <div class="mb-3">
                <label for="tinggibadan" class="form-label">Tinggi Badan</label>
                <input type="number" class="form-control" name="tinggibadan" value="{{$siswa->tinggibadan}}">
                </div> --}}
                {{-- <div class="mb-3">
                <label for="jarakrumah" class="form-label">Jarak Rumah</label>
                <input type="number" class="form-control" name="jarakrumah" value="{{$siswa->jarakrumah}}">
                <small>berapa jarak rumah ke sekolah cth 6 km</small>
                </div>
                <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke</label>
                <input type="number" class="form-control" name="anak_ke" value="{{$siswa->anak_ke}}">
                </div>
                <div class="mb-3">
                <label for="jumlah_sudara" class="form-label">Jumlah Saudara</label>
                <input type="number" class="form-control" name="jumlah_sudara" value="{{$siswa->jumlah_sudara}}">
                </div>
                <div class="mb-3">
                <label for="kebutuhankhusus" class="form-label">Kebutuhan Khusus</label>
                <input type="text" class="form-control" name="kebutuhankhusus" value="{{$siswa->kebutuhankhusus}}">
                </div>
                <div class="mb-3">
                <label for="noakte" class="form-label">No Akte</label>
                <input type="number" class="form-control" name="noakte" value="{{$siswa->noakte}}">
                </div> --}}
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection