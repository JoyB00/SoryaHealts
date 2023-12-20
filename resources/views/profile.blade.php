@extends('user')

@section('main')

<div class="row ps-md-5 ps-3">
    <div class="col-xl-4 col-12 card mt-4 mx-xl-0 mx-auto" style="height: 360px; width: 360px;">
        <div class="card-body p-4 ">
            <div class="card mx-auto" style="height: 300px; width: 300px;">
                <img class="img-fluid rounded-circle mt-2 profile-photo" src="{{ auth()->user()->profile ? auth()->user()->profile : 'https://cliply.co/wp-content/uploads/2020/08/442008111_GLANCING_AVATAR_3D_400.png' }}" style="height: 300px; width: 300px;">
            </div>
        </div>
    </div>

    <div class="col-xl-8 col-12 px-md-5 px-0 pt-2">
        <h2><i class="fa-solid fa-user me-2"></i> Biodata Diri</h2>
        <div class="row mt-4">
            <div class="col-5">
                <h4 style="font-family: lato regular; font-weight: bold;">Nama</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular; font-size: 18px;">: {{$user['nama']}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular; font-weight: bold;">Tanggal Lahir</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular; font-size: 18px;">: {{$user['tanggal_lahir']}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular; font-weight: bold;">Email</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular; font-size: 18px;">: {{$user['email']}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular; font-weight: bold;">Jenis Kelamin</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular; font-size: 18px;">: {{$user['jenis_kelamin']}}</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular; font-weight: bold;">Nomor Handphone</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular; font-size: 18px;">: {{$user['no_telp']}}</h4>
            </div>
        </div>
        <form class="mt-4" action="">
            <button type="button" class="form-control btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#profileModal">Edit Profile</button>
        </form>
    </div>
</div>


<script>
    function previewImage() {
        const fileInput = document.getElementById('formFile');
        const imagePreview = document.getElementById('imagePreview');

        const file = fileInput.files;

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    }
</script>

@endsection

<div class="modal fade" id="profileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
        <div class="modal-content ">
            <div class="modal-header bg bg-success">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Edit Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-5 my-1">
                            <h3 class="text-center" style="font-size: 18px;">Silahkan Edit Data Profile Anda</h3>
                            <div class="card mx-auto" style="height: 200px; width: 200px;">
                                <img id="imagePreview" class="mx-auto" src="{{$user['profile']}}" style="height: 200px; width: 200px;">
                            </div>
                            <div class="mb-3 mt-3 card bg-success mx-auto" style="width: 200px;">
                                <input style="font-family: Lato light;" type="file" id="formFile" accept="image/*" onchange="previewImage()" name="image">
                                <label for="formFile" id="labelFile">Pilih File</label>
                            </div>
                            <p style="text-align: center; font-size: x-small; font-family: lato light;">Rekomendasi ukuran 300px x 300px</p>
                        </div>
                        <div class="col-7 mt-5">
                            <!-- Input Nama -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="nama" class="mb-1">Nama</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="nama" type="text" name="nama" class="form-control" value="{{$user['nama']}}" required>
                                </div>
                            </div>

                            <!-- Input TGL Lahir -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="tglLahir" class="mb-1">Tanggal Lahir</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="tglLahir" type="date" class="form-control" name="tglLahir" required>
                                </div>
                            </div>

                            <!-- Input Email -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="email" class="mb-1">Email</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="email" type="text" class="form-control" value="{{$user['email']}}" name="email" required>
                                </div>
                            </div>

                            <!-- Input jenis Kelamin -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="jenisKelamin" class="mb-1">Jenis Kelamin</label>
                                </div>
                                <div class="col-8">
                                    @if($user['jenis_kelamin'] === 'Pria')
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="pria" value="Pria" checked>
                                    <label class="form-check-label mx-3" for="pria">
                                        Pria
                                    </label>
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="wanita" value="Wanita">
                                    <label class="form-check-label ms-3" for="wanita">
                                        Wanita
                                    </label>
                                    @elseif($user['jenis_kelamin'] === 'Wanita')
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="pria" value="Pria">
                                    <label class="form-check-label mx-3" for="pria">
                                        Pria
                                    </label>
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="wanita" value="Wanita" checked>
                                    <label class="form-check-label ms-3" for="wanita">
                                        Wanita
                                    </label>
                                    @else
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="pria" value="Pria">
                                    <label class="form-check-label mx-3" for="pria">
                                        Pria
                                    </label>
                                    <input style="font-family: Lato light;" class="form-check-input" name="gender" type="radio" name="flexRadioDefault" id="wanita" value="Wanita">
                                    <label class="form-check-label ms-3" for="wanita">
                                        Wanita
                                    </label>
                                    @endif
                                </div>
                            </div>

                            <!-- Input Email -->
                            <div class="row mb-3" style="font-size: 17px;">
                                <div class="col-3">
                                    <label for="noHp" class="mb-1">No Hp</label>
                                </div>
                                <div class="col-8">
                                    <input style="font-family: Lato light;" id="no_telp" name="no_telp" type="number" class="form-control" value="{{$user['no_hp']}}" required>
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