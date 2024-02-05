<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Home\HomeAdminPageController;
use App\Http\Controllers\Admin\Profil\ProfilAdminPageController;
use App\Http\Controllers\Admin\Voiture\VoitureAdminPageController;
use App\Http\Controllers\Utilisateurs\AuthUser\AuthUserController;
use App\Http\Controllers\Admin\Location\LocationAdminPageController;
use App\Http\Controllers\Utilisateurs\Voiture\VoiturePageController;
use App\Http\Controllers\Admin\Utilisateur\UtilisateurPageController;
use App\Http\Controllers\Utilisateurs\AuthUser\AuthUserPageController;
use App\Http\Controllers\Utilisateurs\HomeUser\HomeUserPageController;
use App\Http\Controllers\Utilisateurs\Contacter\ContacterPageController;
use App\Http\Controllers\Utilisateurs\ProfilUser\ProfilUserPageController;
use App\Http\Controllers\Utilisateurs\Reservation\ReservationPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {

Route::get('/', function () {
    return view('welcome');
});


//RouteAdmin---------------------------------------------------------

Route::get('dashboard', [HomeAdminPageController::class, 'index']) ->name('index');

//Voiture
Route::get('admin/voiture/index', [VoitureAdminPageController::class, 'index']) ->name('admin.voiture.index');
Route::get('admin/voiture/create', [VoitureAdminPageController::class, 'create']) ->name('admin.voiture.create');
Route::get('/admin/voiture/{id}', [VoitureAdminPageController::class, 'show']) ->name('admin.voiture.show');


//Users
Route::get('admin/users/index', [UtilisateurPageController::class, 'index']) ->name('admin.users.index');
Route::get('admin/users/create', [UtilisateurPageController::class, 'create']) ->name('admin.users.create');
Route::get('admin/users/{id}', [UtilisateurPageController::class, 'show']) ->name('admin.users.show');


//ProfilAdmin

Route::get('admin/profil/index', [ProfilAdminPageController::class, 'index']) ->name('admin.profil.index');

//Location
Route::get('admin/location/index', [LocationAdminPageController::class, 'index']) ->name('admin.location.index');


//-------------------------------------------------------------------





//RouteUser

Route::get('home', [HomeUserPageController::class, 'index']) ->name('utilisateurs.home.index');
Route::get('voiture', [VoiturePageController::class, 'index']) ->name('utilisateurs.voiture.index');
Route::get('voiture/location/{id}', [VoiturePageController::class, 'voitureLocation']) ->name('voitureLocation');

Route::get('contacter', [ContacterPageController::class, 'index']) ->name('utilisateurs.contacter.index');
//Route::get('reservation/{id}', [ReservationPageController::class, 'addLocation']) ->name('addLocation');
Route::get('profilUser', [ProfilUserPageController::class, 'index']) ->name('index');
Route::get('detailsVoiture/{id}', [VoiturePageController::class, 'detailsVoiture']) ->name('detailsVoiture');

Route::get('location', [ReservationPageController::class, 'userLocation']) ->name('utilisateurs.reservation.user_location');

});

Route::post('login', [AuthUserController::class, 'login'])->name('login');
Route::get('login', [AuthUserPageController::class, 'login'])->name('login');
Route::get('register', [AuthUserPageController::class, 'register'])->name('register');
Route::get('logout', [AuthUserController::class, 'logout'])->name('logout');
Route::get('logout', [AuthUserPageController::class, 'logout'])->name('logout');

