<?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\AuthController;
    use App\Http\Middleware\CheckLoginMiddleware;
    use App\Http\Middleware\CheckSuperAdminMiddleWare;
    use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::group([
    'middleware' => CheckLoginMiddleware::class
], function() {
    Route::group(['prefix' => 'admin'], function (){
        Route::get('/', [AdminController::class, 'index'])->name('admins.index');
    });

    Route::group([
        'middleware' => CheckSuperAdminMiddleWare::class
    ], function() {

        Route::get('/superadmin', function () {
            return view('superadmin');
        });

    });

});


