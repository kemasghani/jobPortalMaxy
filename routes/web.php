<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detailCourse', [App\Http\Controllers\DetailCourseController::class, 'index'])->name('detailCourse');
Route::get('/specialCourse', [App\Http\Controllers\SpecialCourseController::class, 'index'])->name('specialCourse');
Route::get('/loggedHome', [App\Http\Controllers\LoggedHomeController::class, 'index'])->name('loggedHome');
