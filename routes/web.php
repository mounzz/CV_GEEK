<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilUpdateController;



Route::get('/', [HomeController::class, "index"])->name('home');

Route::post('/create', [HomeController::class, "store"]);

//ROUTE PROFILS

Route::get('/profils', [ProfilController::class, "index"])->name('profils');
Route::delete('/profils/{id}/delete', [ProfilController::class, "destroy"]);
Route::get('/profilUpdate/{id}',[ProfilController::class, "show"]);
Route::get('/download/{id}',[ProfilController::class , 'download' ]);

//ROUTE PROFILUPDATE

Route::put('/profilUpdate/{id}/update', [ProfilUpdateController::class, "update"]);
