@extends('admin')
@section('content')
<style>
    .btn-primary.px-4{
        border: none;
    }
</style>
<div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reports</h1>
                    Sales
                </div>
                <div class="col-xl-3 d-flex align-items-center ml-auto" style=" border: 5px solid #3498db;">
                    <h3 style="padding: 5px;">Saldo Klinik: Rp 120000</h3>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama Obat</th>
            <th>Harga Obat</th>
            <th>Qty</th>
            <th>Total</th>
            <!-- <th  style="width: 200px;">Action</th> -->
        </tr>
        @forelse ($hasil_jual as $item)
        <tr>
            <td>{{ $item["no"] }}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["harga"] }}</td>
            <td>{{ $item["qty"] }}</td>
            <td>{{ $item["total"] }}</td>
            <!-- <td class="d-flex justify-content-center" style="width: 200px;"> -->
                <!-- <a href="" class="btn btn-primary ms-1" style="border-radius: 10px;" data-toggle="modal" data-target="#updateModal">Update</a> -->
                <!-- <a href="" class="btn btn-danger" style="border-radius: 10px;" data-toggle="modal" data-target="#deleteModal">Delete</a> -->
            <!-- </td> -->
        </tr>
        @empty
        <div class="alert alert-danger">Data Kelas masi kosong</div>
        @endforelse
    </table>
</div>

<!-- Modal for Update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Update User</h5>
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
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="productJenis">Jenis Obat:</label>
                            <select class="form-control" id="jenis">
                                <option value="" disabled selected>Pilih jenis obat</option>
                                <option value="strip">Strip</option>
                                <option value="kapsul">Kapsul</option>
                                <option value="tablet">Tablet</option>
                            </select>
                            <!-- <input type="text" class="form-control" id="jenis" placeholder="Masukan Jenis Obat"> -->
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="productStock">Stock</label>
                            <input type="number" class="form-control" id="stock" placeholder="Masukan Jumlah Obat">
                        </div>
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
                <h5 class="modal-title" id="productModalLabel">Add Stok In</h5>
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
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="productJenis">Jenis Obat:</label>
                            <select class="form-control" id="jenis">
                                <option value="" disabled selected>Pilih jenis obat</option>
                                <option value="strip">Strip</option>
                                <option value="kapsul">Kapsul</option>
                                <option value="tablet">Tablet</option>
                            </select>
                            <!-- <input type="text" class="form-control" id="jenis" placeholder="Masukan Jenis Obat"> -->
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="productStock">Stock</label>
                            <input type="number" class="form-control" id="stock" placeholder="Masukan Jumlah Obat">
                        </div>
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