<?php

namespace App\Http\Controllers\Admin\Utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtilisateurPageController extends Controller
{
    public function index(){
        return view('admin.users.index');
    }

    public function create(){
        return view('admin.users.create');
    }

    public function show($id){
        return view('admin.users.show', compact('id'));
    }
}
