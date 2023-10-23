<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/login_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- NavBar -->
    <header class="p-3 text-bg-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="header-logo">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"></ul>

                <div class="text-end">
                    <a href="/" class="OTWLogin">
                        <span>Login</span>
                    </a>
                    <span class="verticalLine"></span>
                    <a href="/" class="OTWLogin">
                        <span class="setting-svg-container">
                            <svg class="setting-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25px" height="25px" viewBox="0,0,256,256">
                                <g transform="">
                                    <g fill-opacity="0.54118" fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path d="M47.16,21.221l-5.91,-0.966c-0.346,-1.186 -0.819,-2.326 -1.411,-3.405l3.45,-4.917c0.279,-0.397 0.231,-0.938 -0.112,-1.282l-3.889,-3.887c-0.347,-0.346 -0.893,-0.391 -1.291,-0.104l-4.843,3.481c-1.089,-0.602 -2.239,-1.08 -3.432,-1.427l-1.031,-5.886c-0.084,-0.478 -0.499,-0.828 -0.985,-0.828h-5.5c-0.49,0 -0.908,0.355 -0.987,0.839l-0.956,5.854c-1.2,0.345 -2.352,0.818 -3.437,1.412l-4.83,-3.45c-0.399,-0.285 -0.942,-0.239 -1.289,0.106l-3.887,3.887c-0.343,0.343 -0.391,0.883 -0.112,1.28l3.399,4.863c-0.605,1.095 -1.087,2.254 -1.438,3.46l-5.831,0.971c-0.482,0.08 -0.836,0.498 -0.836,0.986v5.5c0,0.485 0.348,0.9 0.825,0.985l5.831,1.034c0.349,1.203 0.831,2.362 1.438,3.46l-3.441,4.813c-0.284,0.397 -0.239,0.942 0.106,1.289l3.888,3.891c0.343,0.343 0.884,0.391 1.281,0.112l4.87,-3.411c1.093,0.601 2.248,1.078 3.445,1.424l0.976,5.861c0.079,0.481 0.496,0.834 0.985,0.834h5.5c0.485,0 0.9,-0.348 0.984,-0.825l1.045,-5.89c1.199,-0.353 2.348,-0.833 3.43,-1.435l4.905,3.441c0.398,0.281 0.938,0.232 1.282,-0.111l3.888,-3.891c0.346,-0.347 0.391,-0.894 0.104,-1.292l-3.498,-4.857c0.593,-1.08 1.064,-2.222 1.407,-3.408l5.918,-1.039c0.479,-0.084 0.827,-0.5 0.827,-0.985v-5.5c0.001,-0.49 -0.354,-0.908 -0.838,-0.987zM25,32c-3.866,0 -7,-3.134 -7,-7c0,-3.866 3.134,-7 7,-7c3.866,0 7,3.134 7,7c0,3.866 -3.134,7 -7,7z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Nav bar -->


    <div class="hero-Transaksi">
        <div class="container">
            <div class="row justify-content-start mt-10">
                <h1>Daftar Keranjang</h1>
                <div class="col-md-8"> <!-- ukuran dari form pembatas -->
                    <div class="card card mb-4 p-4"> <!--card List Obat yang dibeli-->
                        <div class="row m-2"> <!-- obat yang dibeli-->
                            <div class="row g-2 border rounded p-2">
                                <div class="col-2 justify-content-center align-items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    <strong>nama Barang</strong>
                                    <div class="row justify-content-center g-2">
                                        <div class="col-2">Deskripsi</div>
                                        <div class="col-10">: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Label Produk</div>
                                        <div class="col-10">: Umum</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Harga</div>
                                        <div class="col-2">: Rp.12345</div>
                                        <div class="col-4 text-center">Tombol</div>
                                        <div class="col-4 text-center">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 border rounded p-2">
                                <div class="col-2 justify-content-center align-items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    <strong>nama Barang</strong>
                                    <div class="row justify-content-center g-2">
                                        <div class="col-2">Deskripsi</div>
                                        <div class="col-10">: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Label Produk</div>
                                        <div class="col-10">: Umum</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Harga</div>
                                        <div class="col-2">: Rp.12345</div>
                                        <div class="col-4 text-center">Tombol</div>
                                        <div class="col-4 text-center">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 border rounded p-2">
                                <div class="col-2 justify-content-center align-items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    <strong>nama Barang</strong>
                                    <div class="row justify-content-center g-2">
                                        <div class="col-2">Deskripsi</div>
                                        <div class="col-10">: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Label Produk</div>
                                        <div class="col-10">: Umum</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Harga</div>
                                        <div class="col-2">: Rp.12345</div>
                                        <div class="col-4 text-center">Tombol</div>
                                        <div class="col-4 text-center">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 border rounded p-2">
                                <div class="col-2 justify-content-center align-items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH-wkjIdM8fR73nVqwMsxLX8WyOnjr8l82bg&usqp=CAU" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    <strong>nama Barang</strong>
                                    <div class="row justify-content-center g-2">
                                        <div class="col-2">Deskripsi</div>
                                        <div class="col-10">: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Label Produk</div>
                                        <div class="col-10">: Umum</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Harga</div>
                                        <div class="col-2">: Rp.12345</div>
                                        <div class="col-4 text-center">Tombol</div>
                                        <div class="col-4 text-center">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4"> <!-- ukuran dari form pembatas -->
                    <div class="card card mb-4 p-4"> <!--card Total harga -->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Ringkasan Belanja</h5>
                        </div>
                        <div class="row m-2 border">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-4">Column</div>
                                <div class="col-8">Column</div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1>Pengiriman dan Pembayaran</h1>

                <div class="col-md-8"> <!-- ukuran dari form pembatas -->
                    <div class="card card mb-4 p-4"> <!--card konfirmasi Alamat-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Alamat</h5>
                            <p>Alamat : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="row m-2"> <!-- obat yang dibeli-->
                            <h5 class="text-start"> Metode Pembayaran</h5>

                            <div class="btn-group dropend">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropend
                                </button>
                                <ul class="dropdown-menu p-2">
                                    <p>makanan</p>
                                    <p>minuman</p>
                                    <p>cemilan</p>
                                </ul>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>