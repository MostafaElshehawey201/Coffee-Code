<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;

    Route::middleware('SetApiLocalLang')->prefix('auth')->group(function(){
        Route::post('register' , [AuthController::class , 'register']);
        Route::post('login' , [AuthController::class , 'login']);
        Route::post('forget-password' , [AuthController::class , 'forgetPassword']);
        Route::post('check-otp' , [AuthController::class , 'checkOtp']);
        Route::post('reset-password' , [AuthController::class , 'resetPassword'])->middleware('auth:sanctum');
    });
    Route::middleware(['auth:sanctum' , 'api' , 'SetApiLocalLang'])->prefix('user')->group(function(){
        Route::post('show-profile' , [UserController::class , 'showProfile']);
        Route::post('edit-profile' , [UserController::class , 'editProfile']);
        Route::post('update-profile' , [UserController::class , 'updateProfile']);
        Route::post('logout-profile' , [UserController::class , 'logoutProfile']);
    })
?>