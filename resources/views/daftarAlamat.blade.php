@extends('user')

@section('main')

<style>
    @media only screen and (max-width: 576px) {
        p {
            font-size: 10px;
        }
    }
</style>
<div class="container p-5 pt-2 ">
    <div class="d-flex justify-content-between">
        <h2><i class="fa-solid fa-location-dot me-2"></i> Semua Alamat</h2>
        <form action="">
            <button class="form-control btn btn-outline-success btn-md" data-bs-toggle="modal" data-bs-target="#modalAlamat" type="button"><i class="fa-solid fa-plus"></i> Tambah Alamat</button>
        </form>
    </div>
    <div class="row">
        @forelse($alamat as $item)
        <div class="card mt-4 border-success">
            <div class="card-body row card-body-checked bg-outline-success">
                <div class="col-sm-10 col-9">
                    <h5>{{$user->nama}}</h5>
                    <p class="m-0" style="font-family: lato regular;">{{$user->no_telp}}</p>
                    <p style="font-family: lato regular;">Alamat: {{$item['deskripsi']}}</p>
                    <div class="d-flex">
                        <ul class="nav">
                            <li class="nav-item ">
                                <button class="btn edit-alamat-btn" data-bs-toggle="modal" data-bs-target="#editAlamat" data-id="{{ $item['id'] }}">Edit</button>
                            </li>
                            <li class="nav-item mt-1 p-1">
                                <div style="height: 25; width: 3; background-color: black;"></div>
                            </li>
                            <li class="nav-item">
                                <button class="btn delete-alamat-btn" data-bs-toggle="modal" data-bs-target="#hapusAlamat" data-id="{{ $item['id'] }}">Hapus</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        @empty
        <!-- Tampilkan pesan jika tidak ada alamat -->
        <p>Tidak ada alamat yang tersedia.</p>
        @endforelse
    </div>

    @endsection

    <!-- Modal Hapus Alamat -->
    <div class="modal fade" id="hapusAlamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content ">
                <div class="modal-header bg bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Hapus Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="deleteAlamatForm" data-action="{{ route('deleteAlamat', ['id' => '__alamat_id__']) }}">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus alamat ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger" id="confirmDelete">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Alamat -->
    <div class="modal fade" id="editAlamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content ">
                <div class="modal-header bg bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Edit Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="editAlamatForm" data-action="{{ route('updateAlamat', ['id' => '__alamat_id__']) }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-5 col-12 my-1">
                                <h3 class="text-center" style="font-size: 18px;">Silahkan Edit Alamat Anda</h3>
                                <div class="card mx-auto mt-5" style="height: 250px; width: 250px;">
                                    <img alt="{{$user['profile']}}" class="img-fluid profile-photo" src="{{ auth()->user()->profile ? asset('public/images/'. $user['profile']) : 'https://cliply.co/wp-content/uploads/2020/08/442008111_GLANCING_AVATAR_3D_400.png' }}" style="height: 250px; width: 250px;">
                                </div>
                            </div>
                            <div class="col-sm-7 col-12 mt-5 ms-sm-0 ms-4">
                                <!-- Input Nama -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="col-3">
                                        <label for="nama" class="mb-1">Nama</label>
                                    </div>
                                    <div class="col-8">
                                        <input style="font-family: Lato light; background-color: white" id="nama" type="text" name="nama" class="form-control" value="{{$user['nama']}}" disabled>
                                    </div>
                                </div>

                                <!-- Input noHp -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="col-3">
                                        <label for="noHp" class="mb-1">No Hp</label>
                                    </div>
                                    <div class="col-8">
                                        <input style="font-family: Lato light; background-color: white;" id="noHp" type="number" class="form-control" value="{{$user->no_telp}}" disabled>
                                    </div>
                                </div>

                                <!-- Input Alamat -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="form-floating col-11">
                                        <textarea class="form-control ps-3" id="floatingTextarea2" style="height: 200px" name="deskripsi" required></textarea>
                                        <label for="floatingTextarea2" class="ms-3">Detail Alamat</label>
                                    </div>
                                </div>

                                <div class="row mt-4 pe-5" style="font-size: 17px;">
                                    <button type="submit" class="btn btn-outline-success">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Alamat -->
    <div class="modal fade" id="modalAlamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content ">
                <div class="modal-header bg bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Tambah Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('alamatStore') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 col-12 my-1">
                                <h3 class="text-center" style="font-size: 18px;">Silahkan Tambahkan Alamat Anda</h3>
                                <div class="card mx-auto mt-5" style="height: 250px; width: 250px;">
                                    <img alt="{{$user['profile']}}" class="img-fluid profile-photo" src="{{ auth()->user()->profile ? asset('public/images/'. $user['profile']) : 'https://cliply.co/wp-content/uploads/2020/08/442008111_GLANCING_AVATAR_3D_400.png' }}" style="height: 250px; width: 250px;">
                                </div>
                            </div>
                            <div class="col-sm-7 col-12 mt-5 ms-sm-0 ms-4">
                                <!-- Input Nama -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="col-3">
                                        <label for="nama" class="mb-1">Nama</label>
                                    </div>
                                    <div class="col-8">
                                        <input style="font-family: Lato light; background-color: white" id="nama" type="text" name="nama" class="form-control" value="{{$user['nama']}}" disabled>
                                    </div>
                                </div>

                                <!-- Input noHp -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="col-3">
                                        <label for="noHp" class="mb-1">No Hp</label>
                                    </div>
                                    <div class="col-8">
                                        <input style="font-family: Lato light; background-color: white;" id="noHp" type="number" class="form-control" value="{{$user->no_telp}}" disabled>
                                    </div>
                                </div>

                                <!-- Input Alamat -->
                                <div class="row mb-3" style="font-size: 17px;">
                                    <div class="form-floating col-11">
                                        <textarea class="form-control ps-3" id="floatingTextarea2" style="height: 200px" name="deskripsi" required></textarea>
                                        <label for="floatingTextarea2" class="ms-3">Detail Alamat</label>
                                    </div>
                                </div>

                                <div class="row mt-4 pe-5" style="font-size: 17px;">
                                    <button type="submit" class="btn btn-outline-success">Tambah Alamat</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ambil id alamat untuk edit -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editAlamatButtons = document.querySelectorAll('.edit-alamat-btn');
            const editAlamatModal = new bootstrap.Modal(document.getElementById('editAlamat'));
            const editAlamatForm = document.getElementById('editAlamatForm');

            editAlamatButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alamatId = this.getAttribute('data-id');
                    const formAction = editAlamatForm.getAttribute('data-action');
                    const updatedAction = formAction.replace('__alamat_id__', alamatId);

                    editAlamatForm.setAttribute('action', updatedAction);
                    editAlamatModal.show();
                });
            });
        });
    </script>

    <!-- ambil id alamat untuk hapus -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteAlamatButtons = document.querySelectorAll('.delete-alamat-btn');
            const deleteAlamatModal = new bootstrap.Modal(document.getElementById('hapusAlamat'));
            const deleteAlamatForm = document.getElementById('deleteAlamatForm');

            deleteAlamatButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alamatId = this.getAttribute('data-id');
                    const formAction = deleteAlamatForm.getAttribute('data-action');
                    const updatedAction = formAction.replace('__alamat_id__', alamatId);

                    deleteAlamatForm.setAttribute('action', updatedAction);
                    deleteAlamatModal.show();
                });
            });
        });
    </script>