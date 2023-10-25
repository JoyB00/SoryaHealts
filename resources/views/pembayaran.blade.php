   @extends('navbarUserLogined')

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
                               <p>Jalan Melati No. 456, Desa Harapan Jaya, Kabupaten Mawar Sejahtera, Provinsi Cinta Damai</p>
                           </div>
                           <div class="row m-2 card-header">

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
                           <div class="row g-4 m-2 p-4 justify-content-center align-items-center">
                               <div class="col-6">
                                   <div class="card card mb-4 p-4">
                                       <div class="card-header bg-transparent mb-2">
                                           <h5 class="text-start"> Metode Pembayaran</h5>
                                       </div>
                                       <div class="row justify-content-center align-items-center">
                                           <img src="{{ ('images\Qris.png') }}" alt="">
                                       </div>
                                       <hr>
                                       <div class="col-10">
                                           <p class="text-center"> Masukkan kartu BCA dan PIN</p>
                                           <p>Pilih menu Transaksi Lainnya > Transfer > BCA Virtual Account</p>
                                           <p>Masukkan nomor Virtual Account DANA (contoh: 390108981234567)</p>
                                           <p>Masukkan nominal yang ingin diisi</p>
                                           <p>Ikuti petunjuk selanjutnya hingga transaksi selesai.</p>
                                       </div>
                                   </div>

                               </div>
                               <div class="col-6">
                                   <div class="card-header bg-transparent mb-2">

                                       <div class="row justify-content-center align-items-center g-2">
                                           <div class="col-6">
                                               <h5 class="text-start"> Total Pembayaran </h5>
                                           </div>
                                           <div class="col-6 ">
                                               <h5 class="text-start"> Rp. 61232 </h5>
                                           </div>

                                       </div>
                                   </div>

                                   <div class="row justify-content-start align-items-start p-2">
                                       <button type="button" class="btn text-bg-success btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">BAYAR</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembayaran Berhasil</h1>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       <img src="{{ ('images\success.png') }}" alt="">
                   </div>
                   <form action="{{url('/')}}" method="get">
                       <div class="modal-footer row mx-5 ">
                           <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Selesai</button>
                       </div>
                   </form>

               </div>
           </div>
       </div>



       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>

   @endsection