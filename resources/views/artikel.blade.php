@extends(empty(session('userLogint')) || $userLogin[0]['email']==='' ? 'navbarUser' : 'navbarUserLogined')

@section('content')
<style>
    .artikel-container {

        height: 520px;
        left: 10px;
        object-fit: cover;
        position: relative;
        top: 0px;
        z-index: 2;
        overflow-x: hidden;
        color: white;
        border: 1px solid #4CAF50;
        border-radius: 10px;
    }

    .artikel-container::-webkit-scrollbar {
        width: 10px;
    }

    .artikel-container::-webkit-scrollbar-track {
        background: transparent;
    }

    .artikel-container::-webkit-scrollbar-thumb {
        border-radius: 30px;
        background: #4CAF50;
    }

    @media only screen and (min-width: 576px) {}
</style>


<div class=" px-md-3 px-0 pt-5">
    <div class="container pt-5 ms-5 me-0 ">
        <div class="row mt-3">
            <div class="col-md-8 col-sm-12 container">
                <div class="owl-carousel owl-carousel-artikel-terbaru owl-theme px-5 d-md-none d-block">
                    @for($i=0; $i < 5; $i++) <div class="item mx-auto">
                        <div class="card mb-3" style="height: 500px;">
                            <img src="{{$artikel[$i]['image']}}" class="card-img-top w-100 mx-auto" alt="...">
                            <div class="card-body bg-success text-white d-flex flex-column justify-content-between">
                                <h5 class="card-title">{{$artikel[$i]['judul']}}</h5>
                                <div class="deskripsi-container" style=" white-space: nowrap; overflow: hidden; text-overflow: clip;">
                                    <p id="deskripsi-artikel" class="card-text">{{$artikel[$i]['deskripsi']}}</p>
                                </div>
                                <a href="{{url('artikelDetail')}}" class="btn btn-warning">Lihat Selengkapnya</a>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
            <div class="card mb-3 animate__animated animate__zoomIn d-md-block d-none">
                <img src="{{$artikel[0]['image']}}" class="mx-auto w-100" alt="...">
                <div class="card-body bg-success text-white d-flex flex-column justify-content-between ">
                    <h3 class="card-title">{{$artikel[0]['judul']}}</h3>
                    <a href="{{url('artikelDetail')}}" class="btn btn-outline-light">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h2 class="ms-2 d-md-block d-none">Artikel Terbaru</h2>
            <div class="artikel-container animate__animated animate__zoomIn d-md-block d-none">
                @for ($j = 1; $j <= 5; $j++)<div class="item mx-auto mt-0 mb-3">
                    <div class="card mb-3" style="max-width: 540px; max-height: 150px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$artikel[$j]['image']}}" class="mx-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body bg-white text-black d-flex flex-column justify-content-center pb-3" style="height: 150px;">
                                    <p><span class="badge rounded-pill border border-success text-black mb-0">{{$artikel[$j]['topik']}}</span></p>
                                    <h5 class="card-title" style="font-size: 15px;">{{$artikel[$j]['judul']}}</h5>
                                    <div class="deskripsi-container" style=" white-space: nowrap; overflow: hidden; text-overflow: clip;">
                                        <p id="deskripsi-artikel" class="card-text" style="font-family: lato light; font-size: 10px;">{{$artikel[$j]['deskripsi']}}</p>
                                    </div>
                                    <a href="{{url('artikelDetail')}}" class="btn btn-outline-success mt-3 btn-sm">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
</div>


<div class="d-flex py-4 justify-content-between">
    <h2>Artikel Saat Ini</h2>
    <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Topik</button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{url('/artikel')}}">Semua Artikel</a></li>
        <li><a class="dropdown-item" href="{{url('/artikelMakananSehat')}}">Makanan Sehat</a></li>
        <li><a class="dropdown-item" href="{{url('/artikelDiet')}}">Diet dan Nutrisi</a></li>
        <li><a class="dropdown-item" href="{{url('/artikelKesehatanFisik')}}">Kesehatan Fisik</a></li>
        <li><a class="dropdown-item" href="{{url('/artikelKesehatanAnak ')}}">Kesehatan Anak</a></li>
    </ul>
</div>

<div class="row">
    @for ($i = 0; $i < count($artikel); $i++) @if($sort_by===$artikel[$i]['topik'] ||$sort_by==='' ) <div class="col-xl-3 col-md-4 col-sm-6 animate__animated animate__zoomIn item mb-sm-0 mb-5">
        <div class="card mb-5 card-general-artikel mb-sm-3 " style="height: 480px;">
            <img src="{{$artikel[$i]['image']}}" class="card-img-top w-100 mx-auto" alt="...">
            <div class="card-body bg-success text-white d-flex flex-column justify-content-between">
                <p><span class="badge rounded-pill border border-white mb-0">{{$artikel[$i]['topik']}}</span></p>
                <h5 class="card-title mt-0">{{$artikel[$i]['judul']}}</h5>
                <div class="deskripsi-container" style=" white-space: nowrap; overflow: hidden; text-overflow: clip;">
                    <p id="deskripsi-artikel" class="card-text" style="font-family: lato light; font-size: 13px;">{{$artikel[$i]['deskripsi']}}</p>
                </div>
                <a href="{{url('artikelDetail')}}" class="btn btn-warning">Lihat Selengkapnya</a>
            </div>
        </div>
</div>
@endif
@endfor
</div>
</div>
</div>


@endsection