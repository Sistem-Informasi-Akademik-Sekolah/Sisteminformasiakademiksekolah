@extends('layout.index')
@section('title','nilai uas dan uts')
@section('judul','nilai uas dan uts')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<a href="/uasdanuts/create" class="btn btn-primary my-3">Create</a>
<table class="table table-bordered">
    <thead class="bg-primary">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">Nama Mapel</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">Total Semua</th>
    </tr>
</thead>
    <tbody>
    <tr>
        @forelse ($uasdanuts as $u)
        <td>{{$loop->iteration}}</td>
        <td>{{$u->siswas->namalengkap}}</td>
        <td>{{$u->datamapel->nama_mapel}}</td>
        <td>{{$u->jumlah_uts}}</td>
        <td>{{$u->jumlah_uas}}</td>
        <td>{{$u->jumlahsemua}}</td>
        @empty
            
        @endforelse
    </tr>
    </tbody>
</table>
@endsection