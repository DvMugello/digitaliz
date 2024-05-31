<?php

use App\Http\Controllers\DashboardAdminControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashboardUserCreateController;
// use App\Http\Controllers\DashboardAdminCreateController;

// Route::resource('permissions',App\Http\Controllers\PermissionController::class);

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
Route::resource('/Dashboard/user',DashboardUserCreateController::class)->middleware('auth');
Route::resource('/Dashboard/admin',DashboardAdminControllers::class)->middleware(['auth','role:admin']);
// Route::get('/Dashboard/admin',function(){
// return view('Dashboard.admin.index');
// })->middleware(['auth','role:admin'])->name('Dashboard.admin.index');
