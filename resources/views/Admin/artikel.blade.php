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
                    <h1>Artikel</h1>
                </div>
                <div class="col-xl-6">
                    <ol class="breadcrumb float-sm-right">
                        <button class="btn-primary px-4" style="border-radius: 7px;" data-toggle="modal" data-target="#artikelModal"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                    </g>
                                </g>
                            </svg>Add Artikel</button>
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <table class="table table-striped border-dark text-center">
        <tr>
            <th>No</th>
            <th>Gambar Artikel</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Topik</th>
            <th>Tanggal Publish</th>
            <th>Action</th>
        </tr>
        @forelse ($artikel as $item)
        <tr class="bg-white">
            <td class="text-center align-middle">{{ $loop->iteration }}</td>
            <td><img src="{{asset('public/images/artikel/'. $item['gambar_artikel'])}}" alt="Gambar Obat" class="img-fluid w-50"></td>
            <td class="text-center align-middle">{{ $item["judul"] }}</td>
            <td class="text-center align-middle">{{ $item["author"] }}</td>
            <td class="text-center align-middle">{{ $item["topik"] }}</td>
            <td class="text-center align-middle">{{ $item["tanggal_publish"] }}</td>
            <td class="text-center align-middle p-4">
                <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#editModal{{ $item['id'] }}">
                    Edit
                </button>
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal{{ $item['id'] }}">
                    Hapus
                </button>

            </td>
        </tr>

        <!-- Modal for Update -->
        <div class="modal fade" id="editModal{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="artikelModalLabel">Update artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('artikelUpdate', ['id' => $item['id']]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-3">
                                <label for="image">Gambar Artikel </label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul Artikel: </label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$item['judul']}}" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="author">Author:</label>
                                    <input type="text" class="form-control" id="author" name="author" value="{{$item['author']}}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="topik">Topik Artikel</label>
                                    <select class="form-control" id="topik" name="topik" required>
                                        @foreach(['Makanan Sehat','Diet dan Nutrisi','Kesehatan Fisik', 'Kesehatan Anak'] as $option)
                                        @php
                                        $selected = $item['topik'] === $option ?'selected':'';
                                        @endphp
                                        <option value="{{$option}}" {{$selected}}>{{$option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_publish">Tanggal Publish:</label>
                                <input type="date" class="form-control" id="tanggal_publish" style="resize: none;" name="tanggal_publish" value="{{$item['tanggal_publish']}}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Artikel:</label>
                                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" style="resize: none; height: 200px;" required>value="{{$item['deskripsi']}}"</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
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
                        <h5 class="modal-title" id="deleteModalLabel">Delete artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('artikelDelete', ['id' => $item['id']]) }}">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus artikel ini?
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
        <div class="alert alert-danger">Data Artikel masih kosong</div>
        @endforelse
    </table>
</div>


<!-- artikel Modal -->
<div class="modal fade" id="artikelModal" tabindex="-1" role="dialog" aria-labelledby="artikelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="artikelModalLabel">Add artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="image">Gambar Artikel </label>
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Artikel: </label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="topik">Topik Artikel</label>
                            <select class="form-control" id="topik" name="topik" required>
                                <option value="" disabled selected>Pilih topik artikel</option>
                                <option value="Makanan Sehat">Makanan Sehat</option>
                                <option value="Diet dan Nutrisi">Diet dan Nutrisi</option>
                                <option value="Kesehatan Fisik">Kesehatan Fisik</option>
                                <option value="Kesehatan Anak">Kesehatan Anak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_publish">Tanggal Publish:</label>
                        <input type="date" class="form-control" id="tanggal_publish" style="resize: none;" name="tanggal_publish" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Artikel:</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" style="resize: none; height: 200px;" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection