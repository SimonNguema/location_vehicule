<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Profil\ProfilAdminController;
use App\Http\Controllers\Admin\Voiture\VoitureAdminController;
use App\Http\Controllers\Admin\Location\LocationAdminController;
use App\Http\Controllers\Utilisateurs\Voiture\VoitureController;
use App\Http\Controllers\Admin\Utilisateur\UtilisateurController;
use App\Http\Controllers\Admin\Voiture\VoitureAdminPageController;
use App\Http\Controllers\Utilisateurs\Contacter\ContacterController;
use App\Http\Controllers\Utilisateurs\Voiture\VoiturePageController;
use App\Http\Controllers\Utilisateurs\Reservation\ReservationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route Admin----------------------------------------------------------------------------------------------------------------
Route::post('/admin/voiture/store', [VoitureAdminController::class, 'store']) ->name('store');
Route::get('/admin/voiture/index', [VoitureAdminController::class, 'index']) ->name('index');
Route::get('/admin/voiture/{id}', [VoitureAdminController::class, 'show']) ->name('show');
Route::delete('/admin/voiture/{id}', [VoitureAdminController::class, 'destroy'])->name('destroy');

//Location
Route::get('/admin/location/index', [LocationAdminController::class, 'index']) ->name('index');
Route::get('/admin/location/{id}', [LocationAdminController::class, 'show']) ->name('show');
Route::delete('/admin/location/{id}', [LocationAdminController::class, 'destroy'])->name('destroy');



Route::post('/admin/users/store', [UtilisateurController::class, 'store']) ->name('store');
Route::get('/admin/users/index', [UtilisateurController::class, 'index']) ->name('index');
Route::get('/admin/users/{id}', [UtilisateurController::class, 'show']) ->name('show');
Route::delete('/admin/users/{id}', [UtilisateurController::class, 'destroy']) ->name('destroy');


//profil

Route::put('admin/profil/{id}', [ProfilAdminController::class, 'updateUser']) ->name('admin.profil.index');
Route::post('/admin/profil/{id}', [ProfilAdminController::class, 'updatePassword']);


//-----------------------------------------------------------------------------------------------------------------------------


//Route Client
Route::get('/detailsVoiture/{id}', [VoitureController::class, 'detailsVoiture']) ->name('detailsVoiture');

Route::post('contacter', [ContacterController::class, 'envoyerMessage']);
Route::get('voiture/location/{id}', [VoitureController::class, 'voitureLocation']) ->name('voitureLocation');
Route::post('location/store', [ReservationController::class, 'store']) ->name('location');


