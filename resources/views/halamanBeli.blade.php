@extends('navbarUserLogined')

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
                                    <img src="{{$keranjang[$i]['image']}}" alt="" class="img-thumbnail">
                                </div>
                                <div class="col-10">
                                    <strong>{{$keranjang[$i]['nama_obat']}}</strong>
                                    <div class="row justify-content-center g-2">
                                        <div class="col-2">Deskripsi</div>
                                        <div class="col-10">: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>

                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Harga</div>
                                        <div class="col-10">: Rp {{$keranjang[$i]['harga']}}</div>
                                    </div>
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-2">Jumlah</div>
                                        <div class="col-10">: {{$keranjang[$i]['jumlah']}}</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>

            <div class="col-md-4"> <!-- ukuran dari form pembatas -->
                <div class="card card mb-4 p-4"> <!--card Total harga -->
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-start"> Ringkasan Belanja</h5>
                    </div>
                    <div class="card-header bg-transparent mb-0">
                        <h6 class="text-start"> Total Obat</h6>
                        @for($i=0; $i < count($keranjang); $i++) <div class="row justify-content-center align-items-center g-2">
                            <div class="col-2">{{$keranjang[$i]['jumlah']}}</div>
                            <div class="col-5">{{$keranjang[$i]['nama_obat']}}</div>
                            <div class="col-5">Rp. {{$keranjang[$i]['harga']}}</div>
                    </div>
                    @endfor
                </div>
                <div class="card-header bg-transparent mb-0">
                    <h6 class="text-start"> Biaya Transaksi</h6>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col">Biaya Layanan</div>
                        <div class="col">Rp. 10000</div>
                    </div>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col">Biaya jasa Aplikasi</div>
                        <div class="col">Rp. 10000</div>
                    </div>
                </div>

                <div class="">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-6">Total Tagihan</div>
                        <div class="col-6">
                            Rp.
                            <?php
                            $x = 0;

                            for ($i = 0; $i < count($keranjang); $i++) {
                                $x = $x + $keranjang[$i]['harga'];
                            }
                            $x = $x + 20000;
                            echo $x
                            ?>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-start align-items-start p-2">
                    <a href="{{url('/pembayaran')}}" class="nav-link text-bg-success rounded text-center" style="width: 400px; height:50px; display: flex; justify-content: center; align-items: center;">BAYAR</a>
                </div>
            </div>
        </div>

        <h1>Pengiriman dan Pembayaran</h1>

        <div class="col-md-8"> <!-- ukuran dari form pembatas -->
            <div class="card card mb-4 p-4"> <!--card konfirmasi Alamat-->
                <div class="card-header bg-transparent mb-0">
                    <h5 class="text-start"> Alamat</h5>
                    <select name="alamat_lengkap" id="alamat_lengkap">
                        @for($i=0; $i < count($keranjang); $i++) <option value="{{$alamat[$i]['alamat_lengkap']}}">{{$alamat[$i]['alamat_lengkap']}}</option>
                            @endfor
                    </select>
                </div>
                <div class="card-header bg-transparent mb-0">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-4">
                            <h5 class="text-start"> Metode Pembayaran</h5>
                        </div>
                        <div class="col-8">
                            <select name="metode" id="metode">
                                @for($i=0; $i < count($MetodePembayaran); $i++) <option value="{{$alamat[$i]['alamat_lengkap']}}">{{$MetodePembayaran[$i]['metode']}}</option>
                                    @endfor
                            </select>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>

</body>

@endsection