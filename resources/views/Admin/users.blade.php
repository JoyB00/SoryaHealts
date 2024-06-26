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
                    <h1>Staf</h1>
                </div>
                <div class="col-xl-6">
                    <ol class="breadcrumb float-sm-right">
                        <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#userModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                    </g>
                                </g>
                            </svg>Add Staf</button>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Email</th>
            <th>Password</th>
            <th style="width: 200px;">Action</th>
        </tr>
        @forelse ($pekerja as $item)
        <tr data-index="{{ $item['id'] }}">
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item["nama_staf"] }}</td>
            <td>{{ $item["email_staf"] }}</td>
            <td>{{ $item["password_staf"] }}</td>
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
                        <h5 class="modal-title" id="userModalLabel">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('stafUpdate', ['id' => $item['id']]) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="supplierName">Nama User: </label>
                                <input type="text" class="form-control" id="UserName" placeholder="Masukan Nama User" value="{{ $item['nama_staf'] }}" name="nama_staf">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukan Email" value="{{ $item['email_staf'] }}" name="email_staf">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Masukan Password" value="{{ $item['password_staf'] }}" name="password_staf">
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
                    <form method="post" action="{{ route('stafDelete', ['id' => $item['id']]) }}">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus staf ini?
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
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Add Staf</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="stafName">Nama Staf: </label>
                        <input type="text" class="form-control" id="stafName" placeholder="Masukan Nama User" name="namaStaf" required>
                    </div>
                    <div class="form-group">
                        <label for="stafEmail">Email:</label>
                        <input type="email" class="form-control" id="stafEmail" placeholder="Masukan Email" name="emailStaf" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="passwordStaf" required>
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