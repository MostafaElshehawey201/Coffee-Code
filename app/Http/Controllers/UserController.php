<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\userUpdateProfileRequest;
use App\Http\Resources\User\ProfileUserResource;
use App\Services\User\UserService;
use App\Traits\ApiResponse;
use DomainException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    use ApiResponse;
    public function __construct(protected UserService $userService) {}

    public function showProfile()
    {
        try {
            $user = $this->userService->profile();
            $userResource = app()->make(ProfileUserResource::class, ['resource' => $user]);
            return $this->success($userResource, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function editProfile()
    {
        try {
            $user = $this->userService->profile();
            $userResource = app()->make(ProfileUserResource::class, ['resource' => $user]);
            return $this->success($userResource, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function updateProfile(userUpdateProfileRequest $userUpdateProfileRequest)
    {
        $validationUserUpdatedProfile = $userUpdateProfileRequest->validated();
        $returnDataUpdatedFromService = $this->userService->methodUpdateProfileInterface($userUpdateProfileRequest, $validationUserUpdatedProfile);
        try {
            return response()->json([
                "success" => true,
                "data" => $returnDataUpdatedFromService,
                "errors" => null,
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $e->getMessage(),
            ], 500);
        }
    }

    public function logoutProfile(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        try {
            return response()->json([
                "success" => true,
                "data" => __('messages.logout'),
                "errors" => null,
            ], 200);
        } catch (Throwable $e) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $e->getMessage(),
            ], 500);
        }
    }
}
