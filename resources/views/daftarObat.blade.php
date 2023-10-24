@extends('navbarUser')

@section('content')
<link rel="stylesheet" href="styles/daftarObat_style.css">

<div class="pt-5">
    <div class="row py-5">
        <div class="col-sm-3 col-2 ps-5 mb-5 me-sm-0 me-5" id="kategori">
            <div class="dropdown ">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori/Jenis
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a class="dropdown-item text-center" href="{{url('/daftarObat')}}">Semua Obat</a></li>
                    <hr class="dropdown-divider">
                    </hr>
                    <li class="text-center">Kategori Obat</li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Keras</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Langka</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Generik</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Lansia</a></li>
                    <li>
                        <hr class="dropdown-divider">
                        </hr>
                    </li>
                    <li class="text-center">Jenis Obat</li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Batuk</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Demam</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Pilek</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Balita</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Mag</a></li>
                </ul>
            </div>
            <div class="container-kategori-jenis">
                <h2 style="color: #03ACF2; text-align: center;">Kategori Obat <i class="fa-solid fa-capsules"></i></h2>
                <div class="container card kategori-box">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 text-center mx-auto pt-3">
                        <li class="nav-item me-3 ">
                            <a aria-current="page" href="{{url('/daftarObat')}}">Semua Obat</a>
                        <li class="nav-item me-3 ">
                            <a aria-current="page" href="{{url('/daftarObat')}}">Obat Keras</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Langka</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Generik</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Lansia</a>
                        </li>
                    </ul>
                </div>

                <h2 class="mt-5" style="color: #03ACF2; text-align: center;">Jenis Obat <i class="fa-solid fa-capsules"></i></h2>
                <div class="container card kategori-box">
                    <ul class="navbar-nav me-auto my-2 my-lg-0  text-center mx-auto pt-3">
                        <li class="nav-item me-3 ">
                            <a aria-current="page" href="{{url('/daftarObat')}}">Obat Batuk</a>
                        <li class="nav-item me-3 ">
                            <a aria-current="page" href="{{url('/daftarObat')}}">Obat Pilek</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Demam</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Balita</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="{{url('/daftarObat')}}">Obat Mag</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-8 col-8 mb-3">
            <form class="d-flex ms-sm-0 ms-5">
                <input class="form-control me-2 px-4" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <h2 class="mt-3 mb-0 title-obat">Daftar Obat</h2>
            <div class="obat-container row d-flex">
                @forelse($obat as $item)
                <div class="col-xl-3 col-md-4 col-sm-12 py-3 animate__animated animate__zoomIn">
                    <div class="card ms-2 mb-2 item" style="height: 450px; border: 2px solid #4CAF50;">
                        <img class="img-fluid mx-auto" src="{{$item['image']}}">
                        <div class="card-body d-flex flex-column pb-0 mb-0 bg-success text-white">
                            <p><span class="badge rounded-pill border border-white mb-0">{{$item['jenis_obat']}}</span></p>
                            <a href="{{url('/daftarObat')}}" class="card-title text-obat" style="text-decoration: none; font-size: 18px;">{{$item['nama_obat']}}</a>
                            <p class="card-text  d-block text-white" style="font-family: Lato light;  font-weight: bold;">{{$item['harga']}}</p>
                        </div>
                        <div class="card-footer bg-success border-0" style="background-color: white; border-top: none;">
                            <p class="mt-1 text-white"><span class="badge border border-white rounded-pill">{{$item['kategori_obat']}}</span> </p>
                            <a href="#" class="btn btn-warning">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Data Member masi kosong
                </div>
                @endforelse
            </div>
        </div>
    </div>

</div>

@endsection