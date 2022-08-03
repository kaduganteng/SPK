<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Profile
Route::get('/profileguru', [App\Http\Controllers\ProfileguruController::class, 'index'])->name('profileguru');
Route::post('/profileguru.store', [App\Http\Controllers\ProfileguruController::class, 'store'])->name('profileguru.store');
Route::get('/profileguru.delete.{id}', [App\Http\Controllers\ProfileguruController::class, 'destroy'])->name('profileguru.destroy');

//Absensi
Route::get('/absensi', [App\Http\Controllers\AbsensiController::class, 'index'])->name('absensi');

//Adminsitrasi
Route::get('/administrasi', [App\Http\Controllers\AdministrasiController::class, 'index'])->name('administrasi');

//Survey
Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('survey');

