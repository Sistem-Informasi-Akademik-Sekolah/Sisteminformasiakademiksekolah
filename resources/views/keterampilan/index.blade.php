@extends('layout.index')

@section('title','Keterampilan Siswa')

@section('judul','Keterampilan Siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/keterampilans/create" class="btn btn-primary my-3">Create</a>
<table class="table table-bordered">
    <thead class="bg-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Total Nilai</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @forelse ($keterampilans as $keterampilan)
        <td>{{$loop->iteration}}</td>
        <td>{{$keterampilan->siswas->namalengkap}}</td>
        <td>{{$keterampilan->kelass->kelas}}</td>
        <td>{{$keterampilan->totalsemua}}</td>
        @empty
            <div class="alert alert-danger">Tidak ada</div>
        @endforelse
    </tr>
    </tbody>
</table>
@endsection