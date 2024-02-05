<?php

namespace App\Http\Controllers\Utilisateurs\HomeUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeUserPageController extends Controller
{
    public function index(){
        return view('utilisateurs.home.index');
    }
}
