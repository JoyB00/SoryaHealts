@extends(empty(session('userLogint')) || $userLogin[0]['email']==='' ? 'navbarUser' : 'navbarUserLogined')

@section('content')
<link rel="stylesheet" href="styles/user_styles.css">

<div class="pt-5 my-3 row">
    <div class=" pt-5 mt-sm-0 row">
        <div class="profile-container row">
            <ul class="d-flex px-5 py-0 ">
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ (Request::is('TentangKami')) ? 'actived' : '' }}" aria-current="page" href="{{url('/profile')}}">Profil Anda</a>
                </li>
                <li class="nav-item mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="{{ (Request::is('TentangKami')) ? 'actived' : '' }}" href="{{url('/daftarAlamat')}}">Daftar Alamat</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ (Request::is('TentangKami')) ? 'actived' : '' }}" href="{{url('/keranjang')}}">Keranjang Belanja</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="  {{ (Request::is('testimoni')) ? 'actived' : '' }}" href="{{url('/testimoni')}}">Testimoni</a>
                </li>
            </ul>
            <hr style="color: #4CAF50;">
            <div>
                @yield('main')
            </div>
        </div>
    </div>
</div>

@endsection