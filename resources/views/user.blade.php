@extends('navbarUserLogined')

@section('content')
<style>
    .profile-container {
        width: 1211px;
        height: 600px;
        object-fit: cover;
        position: relative;
        top: 0px;
        left: 20px;
        padding-top: 20px;
        z-index: 2;
        overflow-x: hidden;
        border: 2px solid #4CAF50;
        border-radius: 10px;
        margin: 0px auto;
    }

    .profile-container::-webkit-scrollbar {
        width: 5px;
    }

    .profile-container::-webkit-scrollbar-track {
        background: transparent;
    }

    .profile-container::-webkit-scrollbar-thumb {
        border-radius: 30px;
        background: #4CAF50;
    }

    a {
        text-decoration: none;
        color: grey;
        transition: 0.2s;
    }

    a:hover {
        transition: 0.2s;
        color: #03ACF2;
    }

    input {
        position: absolute;
        inset: 0;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
    }


    #labelFile {
        text-align: center;
        margin: 20px;
        cursor: pointer;
        color: white;
    }
</style>


<div class=" px-md-3 px-0 pt-5 my-3">
    <div class="container pt-5 mx-5">
        <div class="profile-container">
            <ul class="d-flex px-5 py-0 ">
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ ($title === 'Profile') ? 'actived' : ''}}" aria-current="page" href="{{url('/profile')}}">Profil Anda</a>
                </li>
                <li class="nav-item mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="{{ ($title === 'Daftar Alamat') ? 'actived' : ''}}" href="{{url('/daftarAlamat')}}">Daftar Alamat</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ ($title === 'Keranjang Belanja') ? 'actived' : ''}}" href="{{url('/keranjang')}}">Keranjang Belanja</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="  {{ ($title === 'Testimoni') ? 'actived' : ''}}" href="{{url('/testimoni')}}">Testimoni</a>
                </li>
            </ul>
            <hr style="color: #4CAF50;">

            @yield('main')

        </div>
    </div>
</div>

@endsection