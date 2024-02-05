<?php

namespace App\Http\Controllers\Admin\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthPageController extends Controller
{
    public function login(){
        return view('admin.authAdmin.login');
    }
}
