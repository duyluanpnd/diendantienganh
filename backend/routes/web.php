<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

// backend
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::get('/dashboard', [AuthController::class, 'loginFail'])->name('loginFail');
Route::post('/admin-dashboard', [AuthController::class, 'processLogin'])->name('admin_dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/adduser',[AddUserController::class,'addUser'])->name('add_user');
Route::post('/adduser',[AddUserController::class,'processAddUser']);

Route::get('/change-password',[ChangePasswordController::class,'changePassword']);
Route::post('/changepassword',[ChangePasswordController::class,'processChangePassWord']);