<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthInterface;
use PharIo\Manifest\Author;

class AuthService implements AuthInterface
{
    public $sendDataRegisterFromServiceToRepositoryByInterface;
    /**
     * Create a new class instance.
     */
    public function __construct(AuthInterface $authInterface)
    {
        $this->sendDataRegisterFromServiceToRepositoryByInterface = $authInterface;
    }
    public function methodAuthInterface($validationAuthRequest){
        $returnDataRegisterFromRepository = $this->sendDataRegisterFromServiceToRepositoryByInterface->methodAuthInterface($validationAuthRequest);
        return $returnDataRegisterFromRepository;
    }
}
