<?php

use Illuminate\Support\Facades\Route;
use App\Models\users_info;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SessionendController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;

Route::view('/','home');

Route::view('/contact','contact');

Route::view('/about','about');
Route::post('/search',[SearchController::class, 'index']);
Route::get('/login',[SessionController::class,'index']);
Route::post('/login',[SessionController::class,'store']);
Route::get('/profile',[SessionController::class,'show']);
Route::get('/session',[SessionController::class,'edit']);
Route::patch('/session',[SessionController::class,'update']);
Route::patch('/sessiondel',[SessionController::class,'destroy']);

Route::get('/logout',[SessionendController::class,'destroy']);
Route::resource('signup',SignupController::class);

