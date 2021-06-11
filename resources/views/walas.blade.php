@extends('layout.index')
@section('title','Halaman Wali Kelas')
@section('judul','Dashboard Wali Kelas')
@section('user')
{{Auth::user()->name}}
@endsection
@section('right')
@endsection
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <h1>Ini adalah halaman Walas (Wali Kelas)</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection