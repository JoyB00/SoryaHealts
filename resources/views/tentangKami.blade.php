@extends(empty(session('userLogint')) || $userLogin[0]['email']==='' ? 'navbarUser' : 'navbarUserLogined')

@section('content')
<style>
    .welcome-img {
        z-index: -1;
        display: block;
        position: absolute;
        opacity: 0.6;
        top: 70px;
        right: 50px;
        transform: scale(1.3);
    }
</style>
<div class=" px-md-3 px-0 pt-5">
    <div class="container pt-5 mx-5">
        <div class="row">
            <!-- <img class="welcome-img" src="{{asset('images/Illustration.png')}}" alt="home" style="width: 450px;"> -->
            <img class=" mx-auto" src="{{asset('images/home.png')}}" alt="home" style="width: 500px;">
        </div>
        <div class="row text-center mt-5">
            <h1 class="mb-5" style="color: #4CAF50;">Selamat datang di <span style="color: #03ACF2;">SORYAHEALTS!</span></h1>
            <p class="mb-5" style="color: grey; font-family: lato regular;">Kami adalah apotek yang berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas kepada Anda dan keluarga. Dengan pengalaman bertahun-tahun dalam industri kesehatan, kami bertujuan untuk menjadi mitra terpercaya dalam menjaga kesehatan dan kesejahteraan Anda.
                <br><br>Di SORYAHEALTS, kami menawarkan beragam produk farmasi berkualitas tinggi, suplemen kesehatan, serta konsultasi apoteker yang berpengetahuan. Kami memahami betapa pentingnya akses cepat dan mudah ke obat-obatan yang diperlukan, dan itulah mengapa kami berkomitmen untuk memberikan layanan yang ramah dan terjangkau kepada seluruh pelanggan kami.

                <br><br>Kami selalu berusaha untuk menjaga standar tertinggi dalam penanganan obat dan pelayanan kesehatan. Staf profesional kami siap membantu Anda dengan segala pertanyaan dan kebutuhan kesehatan Anda. Kami memahami bahwa setiap individu memiliki kebutuhan unik, dan itulah mengapa kami bekerja keras untuk memberikan solusi yang paling sesuai untuk Anda.

                <br><br>Kami sangat menghargai kepercayaan Anda kepada SORYAHEALTS, dan kami akan terus berusaha untuk menjadi sumber yang dapat diandalkan dalam perawatan kesehatan Anda. Terima kasih telah memilih kami sebagai mitra Anda dalam perjalanan menuju kesehatan yang lebih baik.

                <br><br>Terima kasih telah mengunjungi SORYAHEALTS, dan kami berharap dapat melayani Anda dengan sepenuh hati dalam semua kebutuhan kesehatan Anda.
            </p>
        </div>
    </div>
</div>
@endsection