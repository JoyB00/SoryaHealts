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
            <div class="card-body row card-body-checked bg-success text-white">
                <div class="col-sm-10 col-9">
                    <h5>{{$user->nama}}</h5>
                    <p class="m-0" style="font-family: lato regular;">{{$user->no_telp}}</p>
                    <p style="font-family: lato regular;">Alamat: {{$item['deskripsi']}}</p>
                    <div class="d-flex">
                        <ul class="nav">
                            <li class="nav-item ">
                                <button class="btn text-white" aria-current="page" data-bs-toggle="modal" data-bs-target="#modalAlamatEdit">Edit</button>
                            </li>
                            <li class="nav-item mt-1 p-1">
                                <div style="height: 25; width: 3; background-color: white;"></div>
                            </li>
                            <li class="nav-item"><button class="btn text-white ">Hapus</button></li>
                        </ul>
                    </div>
                </div>

                <div class="col-2 my-auto ps-5">
                    <p class="text-white " style="font-size: 30px;"><i class="fa-solid fa-check"></i></p>
                </div>
            </div>
        </div>
        @empty
        <!-- Tampilkan pesan jika tidak ada alamat -->
        <p>Tidak ada alamat yang tersedia.</p>
        @endforelse
    </div>

    @endsection

    <!-- Modal Tambah Alamat -->
    <div class="modal fade" id="modalAlamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content ">
                <div class="modal-header bg bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Tambah Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-5 col-12 my-1">
                            <h3 class="text-center" style="font-size: 18px;">Silahkan Tambahkan Alamat Anda</h3>
                            <div class="card mx-auto mt-5" style="height: 250px; width: 250px;">
                                <img id="imagePreview" class="mx-auto " src="{{$user['profile']}}" style="height: 250px; width: 250px;">
                            </div>
                        </div>
                        <div class="col-sm-7 col-12 mt-5 ms-sm-0 ms-4">
                            <!-- Input Nama -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="nama" class="mb-1">Nama</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="nama" type="text" name="nama" class="form-control" value="{{$user['nama']}}" disabled>
                                </div>
                            </div>

                            <!-- Input noHp -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="noHp" class="mb-1">No Hp</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="noHp" type="number" class="form-control" value="{{$user['no_hp']}}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="form-floating col-11">
                                    <textarea class="form-control ps-3" id="floatingTextarea2" style="height: 200px" required></textarea>
                                    <label for="floatingTextarea2" class="ms-3">Detail Alamat</label>
                                </div>

                            </div>
                            <div class="row mt-4 pe-5" style="font-size: 17px;">
                                <button type="submit" class="btn btn-outline-success">Simpan Perubahan</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Alamat -->
    <div class="modal fade" id="modalAlamatEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true"> -->
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content ">
                <div class="modal-header bg bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Tambah Alamat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-5 col-12 my-1">
                            <h3 class="text-center" style="font-size: 18px;">Silahkan Edit Alamat Anda</h3>
                            <div class="card mx-auto mt-5" style="height: 250px; width: 250px;">
                                <img id="imagePreview" class="mx-auto " src="{{$user['profile']}}" style="height: 250px; width: 250px;">
                            </div>
                        </div>
                        <div class="col-sm-7 col-12 mt-5 ms-sm-0 ms-4">
                            <!-- Input Nama -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="nama" class="mb-1">Nama</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="nama" type="text" name="nama" class="form-control" value="{{$user['nama']}}" disabled>
                                </div>
                            </div>

                            <!-- Input noHp -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="noHp" class="mb-1">No Hp</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="noHp" type="number" class="form-control" value="{{$user['no_hp']}}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="form-floating col-11">
                                    <textarea class="form-control ps-3" id="floatingTextarea2" style="height: 200px" required></textarea>
                                    <label for="floatingTextarea2" class="ms-3">Detail Alamat</label>
                                </div>

                            </div>
                            <div class="row mt-4 pe-5" style="font-size: 17px;">
                                <button type="submit" class="btn btn-outline-success">Simpan Perubahan</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>