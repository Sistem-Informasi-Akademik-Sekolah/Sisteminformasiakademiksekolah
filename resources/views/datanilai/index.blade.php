@extends('layout.index')

@section('title','Data nilai')

@section('judul','Data nilai')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/datanilai/create" class="btn btn-primary my-3">Tambah Data</a>
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
                <th scope="col">nama siswa</th>
                <th scope="col">kelas</th>  
                <th scope="col">Nama Mapel</th>
                <th scope="col">nilai pengetahuan</th>
                <th scope="col">nilai keterampilan</th>
                <th scope="col">KKM</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Predikat</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datanilai as $no => $datanilai)
                <tr>
                <th scope="col">{{$no+1}}</th>
                <td>{{$datanilai->nama_siswa}}</td>
                <td>{{$datanilai->kelas}}</td>
                <td>{{$datanilai->nama_mapel}}</td>
                <td>{{$datanilai->nilai_pengetahuan}}</td>
                <td>{{$datanilai->nilai_keterampilan}}</td>
                <td>{{$datanilai->nilai_KKM}}</td>
                <td>{{$datanilai->deskripsi}}</td>
                <td>{{$datanilai->predikat}}</td>
                <td>
                    <a href="/datanilai/edit/{{$datanilai->id}}" class="btn btn-success">Edit</a>
                    <form action="/datanilai/{{$datanilai->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                @endforeach
            </tr>
            </tbody>
            </table>
        </div>
</div>
@endsection