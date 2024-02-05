<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminPageController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }
}
