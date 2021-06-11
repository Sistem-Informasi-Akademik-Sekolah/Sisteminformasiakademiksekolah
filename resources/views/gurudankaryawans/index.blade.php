@extends('layout.index')

@section('title','Data Guru dan Karyawan')

@section('judul','Data Guru dan karyawan')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/gurudankaryawans/create" class="btn btn-primary my-3">Tambah Data</a>
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
                <th scope="col">Nutpk</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat/Tanggal Lahir</th>
                <th scope="col">Status Pegawai</th>
                <th scope="col">Terhitung Mulai Tanggal</th>
                <th scope="col">No Hp</th>
                <th scope="col">Username Telegram</th>
                <!-- {{-- <th scope="col">Transportasi</th> --}} -->
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($gurudankaryawans as $no => $gurudankaryawan)
                    <tr>
                    <th scope="col">{{$no+1}}</th>
                    <td>{{$gurudankaryawan->nutpk}}</td>
                    <td>{{$gurudankaryawan->nik}}</td>
                    <td>{{$gurudankaryawan->namalengkap}}</td>
                    <td>{{$gurudankaryawan->jeniskelamin}}</td>
                    <td>{{$gurudankaryawan->ttl}}</td>
                    <td>{{$gurudankaryawan->statuspegawai}}</td>
                    <td>{{$gurudankaryawan->tmt}}</td>
                    <td>{{$gurudankaryawan->nohp}}</td>
                    <td>{{$gurudankaryawan->usernametelegram}}</td>
                    
                    <td>
                        <a href="/gurudankaryawans/edit/{{$gurudankaryawan->id}}" class="btn btn-success">Edit</a>
                        <form action="/gurudankaryawans/{{$gurudankaryawan->id}}" method="post">
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