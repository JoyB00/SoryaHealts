@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')



@section('content')
<style>
    .background {
        background-color: #99ffa0;
        background-image:
            radial-gradient(at 97% 21%, hsla(155, 84%, 67%, 1) 0px, transparent 50%),
            radial-gradient(at 79% 0%, hsla(229, 60%, 74%, 1) 0px, transparent 50%),
            radial-gradient(at 18% 36%, hsla(178, 67%, 77%, 1) 0px, transparent 50%),
            radial-gradient(at 97% 92%, hsla(168, 83%, 68%, 1) 0px, transparent 50%),
            radial-gradient(at 29% 64%, hsla(35, 77%, 74%, 1) 0px, transparent 50%),
            radial-gradient(at 23% 93%, hsla(82, 62%, 61%, 1) 0px, transparent 50%),
            radial-gradient(at 51% 95%, hsla(19, 78%, 73%, 1) 0px, transparent 50%);

        border-radius: 0px 0px 200px 200px;
    }
</style>

<link rel="stylesheet" href="styles/home_style.css">
<div class="background">
    <div class=" mb-0 pt-5">
        <div class="row p-md-5 pt-sm-0 px-sm-3 welcome-class">
            <div class="col-sm-6 col-12 mt-5 animate__animated animate__fadeInLeft">
                <h1 class="ps-5" style="font-size: 2.8vw;">Selamat Datang di SorYaHealts!</h1>
                <p class="ps-5 text-dark">Kami adalah apotek yang berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas kepada Anda dan keluarga</p>
                <div class="d-flex ps-4">
                    <ul class="nav mx-sm-0 mx-auto">
                        <li class="nav-item ms-3 text-bg-success rounded-pill "><a href="{{route('tentangKami')}}" class="nav-link text-white" aria-current="page">Info Selengkapnya </a></li>
                </div>
            </div>
            <div class="col-6 container-welcome-img pe-0">
                <img class="welcome-img" src="{{asset('images/Illustration.png')}}" alt="home" style="width: 450px;">
            </div>
        </div>

        <!-- Detail dokter obat artikel -->
        <div class="px-5 py-5">
            <div class="container w-75 mx-auto">
                <div class="card-body row-cols-md-3 row-cols-sm-1 row d-flex justify-content-between shadow-none">
                    <a href="#daftar-item-testimoni" class="col-md-4 col-12 card p-4 animate__animated animate__zoomIn card-info-user" style="text-decoration: none;">
                        <div class="d-flex text-left justify-content-center">
                            <p><i class="fa-solid fa-user " style="color: #03acf2; font-size: 70px;"></i></p>
                            <h2 class="ms-2 text-success fw-bold">{{count($userAll)}}++<br><span class="text-black fs-3">Pengguna</span></h2>
                        </div>
                        <p style="text-align: center; font-size: 10px; margin: 0 50px;">Lebih dari {{count($userAll)}} pengguna sudah berkunjung dan menjadi bagian keluarga sehat apotek SorYaHealts</p>
                    </a>
                    <a href="#daftar-obat-text" class="col-md-4 col-12 card p-4 my-md-0 my-3 animate__animated animate__zoomIn card-info-obat" style="text-decoration: none;">
                        <div class="d-flex text-left justify-content-center">
                            <p><i class="fa-solid fa-tablets" style="color: #03acf2; font-size: 70px;"></i></p>
                            <h2 class="ms-2 text-success fw-bold">{{count($obat)}}++<br><span class="text-black fs-3">Obat</span></h2>
                        </div>
                        <p style="text-align: center; font-size: 10px; margin: 0 50px;">Tersedia berbagai macam jenis maupun kategori obat yang membantu menjaga kesehatan anda </p>
                    </a>
                    <a href="#daftar-item-text" class="col-md-4 col-12 card p-4 animate__animated animate__zoomIn card-info-artikel" style="text-decoration: none;">
                        <div class="d-flex text-left justify-content-center ">
                            <p><i class="fa-regular fa-newspaper" style="color: #03acf2; font-size: 70px;"></i></p>
                            <h2 class="ms-2 text-success fw-bold">{{count($artikel)}}++<br><span class="text-black fs-3">Artikel</span></h2>
                        </div>
                        <p style="text-align: center; font-size: 10px; margin: 0 50px;">Ketahui berbagai tata cara dalam menjaga kesehatan anda melalui artikel-artikel yang sudah kami sediakan</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- daftar obat -->
<div class="ps-5  animate__animated" id="daftar-obat-text">
    <h1 class="ms-5 mt-5 title-section" style="font-size: 3vw;">Daftar Obat</h1>
    <div class="d-flex justify-content-between pe-5">
        <p class="ps-5 text-secondary pe-5">SorYaHealts menyediakan berbagai jenis obat yang akan selalu membantu menunjang kesehatan anda!</p>
        <a href="{{route('daftarObat')}}" class="nav-link ">Lihat Semua <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
    </div>
