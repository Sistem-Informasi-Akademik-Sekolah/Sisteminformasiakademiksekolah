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
                <label for="siswas_id" class="form-label">Pilih Siswa</label>
                <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
                <option disabled>Pilih Siswa</option>
                @foreach ($siswas as $siswa)
                <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
                @endforeach
                </select>
                </div>
                <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="text" class="form-control  @error('nilai') is-invalid @enderror" name="nilai" placeholder="masukan  nilai" value="{{old('nilai')}}">
                @error('nilai')
                <div class="alert alert-danger">{{ "isi nilai" }}</div>
                @enderror
                </div>
                </div>
                <div class="mb-3">
                <label for="kkm" class="form-label">kkm</label>
                <input type="text" class="form-control  @error('kkm') is-invalid @enderror" name="kkm" placeholder="masukan  kkm" value="{{old('kkm')}}">
                @error('kkm')
                <div class="alert alert-danger">{{ "isi kkm" }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection