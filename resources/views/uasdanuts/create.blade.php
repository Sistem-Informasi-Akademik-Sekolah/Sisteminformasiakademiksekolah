@extends('layout.index')
@section('title','create nilai uas dan uts')
@section('judul','create nilai uas dan uts')

@section('user')
{{Auth::user()->name}}
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/uasdanuts/store" method="POST">
    @csrf
    <div class="mb-3">
    <label for="siswas_id" class="form-label">Pilih Siswa</label>
    <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
        <option disabled>Pilih Nama</option>
        @foreach ($siswas as $siswa)
        <option value="{{$siswa->id}}">{{$siswa->namalengkap}}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
        <label for="mapel_id" class="form-label">Pilih Mapel</label>
        <select class="form-select form-control" name="datamapel_id" aria-label="Default select example">
            <option disabled>Pilih Mapel</option>
            @foreach ($datamapel as $mapel)
            <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
            @endforeach
        </select>
        </div>
        <div class="row g-3">
            <div class="col">
            <label for="nilai_utsatu" class="form-label">Nilai Uts 1</label>
            <input type="number" class="form-control" placeholder="uts satu" aria-label="First name" name="nilai_utsatu" id="nilai_utsatu">
            </div>
            <div class="col">
            <label for="nilai_utdua" class="form-label">Nilai Uts 2</label>
            <input type="number" class="form-control" placeholder="uts dua" aria-label="Last name" id="nilai_utsdua" name="nilai_utsdua">
            </div>
        </div>
        {{-- <div class="mb-3">
        <label for="jumlah_uts" class="form-label">Total Uts</label>
        <input class="form-control" readonly type="text" id="jumlah_uts" name="jumlah_uts">
        </div> --}}
        <div class="row g-3">
        <div class="col">
        <label for="nilai_uasatu" class="form-label">Nilai Uas 1</label>
        <input type="number" class="form-control" placeholder="uas satu" aria-label="First name" name="nilai_uasatu" id="nilai_uasatu">
        </div>
        <div class="col">
        <label for="nilai_uasdua" class="form-label">Nilai Uas 2</label>
        <input type="number" class="form-control" placeholder="uas dua" aria-label="Last name" id="nilai_uasdua" name="nilai_uasdua">
        </div>
        </div>
        {{-- <div class="mb-3">
        <label for="jumlah_uas" class="form-label">Total Uas</label>
        <input class="form-control" readonly type="text" id="jumlah_uas" name="jumlah_uas" name="jumlah_uas">
        </div> --}}
        <div class="row">
            <div class="col">
                <label for="jumlah_uts" class="form-label">Total Uts</label>
                <input class="form-control" readonly type="text" id="jumlah_uts" name="jumlah_uts">
            </div>
            <div class="col">
                <label for="jumlah_uas" class="form-label">Total Uas</label>
                <input class="form-control" readonly type="text" id="jumlah_uas" name="jumlah_uas" name="jumlah_uas">
            </div>
        </div>
        <div class="mb-3">
        <label for="jumlahsemua" class="form-label">Total Semua</label>
        <input class="form-control" readonly type="text" name="jumlahsemua" id="jumlahsemua">
        </div>
    <button type="submit" class="btn btn-primary my-3 w-100">Submit</button>
</form>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
// untuk hitungan uts
    $(document).ready(function() {
        $("#nilai_utsatu, #nilai_utsdua").keyup(function() {
            var nilai_utsdua  = $("#nilai_utsdua").val();
            var nilai_utsatu = $("#nilai_utsatu").val();
            var jumlah_uts = parseInt(nilai_utsdua) / 2 + parseInt(nilai_utsatu) / 2;
            $("#jumlah_uts").val(jumlah_uts);
        });
    });
// akhir hitungan uts

// untuk hitungan uas
$(document).ready(function() {
        $("#nilai_uasatu, #nilai_uasdua").keyup(function() {
            var nilai_uasdua  = $("#nilai_uasdua").val();
            var nilai_uasatu = $("#nilai_uasatu").val();
            var jumlah_uas = parseInt(nilai_uasdua) / 2 + parseInt(nilai_uasatu) / 2;
            $("#jumlah_uas").val(jumlah_uas);
        });
    });
// akhir hitungan uas

// untuk hitungan akhir
$(document).ready(function() {
        $("#jumlah_uas, #jumlah_uts").keyup(function() {
            var jumlah_uts  = $("#jumlah_uts").val();
            var jumlah_uas = $("#jumlah_uas").val();
            var jumlahsemua = parseInt(jumlah_uts) / 2 + parseInt(jumlah_uas) / 2;
            $("#jumlahsemua").val(jumlahsemua);
        });
        window.addEventListener('keydown', function(e) {
        if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
            if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                e.preventDefault();
                return false;
            }
            // else{
            // alert('dilarang ketik enter ketika kosong')
            // console.log('berhasil');
            // }
        }
    }, true);
    });
// akhir hitungan akhir
</script>
@endsection