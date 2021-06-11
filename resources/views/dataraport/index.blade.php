@extends('layout.index')

@section('title','Data Raport')

@section('judul','Data Raport')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/dataraport/create" class="btn btn-primary my-3">Tambah Data</a>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid">
        <div class="row justify-content-center">
            <table class="table table-bordered">
            <thead>
            <tr>
                {{-- <th scope="col">No</th> --}}
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Pelajaran</th>
                <th scope="col">Document</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($dataraport as $no => $raport)
                <tr>
                {{-- <th scope="col">{{$no+1}}</th> --}} 
                    <td>{{$raport->siswas->namalengkap}}</td> 
                    <td>{{$raport->kelass->kelas}}</td>
                    <td>{{$raport->datamapel->nama_mapel}}</td>
                    <td>
                        <a href="/dataraport/{{$raport->id}}" class="btn btn-info">Detail</a>
                    </td>
                {{-- <td> --}}
                    {{-- <a href="/datanilai/edit/{{$datanilai->id}}" class="btn btn-success">Edit</a>
                    <form action="/datanilai/{{$datanilai->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                    </form>
                </td> --}}
                @endforeach
            </tr>
            </tbody>
            </table>
        </div>
</div>
@endsection