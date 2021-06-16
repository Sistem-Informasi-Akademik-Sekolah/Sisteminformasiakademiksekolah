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
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Dokument</th>
                {{-- <th scope="col">Pelajaran</th>
                <th scope="col">Document</th> --}}
            </tr>
            </thead>
            <tbody>
                @foreach ($dataraport as $no => $raport)
                <td>{{$no+1}}</td>
                <td>{{$raport->siswas->namalengkap}}</td>
                <td>{{$raport->kelass->kelas}}</td>
                <td>
                    <a href="/dataraport/{{$raport->id}}" class="btn btn-info">Dokument</a>
                </td>
                {{-- <td>{{$raport->datamapel->}}</td>
                <td></td> --}}
                <tr>
                @endforeach
            </tr>
            </tbody>
            </table>
        </div>
</div>
@endsection