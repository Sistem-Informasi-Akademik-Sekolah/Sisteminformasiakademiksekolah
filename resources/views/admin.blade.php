@extends('layout.index')
@section('title','Halaman Admin')
@section('judul','Dashboard Admin')
@section('user')
{{Auth::user()->name}}
@endsection
@section('right')
@section('content')
    <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-4 col-5">
                            <div class="small-box bg-warning">
                              <div class="inner text-white">
                                <h3>Data Siswa</h3>
                              </div>
                            <div class="card-body">
                                {{$siswas->count('id')}}
                            </div>
                              <div class="icon">
                                <i class='fas fa-user-tie' style='font-size:85px'></i>
                              </div>
                            </div>
                          </div>
                          
                        
                          <div class="col-lg-4 col-5">                  
                            <div class="small-box bg-danger">
                              <div class="inner">
                                <h3>Data Kelas</h3>
                              </div>
                              <div class="card-body">
                                {{$kelases->count('id')}}
                              </div>
                              <div class="icon">
                                <i class='fas fa-chalkboard-teacher' style='font-size:85px'></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                              <div class="inner">
                                <h3>Data Guru</h3>
                              </div>
                              <div class="card-body">
                                {{$gurudankaryawans->count('id')}}
                              </div>
                              <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                              <div class="inner">
                                <h3>Data Mapel</h3>
                              </div>
                              <div class="card-body">
                                {{$datamapel->count('id')}}
                              </div>
                              <div class="icon">
                                <i class="fas fa-book-reader"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-dark">
                              <div class="inner">
                                <h3>Data Nilai</h3>
                              </div>
                              <div class="card-body">
                                {{$datanilai->count('id')}}
                              </div>
                              <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                              </div>
                            </div>
                          </div>
                          <!-- ./col -->
                        </div>
                        </div>
@endsection