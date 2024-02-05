<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationAdminPageController extends Controller
{
    public function index(){
        return view('admin.location.index');
    }
}
