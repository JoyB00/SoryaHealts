@extends(Auth::check() ? 'navbarUserLogined' : 'navbarUser')

@section('content')
<link rel="stylesheet" href="styles/user_styles.css">

<div class="pt-5 my-3 row">
    <div class=" pt-5 mt-sm-0 row">
        <div class="profile-container row">
            <ul class="d-flex px-5 mb-0 border-bottom" style="height: 60px;">
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ (Request::is('*profile')) ? 'actived' : '' }}" aria-current="page" href="{{route('gotoProfile')}}">Profil Anda</a>
                </li>
                <li class="nav-item mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class=" {{ (Request::is('*alamat')) ? 'actived' : '' }}" href="{{url('/daftarAlamat')}}">Daftar Alamat</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="  {{ (Request::is('*keranjang')) ? 'actived' : '' }}" href="{{url('/keranjang')}}">Keranjang Belanja</a>
                </li>
                <li class="mb-0 me-5" style="color: grey; list-style: none; font-size: 20px;">
                    <a class="   {{ (Request::is('*testimoni')) ? 'actived' : '' }}" href="{{url('/testimoni')}}">Testimoni</a>
                </li>
            </ul>
            <div class="container">
                @yield('main')
            </div>
        </div>
    </div>
</div>

@endsection