<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthCheckOtpForgetPasswordInterface;
use App\Interfaces\Auth\AuthForgetPasswordInterface;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use PharIo\Manifest\Author;

class AuthService implements AuthInterface ,AuthLoginInterface  , AuthForgetPasswordInterface , AuthCheckOtpForgetPasswordInterface
{
    public $sendDataRegisterFromServiceToRepositoryByInterface;
    public $sendDataLoginFromServiceToRepositoryByInterface;
    public $sendDataForgetPasswordFromServiceToRepository;
    public $sendDataCheckOtpForgetPasswordFromServiceToRepositoryByInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(AuthInterface $authInterface , AuthLoginInterface $authLoginInterface 
    , AuthForgetPasswordInterface $authForgetPasswordInterface , AuthCheckOtpForgetPasswordInterface $authCheckOtpForgetPasswordInterface)
    {
        $this->sendDataRegisterFromServiceToRepositoryByInterface = $authInterface;
        $this->sendDataLoginFromServiceToRepositoryByInterface = $authLoginInterface;
        $this->sendDataForgetPasswordFromServiceToRepository = $authForgetPasswordInterface;
        $this->sendDataCheckOtpForgetPasswordFromServiceToRepositoryByInterface = $authCheckOtpForgetPasswordInterface;
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
}
