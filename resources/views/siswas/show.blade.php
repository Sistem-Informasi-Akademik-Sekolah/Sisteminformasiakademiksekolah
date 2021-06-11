@extends('layout.index')

@section('user')
    {{Auth::user()->name}}
@endsection

@section('title','Show Data Siswa')

@section('judul')
<h1>Data Siswa {{$siswa->namalengkap}}</h1>
                <p>{{$siswa->nipd}}</p>
                <p>{{$siswa->jeniskelamin}}</p>
                <p>{{$siswa->kelas}}</p>
                <p>{{$siswa->nisn}}</p>
                {{$siswa->ttl}}
                {{$siswa->nik}}
                {{$siswa->agama}}
                {{$siswa->alamat}}
                {{$siswa->nohp}}
                {{$siswa->email}}
<a href="/siswas/" class="btn btn-primary"> Back</a>
@endsection