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
                <h1>Customers</h1>
            </div>
            <!-- <div class="col-xl-6">
                <ol class="breadcrumb float-sm-right">
                    <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#customerModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
<g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path></g></g>
</svg>Add Customer</button>

                </ol>
            </div> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th  style="width: 200px;">Action</th>
        </tr>
        @forelse ($pelanggan as $item)
        <tr>
            <td>{{ $item["no"] }}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["gender"] }}</td>
            <td>{{ $item["noTelp"] }}</td>
            <td>{{ $item["alamat"] }}</td>
            <td>{{ $item["tglLahir"] }}</td>
            <td class="d-flex justify-content-between" style="width: 200px;">
                <a href="" class="btn btn-primary ms-1" style="border-radius: 10px;" data-toggle="modal" data-target="#updateModal">Update</a>
                <a href="" class="btn btn-danger" style="border-radius: 10px;" data-toggle="modal" data-target="#deleteModal">Delete</a>
            </td>
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
                <h5 class="modal-title" id="customerModalLabel">Update Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="supplierName">Nama Customer:</label>
                        <input type="text" class="form-control" id="supplierName" placeholder="Masukan Nama Supplier">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Gender:</label>
                        <input type="text" class="form-control" id="gender" placeholder="Masukan Gender">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">No Telepon:</label>
                        <input type="number" class="form-control" id="phoneNumber" placeholder="Masukan No Telepon">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="email">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukan Tanggal Lahir">
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
                <h5 class="modal-title" id="deleteModalLabel">Delete Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus Customer ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Supplier Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customerModalLabel">Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                        <label for="supplierName">Nama Customer:</label>
                        <input type="text" class="form-control" id="supplierName" placeholder="Masukan Nama Supplier">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Gender:</label>
                        <input type="text" class="form-control" id="gender" placeholder="Masukan Gender">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">No Telepon:</label>
                        <input type="number" class="form-control" id="phoneNumber" placeholder="Masukan No Telepon">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="email">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukan Tanggal Lahir">
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