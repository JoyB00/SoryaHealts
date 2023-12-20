@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')

@section('content')
<link rel="stylesheet" href="styles/daftarObat_style.css">

<div class="pt-5">
    <div class="row py-5">
        <div class="col-sm-3 col-2 ps-5 mb-5 me-sm-0 me-5" id="kategori">
            <div class="dropdown dropdown-obat">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Jenis/Kategori
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a class="dropdown-item text-center" href="{{url('/daftarObat')}}">Semua Obat</a></li>
                    <hr class="dropdown-divider">
                    </hr>
                    <li class="text-center">Jenis Obat</li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Sirup</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Tablet</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Kapsul</a></li>
                    <li>
                        <hr class="dropdown-divider">
                        </hr>
                    </li>
                    <li class="text-center">Kategori Obat</li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Demam</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Pereda Nyeri</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Obat Anti Alergi</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Flu dan Batuk</a></li>
                    <li><a class="dropdown-item" href="{{url('/daftarObat')}}">Antibiotik</a></li>
                </ul>
            </div>
            <div class="container-kategori-jenis">
                <h2 style="color: #03ACF2; text-align: center; margin-top: 20px;">Jenis Obat <i class="fa-solid fa-capsules"></i></h2>
                <div class="container card kategori-box">
                    <ul class="navbar-nav me-auto mb-2 my-lg-0 text-center mx-auto pt-3">
                        <li class="nav-item me-3 my-1 ">
                            <form method="get" action="{{route('daftarObat')}}">
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-suitcase-medical"></i> Semua Obat</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1 ">
                            <form method="get" action="{{route('sortByJenisObat')}}">
                                <input type="text" value="sirup" name="jenis" id="jenis" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-suitcase-medical"></i> Sirup</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1 ">
                            <form method="get" action="{{route('sortByJenisObat')}}">
                                <input type="text" value="strip" name="jenis" id="jenis" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-suitcase-medical"></i> Strip</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1">
                            <form method="get" action="{{route('sortByJenisObat')}}">
                                <input type="text" value="tablet" name="jenis" id="jenis" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-suitcase-medical"></i> Tablet</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1">
                            <form method="get" action="{{route('sortByJenisObat')}}">
                                <input type="text" value="kapsul" name="jenis" id="jenis" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-suitcase-medical"></i> Kapsul</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <h2 style="color: #03ACF2; text-align: center; margin-top: 20px;">Kategori Obat <i class="fa-solid fa-capsules"></i></h2>
                <div class="container card kategori-box mb-5">
                    <ul class="navbar-nav me-auto my-2 my-lg-0  text-center mx-auto pt-3">
                        <li class="nav-item me-3 my-1 ">
                            <form method="get" action="{{route('sortByKategoriObat')}}">
                                <input type="text" value="Obat Demam" name="kategori" id="kategori" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-hand-holding-medical"></i> Obat Demam</button>
                            </form>
                        <li class="nav-item me-3 my-1 ">
                            <form method="get" action="{{route('sortByKategoriObat')}}">
                                <input type="text" value="Obat Pereda Nyeri" name="kategori" id="kategori" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-hand-holding-medical"></i> Obat Pereda Nyeri</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1">
                            <form method="get" action="{{route('sortByKategoriObat')}}">
                                <input type="text" value="Obat Anti Alergi" name="kategori" id="kategori" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-hand-holding-medical"></i> Obat Anti Alergi</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1">
                            <form method="get" action="{{route('sortByKategoriObat')}}">
                                <input type="text" value="Flu dan Batuk" name="kategori" id="kategori" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-hand-holding-medical"></i> Obat Flu dan Batuk</button>
                            </form>
                        </li>
                        <li class="nav-item me-3 my-1">
                            <form method="get" action="{{route('sortByKategoriObat')}}">
                                <input type="text" value="Obat Antibiotik" name="kategori" id="kategori" hidden>
                                <button aria-current="page" class="btn text-secondary"><i class="fa-solid fa-hand-holding-medical"></i> Obat Antibiotik</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-sm-8 col-8 mb-3">
            <h2 class="mt-3 mb-0 title-obat text-black">Daftar Obat</h2>
            <div class="obat-container row d-flex">
                @forelse($obat as $item)

                <div class="col-xl-3 col-md-4 col-sm-12 py-3 animate__animated animate__zoomIn">
                    <div class="card ms-2 mb-2 item" style="height: 450px; border: 2px solid #4CAF50;">
                        <img class="img-fluid mx-auto" src="{{asset('public/images/obat/'. $item['gambar_obat'])}}">
                        <div class="card-body d-flex flex-column pb-0 mb-0 bg-success text-white">
                            <p><span class="badge rounded-pill border border-white mb-0">{{$item['jenis_obat']}}</span></p>

                            <form action="{{route('detailObat')}}" method="Get">
                                <input type="text" value="{{$item['id']}}" name="id_obat" hidden>
                                <button class="card-title text-obat bg-transparent border-0" style="text-decoration: none; font-size: 18px; display: flex; flex-direction: column;align-items: flex-start;  overflow: hidden; text-align: left;">
                                    <div style="max-height: 80px; overflow: hidden;">
                                        {{$item['nama_obat']}}
                                    </div>
                                </button>
                            </form>

                            <p class="card-text  d-block text-white" style="font-family: Lato light;  font-weight: bold;">{{$item['harga']}}</p>
                        </div>
                        <div class="card-footer bg-success border-0" style="background-color: white; border-top: none;">
                            <p class="mt-1 text-white"><span class="badge border border-white rounded-pill">{{$item['kategori_obat']}}</span> </p>
                            <form action="{{route('detailObat')}}" method="Get">
                                <input type="text" value="{{$item['id']}}" name="id_obat" hidden>
                                <button type="submit" class="btn btn-warning">Lihat Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class=" alert alert-danger">
                    Obat Tidak tersedia
                </div>
                @endforelse
            </div>
        </div>
    </div>

</div>

@endsection