<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\ProSkillController;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/', 'ayuobferwana');
Route::get('ayuobferwana' , 'CvController@show')->name('cv.show');

Route::view('/dashboard', 'dashboard.parent')->name('home');
Route::resource('/user', UserController::class);
Route::resource('/professional',ProSkillController::class);
