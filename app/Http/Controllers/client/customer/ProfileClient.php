<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileClient extends Controller
{
    public function gotoProfile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('profile', ['user' => $user]);
    }
}
