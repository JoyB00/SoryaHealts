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
            @if(session('message'))
            <div class="alert alert-success mt-3 text-center">
                {{session('message')}}
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Suppliers</h1>
                </div>
                <div class="col-xl-6">
                    <ol class="breadcrumb float-sm-right">
                        <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#supplierModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                    </g>
                                </g>
                            </svg>Add Supplier</button>
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th style="width: 200px;">Action</th>
        </tr>
        @forelse ($pemasok as $item)
        <tr data-index="{{ $item['id'] }}">
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item["nama_supplier"] }}</td>
            <td>{{ $item["no_telp_supplier"] }}</td>
            <td>{{ $item["email_supplier"] }}</td>
            <td class="d-flex justify-content-between" style="width: 200px;">
                <a href="" class="btn btn-primary ms-1" style="border-radius: 10px;" data-toggle="modal" data-target="#editModal{{ $item['id'] }}">Update</a>

                <a href="" class="btn btn-danger" style="border-radius: 10px;" data-toggle="modal" data-target="#deleteModal{{ $item['id'] }}">Delete</a>
            </td>
        </tr>

        <!-- Modal for Update -->
        <div class="modal fade" id="editModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="supplierModalLabel">Update Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('supplierUpdate', ['id' => $item['id']]) }}">
                            @csrf
                            @method('put')
                            <div class=" form-group">
                                <label for="supplierName">Nama Supplier: </label>
                                <input type="text" class="form-control" id="supplierName" value="{{ $item['nama_supplier'] }}" placeholder="Masukan Nama Supplier" name="supplierName">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">No Telepon:</label>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Masukan No Telepon" value="{{ $item['no_telp_supplier'] }}" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukan Email" value="{{ $item['email_supplier'] }}" name="email">
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
                    <form method="post" action="{{ route('supplierDelete', ['id' => $item['id']]) }}">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus pemasok ini?
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
        <div class="alert alert-danger">Data Supplier masih kosong</div>
        @endforelse
    </table>
</div>


<!-- Supplier Modal -->
<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="supplierModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supplierModalLabel">Add Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="supplierName">Nama Supplier:</label>
                        <input type="text" class="form-control" id="supplierName" name="supplierName" placeholder="Masukan Nama Supplier" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">No Telepon:</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Masukan No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
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

@endsection