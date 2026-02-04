<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;
use App\Repositories\Auth\AuthRepository;
use App\Exceptions\Auth\OtpNotFoundException;
use App\Exceptions\Auth\UserNotFoundException;
use App\Exceptions\Auth\PasswordIsErrorException;
use App\Exceptions\Auth\EmailAlreadyUsedException;
use App\Exceptions\Auth\PhoneAlreadyUsedException;

class AuthService
{
    public function __construct(protected AuthRepository $authRepository) {}

    public function register($DTO)
    {
        $email = $this->authRepository->whereEmail($DTO->email);
        if ($email) {
            throw new EmailAlreadyUsedException();
        }
        $phone = $this->authRepository->wherePhone($DTO->phone);
        if ($phone) {
            throw new PhoneAlreadyUsedException(__('validation.phone.used'));
        }
        return $this->authRepository->create($DTO);
    }

    public function login($DTO)
    {
        $email = $this->authRepository->whereEmail($DTO->login);
        $phone = $this->authRepository->wherePhone($DTO->login);
        if (!$email && !$phone) {
            throw new UserNotFoundException();
        }
        $user = $this->authRepository->first($DTO);
        $password = $this->authRepository->Password($user, $DTO);
        if ($password == false) {
            throw new PasswordIsErrorException();
        }
        return $user->createToken('auth_token')->plainTextToken;
    }
    public function forgetPassword($DTO){
        $user = $this->authRepository->whereLogin($DTO);
        if(!$user){
            throw new UserNotFoundException();
        }
        $otp = rand(100000 , 999999);
        $this->authRepository->createOtp($otp , $user);
        return $otp;
    }

    public function checkOtp($checkOtp){
        $otp = $this->authRepository->whereOtp($checkOtp);
        if(!$otp){
            throw new OtpNotFoundException();
        }
        $user = $this->authRepository->finUserOtp($otp);
        return $user->createToken('auth_token')->plainTextToken;
        
    }

    public function resetPassword($DTOPassword){
        $user = Auth::guard('sanctum')->user();
        return $this->authRepository->resetPassword($user , $DTOPassword->password);
    }
}
