@extends('layout.index')

@section('title','Form Edit Guru & karyawan')

@section('judul','Form Edit Guru & karyawan')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/gurudankaryawans/{{$gurudankaryawan->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="nutpk" class="form-label">Nutpk</label>
                <input type="number" class="form-control" id="nutpk" name="nutpk" value="{{$gurudankaryawan->nutpk}}">
                </div>
                <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" name="nik" value="{{$gurudankaryawan->nik}}">
                </div>
                <div class="mb-3">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="namalengkap" value="{{$gurudankaryawan->namalengkap}}">
                    </div>
                <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-control" aria-label="Default select example" name="jeniskelamin">
                <option selected readonly>{{$gurudankaryawan->jeniskelamin}}</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                <input type="date" class="form-control" name="ttl" value="{{$gurudankaryawan->ttl}}">
                </div>
                <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="number" class="form-control" name="nisn" value="{{$gurudankaryawan->nisn}}">
                </div>
                <div class="mb-3">
                <label for="statuspegawai" class="form-label">Status Pegawai</label>
                <input type="text" class="form-control" name="statuspegawai" value="{{$gurudankaryawan->statuspegawai}}">
                </div>
                <div class="mb-3">
                <label for="tmt" class="form-label">Terhitung Mulai Tanggal</label>
                <input type="text" class="form-control" name="tmt" value="{{$gurudankaryawan->tmt}}">
                </div>
                <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" class="form-control" name="nohp" value="{{$gurudankaryawan->nohp}}">
                </div>
                <div class="mb-3">
                    <label for="usernametelegram" class="form-label">Username Telegram</label>
                    <input type="text" class="form-control" name="usernametelegram" placeholder="masukan username">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection