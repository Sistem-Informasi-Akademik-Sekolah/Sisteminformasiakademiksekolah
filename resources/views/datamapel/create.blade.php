@extends('layout.index')

@section('title','Form Tambah Data mapel')

@section('judul','Form Tambah Data mapel')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/datamapel/store" method="POST">
                @csrf
                <div class="mb-3">
                <label for="kodemapel" class="form-label">Kode Mapel</label>
                <input type="text" class="form-control @error('kode_mapel') is-invalid @enderror" id="kode_mapel" name="kode_mapel" placeholder="masukan kode_mapel anda" value="{{old('kode_mapel')}}"> 
                @error('kode_mapel')
                <div class="alert alert-danger">{{ "isi kode mapel" }}</div>
                @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="siswas_id" class="form-label">Masukan siswa</label>
                    <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
                        @foreach ($siswass as $siswa)
                        <option disabled>pilih siswa</option>
                        <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mapel</label>
                <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" name="nama_mapel" placeholder="masukan nama mapel" value="{{old('nama_mapel')}}">
                @error('nama_mapel')
                <div class="alert alert-danger">{{ "isi Nama Mapel" }}</div>
                @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="kelass_id" class="form-label">Pilih Kelas</label>
                    <select class="form-select form-control" name="kelass_id" aria-label="Default select example">
                        @foreach ($kelass as $kelas)
                        <option disabled>Pilih Kelas</option>
                        <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="mb-3">
                    <label for="gurudankaryawans_id" class="form-label">Pilih Pengajar</label>
                    <select class="form-select form-control" name="gurudankaryawans_id" aria-label="Default select example">
                        <option disabled>Pilih guru</option>
                        @foreach ($gurudankaryawans as $guru)
                        <option value="{{$guru->id}}">{{$guru->namalengkap}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection