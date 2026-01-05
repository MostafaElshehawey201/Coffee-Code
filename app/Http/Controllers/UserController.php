<?php

namespace App\Http\Controllers;

use DomainException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    public function showProfile(){
        $user = Auth::guard('sanctum')->user();
        try{
            return response()->json([
                "success" => true ,
                "data" => $user ,
                "errors" => null ,
            ],200);
        }catch(Throwable $e){
            return response()->json([
                "success" => false ,
                "data" => null ,
                "errors" => $e->getMessage(),
            ],500);
        }
    }

    public function logoutProfile(Request $request){
        $request->user()->currentAccessToken()->delete();
        try{
          return response()->json([
                "success" => true ,
                "data" => __('messages.logout'),
                "errors" => null ,
            ],200);
        }catch(Throwable $e){
            return response()->json([
                "success" => false ,
                "data" => null ,
                "errors" => $e->getMessage(),
            ],500);
        }
    }
}
