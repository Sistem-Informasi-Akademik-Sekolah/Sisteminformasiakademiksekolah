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
                <th scope="col">Kkm</th>
                <th scope="col">Nilai</th>  
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datanilai as $no => $datanilai)
                <tr>
                <th scope="col">{{$no+1}}</th>
                <td>{{$datanilai->siswas->namalengkap}}</td>
                <td>{{$datanilai->kkm}}</td>
                <td>{{$datanilai->nilai}}</td>
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