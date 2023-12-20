@extends('admin')
@section('content')

<style>
    .btn-primary.px-4 {
        border: none;
    }
</style>
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Pengadaan Obat</h1>
                    <h3>oleh Supplier : {{$pengadaan['supplier']['nama_supplier']}}</h3>
                    <p>Stock In</p>
                </div>
                <div class="col-xl-6">
                    <ol class="breadcrumb float-sm-right">
                        @if($pengadaan['status']==0)
                        <a href='' class="btn-primary px-4" style="border-radius: 7px;" data-target="#productModal" data-toggle="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                    </g>
                                </g>
                            </svg>
                            Tambah Stok Obat</a>
                        @endif
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Gambar Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah Beli</th>
            <th>Harga Obat</th>
            <th>Total Harga</th>
            <th style="width: 200px;">Action</th>
        </tr>
        <?php
        $totalHarga = 0
        ?>
        @forelse ($detailPengadaan as $item)
        <?php
        $totalHarga = $totalHarga + ($item["obat"]["harga_obat"] *  $item["jumlah_obat"])
        ?>
        <tr>
            <td class="text-center align-middle">{{ $loop->iteration }}</td>
            <td><img src="{{asset('public/images/obat/'. $item['obat']['gambar_obat'])}}" alt="Gambar Obat" class="img-fluid w-50"></td>
            <td class="text-center align-middle">{{ $item["obat"]["nama_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["jumlah_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["obat"]["harga_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["obat"]["harga_obat"] *  $item["jumlah_obat"]}}</td>
            <td class="text-center align-middle" style="width: 200px;">
                @if($pengadaan['status']===1)
                <i class="fa-solid fa-check"></i>
                @else
                <a href="" class="btn btn-danger ms-1" style="border-radius: 10px;" data-toggle="modal" data-target="#deleteModal{{ $item['id'] }}">Hapus</a>

                @endif
            </td>
        </tr>
        <!-- Modal for Delete -->
        <div class="modal fade" id="deleteModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus pengadaan produk ini?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="{{route('detailPengadaanDelete', ['id' => $item['id']])}}">
                            @csrf
                            @method('Delete')
                            <input type="text" class="form-control" value="{{$pengadaan['id']}}" hidden name="idPengadaan" id="idPengadaan">
                            <input type="text" class="form-control" value="{{$item['id']}}" hidden name="idDetailPengadaan" id="idDetailPengadaan">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Data Pengadaan masi kosong</div>
        @endforelse

        @if($totalHarga>0)
        <tfoot class="bg-blue">
            <td colspan="5" class="text-right" style="font-weight: bold; font-size: 25px;">Total Harga: </td>
            <td class="text-left" style="font-weight: bold; font-size: 25px;">{{$totalHarga}}</td>
            <td class="text-center" style="font-weight: bold; font-size: 25px;">
                @if($pengadaan['status']===1)
                <h4>Lunas <i class="fa-solid fa-check"></i></h4>
                @else
                <button type="button" class="btn btn-light" id="confirmDelete" data-toggle="modal" data-target="#bayarModal">Bayar</button>
                @endif
            </td>
            <div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Bayar Pengadaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin membeli produk ini?
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="{{route('mutasiDanaPengadaan')}}">
                                @csrf
                                <input type="text" class="form-control" value="{{$pengadaan['id']}}" hidden name="idPengadaan" id="idPengadaan">
                                <input type="text" class="form-control" value="{{$totalHarga}}" hidden name="totalHarga" id="idDetailPengadaan">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </tfoot>
        @endif
    </table>
</div>



<!-- Supplier Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Add Stok In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('detailPengadaanStore')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="productJenis">Nama Obat:</label>
                            <select class="form-control" id="namaObat" name="obat" required>
                                <option value="" disabled selected>Pilih obat</option>
                                @foreach($obat as $item)
                                <option value="{{$item['id']}}">{{$item['nama_obat']}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-6 form-group">
                            <label for="productStock">Stock</label>
                            <input type="number" class="form-control" id="jumlah_obat" name="jumlah_obat" placeholder="Masukan Jumlah Obat" required>
                        </div>
                        <div class="col-12 form-group">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" value="{{$pengadaan['id']}}" hidden name="idPengadaan" id="idPengadaan">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <div class="modal-footer">
                    <form action="{{route('tambahObat')}}" method="get">
                        <input type="text" class="form-control" value="{{$pengadaan['id']}}" hidden name="idPengadaan" id="idPengadaan">
                        <button type="submit" class="btn text-primary"> <i class="fa-solid fa-plus"></i> Tambah Obat Baru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection