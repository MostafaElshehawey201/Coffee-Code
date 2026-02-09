<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubCategoryController;

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

    Route::prefix('sub-categories')->group(function () {
        Route::get('all-sub-categories', [SubCategoryController::class, 'allSubCategories']);
        Route::get('category/{category_id}/subCategory', [SubCategoryController::class, 'subCategory']);
    });

    Route::middleware('auth:sanctum')->prefix('menus')->group(function(){
        Route::get('{category_id}/{subCategory_id}/menu' , [MenuController::class , 'menu']);
        Route::post('{category_id}/{subCategory_id}/{menu_id}/addMenuFavorite' , [MenuController::class , 'addMenuFavorite']);
        Route::get('{subCategory_id}/{menu_id}/showMenuFavorite' , [MenuController::class , 'showMenuFavorite']);
        Route::get('{category_id}/{subCategory_id}/menu/deleteMenuFavorite' , [MenuController::class , 'deleteMenuFavorite']);
    });
});

Route::prefix('admin-panel')->middleware(['auth:sanctum','SetApiLocalLang'])->group(function(){
    Route::prefix('categories')->group(function(){
        Route::get('all-categories' , [CategoryController::class , 'allCategories']);
        Route::post('create-category' , [CategoryController::class , 'createCategory']);
        Route::post('editCategory/{category_id}' , [CategoryController::class , 'editCategory']);
    });

    Route::prefix('sub-categories')->group(function(){
        Route::get('{category_id}/sub-categories' , [SubCategoryController::class , 'subCategory']);
        Route::post('{category_id}/create-sub-category' , [SubCategoryController::class , 'createSubCategory']);
        Route::post('edit-sub-category/{subCategory_id}' , [SubCategoryController::class , 'editSubCategory']);
    });

    Route::prefix('menus')->group(function(){
        Route::get('{category_id}/{subCategory_id}/menu' , [MenuController::class , 'menu']);
        Route::post('{sub_category_id}/create-menu' , [MenuController::class , 'createMenu']);
        Route::post('{sub_category_id}/editMenu' , [MenuController::class , 'editMenu']);
    });
});
