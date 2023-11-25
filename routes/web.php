<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
})->name(name: 'home');

Route::get('/login', [AuthController::class, 'login'])->name(name: 'login');
Route::post('/login', [AuthController::class, 'loginPost'])->name(name: 'login.post');
Route::get('/registration', [AuthController::class, 'registration'])->name(name: 'registration');
Route::post('/registration', [AuthController::class, 'registrationPost'])->name(name: 'registration.post');
Route::get('/logout', [AuthController::class, 'logout'])->name(name: 'logout');
