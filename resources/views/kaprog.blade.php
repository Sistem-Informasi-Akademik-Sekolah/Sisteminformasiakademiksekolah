@extends('layout.index')
@section('title','Halaman Kaprog')
@section('judul','Dashboard Kaprog')
@section('user')
{{Auth::user()->name}}
@endsection
@section('right')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <h1>Ini adalah halaman Kaprog(kepala program)</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection