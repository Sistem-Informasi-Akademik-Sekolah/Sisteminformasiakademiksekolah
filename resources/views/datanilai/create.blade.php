@extends('layout.index')

@section('title','Form Tambah data nilai')

@section('judul','Form Tambah data nilai')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/datanilai/store" method="POST">
                @csrf
                <div class="mb-3">
                <label for="namasiswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" placeholder="masukan nama siswa " value="{{old('nama_siswa')}}"> 
                @error('nama_siswa')
                <div class="alert alert-danger">{{ "isi nama siswa" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control  @error('kelas') is-invalid @enderror" name="kelas" placeholder="masukan  kelas" value="{{old('kelas')}}">
                @error('kelas')
                <div class="alert alert-danger">{{ "isi kelas" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mapel</label>
                <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" name="nama_mapel" placeholder="masukan nama mapel" value="{{old('nama_mapel')}}">
                @error('nama_mapel')
                <div class="alert alert-danger">{{ "isi Nama Mapel" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nilai_pengetahuan" class="form-label">nilai pengetahuan</label>
                <input type="text" class="form-control @error('nilai_pengetahuan') is-invalid @enderror" name="nilai_pengetahuan" placeholder="masukan guru pengajar"  value="{{old('nilai_pengetahuan')}}">
                @error('nilai_pengetahuan')
                <div class="alert alert-danger">{{ "isi nilai" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nilai_keterampilan" class="form-label">nilai keterampilan</label>
                <input type="text" class="form-control @error('nilai_keterampilan') is-invalid @enderror" name="nilai_keterampilan" placeholder="masukan guru pengajar"  value="{{old('nilai_keterampilan')}}">
                @error('nilai_keterampilan')
                <div class="alert alert-danger">{{ "isi nilai" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="nilai_KKM" class="form-label">nilai kkm</label>
                <input type="text" class="form-control @error('nilai_KKM') is-invalid @enderror" name="nilai_KKM" placeholder="masukan guru pengajar"  value="{{old('nilai_KKM')}}">
                @error('nilai_KKM')
                <div class="alert alert-danger">{{ "isi nilai kkm" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="masukan guru pengajar"  value="{{old('deskripsi')}}">
                @error('deskripsi')
                <div class="alert alert-danger">{{ "isi deskripsi" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="predikat" class="form-label">predikat</label>
                <input type="text" class="form-control @error('predikat') is-invalid @enderror" name="predikat" placeholder="masukan guru pengajar"  value="{{old('predikat')}}">
                @error('predikat')
                <div class="alert alert-danger">{{ "isi predikat" }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection