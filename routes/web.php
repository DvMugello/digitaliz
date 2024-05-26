<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/Login', [LoginController::class, 'index'])->Middleware('guest');
Route::post('/Login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/dashboard', function () {
    return view ('Dashboard.index' , [
        "title" => "Dashboard",
        "active" => "dashboard"
    ]);
})->middleware('auth');
