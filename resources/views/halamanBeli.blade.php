@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')

@section('content')

<style>
    .hero-Transaksi {
        margin-top: 100px;
    }

    h1 {
        margin-bottom: 40px;
    }

    #alamat_lengkap {
        border: none;
        width: 100%;
    }

    #metode {
        width: 100%;
    }
</style>


<body>
    <div class="hero-Transaksi">
        <div class="container">
            <div class="row justify-content-start mt-10">
                <h1>Daftar Keranjang</h1>
                <div class="col-md-8"> <!-- ukuran dari form pembatas -->
                    <div class="card card mb-4 p-4"> <!--card List Obat yang dibeli-->
                        @for($i=0; $i < count($keranjang); $i++) <div class="row m-2"> <!-- obat yang dibeli-->
                            <div class="row g-2 border rounded p-2">
                                <div class="col-2 justify-content-center align-items-center">
                                    <img src="{{asset('public/images/obat/'. $keranjang[$i]['obat']['gambar_obat'])}}" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    {{$keranjang[$i]['obat']['nama_obat']}}

                                    <div class="row mt-2">
                                        <div class="col-xl-2 col-12">Harga</div>
                                        <div class="col-xl-10 col-12">: Rp <?php echo number_format($keranjang[$i]['obat']['harga_obat']) ?>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xl-2 col-12">Jumlah</div>
                                        <div class="col-xl-10 col-12">: {{$keranjang[$i]['jumlah_obat']}}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xl-2 col-12">Dosis</div>
                                        <div class="col-xl-10 col-12">: {{$keranjang[$i]['obat']['dosis']}}</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4 d-md-block d-none"> <!-- ukuran dari form pembatas -->
                <div class="card card mb-4 p-4"> <!--card Total harga -->
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-start"> Ringkasan Belanja</h5>
                    </div>
                    <div class="card-header bg-transparent mb-0">
                        <div class="row">
                            <div class="col-7">
                                <h5>Nama Obat</h5>
                            </div>
                            <div class="col-5">
                                <h5>Total Harga</h5>
                            </div>
                        </div>
                        @for($i=0; $i < count($keranjang); $i++) <div class="row justify-content-center align-items-center g-2">
                            <div class="col-7">
                                <p>{{$keranjang[$i]['obat']['nama_obat']}}</p>
                            </div>
                            <div class="col-4">
                                <p>
                                    Rp. <?php echo number_format($keranjang[$i]['obat']['harga_obat'] * $keranjang[$i]['jumlah_obat']) ?>
                                </p>
                            </div>
                    </div>
                    @endfor
                </div>
                <div class="card-header bg-transparent mb-0">
                    <h5 class="text-start"> Biaya Lainnya</h5>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-8">
                            <p>Biaya Admin</p>
                        </div>
                        <div class="col-4">
                            <p>Rp. 10,000</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-8">
                            <h5>Total Tagihan</h5>
                        </div>
                        <div class="col-4">
                            Rp.
                            <?php
                            $x = 0;

                            for ($i = 0; $i < count($keranjang); $i++) {
                                $x = $x + ($keranjang[$i]['obat']['harga_obat'] * $keranjang[$i]['jumlah_obat']);
                            }
                            $x = $x + 10000;
                            echo number_format($x)
                            ?>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-start align-items-start p-2">
                    <a href="#bayar" class="btn btn-outline-success rounded text-center" style="width: 400px; height:50px; display: flex; justify-content: center; align-items: center;">Pilih Alamat dan Metode Pembayaran</a>
                </div>
            </div>
        </div>

        <h1 id="bayar">Pengiriman dan Pembayaran</h1>
        <div class="col-md-8"> <!-- ukuran dari form pembatas -->
            <form action="{{route('pembayaran')}}" method="get">
                <div class="card card mb-4 p-4"> <!--card konfirmasi Alamat-->
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-start"> Alamat</h5>
                        <select name="alamat" id="alamat_lengkap" class="form-select" required>
                            <option value="" selected disabled>Pilih Alamat</option>
                            @for($i=0; $i < count($alamat); $i++) <option value="{{$alamat[$i]['id']}}">{{$alamat[$i]['deskripsi']}}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="card-header bg-transparent mb-0">
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-4">
                                <h5 class="text-start"> Metode Pembayaran</h5>
                            </div>
                            <div class="col-8">
                                <select name="metode" id="metode" class="form-select" required>
                                    <option value="" selected disabled>Pilih Metode</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BCA">BCA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-start p-2">
                        <button type="submit" class="nav-link text-bg-success rounded text-center" style="width: 100%; height:50px; display: flex; justify-content: center; align-items: center;">BAYAR</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </div>
    </div>

</body>

@endsection