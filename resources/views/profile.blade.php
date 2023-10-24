@extends('user')

@section('main')
<div class="row ps-5">
    <div class="col-4 card">
        <div class="card-body p-4">
            <div class="card mx-auto" style="height: 300px; width: 300px;">
                <img id="imagePreview" class="mx-auto" src="{{url('https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg')}}" style="height: 300px; width: 300px;">
            </div>
            <div class="mb-3 mt-3 card bg-success">
                <input type="file" id="formFile" accept="image/*" onchange="previewImage()">
                <label for="formFile" id="labelFile">Pilih File</label>
            </div>
            <p style="text-align: center; font-size: x-small; font-family: lato light;">Rekomendasi ukuran 300px x 300px</p>
        </div>
    </div>

    <div class="col-7 px-5 pt-3">
        <h2><i class="fa-solid fa-user me-2"></i> Biodata Diri</h2>
        <div class="row mt-5">
            <div class="col-5">
                <h4 style="font-family: lato regular;">Nama</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular;">: Candra Dionisius Sihotang</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular;">Tanggal Lahir</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular;">: -</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular;">Email</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular;">: Candra12@gmail.com</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular;">Jenis Kelamin</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular;">: Pria</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-5">
                <h4 style="font-family: lato regular;">Nomor Handphone</h4>
            </div>
            <div class="col-7">
                <h4 style="font-family: lato regular;">: 081234567890</h4>
            </div>
        </div>
        <form class="mt-4" action="">
            <button class="form-control btn btn-outline-success" type="submit">Edit Profile</button>
        </form>
    </div>
</div>
<script>
    function previewImage() {
        const fileInput = document.getElementById('formFile');
        const imagePreview = document.getElementById('imagePreview');

        const file = fileInput.files[0];

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