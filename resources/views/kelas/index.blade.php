@extends('layout.index')

@section('title','Data Kelas')

@section('judul','Data Kelas')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/kelass/create" class="btn btn-primary my-3">Tambah Data</a>
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
                <th scope="col">Kelas</th>
                {{-- <th scope="col">Wali Kelas</th> --}}
                {{-- <th scope="col">Nama Siswa</th>
                <th scope="col">Jenis Kelamin</th> --}}
                {{-- <th scope="col">Tahun Ajaran</th>
                <th scope="col">Keterangan</th> --}}
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($kelass as $no => $kelas)
                    <tr>
                    <th scope="col">{{$no+1}}</th>
                    <td>{{$kelas->kelas}}</td>
                    {{-- <td>{{$kelas->walas}}</td> --}}
                    {{-- <td>{{$kelas->siswas->namalengkap}}</td>
                    <td>{{$kelas->siswas->jeniskelamin}}</td> --}}
                    {{-- <td>{{$kelas->tahunajaran}}</td>
                    <td>{{$kelas->keterangan}}</td> --}}
                    <td>
                        <a href="/kelass/edit/{{$kelas->id}}" class="btn btn-success">Edit</a>
                        <a href="/kelass/{{$kelas->id}}" class="btn btn-info">Detail</a>
                        <form action="/kelass/{{$kelas->id}}" method="post">
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