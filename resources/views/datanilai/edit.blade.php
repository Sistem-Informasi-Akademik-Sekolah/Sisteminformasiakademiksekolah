@extends('layout.index')

@section('title','Form Edit data nilai')

@section('judul','Form Edit data nilai')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<div class="container-fluid">
            <form action="/datanilai/{{$datanilai->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                <label for="nilai" class="form-label">Nilai keterampilan</label>
                <input type="text" class="form-control" name="nilai" value="{{$datanilai->nilai}}">
                </div>
                <div class="mb-3">
                <label for="kkm" class="form-label">kkm</label>
                <input type="text" class="form-control" name="kkm" value="{{$datanilai->kkm}}">
                </div>
                {{-- <div class="mb-3">
                <label for="siswas_id" class="form-label">pilih siswa</label>
                <input type="text" class="form-control" name="siswas_id" value="{{$datanilai->siswas->namalengkap}}">
                </div> --}}
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
</div>
@endsection