<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORYA HEALTS</title>
    <link rel="Icon" href="{{asset('/images/logo_icon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                            <a class="nav-link actived " aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Daftar Obat</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Artikel</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center" id="navbarNav">
                        <ul class="nav">
                            <li class="nav-item mx-1 "><a href="{{url('/login')}}" class="nav-link active border-end" aria-current="page">Login</a></li>
                            <li class="nav-item mx-1"><a href="#" class="nav-link text-bg-primary rounded-pill ">Register</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        window.onscroll = () => scrollFunction();

        function scrollFunction() {
            const navbar = document.getElementById("navbar");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.add("scrolled")
            } else {
                navbar.classList.remove("scrolled")
            }
        }
    </script>
</body>


</html>