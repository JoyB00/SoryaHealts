@extends('user')

@section('main')
<div class="container p-5 pt-2">
    <div class="d-flex justify-content-between">
        <h2>Semua Alamat</h2>
        <form action="">
            <button class="form-control btn btn-outline-success btn-md" type="submit"><i class="fa-solid fa-plus"></i> Tambah Alamat</button>
        </form>
    </div>
    <div class="row mx-1">
        @for ($i = 0; $i < 3; $i++) <div class="col-12 card mt-3 border-success">
            <div class="card-body row ">
                <div class="col-10">
                    <h5>Candra Sihotang</h5>
                    <p class="m-0" style="font-family: lato regular;">No Hp : 0891231243123</p>
                    <p style="font-family: lato regular;">Alamat: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit sed harum dolore reiciendis quisquam delectus ad vitae quae et sunt quasi eum dolorum beatae, ipsa fugiat veritatis rem dolores voluptatem?</p>
                    <div class="d-flex">
                        <ul class="nav">
                            <li class="nav-item "><a href="" class="nav-link border-end text-success" aria-current="page">Edit</a></li>
                            <li class="nav-item "><a href="#" class="nav-link text-danger ">Hapus</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-2 my-auto mx-auto">
                    <form action="">
                        <button class="form-control btn btn-outline-success btn-sm rounded-pill" type="submit">Pilih</button>
                    </form>
                </div>

            </div>
    </div>
    @endfor
</div>
</div>

@endsection