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
                    <h1>Transactions</h1>
                    <p>Stock In</p>
                </div>
                <div class="col-xl-6">
                    <ol class="breadcrumb float-sm-right">
                        <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#productModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                    </g>
                                </g>
                            </svg>Tambah Pengadaan</button>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Tanggal Pengadaan</th>
            <th>Action</th>
        </tr>
        @forelse ($pengadaan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item["supplier"]["nama_supplier"] }}</td>
            <td>{{ $item["tanggal_pengadaan"] }}</td>
            <td class="d-flex justify-content-center">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn {{$item['status']==0 ? 'btn-primary' : 'btn-success'}} mx-2" style="border-radius: 10px;" data-toggle="modal" data-target="#editModal{{ $item['id'] }}">
                        {{$item['status']==0 ? 'Detail' : 'Selesai'}}
                    </button>
                    @if($item['status']==0)
                    <button class="btn btn-danger" type="button" style="border-radius: 10px;" data-target="#deleteModal{{ $item['id'] }}" data-toggle="modal">
                        Batal
                    </button>
                    @endif
                </div>
            </td>
        </tr>

        <!-- Modal Detail Pengadaan -->
        <div class="modal fade" id="editModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content bg-blue">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Edit Pengadaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="get" action="{{ route('pengadaanShow') }}">
                        @csrf
                        <div class="modal-body">
                            Apakah Anda melihat detail pengadaan ?
                            <div class="form-group">
                                <input type="number" class="form-control bg-blue" id="id" placeholder="Masukan id" value="{{ $item['id'] }}" name="idPengadaan" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Batal Pengadaan -->
        <div class="modal fade" id="deleteModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Edit Pengadaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('pengadaanDelete',['id' => $item['id']]) }}">
                        @csrf
                        @method('Delete')
                        <div class="modal-body">
                            Apakah Anda yakin membatalkan pengadaan ini ?
                            <div class="form-group">
                                <input type="number" class="form-control bg-blue" id="id" placeholder="Masukan id" value="{{ $item['id'] }}" name="idPengadaan" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Data Kelas masi kosong</div>
        @endforelse
    </table>
</div>



<!-- Supplier Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Pengadaan Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('pengadaanStore') }}">
                    @csrf
                    <div class="col form-group">
                        <label for="productJenis">Supplier</label>
                        <select class="form-control" id="jenis" name="supplier" required>
                            <option value="" disabled selected>Pilih Supplier</option>
                            @foreach ($suppliers as $item)
                            <option value="{{$item['id']}}">{{$item['nama_supplier']}}</option>
                            @endforeach
                        </select>
                        <!-- <input type="text" class="form-control" id="jenis" placeholder="Masukan Jenis Obat"> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lakukan Pengadaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection