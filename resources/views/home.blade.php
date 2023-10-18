@extends('navbarUser')

@section('content')

<style>
    * {
        font-family: Lato, serif;
    }

    p {
        font-family: Lato light;
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-start,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    .welcome-img {
        position: absolute;
        top: 70px;
        right: 50px;
        transform: scale(1.3);
    }

    .oval-img-obat {
        position: absolute;
        top: 700px;
        left: -100px;
        z-index: -1;
        transform: scale(1.5);
    }

    .oval-img-artikel {
        position: absolute;
        top: 1250px;
        right: -100px;
        z-index: -1;
        transform: scale(1.5);
    }
</style>
<div class=" mt-5" style="height: 600px;">
    <div class="row p-5 row-cols-xl-2">
        <div class="col-6 mt-5">
            <h1 class="ps-5" style="font-size: 3vw;">Lorem ipsum dolor amet</h1>
            <p class="ps-5 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestiae incidunt quis error earum eum officia magni nobis eos praesentium ipsum ut hic modi, cum vel doloribus, rerum corrupti repellat..</p>
            <div class="d-flex ps-4">
                <ul class="nav">
                    <li class="nav-item mx-1 "><a href="{{url('/login')}}" class="nav-link active" aria-current="page">More Info</a></li>
                    <li class="nav-item mx-1 text-center"><a href="#" class="nav-link text-bg-success rounded-pill border-end" style="width: 200px;">Register Now</a></li>
            </div>
        </div>
        <div class="col-6 ps-5 container-welcome-img">
            <img class="ms-5 welcome-img" src="{{asset('images/Illustration.png')}}" alt="home" style="width: 450px;">
        </div>
    </div>

    <!-- Detail dokter obat artikel -->
    <div class="px-5 pt-5 pb-3">
        <div class="container w-75 mx-auto">
            <div class="card-body row-cols-3 d-flex justify-content-between shadow-none">
                <div class="cols card p-4">
                    <div class="d-flex text-left justify-content-center">
                        <p><i class="fa-solid fa-user-doctor " style="color: #03acf2; font-size: 70px;"></i></p>
                        <h2 class="ms-2 text-success fw-bold">+50<br><span class="text-black fs-3">Dokter</span></h2>
                    </div>
                    <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
                </div>
                <div class="cols card p-4 mx-3">
                    <div class="d-flex text-left justify-content-center">
                        <p><i class="fa-solid fa-tablets" style="color: #03acf2; font-size: 70px;"></i></p>
                        <h2 class="ms-2 text-success fw-bold">+200<br><span class="text-black fs-3">Obat</span></h2>
                    </div>
                    <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
                </div>
                <div class="cols card p-4">
                    <div class="d-flex text-left justify-content-center">
                        <p><i class="fa-regular fa-newspaper" style="color: #03acf2; font-size: 70px;"></i></p>
                        <h2 class="ms-2 text-success fw-bold">+100<br><span class="text-black fs-3">Artikel</span></h2>
                    </div>
                    <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
                </div>
            </div>
        </div>
    </div>

    <!-- daftar obat -->
    <div class="ps-5 pe-5">
        <h1 class="ms-5 mt-5" style="font-size: 3vw;">Daftar Obat</h1>
        <div class="d-flex justify-content-between">
            <p class="ps-5 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <a href="#" class="nav-link ">See All <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
        </div>
    </div>
    <!-- Foto obat -->
    <div class="row mt-3">
        <div class="col-3 mx-auto">
            <img class="ms-5" src="{{asset('images/home.png')}}" alt="home" style="width: 350px;">
            <img class="ms-5 oval-img-obat" src="{{asset('images/oval-outline.png')}}" alt="home" style="width: 350px;">
        </div>
        <!-- carousel Obat-->
        <div id="carouselExampleInterval" class="carousel slide container col-8" data-bs-ride="carousel">
            <div class="carousel-inner w-100 row mb-4">
                <div class="carousel-item  active" data-bs-interval="5000">
                    <div class="card col-4 ms-2" style="width: 18rem;">
                        <img class="img-fluid mx-auto" src="{{asset('images/home.png')}}">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="card col-4 ms-2" style="width: 18rem;">
                        <img class="img-fluid mx-auto" src="{{asset('images/home.png')}}">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="card col-4 ms-2" style="width: 18rem;">
                        <img class="img-fluid mx-auto" src="{{asset('images/home.png')}}">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- daftar Artikel -->
    <div class="ps-5 pe-5">
        <h1 class="ms-5 mt-5" style="font-size: 3vw;">Artikel Kesehatan</h1>
        <div class="d-flex justify-content-between">
            <p class="ps-5 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <a href="#" class="nav-link ">See All <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
            <!-- <img class="ms-5 oval-img-artikel" src="{{asset('images/oval_outline.png')}}" alt="home" style="width: 350px;"> -->
        </div>
    </div>
    <!-- Foto Artikel -->
    <div class="row mx-5">
        <div id="carouselExampleIndicators" class="carousel slide ms-2 mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-3 ms-2">
                        <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 ms-2">
                        <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-3 ms-2">
                        <img src="{{asset('images/home.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- daftar Testimoni -->
    <div class="ps-5 pe-5 ">
        <h1 class="ms-5 mt-5" style="font-size: 3vw;">Testimoni Customer</h1>
        <div class="d-flex justify-content-between">
            <p class="ps-5 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <a href="#" class="nav-link ">See All <i class="fa-solid fa-arrow-right" style="color: #000000;"></i></a>
        </div>
    </div>
    <!-- Foto Testimoni -->
    <div class="row mt-3 ms-5">
        <!-- carousel Testimoni-->
        <div id="carouselTestimoni" class="carousel slide container col-8 ps-4" data-bs-ride="carousel">
            <div class="carousel-inner w-100 row mb-4">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="card col-4 ms-1" style="width: 18rem;  border-radius: 50px;height: 15rem;">
                        <div class="card-body">
                            <div class="d-flex ms-3 mt-4">
                                <img class="img-fluid  rounded-circle" src="{{asset('images/oval.png')}}" style="width: 30px; height: 30px; background-color:yellow;">
                                <h5 class="my-auto ms-1">Candra Sihotang</h5>
                            </div>
                            <p class="card-text ms-5 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="card col-4 ms-1" style="width: 18rem;  border-radius: 50px;height: 15rem;">
                        <div class="card-body">
                            <div class="d-flex ms-3 mt-4">
                                <img class="img-fluid  rounded-circle" src="{{asset('images/oval.png')}}" style="width: 30px; height: 30px; background-color:yellow;">
                                <h5 class="my-auto ms-1">Candra Sihotang</h5>
                            </div>
                            <p class="card-text ms-5 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " data-bs-interval="5000">
                    <div class="card col-4 ms-1" style="width: 18rem;  border-radius: 50px;height: 15rem;">
                        <div class="card-body">
                            <div class="d-flex ms-3 mt-4">
                                <img class="img-fluid  rounded-circle" src="{{asset('images/oval.png')}}" style="width: 30px; height: 30px; background-color:yellow;">
                                <h5 class="my-auto ms-1">Candra Sihotang</h5>
                            </div>
                            <p class="card-text ms-5 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-4">
            <img class="" src="{{asset('images/home.png')}}" alt="home" style="width: 350px;">
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script type='text/javascript'>
    $('.carousel .carousel-item').each(function() {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
@endsection