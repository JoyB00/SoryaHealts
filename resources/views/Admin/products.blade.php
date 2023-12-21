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
                    <h1>Product</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if(session('error'))
    <div class="alert alert-danger mx-3 text-center">
        <p class="mb-0"><i class="fa-solid fa-circle-exclamation"></i> {{session('error')}}</p>
    </div>
    @endif
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Gambar Obat</th>
            <th>Nama Obat</th>
            <th>Golongan Obat</th>
            <th>Jenis Obat</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        @forelse ($obat as $item)
        <tr class="bg-white">
            <td class="text-center align-middle">{{ $loop->iteration }}</td>
            <td><img src="{{asset('public/images/obat/'. $item['gambar_obat'])}}" alt="Gambar Obat" class="img-fluid w-50"></td>
            <td class="text-center align-middle">{{ $item["nama_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["golongan_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["jenis_obat"] }}</td>
            <td class="text-center align-middle">{{ $item["stok_obat"] }}</td>
            <td class="text-center align-middle">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#editModal{{ $item['id'] }}">
                    Edit
                </button>

            </td>
        </tr>

        <!-- Modal for Update -->
        <div class="modal fade" id="editModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Update Obat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('obatUpdate',['id' => $item['id']]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-3">
                                <label for="gambarObat">Gambar Obat </label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="namaObat">Nama Obat: </label>
                                <input type="text" class="form-control" id="namaObat" name="namaObat" value="{{$item['nama_obat']}}" required>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="golonganObat">Golongan Obat:</label>
                                    <input type="text" class="form-control" id="golonganObat" name="golonganObat" value="{{$item['golongan_obat']}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="jenisObat">Jenis Obat:</label>
                                    <select class="form-control" id="jenisObat" name="jenisObat" required>
                                        @foreach(['strip','kapsul','tablet'] as $option)
                                        @php
                                        $selected = $item['jenis_obat'] === $option ?'selected':'';
                                        @endphp
                                        <option value="{{$option}}" {{$selected}}>{{$option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="deskripsiObat">Kategori Obat:</label>
                                    <select class="form-control" id="kategoriObat" name="kategoriObat" required>
                                        @foreach(['Obat Demam','Pereda Nyeri','Obat Anti Alergi', 'Antibiotik','Flu dan Batuk'] as $option)
                                        @php
                                        $selected = $item['kategori_obat'] === $option ?'selected':'';
                                        @endphp

                                        <option value="{{$option}}" {{$selected}}>{{$option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dosisObat">Dosis Obat:</label>
                                <textarea type="text" class="form-control" id="dosisObat" style="resize: none;" name="dosisObat" required>{{$item['dosis']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="deskripsiObat">Deskripsi Obat:</label>
                                <textarea type="text" class="form-control" id="deskripsiObat" name="deskripsiObat" style="resize: none; height: 200px;" required>{{$item['deskripsi']}}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Data Kelas masi kosong</div>
        @endforelse
    </table>
</div>



<!-- Modal for Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus product ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Supplier Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="productID">ID: </label>
                        <input type="text" class="form-control" id="supplierID" placeholder="unTouchable">
                    </div>
                    <div class="form-group">
                        <label for="productName">Nama Obat: </label>
                        <input type="text" class="form-control" id="UserName" placeholder="Masukan Nama User">
                    </div>
                    <div class="form-group">
                        <label for="productGolongan">Golongan Obat:</label>
                        <input type="text" class="form-control" id="golongan" placeholder="Masukan Golongan Obat">
                    </div>
                    <div class="form-group">
                        <label for="productJenis">Jenis Obat:</label>
                        <input type="text" class="form-control" id="jenis" placeholder="Masukan Jenis Obat">
                    </div>
                    <div class="form-group">
                        <label for="productJenis">Dosis Obat:</label>
                        <input type="text" class="form-control" id="dosis" placeholder="Masukan Dosis Obat">
                    </div>
                    <div class="form-group">
                        <label for="productDeskripsi">Deskripsi Obat:</label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Masukan Deskripsi Obat">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection