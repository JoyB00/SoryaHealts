@extends('user')

@section('main')
<div class="container p-sm-5 p-1 pt-2 mx-md-auto mx-0">
    <div class="d-flex justify-content-between">
        <h2><i class="fa-solid fa-cart-shopping me-2"></i> Troli Belanja Kamu</h2>
        @if(!empty($keranjang))
        <a href="#lanjutkanPembayaran" class="btn btn-success pt-2"><i class="fa-solid fa-receipt me-2"></i> Bayar</a>
        @endif
    </div>
    <div class="mt-3 row mx-md-2 mx-0">
        <table class="table">
            <thead>
                <th colspan="1">Gambar Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th>Kuantitas</th>
                <th>Bayar</th>
                <th>Action</th>
            </thead>
            @if(!empty($keranjang))
            <?php
            $totalHarga = 0
            ?>
            @forelse($keranjang as $item) <tr>
                <th style="width: 150px;"><img src="{{asset('public/images/obat/'. $item['obat']['gambar_obat'])}}" alt="gambarProduk" style="width: 120px;"></th>
                <th class="py-5" style="width: 300px;">{{$item['obat']['nama_obat']}}</th>
                <th class="py-5">Rp <?php echo number_format($item['obat']['harga_obat']) ?></th>
                <th class="py-5">
                    {{$item['jumlah_obat']}} buah
                </th>
                <th class="py-5">Rp <?php echo number_format($item['obat']['harga_obat'] * $item['jumlah_obat']) ?></th>
                <th class="py-5">
                    <form action="{{route('deleteItem')}}" method="post">
                        @csrf
                        @method('Delete')
                        <input type="text" name="no" id="no" value="{{$loop->iteration}}" hidden>
                        <input type="text" name="idDetail" id="idDetail" value="{{$item['id']}}" hidden>
                        <button class="btn" data-bs-toggle="modal" data-bs-target=""><i class="fa-solid fa-trash"></i></button>
                    </form>
                </th>
            </tr>
            <?php
            $totalHarga = $totalHarga + ($item['obat']['harga_obat'] * $item['jumlah_obat']) ?>
            @empty
            @endforelse
            @endif
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
        @if(!empty($keranjang))
        <div class="card col-md-5 col-12 ms-md-5 ms-0 mt-md-0 mt-3 p-0">
            <div class="card-body bg-light">
                <h5>Subtotal Harga : Rp <?php echo number_format($totalHarga) ?></h5>
            </div>
            <div class="card-body">
                <a href="{{route('cekPembelian')}}" class="btn btn-primary pt-2" id="lanjutkanPembayaran"><i class="fa-solid fa-receipt me-2"></i> Lanjutkan Pembayaran</a>
                <h5 class="text-danger mt-2" style="font-size: 12px; font-style: italic;"><i class="fa-solid fa-warning me-2"></i> cek kembali pesanan anda</h5>
            </div>
        </div>
        @endif
    </div>

</div>

@endsection