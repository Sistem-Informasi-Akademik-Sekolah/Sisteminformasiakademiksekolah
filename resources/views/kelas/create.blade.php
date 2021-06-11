@extends('layout.index')

@section('title','Form Tambah Kelas')

@section('judul','Form Tambah Kelas')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/kelass/store" method="POST">
                @csrf
                <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="masukan kelas anda" value="{{old('kelas')}}"> 
                @error('kelas')
                <div class="alert alert-danger">{{ "isi kelas" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="walikelas" class="form-label">Wali Kelas</label>
                <input type="text" class="form-control  @error('walas') is-invalid @enderror" name="walas" placeholder="masukan nama wali kelas" value="{{old('walas')}}">
                @error('walas')
                <div class="alert alert-danger">{{ "isi walas" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="siswas_id" class="form-label">Pilih Siswa</label>
                <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
                @foreach ($siswas as $siswa)
                <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
                @endforeach
                </select>
                </div>
                <div class="mb-3">
                <label for="tahunajaran" class="form-label">Tahun Ajaran</label>
                <input type="text" class="form-control @error('tahunajaran') is-invalid @enderror" name="tahunajaran" placeholder="masukan tahun" value="{{old('tahunajaran')}}">
                @error('tahunajaran')
                <div class="alert alert-danger">{{ "isi tahun ajaran" }}</div>
                @enderror
                </div>
                <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="masukan keterangan"  value="{{old('keterangan')}}">
                @error('keterangan')
                <div class="alert alert-danger">{{ "isi keterangan" }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection