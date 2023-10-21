<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORYA HEALTS-{{$title}}</title>
    <link rel="Icon" href="{{asset('/images/logo_icon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<style>
    * {
        font-family: Lato;
    }

    img {
        width: 200px;

    }

    .navbar .navbar-nav .nav-link:hover {
        color: #03ACF2;
    }

    .navbar .navbar-nav .nav-item {
        position: relative;

    }

    .navbar .navbar-nav .nav-item::after {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        background-color: #03ACF2;
        border-radius: 20px;
        width: 0%;
        content: "";
        height: 4px;
        transition: all 0.5s;
    }

    .navbar .navbar-nav .nav-item:hover::after {
        width: 100%;
    }

    .nav-top {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    #navbar {
        background-color: transparent;
        transition: all 300ms linear;
    }

    #navbar.scrolled {
        background-color: white;
        transition: background-color 200ms linear;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
    }

    .actived {
        color: #03ACF2;
    }

    main {
        background-image: url('images/background-rev.jpeg');
        background-repeat: no-repeat;
        height: 100%;
        background-size: auto;
        background-position-y: bottom;
    }

    .dropdown-toggle:focus {
        border: 0px;
    }

    .profile-photo:hover {
        cursor: pointer;
    }
</style>

</head>

<body>
    <header class="fixed-top scrolled" id="navbar">
        <nav class="navbar nav-top navbar-expand-lg navbar-light align mx-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll text-center">
                        <li class="nav-item me-3">
                            <a class="nav-link {{ ($title === 'Home') ? 'actived' : ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link {{ ($title === 'DaftarObat') ? 'actived' : ''}}" href="{{url('/daftarObat')}}">Daftar Obat</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link {{ ($title === 'Artikel') ? 'actived' : ''}}" href="{{url('/artikel')}}">Artikel</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link  {{ ($title === 'Tentang Kami') ? 'actived' : ''}}" href="{{url('/tentangKami')}}">Tentang Kami</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center" id="navbarNav">
                        <label for="dropdownMenu2">
                            <img class="img-fluid rounded-circle mt-2 profile-photo" src="{{url('https://th.bing.com/th/id/OIP.xo-BCC1ZKFpLL65D93eHcgHaGe?pid=ImgDet&rs=1')}}" style="width: 35px; height: 30px; background-color:grey;">
                        </label>
                        <div class="dropdown ">
                            <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                                Candra Sihotang
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item" href="{{url('/profile')}}"><i class="fa-solid fa-user me-2"></i>Profil Anda</a></li>
                                <li><a class="dropdown-item" href="{{url('/daftarObat')}}"><i class="fa-solid fa-cart-shopping me-2"></i> Keranjang Belanja</a></li>
                                <li><a class="dropdown-item" href="{{url('/daftarObat')}}"><i class="fa-solid fa-pen me-2"></i>Tulis Testimoni</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
        <!-- footer -->
        <footer class="animate__animated animate__fadeInUp mb-0">
            <div class="content-footer">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="footer-logo" style="width:150px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nam.</p>
                <p>&copy; SorYaHealts 2023</p>
            </div>
            <div class="content-footer">
                <h4>SERVICES</h4>
                <div class="d-grid gap-3">
                    <a href="#" style="text-decoration: none; color: black"><span>Pesan Obat?</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Testimoni Apotek</span></a>
                </div>
            </div>
            <div class="content-footer">
                <h4>LOCATIONS</h4>
                <div class="d-grid gap-3">
                    <a href="#" style="text-decoration: none; color: black"><span>Yogyakarya</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Batam</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Bali</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Semarang</span></a>
                </div>
            </div>
            <div class="content-footer">
                <h4>KENAPA PILIH SORYAHEALTS?</h4>
                <div class="d-grid gap-3">
                    <a href="#" style="text-decoration: none; color: black"><span>Apotik Terbaik</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Kualitas Terbaik</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Fasilitas Modern</span></a>
                    <a href="#" style="text-decoration: none; color: black"><span>Reputasi Modern</span></a>
                </div>
            </div>
            <div class="content-footer">
                <div class="footer-sosmed">
                    <a href="#" style="text-decoration: none; color: black"><span><i class="fa fa-facebook-f" style="font-size:24px"></i></span></a>
                    <a href="#" style="text-decoration: none; color: black"><span><i style="font-size:24px" class="fa">&#xf08c;</i></span></a>
                    <a href="#" style="text-decoration: none; color: black"><span><i style="font-size:24px" class="fa">&#xf099;</i></span></a>
                    <a href="#" style="text-decoration: none; color: black"><span><i style="font-size:24px" class="fa">&#xf030;</i></span></a>
                    <a href="#" style="text-decoration: none; color: black"><span><i style="font-size:24px" class="fa">&#xf0ac;</i></span></a>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="js/transition.js"></script>




</body>


</html>