@extends('layout.index')

@section('title','Form Edit data mapel')

@section('judul','Form Edit data mapel')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/datanilai/{{$datanilai->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{$datanilai->nama_siswa}}">
                </div>
                <div class="mb-3">
                <label for="kelas" class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{$datanilai->kelas}}">
                </div>
                <div class="mb-3">
                    <label for="nama_mapel" class="form-label">Nama Mapel</label>
                    <input type="text" class="form-control" name="nama_mapel" value="{{$datanilai->nama_mapel}}">
                </div>
                <div class="mb-3">
                <label for="nilai_pengetahuan" class="form-label">Nilai pengetahuan</label>
                <input type="text" class="form-control" name="nilai_pengetahuan" value="{{$datanilai->nilai_pengetahuan}}">
                </div>
                <div class="mb-3">
                <label for="nilai_keterampilan" class="form-label">Nilai keterampilan</label>
                <input type="text" class="form-control" name="nilai_keterampilan" value="{{$datanilai->nilai_keterampilan}}">
                </div>
                <div class="mb-3">
                <label for="nilai_KKM" class="form-label">Nilai kkm</label>
                <input type="text" class="form-control" name="nilai_KKM" value="{{$datanilai->nilai_KKM}}">
                </div>
                <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="{{$datanilai->deskripsi}}">
                </div>
                <div class="mb-3">
                <label for="predikat" class="form-label">Predikat</label>
                <input type="text" class="form-control" name="predikat" value="{{$datanilai->predikat}}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection