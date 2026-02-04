<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;

Route::prefix('v1')->middleware('SetApiLocalLang')->group(function () {
    Route::prefix('auth')->group(function () {

        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('forget-password', [AuthController::class, 'forgetPassword']);
        Route::post('check-otp', [AuthController::class, 'checkOtp']);
        Route::post('reset-password', [AuthController::class, 'resetPassword'])->middleware('auth:sanctum');
    });

    Route::prefix('user')->group(function () {

        Route::post('show-profile', [UserController::class, 'showProfile']);
        Route::post('edit-profile', [UserController::class, 'editProfile']);
        Route::post('update-profile', [UserController::class, 'updateProfile']);
        Route::post('logout-profile', [UserController::class, 'logoutProfile']);
    });

    Route::prefix('categories')->group(function () {
        Route::get('all-categories', [CategoryController::class, 'allCategories']);
    });
});
