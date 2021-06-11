@extends('layout.index')

@section('title','Halaman Detail')

@section('judul')
Detail Data id : 
{{$kelas->id}}
@endsection

@section('content')
<div class="card">
    <div class="card-body">
    <p>No Data : {{$kelas->id}}</p>
    <p>Wali Kelas : {{$kelas->walas}}</p>
    <p>Kelas yang di ajar : {{$kelas->kelas}}</p>
    <p>Tahun ajaran : {{$kelas->tahunajaran}}</p>
    <p>Keterangan Guru : {{$kelas->keterangan}}</p>
    <p>Murid : {{$kelas->siswas->namalengkap}}</p>
    </div>
</div>
@endsection
