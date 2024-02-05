<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilAdminPageController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('admin.profil.index', compact('user'));
    }
}
