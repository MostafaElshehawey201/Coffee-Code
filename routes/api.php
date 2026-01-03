<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

    Route::middleware('SetApiLocalLang')->prefix('auth')->group(function(){
        Route::post('register' , [AuthController::class , 'register']);
        Route::post('login' , [AuthController::class , 'login']);
        Route::post('forget-password' , [AuthController::class , 'forgetPassword']);
        Route::post('check-otp' , [AuthController::class , 'checkOtp']);
    });
?>