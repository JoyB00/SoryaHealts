@extends('navbarUser')

@section('content')
<style>
    .artikel-container {

        height: 420px;
        left: 10px;
        object-fit: cover;
        position: relative;
        top: 0px;
        padding-top: 20px;
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
</style>


<div class=" px-md-3 px-0 pt-5">
    <div class="container py-5 mx-5 ">
        <h2 style="color: #03ACF2;">Artike Terbaru</h2>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide d-md-none d-block" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for ($i = 0; $i < 5; $i++) <div class="carousel-item card mb-3 {{($i==0) ? 'active' : ''}}">
                            <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="card mb-3 animate__animated animate__zoomIn d-md-block d-none">
                <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="artikel-container col-4 animate__animated animate__zoomIn d-md-block d-none">
            @for ($i = 0; $i < 5; $i++) <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('images/home.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>

<div class="d-flex py-4 justify-content-between">
    <h2 style="color: #03ACF2;">Artikel Saat Ini</h2>
    <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Topik</button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Pola Hidup Sehat</a></li>
        <li><a class="dropdown-item" href="#">Kesehatan Mata</a></li>
        <li><a class="dropdown-item" href="#">Diabetes</a></li>
    </ul>
</div>

<div class="row">
    @for ($i = 0; $i < 20; $i++) <div class="col-xl-3 col-md-4 col-sm-6 animate__animated animate__zoomIn">
        <div class="card mb-3">
            <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
</div>
@endfor
</div>
</div>
</div>

@endsection