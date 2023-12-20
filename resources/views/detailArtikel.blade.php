@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')

@section('content')

<style>
    p {
        font-family: lato light;
    }

    .artikel-container {

        height: 720px;
        left: 40px;
        object-fit: cover;
        position: relative;
        top: 0px;
        z-index: 2;
        overflow-x: hidden;
        color: white;
        border: 1px solid #4CAF50;
        border-radius: 10px;
        /* margin-top: 150px; */
    }

    .artikel-container::-webkit-scrollbar {
        width: 10px;
    }

    .artikel-container::-webkit-scrollbar-track {
        background: transparent;
    }

    .artikel-container::-webkit-scrollbar-thumb {
        border-radius: 30px;
        background: #4CAF50;
    }
</style>

<div class=" px-md-3 px-0 pt-5">
    <div class="container pt-5 mx-5 ">
        <div class="row mt-3">
            <div class="col-xl-8 col-12">
                <div class="row">
                    <h2 style="text-align: justify;">{{$artikel[0]['judul']}}</h2>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <p style="font-size: 23px; "><span class="badge badge-pill bg-success me-3">{{$artikel[0]['topik']}}</span></p>
                        <p class="mt-1" style="font-family: lato light; ">Ditinjau oleh {{$artikel[0]['author']}} {{$artikel[0]['tanggal_publish']}}</p>
                    </div>
                </div>
                <div class="row">
                    <p style="font-size: 20px; font-style: italic;text-align: justify;">“Kacang tanah bisa kamu konsumsi dalam bentuk kering atau rebus. Tak hanya mengenyangkan, kacang tanah mampu mengurangi risiko kanker, menjaga kesehatan jantung dan mengendalikan kadar gula darah."</p>
                    <img src="{{$artikel[0]['image']}}" alt="gambarArtikel" class="mt-3 mb-4">
                </div>
                <div class="row">
                    <p style="font-size: 20px;text-align: justify;">
                        Kacang tanah (Arachis hypogaea L.) adalah salah satu jenis kacang dari tanaman Leguminosae. Ini merupakan salah satu jenis kacang-kacangan yang memiliki peranan penting, setelah kedelai. <br><br>

                        Kacang tanah menjadi salah satu sumber makanan yang masuk dalam golongan kacang-kacangan dan memiliki manfaat untuk kesehatan tubuh. Selain menjadi camilan, kacang jenis ini juga masuk ke dalam jenis makanan yang menyehatkan. Yuk cek kandungan nutrisi dan manfaatnya!
                    </p>
                    <h2 class="mt-3">Manfaat Kacang Tanah untuk Kesehatan</h2>
                    <p style="font-size: 20px;text-align: justify;">Kacang tanah atau peanuts mengandung berbagai nutrisi, mulai dari protein, serat, karbohidrat, dan lemak (jenis, tak jenuh, dan omega-6). Kandungan lemak dalam kacang ini antara 44-56 persen yang terdiri dari asam oleat dan linoleat. <br><br>
                        Selain itu, makanan sehat ini juga mengandung banyak vitamin dan mineral, seperti biotin, tembaga, niasin, folat, mangan, tiamin, fosfor, magnesium, dan vitamin E. </p>
                </div>
            </div>
            <div class="col-4">
                <h2 class="ms-2 d-xl-block d-none" style="margin-top: 100px;">Artikel Terbaru</h2>
                <div class=" ms-5 animate__animated animate__zoomIn d-xl-block d-none">
                    @for ($j = 1; $j <= 5; $j++)<div class="item mx-auto mt-0 mb-3">
                        <div class="card mb-3" style="max-width: 540px; max-height: 150px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$artikel[$j]['image']}}" class="mx-auto" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body bg-white text-black d-flex flex-column justify-content-center pb-3" style="height: 150px;">
                                        <p><span class="badge rounded-pill border border-success text-black mb-0">{{$artikel[$j]['topik']}}</span></p>
                                        <h5 class="card-title" style="font-size: 15px;">{{$artikel[$j]['judul']}}</h5>
                                        <div class="deskripsi-container" style=" white-space: nowrap; overflow: hidden; text-overflow: clip;">
                                            <p id="deskripsi-artikel" class="card-text" style="font-family: lato light; font-size: 10px;">{{$artikel[$j]['deskripsi']}}</p>
                                        </div>
                                        <a href="{{url('artikelDetail')}}" class="btn btn-outline-success mt-3 btn-sm">Lihat Selengkapnya</a>
                                    </div>
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
@endsection