   @extends('navbarUserLogined')

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
                               <div class="col-4"> <!--konten kiri  (gambar)-->
                                   <div class="row">
                                       <div id="carouselExampleIndicators" class="carousel slide">
                                           <div class="carousel-inner">
                                               <div class="carousel-item">
                                                   <img src="{{$obat[0]['image']}}" class="d-block w-100" alt="...">
                                               </div>
                                               <div class="carousel-item active">
                                                   <img src="https://s0.bukalapak.com/img/0509339805/large/Ready_Stok_Aludonna_D.jpg" class="d-block w-100" alt="...">
                                               </div>
                                               <div class="carousel-item">
                                                   <img src="https://images.k24klik.com/product/apotek_online_k24klik_201610040210071922_386-Aludonna.jpg" class="d-block w-100" alt="...">
                                               </div>

                                           </div>

                                           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                               <span class="visually-hidden">Previous</span>
                                           </button>
                                           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                               <span class="visually-hidden">Next</span>
                                           </button>
                                           <hr>
                                           <br>
                                           <br>
                                           <div class="carousel-indicators justify-content-middle">
                                               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 3">
                                                   <img src="{{$obat[0]['image']}}" class="d-block w-100" alt="...">
                                               </button>
                                               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1">
                                                   <img src="https://s0.bukalapak.com/img/0509339805/large/Ready_Stok_Aludonna_D.jpg" class="d-block w-100" alt="...">
                                               </button>
                                               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2">
                                                   <img src="https://images.k24klik.com/product/apotek_online_k24klik_201610040210071922_386-Aludonna.jpg" class="d-block w-100" alt="...">
                                               </button>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="row-2">
                                   </div>
                               </div>

                               <div class="col-8 bg-light p-4 mb-2 "> <!--konten kanan  (tombol dan deskripsi )-->
                                   <div class="row justify-content-start align-items-start p-2">
                                       <div class="col-6"> <!--konten kiri  (deskripsi)-->
                                           <h2 style="color: #03ACF2;"> {{$obat[0]['nama_obat']}}</h2>
                                           <div class="row mb-2 justify-content-start align-items-start"> <!--Label-->
                                               <div class="col-6"> <!--konten kiri  (nama)-->
                                                   Label Produk
                                               </div>
                                               <div class="col-3 text-center border border-primary rounded-pill text-bg-{{ $keranjang[0]['golongan'] == 'bebas' ? 'warning' : ($keranjang[0]['golongan'] == 'Silver' ? 'keras' : 'dark') }} border-dark border border-3"> <!--konten kiri  (penjelasa label)-->
                                                   Umum
                                               </div>
                                           </div>
                                           <div class="row mb-2 justify-content-start align-items-start "> <!--Harga-->
                                               <div class="col-6"> <!--konten kiri  (nama)-->
                                                   Harga
                                               </div>
                                               <div class="col-6"> <!--konten kiri  (penjelasa harga)-->
                                                   Rp. {{$obat[0]['harga']}}
                                               </div>
                                           </div>
                                           <div class="row mb-2 justify-content-start align-items-start "> <!--Jumlah-->
                                               <div class="col-6"> <!--konten kiri  (nama)-->
                                                   Jumlah
                                               </div>
                                               <div class="col-6"> <!--konten kiri  (penjelasa jumlah)-->
                                                   <div class="row justify-content-center align-items-center g-2">

                                                       <div class="col-4">
                                                           <button type="button" class="btn btn-primary btn-lg" id="decrementButton">-</button>
                                                       </div>
                                                       <div class=" col-4 text-center">
                                                           <p id="count">0</p>
                                                       </div>
                                                       <div class="col-4">
                                                           <button type="button" class="btn btn-primary btn-lg" id="incrementButton">+</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>

                                       </div>
                                       <div class="col-6"> <!--konten kiri  (tombol)-->
                                           <div class="nav mx-sm-0 mx-auto">
                                               <a href="{{url('/halamanBeli')}}" class="nav-link text-bg-success rounded text-center" style="width: 400px; height:50px; display: flex; justify-content: center; align-items: center;">Tambah Keranjang</a>

                                           </div>

                                       </div>
                                   </div>
                                   <div class="row justify-content-start align-items-start p-3 fw-lighter">
                                       deskripsi : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo risus, porta vel massa eget, vulputate ultricies sem. Maecenas aliquet risus nec lacus cursus volutpat. Sed at nisi sed lacus posuere rhoncus eget non dolor. Sed eleifend odio et risus consequat, a convallis nisi aliquet.
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="card card mb-4 p-4"> <!--card deskripsi-->
                           <div class="card-header bg-transparent mb-0">
                               <h5 class="text-start"> Deskripsi</h5>
                           </div>
                           <div class="row m-2 ">
                               <p>Lorem ipsum dolor sit amet,</p>
                               <p>consectetur adipiscing elit. Morbi magna lectus, feugiat quis ullamcorper ac, pellentesque non lacus. Integer mollis nibh diam, eget dignissim sem ornare non. Nunc porta vel odio quis tristique. Sed eu metus et ligula mollis fringilla. Duis a quam tellus. Curabitur a purus eget massa imperdiet euismod pulvinar nec justo. Integer efficitur venenatis dolor nec interdum. Quisque id enim eget elit cursus condimentum et ac magna. Pellentesque molestie, ante ac hendrerit dapibus, magna augue tincidunt sem, ac congue nisl leo vel libero. Maecenas fringilla quis tellus in sodales. Fusce suscipit sagittis cursus. Vestibulum suscipit lacus sit amet ultricies placerat. Phasellus a consequat dui, ut laoreet arcu.</p>
                               <p>Fusce gravida purus leo,</p>
                               <p>sit amet finibus urna vestibulum sit amet. Phasellus efficitur, tortor sit amet consequat mattis, dui velit porta nisi, ac luctus nisi mi nec quam. Donec lacinia porttitor dolor. Nam vitae tortor a diam bibendum convallis. Sed vehicula gravida quam. Aenean faucibus semper lectus, sed molestie diam viverra at. Nulla posuere sagittis lacus sed vulputate. Aliquam blandit placerat mattis. Nam molestie volutpat lorem, vel blandit risus pulvinar semper. Praesent maximus nulla id ligula molestie, ac mollis justo consectetur.
                                   Aenean id lectus vitae quam volutpat tristique. Mauris ac nibh vel libero hendrerit luctus. Donec sit amet augue erat. Vivamus elementum scelerisque fermentum. Nam volutpat nunc eros, luctus euismod elit mollis ac. Quisque dictum arcu sapien, vitae aliquam massa pharetra at. Suspendisse potenti. Cras congue nunc viverra nunc euismod tincidunt. Morbi quis tempor leo. Phasellus nec nisi vel neque tempus commodo ut sed odio. Pellentesque lorem lorem, gravida et sollicitudin ut, semper nec nunc. In mollis mattis dignissim.</p>
                           </div>
                       </div>

                       <div class="container col-7">
                           <div class="owl-carousel owl-carousel-obat owl-theme mousewheel">
                               @for($i=0; $i < count($obat); $i++) <div class="item">
                                   <div class="card ms-2 mb-2 item" style="height: 450px; border: 2px solid #4CAF50;">
                                       <img class="img-fluid mx-auto" src="{{$obat[$i]['image']}}">
                                       <div class="card-body d-flex flex-column pb-0 mb-0 bg-success">
                                           <p><span class="badge rounded-pill border border-white mb-0">{{$obat[$i]['jenis_obat']}}</span></p>
                                           <a href="{{url('/daftarObat')}}" class="card-title text-obat" style="text-decoration: none; font-size: 18px;">{{$obat[$i]['nama_obat']}}</a>
                                           <p class="card-text  d-block text-white" style="font-family: Lato light;  font-weight: bold;">{{$obat[$i]['harga']}}</p>
                                       </div>
                                       <div class="card-footer bg-success border-0" style="background-color: white; border-top: none;">
                                           <p class="mt-1 text-white"><span class="badge border border-white rounded-pill">{{$obat[$i]['kategori_obat']}}</span> </p>
                                           <a href="#" class="btn btn-warning">Lihat Detail</a>
                                       </div>
                                   </div>
                           </div>
                           @endfor
                       </div>
                   </div>



                   <div class="card card mb-4 p-4"> <!--card deskripsi-->
                       <div class="card-header bg-transparent mb-0">
                           <h5 class="text-start"> Rating dan Ulasan</h5>
                       </div>

                       <div class="row m-2 bg-light">
                           <!-- isi comment -->
                           @for($i=0; $i < count($ulasan); $i++) <div class="card mb-3">
                               <div class="row g-0">
                                   <div class="col-md-2">
                                       <img src="..." class="img-fluid rounded-start" alt="...">
                                   </div>
                                   <div class="col-md-10">
                                       <div class="card-body">
                                           <h5 class="card-title">{{$ulasan[$i]['nama']}}</h5>
                                           <p class="card-text">{{$ulasan[$i]['pesan']}}</p>
                                           <p class="card-text">BIntang</p>
                                           <p class="card-text"><small class="text-muted">{{$ulasan[$i]['waktu']}}</small></p>
                                       </div>
                                   </div>
                               </div>
                       </div>
                       @endfor
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
               var count = 0;

               // Tangani klik pada tombol increment
               $('#incrementButton').click(function() {
                   count++;
                   // Perbarui teks pada elemen dengan id "count"
                   $('#count').text(count);
               });

               $('#decrementButton').click(function() {
                   if (count > 0) {
                       count--;
                       // Perbarui teks pada elemen dengan id "count"
                       $('#count').text(count);
                   }
               });
           });
       </script>

   </body>
   @endsection