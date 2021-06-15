@extends('layout.index')

@section('title','Nilai Pengetahuan  Siswa')

@section('judul','Nilai Pengetahuan  Siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/pengetahuan/create" class="btn btn-primary my-3">Create</a>
<table class="table table-bordered">
    <thead class="bg-info">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Total Nilai</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @forelse ($pengetahuans as $pengetahuan)
        <td>{{$loop->iteration}}</td>
        <td>{{$pengetahuan->siswas->namalengkap}}</td>
        <td>{{$pengetahuan->kelass->kelas}}</td>
        <td>{{$pengetahuan->totalsemua}}</td>
        @empty
            <div class="alert alert-danger">Tidak ada</div>
        @endforelse
    </tr>
    </tbody>
</table>
@endsection