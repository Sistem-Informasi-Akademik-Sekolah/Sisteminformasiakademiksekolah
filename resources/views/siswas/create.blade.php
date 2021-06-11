@extends('layout.index')

@section('title','Form Tambah Siswa')

@section('judul','Form Tambah Siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/siswas/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="masukan nama panjang anda" value="{{old('namalengkap')}}">
                @error('namalengkap')
                <div class="alert alert-danger">Nama Lengkap Wajib Di Isi</div>
                @enderror   
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">gambar</label>
                    <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                  </div>
                <div class="mb-3">
                <label for="nipd" class="form-label">Nipd</label>
                <input type="number" class="form-control @error('nipd') is-invalid @enderror" name="nipd" placeholder="contoh : 12345" value="{{old('nipd')}}">
                @error('nipd')
                <div class="alert alert-danger">Nipd Wajib Di Isi</div>
                @enderror   
                </div>
                <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-control @error('jeniskelamin') is-invalid @enderror" aria-label="Default select example" name="jeniskelamin">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
                @error('jeniskelamin')
                <div class="alert alert-danger">Jenis Kelamin Wajib Di Isi</div>
                @enderror   
                </div>
                <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" placeholder="contoh : XI RPL 2">
                @error('kelas')
                <div class="alert alert-danger">Kelas Wajib Di Isi</div>
                @enderror   
                </div>
                <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" placeholder="contoh : 12345">
                @error('nisn')
                <div class="alert alert-danger">Nisn Wajib Di Isi</div>
                @enderror 
                </div>
                <div class="mb-3">
                <label for="ttl" class="form-label">TTL</label>
                <input type="text" class="form-control @error('ttl') is-invalid @enderror" name="ttl" placeholder="contoh : 17 September 2003 Bandung">
                @error('ttl')
                <div class="alert alert-danger">Tempat/Tanggal Lahir Wajib Di Isi</div>
                @enderror 
                </div>
                <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="contoh : 12345">
                @error('nik')
                <div class="alert alert-danger">NIK Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select form-control @error('agama') is-invalid @enderror" name="agama" aria-label="Default select example">
                <option selected>Pilih Agama</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                </select>
                @error('agama')
                <div class="alert alert-danger">Agama Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="alamat" class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Contoh : jalan jati jajar no 20 depok">
                @error('alamat')
                <div class="alert alert-danger">Alamat Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="jenistinggal" class="form-label">Jenis Tinggal</label>
                <select class="form-select form-control @error('jenistinggal') is-invalid @enderror" name="jenistinggal" aria-label="Default select example">
                <option>Rumah</option>
                <option>Kos</option>
                <option>Apartemen</option>  
                </select>
                @error('jenistinggal')
                <div class="alert alert-danger">Jenis Tinggal Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="transportasi" class="form-label">Transportasi</label>
                <select class="form-select form-control @error('transportasi') is-invalid @enderror" name="transportasi" aria-label="Default select example">
                <option>Motor</option>
                <option>Mobil</option>
                <option>Sepeda</option>  
                </select>
                @error('transportasi')
                <div class="alert alert-danger">Transportasi Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nohp" class="form-label">No hp</label>
                <input type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" placeholder="contoh : 019801211">
                @error('nohp')
                <div class="alert alert-danger">No hp Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="contoh : rini@gmail.com">
                @error('email')
                <div class="alert alert-danger">Email Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="beratbadan" class="form-label">Berat Badan</label>
                <div class="input-group">
                <input type="number" name="beratbadan"  min="1" class="form-control @error('beratbadan') is-invalid @enderror" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">Kg</span>
                @error('beratbadan')
                <div class="alert alert-danger">Berat Badan Wajib Di Isi</div>
                @enderror
                </div>
                </div>
                <div class="mb-3">
                <label for="tinggibadan" class="form-label">Tinggi Badan</label>
                <div class="input-group">
                <input type="number" name="tinggibadan" min="1" class="form-control @error('tinggibadan') is-invalid @enderror" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">Cm</span>
                @error('tinggibadan')
                <div class="alert alert-danger">Berat Badan Wajib Di Isi</div>
                @enderror
                </div>
                </div>
                <div class="mb-3">
                <label for="jarakrumah" class="form-label">Jarak Rumah</label>
                <div class="input-group">
                <input type="number" name="jarakrumah" min="1" class="form-control @error('jarakrumah') is-invalid @enderror" aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">Km</span>
                @error('jarakrumah')
                <div class="alert alert-danger">Berat Badan Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="anak_ke" class="form-label">Anak Ke</label>
                <input type="number" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" placeholder="contoh : 1">
                @error('anak_ke')
                <div class="alert alert-danger">Anak Ke Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="jumlah_sudara" class="form-label">Jumlah Saudara</label>
                <input type="number" class="form-control @error('jumlah_sudara') is-invalid @enderror" name="jumlah_sudara" placeholder="contoh : 1">
                @error('jumlah_sudara')
                <div class="alert alert-danger">Jumlah Saudara Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="kebutuhankhusus" class="form-label">Kebutuhan Khusus</label>
                <input type="text" class="form-control @error('kebutuhankhusus') is-invalid @enderror" name="kebutuhankhusus" placeholder="contoh : jika tidak ada tuliskan tidak ada">
                @error('kebutuhankhusus')
                <div class="alert alert-danger">Kebutuhan Khusus Wajib Di Isi</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="noakte" class="form-label">No Akte</label>
                <input type="number" class="form-control @error('noakte') is-invalid @enderror" name="noakte" placeholder="contoh : 1">
                @error('noakte')
                <div class="alert alert-danger">No Akte Wajib Di Isi</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection