<!DOCTYPE html>
<html lang="en">

<head data-bs-theme="dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/register_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<!-- using login style.css -->

<body class="body-login">
    <header class="p-3 text-bg-white animate__animated animate__fadeIn">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <div class="box-gambar">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" class="header-logo"
                            style="width:150px;">
                    </div>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"></ul>

                <div class="text-end">
                    <a href="{{url('login')}}" class="OTWLogin">
                        <span>Login</span>
                    </a>
                    <span class="verticalLine"></span>
                    <a href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false"
                        class="OTWLogin">
                        <span class="setting-svg-container">
                            <svg class="setting-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25px"
                                height="25px" viewBox="0,0,256,256">
                                <g transform="">
                                    <g fill-opacity="0.54118" fill="#000000" fill-rule="nonzero" stroke="none"
                                        stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M47.16,21.221l-5.91,-0.966c-0.346,-1.186 -0.819,-2.326 -1.411,-3.405l3.45,-4.917c0.279,-0.397 0.231,-0.938 -0.112,-1.282l-3.889,-3.887c-0.347,-0.346 -0.893,-0.391 -1.291,-0.104l-4.843,3.481c-1.089,-0.602 -2.239,-1.08 -3.432,-1.427l-1.031,-5.886c-0.084,-0.478 -0.499,-0.828 -0.985,-0.828h-5.5c-0.49,0 -0.908,0.355 -0.987,0.839l-0.956,5.854c-1.2,0.345 -2.352,0.818 -3.437,1.412l-4.83,-3.45c-0.399,-0.285 -0.942,-0.239 -1.289,0.106l-3.887,3.887c-0.343,0.343 -0.391,0.883 -0.112,1.28l3.399,4.863c-0.605,1.095 -1.087,2.254 -1.438,3.46l-5.831,0.971c-0.482,0.08 -0.836,0.498 -0.836,0.986v5.5c0,0.485 0.348,0.9 0.825,0.985l5.831,1.034c0.349,1.203 0.831,2.362 1.438,3.46l-3.441,4.813c-0.284,0.397 -0.239,0.942 0.106,1.289l3.888,3.891c0.343,0.343 0.884,0.391 1.281,0.112l4.87,-3.411c1.093,0.601 2.248,1.078 3.445,1.424l0.976,5.861c0.079,0.481 0.496,0.834 0.985,0.834h5.5c0.485,0 0.9,-0.348 0.984,-0.825l1.045,-5.89c1.199,-0.353 2.348,-0.833 3.43,-1.435l4.905,3.441c0.398,0.281 0.938,0.232 1.282,-0.111l3.888,-3.891c0.346,-0.347 0.391,-0.894 0.104,-1.292l-3.498,-4.857c0.593,-1.08 1.064,-2.222 1.407,-3.408l5.918,-1.039c0.479,-0.084 0.827,-0.5 0.827,-0.985v-5.5c0.001,-0.49 -0.354,-0.908 -0.838,-0.987zM25,32c-3.866,0 -7,-3.134 -7,-7c0,-3.866 3.134,-7 7,-7c3.866,0 7,3.134 7,7c0,3.866 -3.134,7 -7,7z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <!-- <div class="mt-3 dropdown-container dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="fa fa-tachometer"></i>
                                <p class="mb-0 fs-6">Dashboard</p>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="fa fa-user"></i>
                                <p class="mb-0 fs-6">Account</p>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="fa fa-history"></i>
                                <p class="mb-0 fs-6">History</p>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="fa fa-sign-out"></i>
                                <p class="mb-0 fs-6">Logout</p>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
    </header>

    <main>
        <div class="hero">
            <div class="form-box animate__animated animate__fadeInLeft">
                <div class="isinya">
                    <div class="header-form">
                        <h2 class="judul-form">Buat Akun Anda</h2>
                        <div class="social-buttons">
                            <div class="facebook">
                                <button class="social-button facebook">
                                    <span> <svg class="fb-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="100" height="100" viewBox="0,0,256,256">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(5.12,5.12)">
                                                    <path
                                                        d="M32,11h5c0.552,0 1,-0.448 1,-1v-6.737c0,-0.524 -0.403,-0.96 -0.925,-0.997c-1.591,-0.113 -4.699,-0.266 -6.934,-0.266c-6.141,0 -10.141,3.68 -10.141,10.368v6.632h-7c-0.552,0 -1,0.448 -1,1v7c0,0.552 0.448,1 1,1h7v19c0,0.552 0.448,1 1,1h7c0.552,0 1,-0.448 1,-1v-19h7.222c0.51,0 0.938,-0.383 0.994,-0.89l0.778,-7c0.066,-0.592 -0.398,-1.11 -0.994,-1.11h-8v-5c0,-1.657 1.343,-3 3,-3z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="button-text">Facebook</span>
                                </button>
                            </div>


                            <div class="twitter">
                                <button class="social-button twitter">
                                    <span> <svg class="twitter-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            viewBox="0,0,256,256">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(8.53333,8.53333)">
                                                    <path
                                                        d="M28,6.937c-0.957,0.425 -1.985,0.711 -3.064,0.84c1.102,-0.66 1.947,-1.705 2.345,-2.951c-1.03,0.611 -2.172,1.055 -3.388,1.295c-0.973,-1.037 -2.359,-1.685 -3.893,-1.685c-2.946,0 -5.334,2.389 -5.334,5.334c0,0.418 0.048,0.826 0.138,1.215c-4.433,-0.222 -8.363,-2.346 -10.995,-5.574c-0.458,0.788 -0.721,1.704 -0.721,2.683c0,1.85 0.941,3.483 2.372,4.439c-0.874,-0.028 -1.697,-0.268 -2.416,-0.667c0,0.023 0,0.044 0,0.067c0,2.585 1.838,4.741 4.279,5.23c-0.447,0.122 -0.919,0.187 -1.406,0.187c-0.343,0 -0.678,-0.034 -1.003,-0.095c0.679,2.119 2.649,3.662 4.983,3.705c-1.825,1.431 -4.125,2.284 -6.625,2.284c-0.43,0 -0.855,-0.025 -1.273,-0.075c2.361,1.513 5.164,2.396 8.177,2.396c9.812,0 15.176,-8.128 15.176,-15.177c0,-0.231 -0.005,-0.461 -0.015,-0.69c1.043,-0.753 1.948,-1.692 2.663,-2.761z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="button-text">Twitter</span>
                                </button>
                            </div>

                            <div class="google">
                                <button class="social-button google">
                                    <span> <svg class="google-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="100" height="100" viewBox="0,0,256,256">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(5.12,5.12)">
                                                    <path
                                                        d="M25.99609,48c-12.68359,0 -23.00391,-10.31641 -23.00391,-23c0,-12.68359 10.32031,-23 23.00391,-23c5.74609,0 11.24609,2.12891 15.49219,5.99609l0.77344,0.70703l-7.58594,7.58594l-0.70312,-0.60156c-2.22656,-1.90625 -5.05859,-2.95703 -7.97656,-2.95703c-6.76562,0 -12.27344,5.50391 -12.27344,12.26953c0,6.76563 5.50781,12.26953 12.27344,12.26953c4.87891,0 8.73438,-2.49219 10.55078,-6.73828h-11.55078v-10.35547l22.55078,0.03125l0.16797,0.79297c1.17578,5.58203 0.23438,13.79297 -4.53125,19.66797c-3.94531,4.86328 -9.72656,7.33203 -17.1875,7.33203z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="button-text">Google</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-line"></div>
                        <div class="divider-text">Atau daftar dengan email</div>
                        <div class="divider-line"></div>
                    </div>

                    <div class="tampung">
                        <form class="row g-3" action="">
                            <div class="col-md-8 offset-md-2 col-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputName4">
                            </div>
                            <div class="col-md-8 offset-md-2 col-12">
                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                <input type="number" name="noTelp" class="form-control" id="inputName4">
                            </div>
                            <div class="col-md-8 offset-md-2 col-12">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" name="JenisKelamin" class="form-control" id="inputName4">
                            </div>
                            <div class="col-md-8 offset-md-2 col-12">
                                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="month" name="tglLahir" class="form-control" id="inputName4">
                            </div>
                            <div class="col-md-8 offset-md-2 col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputName4">
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control custom-input"
                                    id="inputPassword4">
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="re-password" class="form-label">Re-Password</label>
                                <input type="re-password" name="re-password" class="form-control custom-input"
                                    id="inputRePassword4">
                            </div>
                            <div class="form-check offset-md-2 mb-4">
                                <input type="checkbox" name="remember-me" id="remember-me" class="form-check-input"
                                    value="1">
                                <label class="form-check-label" for="remember-me">I have read and accept the Terms of <b>Service & Privacy Policy*</b></label>
                            </div>
                            <div class="btn-container">
                                <button type="submit" class="btn btn-primary col-8">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="side-content animate__animated animate__fadeInRight">
                <div class="side-title-content">
                    <h1>Lorem ipsum dolor sit, amet consectetur </h1>
                </div>
                <div class="side-description-content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis ad explicabo perspiciatis
                        harum,
                        sapiente non quod velit tempora aliquid atque.</p>
                </div>
                <div class="side-image-content">
                    <img src="{{ asset('images/Register.png') }}" alt="image" style="width:60%;">
                </div>
            </div>
        </div>
    </main>

    <footer class="animate__animated animate__fadeInUp">
        <div class="content-footer">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="footer-logo" style="width:150px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nam.</p>
            <p>&copy; SorYaHealts 2023</p>
        </div>
        <div class="content-footer">
            <h4>SERVICES</h4>
            <div class="d-grid gap-3">
                <a href="#" style="text-decoration: none; color: black"><span>Pesan Obat?</span></a>
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
            <!-- <div class="footer-leng">
                <i style="font-size:24px" class="fa">&#xf0ac;</i>
                <select id="lenguage" name="lenguage">
                    <option value="english">english</option>
                    <option value="indonesia">indonesia</option>
                    <option value="rusia">rusia</option>
                    <option value="italia">italia</option>
                </select>
            </div> -->
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
