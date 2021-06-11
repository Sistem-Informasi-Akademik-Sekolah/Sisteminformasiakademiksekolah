@extends('layout.index')

@section('title','Data Siswa')

@section('judul','Data siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<a href="/siswas/create" class="btn btn-primary my-3">Tambah Data</a>
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
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gambar</th>
                <th scope="col">NIPD</th>
                <th scope="col">JK</th>
                <th scope="col">Kelas</th>
                <th scope="col">NISN</th>
                <th scope="col">TTl</th>
                <th scope="col">NIK</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <!-- {{-- <th scope="col">Transportasi</th> --}} -->
                <th scope="col">No Hp</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">BB</th>
                <th scope="col">TB</th> --}}
                <!-- {{-- <th scope="col">Jarak Rumah</th>
                <th scope="col">Anak Ke</th>
                <th scope="col">Jumlah Saudara</th>
                <th scope="col">Kebutuhan Khusus</th>
                <th scope="col">NO Akte</th> --}} -->
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                    @foreach ($siswas as $no => $siswa)
                    <tr>
                    <th scope="col">{{$no+1}}</th>
                    <td>{{$siswa->namalengkap}}</td>
                    <td><img src="/images/{{$siswa->gambar}}" width="100" alt=""></td>
                    <td>{{$siswa->nipd}}</td>
                    <td>{{$siswa->jeniskelamin}}</td>
                    <td>{{$siswa->kelas}}</td>
                    <td>{{$siswa->nisn}}</td>
                    <td>{{$siswa->ttl}}</td>
                    <td>{{$siswa->nik}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->nohp}}</td>
                    <td>{{$siswa->email}}</td>
                    {{-- <td>{{$siswa->beratbadan}}</td>
                    <td>{{$siswa->tinggibadan}}</td> --}}
                    <td>
                        <a href="/siswas/{{$siswa->id}}" class="btn btn-info">
                        Detail</a>
                        <a href="/siswas/edit/{{$siswa->id}}" class="btn btn-success">Edit</a>
                        <form action="/siswas/{{$siswa->id}}" method="post">
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