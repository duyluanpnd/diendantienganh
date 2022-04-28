<?php

    use App\Http\Controllers\AddUserController;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\HomeController;
    use App\Http\Middleware\CheckLoginMiddleware;
    use App\Http\Middleware\CheckSuperAdminMiddleWare;
    use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\googleController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::group([
    'middleware' => CheckLoginMiddleware::class
], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admins.'], function (){
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/create',[AdminController::class,'create'])->name('create');
        Route::post('/store',[AdminController::class,'store'])->name('store');
        Route::get('/edit',[AdminController::class,'edit'])->name('edit');
        Route::post('/update',[AdminController::class,'update'])->name('update');
    });

    Route::group([
        'middleware' => CheckSuperAdminMiddleWare::class
    ], function() {

        Route::get('/superadmin', function () {
            return view('superadmin');
        });

    });

});
Route::post('google', [googleController::class, 'redirectToGoogle'], function(){

})->name('google');
Route::post('google/callback', [googleController::class, 'handdleGoogleCallBack'], function(){

})->name('googleCallBack');