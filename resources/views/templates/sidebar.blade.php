<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1D1515">
<!-- Brand Logo -->
<a href="/" class="brand-link">
{{-- <img src="{{asset('AdminLTE-3.1.0/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpHy9rE5nuqJ8lVfAr-pFGJzNou3lHTskxTx8wvH20h5BfBZZpyaazonyrrK4cvXoHs2Y&usqp=CAU" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">SIAKAD</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('AdminLTE-3.1.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">@yield('user')</a>
</div>
</div>

<p class="text-light">Navigation</p>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
@if (Auth::check())
@if(Auth::user()->role == 'admin')
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
    Dashboard
    <i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{url('admin')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Halaman Admin
            </p>
        </a>
        </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Data Master
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a class="nav-link" href="{{url('siswas')}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Siswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('kelass')}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('gurudankaryawans')}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Guru & Karyawan</p>
                </a>
            </li>
            </li>
            </li>
        </ul>
        </li>
<li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
    Data Penilaian
    <i class="right fas fa-angle-left"></i>
    </p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a class="nav-link" href="{{url('datamapel')}}">
        <i class="far fa-circle nav-icon"></i>
        <p>Mata Pelajaran</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('datanilai')}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Nilai</p>
            </a>
        </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('dataraport')}}">
        <i class="far fa-circle nav-icon"></i>
        <p>Cetak Raport Siswa</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('uasdanuts')}}">
        <i class="far fa-circle nav-icon"></i>
        <p>Nilai uas dan uts</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('keterampilans')}}">
        <i class="far fa-circle nav-icon"></i>
        <p>Keterampilan</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('pengetahuan')}}">
        <i class="far fa-circle nav-icon"></i>
        <p>Pengetahuan</p>
        </a>
    </li>
</ul>
</li>
<li class="nav-item">
    <a href="{{url('register')}}" class="nav-link">
        <i class="nav-icon far fa-user"></i>
        <p>
        Data User
        </p>
    </a>
    </li>
</ul>
</li>
{{-- <li class="nav-item">
    <a class="nav-link" aria-current="page" href="{{url('admin')}}">Admin</a>
</li> --}}
@endif
@if (Auth::user()->role == 'guru')
<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a class="nav-link active" href="{{url('guru')}}">
    <i class="far fa-circle nav-icon"></i>
    <p>Halaman Guru</p>
    </a>
    </li>
    </ul>
</li>
@endif
@if (Auth::user()->role == 'kaprog')
<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a class="nav-link active" href="{{url('kaprog')}}">
    <i class="far fa-circle nav-icon"></i>
    <p>Halaman Kaprog</p>
    </a>
    </li>
    </ul>
</li>
@endif
@if (Auth::user()->role == 'walas')
<li class="nav-item">
    <a class="nav-link" href="{{url('walas')}}">walas</a>
</li>
@endif

@endif
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>