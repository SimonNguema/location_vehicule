<?php

namespace App\Http\Controllers\Utilisateurs\Contacter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContacterPageController extends Controller
{
    public function index(){
        return view('utilisateurs.contacter.index');
    }
}
