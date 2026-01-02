<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthForgetPasswordRequest;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\AuthRequestLogin;
use App\Interfaces\Auth\AuthInterface;
use App\Services\Auth\AuthService;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct(protected AuthService $auth_service) {}


    public function register(AuthRequest $authRequest)
    {
        $validationAuthRequest = $authRequest->validated();
        try {
            $returnDataRegisterFromService = $this->auth_service->methodAuthInterface($validationAuthRequest);
            return response()->json([
                "success" => true,
                "data" => $returnDataRegisterFromService,
                "errors" => null,
            ], 201);
        } catch (\Exception $errors) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors->getMessage(),
            ], 422);
        }
    }

    public function login(AuthRequestLogin $authRequestLogin)
    {
        try {
            $validationDataRequest = $authRequestLogin->validated();
            $returnDataLoginFromService = $this->auth_service->methodLoginInterface($validationDataRequest);
            return response()->json([
                "success" => true,
                "data" => $returnDataLoginFromService,
                "errors" => null,
            ], 200);
        } catch (Exception $errors) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors->getMessage(),
            ], 422);
        }
    }

    public function forgetPassword(AuthForgetPasswordRequest $authForgetPasswordRequest)
    {
        $validationForgetPasswordRequest = $authForgetPasswordRequest->validated();
        try {
            $returnForgetPasswordDataFromService = $this->auth_service->methodForgetPasswordInterface($validationForgetPasswordRequest);
            return response()->json([
                "success" => true,
                "data" => $returnForgetPasswordDataFromService,
                "errors" => null,
            ], 200);
        } catch (Exception $errors) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors->getMessage(),
            ], 422);
        }
    }
}
