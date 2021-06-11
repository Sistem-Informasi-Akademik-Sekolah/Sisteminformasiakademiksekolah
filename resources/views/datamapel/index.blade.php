@extends('layout.index')

@section('title','Data Mapel')

@section('judul','Data Mapel')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/datamapel/create" class="btn btn-primary my-3">Tambah Data</a>
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
                {{-- <th scope="col">Kode Mapel</th>
                <th scope="col">Kelas</th> --}}
                <th scope="col">Nama Mapel</th>
                {{-- <th scope="col">Nama Siswa</th> --}}
                <th scope="col">Pengajar</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datamapel as $no => $datamapel)
                <tr>
                <th scope="col">{{$no+1}}</th>
                {{-- <td>{{$datamapel->kode_mapel}}</td>
                <td>{{$datamapel->siswas->kelas}}</td> --}}
                <td>{{$datamapel->nama_mapel}}</td>
                {{-- <td>{{$datamapel->siswas->namalengkap}}</td> --}}
                <td>{{$datamapel->gurudankaryawans->namalengkap}}</td>
                <td>
                    <a href="/datamapel/edit/{{$datamapel->id}}" class="btn btn-success">Edit</a>
                    <form action="/datamapel/{{$datamapel->id}}" method="post">
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