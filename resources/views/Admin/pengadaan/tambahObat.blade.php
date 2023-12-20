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
                    <h1 class="fw-bold">Tambah Data Obat</h1>
                    <p>Stock In</p>
                </div>
            </div>
            <div class="container bg-white px-3 pt-2 rounded" style="height: 800px; width: 2200px;">
                <form method="post" action="{{route('obatStore')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="gambarObat">Gambar Obat </label>
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="namaObat">Nama Obat: </label>
                        <input type="text" class="form-control" id="namaObat" name="namaObat" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="golonganObat">Golongan Obat:</label>
                            <input type="text" class="form-control" id="golonganObat" name="golonganObat" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="hargaObat">Harga Obat:</label>
                            <input type="number" class="form-control" id="hargaObat" name="hargaObat" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="jenisObat">Jenis Obat:</label>
                            <select class="form-control" id="jenisObat" name="jenisObat" required>
                                <option value="" disabled selected>Pilih jenis obat</option>
                                <option value="strip">Strip</option>
                                <option value="kapsul">Kapsul</option>
                                <option value="tablet">Tablet</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsiObat">Kategori Obat:</label>
                            <select class="form-control" id="kategoriObat" name="kategoriObat" required>
                                <option value="" disabled selected>Pilih kategori obat</option>
                                <option value="Obat Demam">Obat Demam</option>
                                <option value="Pereda Nyeri">Pereda Nyeri</option>
                                <option value="Obat Anti Alergi">Obat Anti Alergi</option>
                                <option value="Antibiotik">Antibiotik</option>
                                <option value="Flu dan Batuk">Flu dan Batuk</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dosisObat">Dosis Obat:</label>
                        <textarea type="text" class="form-control" id="dosisObat" style="resize: none;" name="dosisObat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="deskripsiObat">Deskripsi Obat:</label>
                        <textarea type="text" class="form-control" id="deskripsiObat" name="deskripsiObat" style="resize: none; height: 200px;" required></textarea>
                    </div>
                    <input type="text" value="{{$id_pengadaan}}" name="idPengadaan" hidden>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>

@endsection