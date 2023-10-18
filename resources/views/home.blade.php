@extends('navbarUser')

@section('content')

<style>
    * {
        font-family: Lato, serif;
    }

    p {
        font-family: Lato light;
    }
</style>
<div class="bg  mt-5" style="height: 600px;">
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
        <div class="col-6 ps-5">
            <img class="ms-5" src="{{asset('images/home.png')}}" alt="home" style="width: 450px;">
        </div>
    </div>

    <div class="container w-75 mx-auto  mt-3">
        <div class="card-body row-cols-3 d-flex justify-content-between shadow-none">
            <div class="cols card-text">
                <div class="d-flex text-left justify-content-center">
                    <p><i class="fa-solid fa-user-doctor " style="color: #03acf2; font-size: 70px;"></i></p>
                    <h2 class="ms-2 text-success fw-bold">+50<br><span class="text-black fs-3">Dokter</span></h2>
                </div>
                <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
            </div>
            <div class="cols card-text">
                <div class="d-flex text-left justify-content-center">
                    <p><i class="fa-solid fa-tablets" style="color: #03acf2; font-size: 70px;"></i></p>
                    <h2 class="ms-2 text-success fw-bold">+200<br><span class="text-black fs-3">Obat</span></h2>
                </div>
                <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
            </div>
            <div class="cols card-text">
                <div class="d-flex text-left justify-content-center">
                    <p><i class="fa-regular fa-newspaper" style="color: #03acf2; font-size: 70px;"></i></p>
                    <h2 class="ms-2 text-success fw-bold">+100<br><span class="text-black fs-3">Artikel</span></h2>
                </div>
                <p style="text-align: center; font-size: 10px; margin: 0 50px;">Maecenas nisl libero, tincidunt id odio id, feugiat vulputate quam. </p>
            </div>
        </div>
    </div>

</div>

@endsection