<?php

namespace App\Http\Controllers\Admin\Location;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationAdminController extends Controller
{
    public function index(){
        $location= Location::all();
        return response()->json($location);
    }

    
}
