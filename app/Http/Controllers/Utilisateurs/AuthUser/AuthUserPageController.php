<?php

namespace App\Http\Controllers\Utilisateurs\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthUserPageController extends Controller
{
    public function login(){
        return view('utilisateurs.authuser.login');     
    }

    public function register(){
        return view('utilisateurs.authUser.register');
    }

    public function logout(){
        return redirect()->route('login');
    }
}
