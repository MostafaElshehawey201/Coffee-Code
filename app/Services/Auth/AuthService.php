<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthForgetPasswordInterface;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use PharIo\Manifest\Author;

class AuthService implements AuthInterface ,AuthLoginInterface  , AuthForgetPasswordInterface
{
    public $sendDataRegisterFromServiceToRepositoryByInterface;
    public $sendDataLoginFromServiceToRepositoryByInterface;
    public $sendDataForgetPasswordFromServiceToRepository;
    /**
     * Create a new class instance.
     */
    public function __construct(AuthInterface $authInterface , AuthLoginInterface $authLoginInterface , AuthForgetPasswordInterface $authForgetPasswordInterface)
    {
        $this->sendDataRegisterFromServiceToRepositoryByInterface = $authInterface;
        $this->sendDataLoginFromServiceToRepositoryByInterface = $authLoginInterface;
        $this->sendDataForgetPasswordFromServiceToRepository = $authForgetPasswordInterface;
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
}
