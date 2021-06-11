@extends('layout.index')

@section('title','Form Edit data mapel')

@section('judul','Form Edit data mapel')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/datamapel/{{$datamapel->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="kode_mapel" class="form-label">Kode Mapel</label>
                <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" value="{{$datamapel->kode_mapel}}">
                </div>
                <div class="mb-3">
                    <label for="nama_mapel" class="form-label">Nama Mapel</label>
                    <input type="text" class="form-control" name="nama_mapel" value="{{$datamapel->nama_mapel}}">
                </div>
                <div class="mb-3">
                <label for="gurudankaryawans_id" class="form-label">Nama Siswa</label>
                <input type="text" readonly class="form-control" name="gurudankaryawans_id" value="{{$datamapel->gurudankaryawans->namalengkap}}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection