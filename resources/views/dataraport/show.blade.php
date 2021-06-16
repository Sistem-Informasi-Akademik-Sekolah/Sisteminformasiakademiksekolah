@extends('layout.index')

@section('title','Raport/Hasil Belajar')

@section('judul','Penilaian')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
<div class="card" style="width: 100%;">
    <div class="card-body">
    <h3>Nama : {{$dataraport->siswas->namalengkap}}</h3>
    <h3 class="card-subtitle mb-2">Nipd : {{$dataraport->siswas->nipd}}</h3>
    <h3 class="card-text">Nisn : {{$dataraport->siswas->nisn}}</h3>
    <h3> Kelas : {{$dataraport->kelass->kelas}}</h3>
    <h3 class="card-subtitle"> Wali Kelas : {{$dataraport->kelass->walas}}</h3>
    </div>
</div>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Nama Mapel</th>
      <th scope="col">Nilai Pengetahuan</th>
      <th scope="col">Nilai Keterampilan</th>
      <th scope="col">deskripsi</th>
      <th scope="col">predikat</th>
      {{-- <th scope="col"></th>
      <th scope="col">Handle</th> --}}
    </tr>
</thead>
<tbody>
    <tr>
    <td>{{$dataraport->id}}</td>
    <td>{{$dataraport->siswas->namalengkap}}</td>
    <td>{{$dataraport->datamapel->nama_mapel}}</td>
    <td>{{$dataraport->pengetahuans_id}}</td>
    <td>{{$dataraport->keterampilans_id}}</td>
    <td>{{$dataraport->deskripsi}}</td>
    <td>{{$dataraport->predikat}}</td>
    </tr>
</tbody>
</table>
<button class="btn btn-dark" onClick="window.print()">Print</button>
</div>
@endsection