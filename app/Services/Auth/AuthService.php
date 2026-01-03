<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthCheckOtpForgetPasswordInterface;
use App\Interfaces\Auth\AuthForgetPasswordInterface;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use App\Interfaces\Auth\AuthResetPasswordInterface;
use PharIo\Manifest\Author;

class AuthService implements AuthInterface ,AuthLoginInterface  , AuthForgetPasswordInterface 
, AuthCheckOtpForgetPasswordInterface , AuthResetPasswordInterface
{
    public $sendDataRegisterFromServiceToRepositoryByInterface;
    public $sendDataLoginFromServiceToRepositoryByInterface;
    public $sendDataForgetPasswordFromServiceToRepository;
    public $sendDataCheckOtpForgetPasswordFromServiceToRepositoryByInterface;
    public $sendDataResetPasswordFromServiceToRepositoryByInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(AuthInterface $authInterface , AuthLoginInterface $authLoginInterface 
    , AuthForgetPasswordInterface $authForgetPasswordInterface , AuthCheckOtpForgetPasswordInterface $authCheckOtpForgetPasswordInterface ,
     AuthResetPasswordInterface $authResetPasswordInterface)
    {
        $this->sendDataRegisterFromServiceToRepositoryByInterface = $authInterface;
        $this->sendDataLoginFromServiceToRepositoryByInterface = $authLoginInterface;
        $this->sendDataForgetPasswordFromServiceToRepository = $authForgetPasswordInterface;
        $this->sendDataCheckOtpForgetPasswordFromServiceToRepositoryByInterface = $authCheckOtpForgetPasswordInterface;
        $this->sendDataResetPasswordFromServiceToRepositoryByInterface = $authResetPasswordInterface;
    }
    public function methodAuthInterface($validationAuthRequest){
        $returnDataRegisterFromRepository = $this->sendDataRegisterFromServiceToRepositoryByInterface->methodAuthInterface($validationAuthRequest);
        return $returnDataRegisterFromRepository;
    }

    public function methodLoginInterface($validationDataRequest){
        $returnDataLoginFromService = $this->sendDataLoginFromServiceToRepositoryByInterface->methodLoginInterface($validationDataRequest);
        $token = $returnDataLoginFromService->createToken('auth-token')->plainTextToken;
        return $token;
    }

    public function methodForgetPasswordInterface($validationForgetPasswordRequest){
        $returnDataForgetPasswordFromService = $this->sendDataForgetPasswordFromServiceToRepository->methodForgetPasswordInterface($validationForgetPasswordRequest); 
        return $returnDataForgetPasswordFromService;
    }
    public function methodCheckOtpForgetPassword($validationDataCheckOtpForgetPassword){
        $returnDataForgetPasswordFromRepository = $this->sendDataCheckOtpForgetPasswordFromServiceToRepositoryByInterface->methodCheckOtpForgetPassword($validationDataCheckOtpForgetPassword);
        return $returnDataForgetPasswordFromRepository;
    }

    public function methodResetPasswordInterface($validationAuthResetPassword){
        $returnDataResetPasswordFromRepository = $this->sendDataResetPasswordFromServiceToRepositoryByInterface->methodResetPasswordInterface($validationAuthResetPassword);
        $returnDataResetPasswordFromRepository->currentAccessToken()->delete();
        return $returnDataResetPasswordFromRepository;
    }
}
