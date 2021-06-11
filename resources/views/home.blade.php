@extends('layout.index')

@section('title','home')

{{-- @section('judul')
Hallo :  {{Auth::user()->role}}
@endsection --}}

@section('user')
{{Auth::user()->name}}
@endsection

@section('right')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="card-body">
                Selamat Datang :  {{ Auth::user()->name }}
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{ __('Sukses Login') }}
            </div>
        </div>
    </div>
@endsection