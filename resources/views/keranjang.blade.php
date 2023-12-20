@extends('user')

@section('main')
<div class="container p-sm-5 p-1 pt-2 mx-md-auto mx-0">
    <div class="d-flex justify-content-between">
        <h2><i class="fa-solid fa-cart-shopping me-2"></i> Troli Belanja Kamu</h2>
        <a href="#lanjutkanPembayaran" class="btn btn-success pt-2"><i class="fa-solid fa-receipt me-2"></i> Bayar</a>
    </div>
    <div class="mt-3 row mx-md-2 mx-0">
        <table class="table">
            <thead>
                <th colspan="1">Produk</th>
                <th></th>
                <th>Harga</th>
                <th>Kuantitas</th>
                <th></th>
                <th>Bayar</th>
                <th></th>
            </thead>
            @forelse($keranjang as $item) <tr>
                <th style="width: 150px;"><img src="{{asset('public/images/obat/'. $item['obat']['gambar_obat'])}}" alt="gambarProduk" style="width: 120px;"></th>
                <th class="py-5">{{$item['obat']['nama_obat']}}</th>
                <th class="py-5">Rp <?php echo number_format($item['obat']['harga_obat']) ?></th>
                <th class="pt-3">
                    <div class="mb-3">
                        <label for="kuantitas" class="form-label"></label>
                        <select id="kuantitas" class="form-select">
                            <option selected> {{$item['jumlah_obat']}}</option>
                            @for($i=5; $i<=100; $i+=5) <option value="{{$i}}">{{$i}}</option>
                                @endfor
                        </select>
                    </div>
                </th>
                <th style="width: 150px;"></th>
                <th class="py-5">Rp <?php echo number_format($item['obat']['harga_obat'] * $item['jumlah_obat']) ?></th>
                <th class="py-5"><a class="link mx-auto" href=""><i class="fa-solid fa-trash"></i></a></th>
            </tr>
            @empty
            @endforelse
        </table>
    </div>
    <div class="mt-3 row mx-2">
        <div class="card col-md-6 col-12 p-0 ">
            <div class="card-body bg-light">
                <h5>Syarat & Ketentuan</h5>
            </div>
            <div class="card-body">
                <ul class="ps-0 " style="list-style: none; font-size: 14px;">
                    <li>1. Pembelian Obat Minimal Rp 5.000,-
                    </li>
                    <li class="mt-2">2. Harga dapat berubah sewaktu-waktu sesuai area pemesanan
                    </li>
                    <li class="mt-2">3. Obat yang telah dibeli tidak dapat dikembalikan</li>
                </ul>
            </div>
        </div>
        <div class="card col-md-5 col-12 ms-md-5 ms-0 mt-md-0 mt-3 p-0">
            <div class="card-body bg-light">
                <h5>Subtotal Harga : Rp <?php echo number_format(120000) ?></h5>
            </div>
            <div class="card-body">
                <a href="{{url('halamanBeli')}}" class="btn btn-primary pt-2" id="lanjutkanPembayaran"><i class="fa-solid fa-receipt me-2"></i> Lanjutkan Pembayaran</a>
                <h5 class="text-danger mt-2" style="font-size: 12px; font-style: italic;"><i class="fa-solid fa-warning me-2"></i> cek kembali pesanan anda</h5>
            </div>
        </div>
    </div>
</div>

@endsection