<?php

namespace App\Http\Controllers\Utilisateurs\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationPageController extends Controller
{
   public function userLocation(){
      return view('utilisateurs.reservation.user_location');
   }
}
