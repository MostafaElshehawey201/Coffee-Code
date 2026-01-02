<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use PharIo\Manifest\Author;

class AuthService implements AuthInterface ,AuthLoginInterface 
{
    public $sendDataRegisterFromServiceToRepositoryByInterface;
    public $sendDataLoginFromServiceToRepositoryByInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(AuthInterface $authInterface , AuthLoginInterface $authLoginInterface)
    {
        $this->sendDataRegisterFromServiceToRepositoryByInterface = $authInterface;
        $this->sendDataLoginFromServiceToRepositoryByInterface = $authLoginInterface;
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
}
