<?php

use App\Http\Controllers\AdiminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("verified");
Route::get('/reservation/{id}',[ReservationController::class,"index"]);

Route::post('reservation/demande/{id}', [ReservationController::class, 'demande'])->name('demande');

Route::get('/dashboard',[AdiminController::class,"index"])->name("dashboard");
Route::get('/Gestion_chambre',[AdiminController::class,"chambre"])->name("chambre");
Route::get('/addchambre',[AdiminController::class,"addchambre"])->name("addchambre");
Route::get('/updatechambre/{id}',[AdiminController::class,"updatechambre"])->name("updatechambre");
Route::post('/changeretat/{id}',[AdiminController::class,"changeretat"])->name("changeretat");

Route::patch('/updatechambre1/{id}',[AdiminController::class,"updatechambre1"])->name("updatechambre1");

Route::delete('/deletechambre/{id}',[AdiminController::class,"deletechambre"])->name("deletechambre");

Route::post('/storechambre',[AdiminController::class,"storechambre"])->name("storechambre");
//////////////////Utilisateru
Route::get("/utilisateur",[UserController::class,"index"])->name("utilisateur");
Route::get("/adduser",[UserController::class,"adduser"])->name("adduser");
Route::get("/updateuser/{id}",[UserController::class,"updateuser"])->name("updateuser");
Route::delete("/deleteuser/{id}",[UserController::class,"deleteuser"])->name("deleteuser");

Route::patch("updateuser/storeuserupdate/{id}",[UserController::class,"storeuserupdate"])->name("storeuserupdate");



Route::post("/storeuser",[UserController::class,"storeuser"])->name("storeuser");

