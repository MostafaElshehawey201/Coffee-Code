<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\userUpdateProfileRequest;
use App\Services\User\UserService;
use DomainException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }
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

    public function editProfile(){
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

    public function updateProfile(userUpdateProfileRequest $userUpdateProfileRequest){
        $validationUserUpdatedProfile = $userUpdateProfileRequest->validated();
        $returnDataUpdatedFromService = $this->userService->methodUpdateProfileInterface($userUpdateProfileRequest , $validationUserUpdatedProfile);
        try{
            return response()->json([
                "success" => true ,
                "data" => $returnDataUpdatedFromService ,
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
