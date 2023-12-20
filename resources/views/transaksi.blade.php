@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')
@section('content')
<style>
    * {
        font-family: Lato;
    }

    .hero-Transaksi {
        margin-top: 100px;
    }
</style>



<body>
    <!-- End Nav bar -->
    <div class="hero-Transaksi">
        <div class="container">
            <div class="row justify-content-center mt-10">
                <div class="col-md-12"> <!-- ukuran dari form pembatas -->
                    <div class="card mb-4 p-4">
                        <div class="row m-2">
                            <div class="col-xl-4 col-12"> <!--konten kiri  (gambar)-->
                                <div class="row">
                                </div>
                                <div class="row-2">
                                    <img class="img-fluid w-100" src="{{asset('public/images/obat/'. $obat['gambar_obat'])}}">
                                </div>
                            </div>
                            <div class="col-xl-8 col-12 bg-light p-4 mb-2 "> <!--konten kanan  (tombol dan deskripsi )-->
                                <div class="row justify-content-start align-items-start p-2">
                                    <div class="col-6"> <!--konten kiri  (deskripsi)-->
                                        <h2 style="color: #03ACF2;"> {{$obat['nama_obat']}}</h2>
                                        <div class="row mb-2 justify-content-start align-items-start"> <!--Label-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Golongan
                                            </div>
                                            <div class="col-6 text-center border border-primary rounded-pill text-bg-warning border-dark border border-3">
                                                {{$obat['golongan_obat']}}
                                            </div>
                                        </div>
                                        <div class="row mb-2 justify-content-start align-items-start "> <!--Harga-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Harga
                                            </div>
                                            <div class="col-xl-6 col-12"> <!--konten kiri  (penjelasa harga)-->
                                                {{$obat['harga_obat']}}
                                            </div>
                                        </div>
                                        <div class="row mb-2 justify-content-start align-items-start "> <!--Jumlah-->
                                            <div class="col-6"> <!--konten kiri  (nama)-->
                                                Jumlah
                                            </div>
                                            <div class="col-xl-6 col-12"> <!--konten kiri  (penjelasa jumlah)-->
                                                <div class="row justify-content-center align-items-center g-2">
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary btn-lg" id="decrementButton">-</button>
                                                    </div>
                                                    <div class=" col-4 text-center">
                                                        <p id="count">1</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary btn-lg" id="incrementButton">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start align-items-start p-3 fw-lighter">
                                        Dosis : {{$obat['dosis']}}
                                    </div>
                                    <div class="nav mx-sm-0 mx-auto row">
                                        @if(is_null($transaksi))
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#tambahKeranjang">
                                            Buat Transaksi
                                        </button>
                                        @else
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#tambahKeranjang">
                                            Tambah Keranjang
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card mb-4 p-4"> <!--card deskripsi-->
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-start"> Deskripsi</h5>
                        </div>
                        <div class="row m-2 ">
                            <p>{{$obat['deskripsi']}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi nilai awal
            var count = 1;

            // Tangani klik pada tombol increment
            $('#incrementButton').click(function() {
                count = count + 1;
                // Perbarui teks pada elemen dengan id "count"
                $('#count').text(count);
                $('#countValue').val(count);
            });

            $('#decrementButton').click(function() {
                if (count > 1) {
                    count = count - 1;
                    // Perbarui teks pada elemen dengan id "count"
                    $('#count').text(count);
                    $('#countValue').val(count);
                }
            });
        });
    </script>

</body>
@endsection

<div class="modal fade" id="tambahKeranjang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Berhasil Ditambahkan Ke Keranjang !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ingin lihat keranjang anda ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                <form action="{{route('transaksi')}}" method="post">
                    @csrf
                    <input type="text" value="{{$obat['id']}}" name="idObat" hidden >
                    <input type="text" value="1" name="countValue" id="countValue" hidden>
                    <button type="submit" class="btn btn-success">Lihat Keranjang</button>
                </form>
            </div>
        </div>
    </div>
</div>