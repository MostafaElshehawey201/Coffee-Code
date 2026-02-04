<?php

namespace App\Http\Controllers\Auth;

use App\DTO\CheckOtpPasswordDataTransferObject;
use App\DTO\ForgetPasswordDataTransferObject;
use App\Dto\LoginDataTransferObject;
use Exception;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use App\Interfaces\Auth\AuthInterface;
use App\DTO\RegisterDataTransferObject;
use App\DTO\ResetPasswordDataTransferObject;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\AuthRequestLogin;
use App\Http\Resources\Auth\RegisterResource;
use App\Exceptions\Auth\EmailAlreadyUsedException;
use App\Exceptions\Auth\OtpNotFoundException;
use App\Exceptions\Auth\PhoneAlreadyUsedException;
use App\Exceptions\Auth\UserNotFoundException;
use App\Http\Requests\Auth\AuthResetPasswordRequest;
use App\Http\Requests\Auth\AuthForgetPasswordRequest;
use App\Http\Requests\Auth\AuthCheckOtpForgetPasswordRequest;
use App\Http\Resources\Auth\ForgetPasswordResource;

class AuthController extends Controller
{
    use ApiResponse;

    public function __construct(protected AuthService $auth_service) {}


    public function register(AuthRequest $authRequest)
    {
        try {
            $validationAuthRequest = $authRequest->validated();
            $DTO = new RegisterDataTransferObject($validationAuthRequest);
            $userCreated = $this->auth_service->register($DTO);
            $user = app()->make(RegisterResource::class, ['user' => $userCreated]);
            return $this->success($user, 201);
        } catch (EmailAlreadyUsedException | PhoneAlreadyUsedException $e) {
            return $this->error($e->getMessage(), 422);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function login(AuthRequestLogin $authRequestLogin)
    {
        try {
            $validationLoginRequest = $authRequestLogin->validated();
            $DTO = app()->make(LoginDataTransferObject::class, ['data' => $validationLoginRequest]);
            $token = $this->auth_service->login($DTO);
            return $this->success($token, 200);
        } catch (UserNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function forgetPassword(AuthForgetPasswordRequest $authForgetPasswordRequest)
    {
        try {
            $validation = $authForgetPasswordRequest->validated();
            $DTO = app()->make(ForgetPasswordDataTransferObject::class, ['login' => $validation]);
            $otp = $this->auth_service->forgetPassword($DTO);
            $otpForgetPassword = new ForgetPasswordResource($otp);
            return $this->success($otpForgetPassword, 200);
        } catch (UserNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }


    public function checkOtp(AuthCheckOtpForgetPasswordRequest $authCheckOtpForgetPasswordRequest)
    {
        try {
            $validation = $authCheckOtpForgetPasswordRequest->validated();
            $DTO = app()->make(CheckOtpPasswordDataTransferObject::class, ['checkOtp' => $validation]);
            $token = $this->auth_service->checkOtp($DTO->checkOtp);
            return $this->success($token, 200);
        } catch (OtpNotFoundException $e) {
            return $this->error($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function resetPassword(AuthResetPasswordRequest $authResetPasswordRequest)
    {
        try {
            $validation = $authResetPasswordRequest->validated();
            $DTOPassword = app()->make(ResetPasswordDataTransferObject::class, ['password' => $validation]);
            $passwordUpdated = $this->auth_service->resetPassword($DTOPassword);
            if ($passwordUpdated == true) {
                return $this->success(__('validation.password.updated'), 200);
            }
        } catch (Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }
}
