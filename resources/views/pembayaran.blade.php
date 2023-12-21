@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')

@section('content')
<style>
    .hero-Pembayaran {
        margin-top: 100px;
    }
</style>

<body>
    <div class="hero-Pembayaran">
        <div class="container">
            <div class="row justify-content-start mt-10">
                <h1>Daftar Keranjang</h1>
                <div class="col-md-12"> <!-- ukuran dari form pembatas -->
                    <div class="card card mb-4 p-4"> <!--card deskripsi-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Alamat</h5>
                            <p>{{$transaksi['alamat']['deskripsi']}}</p>
                        </div>
                        <div class="row m-2 card-header">

                            <div class="card card mb-4 p-4"> <!--card List Obat yang dibeli-->
                                @for($i=0; $i < count($keranjang); $i++) <div class="row m-2"> <!-- obat yang dibeli-->
                                    <div class="row g-2 border rounded p-2">
                                        <div class="col-2 justify-content-center align-items-center">
                                            <img src="{{asset('public/images/obat/'. $keranjang[$i]['obat']['gambar_obat'])}}" alt="" class="img-thumbnail">
                                        </div>
                                        <div class="col-10">
                                            <strong>{{$keranjang[$i]['obat']['nama_obat']}}</strong>
                                            <div class="row mt-2">
                                                <div class="col-xl-2 col-12">Harga</div>
                                                <div class="col-xl-10 col-12">: Rp
                                                    <?php echo number_format($keranjang[$i]['obat']['harga_obat']) ?>
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
                        <div class="row g-4 m-2 p-4 justify-content-center align-items-center">
                            <div class="col-xl-6 col-12">
                                <div class="card card mb-4 p-4">
                                    <div class="card-header bg-transparent mb-2">
                                        <h5 class="text-start"> Metode Pembayaran : {{$transaksi['metode_pembayaran']}}</h5>
                                    </div>
                                    <div class="row justify-content-center align-items-center">
                                        <img src="{{ ('images\Qris.png') }}" alt="">
                                    </div>
                                    <hr>

                                </div>

                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="card-header bg-transparent mb-2">

                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-6">
                                            <h5 class="text-start"> Total Pembayaran </h5>
                                        </div>
                                        <div class="col-6 ">
                                            <h5 class="text-start"> Rp.
                                                <?php
                                                $totalHarga = 0;

                                                for ($i = 0; $i < count($keranjang); $i++) {
                                                    $totalHarga = $totalHarga + ($keranjang[$i]['obat']['harga_obat'] * $keranjang[$i]['jumlah_obat']);
                                                }
                                                $totalHarga = $totalHarga + 10000;
                                                echo number_format($totalHarga)

                                                ?> </h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-start align-items-start p-2">
                                    <form action="{{route('mutasiDanaTransaksi')}}">
                                        <button type="button" class="btn text-bg-success btn-lg w-100" data-bs-toggle="modal" data-bs-target="#pembayaranModal">BAYAR</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal for Delete -->
    <div class="modal fade" id="pembayaranModal" tabindex="-1" role="dialog" aria-labelledby="pembayaranModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="pembayaranModalLabel">Selesaikan Transaksi</h5>
                </div>
                <form method="post" action="{{ route('mutasiDanaTransaksi') }}">
                    @csrf
                    <div class="modal-body">
                        Apakah semua detail transaksi anda sudah benar ?
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="totalHarga" value="{{$totalHarga}}" hidden>
                        <input type="text" name="idTransaksi" value="{{$transaksi['id']}}" hidden>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

@endsection