</div>
<!-- Foto obat -->
<img class="ms-5 oval-img-obat" src="{{asset('images/oval-outline.png')}}" alt="home" style="width: 350px;">
<div class="row mt-2 animate__animated" id="daftar-item-obat">
    <div class="col-4 mx-auto ms-3 img-obat">
        <img class="ms-5 " src="{{asset('images/foto_obat.png')}}" alt="home" style="width: 480px;">
    </div>
    <!-- carousel Obat-->
    <div class="container col-7">
        <div class="owl-carousel owl-carousel-obat owl-theme mousewheel">
            @forelse($obat as $item) <div class="item">
                <div class="card ms-2 mb-2 item" style="height: 450px; border: 2px solid #4CAF50;">
                    <img class="img-fluid mx-auto" src="{{asset('public/images/obat/'. $item['gambar_obat'])}}">
                    <div class="card-body d-flex flex-column pb-0 mb-0 bg-success">
                        <p><span class="badge rounded-pill border border-white mb-0">{{$item['jenis_obat']}}</span></p>
                        <a href="{{url('/transaksi')}}" class="card-title text-obat" style="text-decoration: none; font-size: 18px; display: -webkit-box; overflow: hidden; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                            {{$item['nama_obat']}}
                        </a>
                        <p class="card-text  d-block text-white" style="font-family: Lato light;  font-weight: bold;">{{$item['harga']}}</p>
                    </div>
                    <div class="card-footer bg-success border-0" style="background-color: white; border-top: none;">
                        <p class="mt-1 text-white"><span class="badge border border-white rounded-pill">{{$item['kategori_obat']}}</span> </p>
                        <a href="{{url('/transaksi')}}" class="btn btn-warning">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data Obat Tidak Tersedia
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- daftar Artikel -->
<div class="ps-5 " id="daftar-item-text">
    <h1 class="ms-5 mt-5 title-section" style="font-size: 3vw;">Artikel Kesehatan</h1>
    <div class="d-flex justify-content-between pe-5">
        <p class="ps-5 text-secondary">SorYaHealts memberikan pilihan artikel tentang kesehatan sebagai tambahan ilmu dalam merawat kesehatan anda!</p>
        <a href="{{route('artikel')}}" class="nav-link ">Lihat Semua <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
    </div>
</div>
<!-- Foto Artikel -->
<div class="owl-carousel owl-carousel-artikel owl-theme px-5">
    @forelse($artikel as $item) <div class="item">
        <div class="card mb-3" style="height: 500px;">
            <img src="{{asset('public/images/artikel/'. $item['gambar_artikel'])}}" class="card-img-top w-100 mx-auto" alt="...">
            <div class="card-body bg-success text-white d-flex flex-column justify-content-between">
                <h5 class="card-title">{{$item['judul']}}</h5>
                <div class="deskripsi-container" style=" white-space: nowrap; overflow: hidden; text-overflow: clip;">
                    <p id="deskripsi-artikel" class="card-text">{{$item['deskripsi']}}</p>
                </div>
                <a href="{{url('artikelDetail')}}" class="btn btn-warning">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-danger">
        Data Artikel Tidak Tersedia
    </div>
    @endforelse
</div>

<!-- daftar Testimoni -->
<div class=" ps-5" id="daftar-text-testimoni">
    <h1 class="ms-5 mt-5 title-section" style="font-size: 3vw;">Testimoni Customer</h1>
    <div class="d-flex justify-content-between pe-5">
        <p class="ps-5 text-secondary">Testimoni dari seluruh pengguna website SorYaHealts. Jangan lupa ajukan kritik dan saran anda juga ya !</p>
        <a href="{{url('/testimoni')}}" class="nav-link">Tulis Testimoni <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
    </div>
</div>
<!-- Foto Testimoni -->
<div class="row mt-3 ms-5 mb-5" id="daftar-item-testimoni">
    <!-- carousel Testimoni-->
    <div class="container col-8">
        <div class="owl-carousel owl-carousel-testimoni owl-theme">
            @forelse($testimoni as $item) <div class="item">
                <div class="card" style="height: 400px; border-radius: 50px;">
                    <div class="card-body">
                        <div class="d-flex ms-sm-3 ms-0 mt-4">
                            <img class="img-fluid  rounded-circle" src="{{$item['image']}}" style="width: 50px; height: 50px; background-color:white;">
                            <h5 class="my-auto ms-1 userTesti-name">{{$item['nama']}}</h5>
                        </div>
                        <p class="card-text ms-0 mt-3 userTesti-text " style="text-align: justify;"><i class="fa-solid fa-quote-left"></i> {{$item['ulasan']}} <i class="fa-solid fa-quote-right"></i></p>
                    </div>
                    <div class="card-footer d-flex float-right bg-success">
                        <p style="font-weight: bold; margin-right: 10px; color: white;">Rating: </p>
                        @for($j=0; $j < $item['rating']; $j++) <p><i class="fa-solid fa-star" style="color: #ffdd00;"></i></p>
                            @endfor
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data Testimoni Tidak Tersedia
            </div>
            @endforelse
        </div>
    </div>
    <div class="col-4 img-testimoni">
        <img class="mt-5" src="{{asset('images/foto_testimoni.png')}}" alt="home" style="width: 430px;">
    </div>
</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
@endsection