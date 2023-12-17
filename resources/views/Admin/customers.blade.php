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
                    <h1>Customers</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Tanggal Lahir</th>
        </tr>
        @forelse ($pelanggan as $item)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["email"] }}</td>
            <td>{{ $item["jenis_kelamin"] }}</td>
            <td>{{ $item["no_telp"] }}</td>
            <td>{{ $item["tanggal_lahir"] }}</td>
            @empty
            <div class="alert alert-danger">Data Kelas masi kosong</div>
            @endforelse
    </table>
</div>

@endsection