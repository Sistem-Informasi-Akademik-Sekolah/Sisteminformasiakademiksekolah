@extends('layout.index')

@section('title','Form Edit kelas')

@section('judul','Form Edit kelas')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/kelass/{{$kelas->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="Kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="namalengkap" name="kelas" value="{{$kelas->kelas}}">
                </div>
                <div class="mb-3">
                <label for="walas" class="form-label">Wali kelas</label>
                <input type="text" class="form-control" name="walas" value="{{$kelas->walas}}">
                </div>
                <div class="mb-3">
                    <label for="siswas_id">Nama Siswa</label>
                    <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
                        @foreach ($siswas as $siswa)
                        <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                <label for="tahunajaran" class="form-label">Tahun Ajaran</label>
                <input type="text" class="form-control" name="tahunajaran" value="{{$kelas->tahunajaran}}">
                </div>
                <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="{{$kelas->keterangan}}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection