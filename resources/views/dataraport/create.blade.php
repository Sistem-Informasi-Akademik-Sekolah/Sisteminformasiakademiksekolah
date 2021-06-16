@extends('layout.index')

@section('title','Form Tambah data nilai')

@section('judul','Form Tambah data nilai')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/dataraport/store" method="POST">
                @csrf
                <div class="mb-3">
                <label for="namasiswa" class="form-label">Nama Siswa</label>
                <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
                @foreach ($siswas as $siswa)
                <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
                @endforeach
                </select>
                @error('siswas_id')
                <div class="alert alert-danger">{{ "isi nama siswa" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="kelass" class="form-label">Kelas</label>
                <select class="form-select form-control" name="kelass_id" aria-label="Default select example">
                @foreach ($kelass as $kelas)
                <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                @endforeach
                </select>
                @error('siswas_id')
                <div class="alert alert-danger">{{ "isi nama siswa" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="datamapel" class="form-label">Data Mapel</label>
                <select class="form-select form-control" name="datamapel_id" aria-label="Default select example">
                @foreach ($datamapel as $mapel)
                <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
                @endforeach
                </select>
                @error('siswas_id')
                <div class="alert alert-danger">{{ "isi nama siswa" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="datanilai" class="form-label">KKM</label>
                <select class="form-select form-control" name="datanilai_id" aria-label="Default select example">
                @foreach ($datanilai as $nilai)
                <option value="{{$nilai->id}}">{{$nilai->kkm}}</option>
                @endforeach
                </select>
                @error('siswas_id')
                <div class="alert alert-danger">{{ "isi nama siswa" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="keterampilans_id" class="form-label">Nilai Keterampilan</label>
                <input type="text" class="form-control" id="keterampilans_id" name="keterampilans_id" readonly value="@forelse ($keterampilans as $keterampilan){{$keterampilan->totalsemua}}
                @empty
                    {{"tidak ada data"}}
                @endforelse
                ">
                </div>
                <div class="mb-3">
                <label for="pengetahuans_id" class="form-label">Nilai Pengetahuan</label>
                <input type="text" class="form-control" id="pengetahuans_id" name="pengetahuans_id" readonly value="@forelse ($pengetahuans as $pengetahuan){{$pengetahuan->totalsemua}}
                @empty
                    {{"tidak ada data"}}
                @endforelse
                ">
                </div>
                    <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                    <label for="predikat" class="form-label">Predikat</label>
                    <input type="text" class="form-control" id="predikat" name="predikat">
                    </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection