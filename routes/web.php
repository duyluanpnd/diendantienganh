<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLoginMiddleware;
use App\Http\Middleware\CheckSuperAdminMiddleWare;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\googleController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');

Route::group(['prefix' => 'admin'], function() {
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

        Route::group(['prefix' => 'post', 'as' => 'posts.'], function (){
            Route::get('/user/{user}', [PostController::class, 'index1'])->name('index1');
            Route::get('/topic/{topic}', [PostController::class, 'index2'])->name('index2');
            Route::post('/update1/{post}',[PostController::class,'update1'])->name('update1');
            Route::post('/update0/{post}',[PostController::class,'update0'])->name('update0');
            Route::delete('/delete/{post}', [PostController::class,'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'topic', 'as' => 'topics.'], function (){
            Route::get('/', [TopicController::class, 'index'])->name('index');
            Route::get('/subtopic/{topic}', [TopicController::class, 'subTopic'])->name('sub_topic');
            Route::get('/create',[TopicController::class,'create'])->name('create');
            Route::post('/store/{topic}',[TopicController::class,'store'])->name('store');
            Route::get('/edit/{topic}',[TopicController::class,'edit'])->name('edit');
            Route::post('/update/{topic}',[TopicController::class,'update'])->name('update');
            Route::delete('/delete/{topic}',[TopicController::class,'destroy'])->name('destroy');
            Route::delete('/delete_sub_topic/{topic}',[TopicController::class,'destroySubTopic'])->name('destroy_sub_topic');
        });

        Route::group(['prefix' => 'user', 'as' => 'users.'], function (){
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create',[UserController::class,'create'])->name('create');
            Route::post('/store/{user}',[UserController::class,'store'])->name('store');
            Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
            Route::post('/update/{user}',[UserController::class,'update'])->name('update');
        });


        Route::group([
            'middleware' => CheckSuperAdminMiddleWare::class
        ], function() {

            Route::get('/superadmin', function () {
                return view('superadmin');
            });

        });

    });

});
// Google Sing In
    Route::get('/google', [googleController::class, 'redirectToGoogle'])->name('google');
    Route::get('google/callback', [googleController::class, 'handdleGoogleCallBack'])->name('googleCallBack');

