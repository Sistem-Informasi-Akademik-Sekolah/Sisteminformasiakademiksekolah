@extends('layout.index')

@section('title','Form Tambah Guru dan Karyawan')

@section('judul','Form Tambah Guru dan Karyawan')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/gurudankaryawans/store" method="POST">
                @csrf
                <div class="mb-3">
                <label for="nutpk" class="form-label">Nutpk</label>
                <input type="number" class="form-control @error('nutpk') is-invalid @enderror" name="nutpk" placeholder="masukan nutpk" value="{{old('nutpk')}}">
                @error('nutpk')
                <div class="alert alert-danger">{{ "masukan nutpk "}}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="number" class="form-control  @error('nik') is-invalid @enderror" name="nik" placeholder="masukan nik" value="{{old('nutpk')}}">
                    @error('nik')
                    <div class="alert alert-danger">{{ "masukan nik "}}</div>
                    @enderror
                    </div>
                <div class="mb-3">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap" placeholder="masukan nama lengkap" value="{{old('namalengkap')}}">
                    @error('namalengkap')
                    <div class="alert alert-danger">{{ "masukan nama lengkap "}}</div>
                    @enderror
                    </div>
                <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-control" name="jeniskelamin" aria-label="Default select example">
                <option>Perempuan</option>
                <option>Laki-Laki</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control @error('ttl') is-invalid @enderror" name="ttl" placeholder="masukan tempat/tanggal lahir" value="{{old('ttl')}}">
                @error('ttl')
                <div class="alert alert-danger">{{ "masukan ttl "}}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="statuspegawai" class="form-label">Status Pegawai</label>
                <input type="text" class="form-control  @error('statuspegawai') is-invalid @enderror" name="statuspegawai" placeholder="contoh : guru" value="{{old('statuspegawai')}}">
                @error('statuspegawai')
                <div class="alert alert-danger">{{ "masukan statuspegawai "}}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="tmt" class="form-label">Terhitung Mulai Tanggal</label>
                <input type="date" class="form-control @error('tmt') is-invalid @enderror" name="tmt" placeholder="masukan terhitung mulai tanggal" value="{{old('tmt')}}">
                @error('tmt')
                <div class="alert alert-danger">{{ "masukan tmt "}}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" placeholder="contoh : 085643" value="{{old('nohp')}}">
                @error('nohp')
                <div class="alert alert-danger">{{ "masukan no hp "}}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="usernametelegram" class="form-label">Username Telegram</label>
                <input type="text" class="form-control @error('usernametelegram') is-invalid @enderror" name="usernametelegram" placeholder="masukan username" value="{{old('usernametelegram')}}">
                @error('usernametelegram')
                <div class="alert alert-danger">{{ "masukan username telegram "}}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection