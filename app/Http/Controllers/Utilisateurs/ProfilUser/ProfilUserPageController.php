<?php

namespace App\Http\Controllers\Utilisateurs\ProfilUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilUserPageController extends Controller
{
    public function index(){
        return view('utilisateurs.profilUser.index');
    }
}
