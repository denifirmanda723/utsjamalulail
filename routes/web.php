<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/home', [HomeController::class, 'index']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('message', 'Anda telah berhasil logout.');
});