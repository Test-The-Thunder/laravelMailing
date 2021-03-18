<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailingController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/bulkMail', [mailingController::class, 'bulkMail'])->name('sendMail');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
