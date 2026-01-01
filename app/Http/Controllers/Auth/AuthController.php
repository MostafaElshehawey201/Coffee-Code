<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Services\Auth\AuthService;
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
            ],201);
        } catch (\Exception $errors) {
            return response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors->getMessage(),  
            ],422);
        }
    }
}
