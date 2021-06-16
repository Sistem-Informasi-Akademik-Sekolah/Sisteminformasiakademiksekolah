@extends('layout.index')

@section('title','Membuat Keterampilan Siswa')

@section('judul','Membuat Keterampilan Siswa')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
<form action="/keterampilans/simpan" method="POST">
    @csrf
    <div class="mb-3">
    <label for="siswas_id" class="form-label">Pilih Siswa</label>
    <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
        @foreach($siswas as $siswa)
        <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="kelass_id" class="form-label">Pilih Kelas</label>
    <select class="form-select form-control" name="kelass_id" aria-label="Default select example">
        @foreach($kelass as $kelas)
        <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
        @endforeach
    </select>
    </div>
    <div class="row g-3">
        <div class="col-md-2">
        <label for="nilaikd1" class="form-label">Nilai Kd 1</label>
        <input type="number" name="nilaikd1" id="nilaikd1" class="form-control" max="100">
        </div>
        <div class="col-md-2">
            <label for="nilaikd2" class="form-label">Nilai Kd 2</label>
            <input type="number" name="nilaikd2" id="nilaikd2" class="form-control" max="100">
        </div>
        <div class="col-md-2">
            <label for="nilaikd3" class="form-label">Nilai Kd 3</label>
            <input type="number" name="nilaikd3" id="nilaikd3" class="form-control" max="100">
        </div>
        <div class="col-md-3">
            <label for="nilaikd4" class="form-label">Nilai Kd 4</label>
            <input type="number" name="nilaikd4" id="nilaikd4" class="form-control" max="100">
        </div>
        <div class="col-md-3">
            <label for="nilaikd5" class="form-label">Nilai Kd 5</label>
            <input type="number" name="nilaikd5" id="nilaikd5" class="form-control" max="100">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-2">
        <label for="nilaikd6" class="form-label">Nilai Kd 6</label>
        <input type="number" name="nilaikd6" id="nilaikd6" class="form-control" max="100">
        </div>
        <div class="col-md-2">
            <label for="nilaikd7" class="form-label">Nilai Kd 7</label>
            <input type="number" name="nilaikd7" id="nilaikd7" class="form-control" max="100">
        </div>
        <div class="col-md-2">
            <label for="nilaikd8" class="form-label">Nilai Kd 8</label>
            <input type="number" name="nilaikd8" id="nilaikd8" class="form-control" max="100">
        </div>
        <div class="col-md-3">
            <label for="nilaikd9" class="form-label">Nilai Kd 9</label>
            <input type="number" name="nilaikd9" id="nilaikd9" class="form-control" max="100">
        </div>
        <div class="col-md-3">
            <label for="nilaikd10" class="form-label">Nilai Kd 10</label>
            <input type="number" name="nilaikd10" id="nilaikd10" class="form-control" max="100">
        </div>
    </div>
    <div class="mb-3" style="display: none;">
        <label for="totalsemua" class="form-label">Jumlah Semua</label>
        <input type="text" readonly class="form-control" id="totalsemua" name="totalsemua">
        <small>jika nan itu artinya angkanya tidak ada/belum terisi semua</small>
    </div>
    <button type="submit" class="btn btn-primary my-3 w-100">Submit</button>
</form>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#nilaikd1, #nilaikd2, #nilaikd3, #nilaikd4, #nilaikd5, #nilaikd6, #nilaikd7, #nilaikd8, #nilaikd9, #nilaikd10").keyup(function() {
            var nilaikd10 = $("#nilaikd10").val();
            var nilaikd9 = $("#nilaikd9").val();
            var nilaikd8 = $("#nilaikd8").val();
            var nilaikd7 = $("#nilaikd7").val();
            var nilaikd6 = $("#nilaikd6").val();
            var nilaikd5 = $("#nilaikd5").val();
            var nilaikd4 = $("#nilaikd4").val();
            var nilaikd3 = $("#nilaikd3").val();
            var nilaikd2 = $("#nilaikd2").val();
            var nilaikd1 = $("#nilaikd1").val();
            var totalsemua = parseInt(nilaikd2) / 10  + parseInt(nilaikd1) / 10 + parseInt(nilaikd3) / 10 + parseInt(nilaikd4) / 10 + parseInt(nilaikd5) / 10 + parseInt(nilaikd6) / 10 + parseInt(nilaikd7) / 10 + parseInt(nilaikd8) / 10 + parseInt(nilaikd9) / 10 + parseInt(nilaikd10) / 10;
            $("#totalsemua").val(totalsemua);
        });
    });
</script>
@endsection