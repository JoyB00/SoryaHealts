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
                        Stock In
            </div>
            <!-- <div class="col-xl-6">
                <ol class="breadcrumb float-sm-right">
                    <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#productModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path></g></g>
</svg>Add Produck</button>

                </ol>
            </div> -->
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
        </tr>
        @forelse ($hasil_masuk as $item)
        <tr>
            <td>{{ $item["no"] }}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["harga"] }}</td>
            <td>{{ $item["qty"] }}</td>
            <td>{{ $item["total"] }}</td>
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