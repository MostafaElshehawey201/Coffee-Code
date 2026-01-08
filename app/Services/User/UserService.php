<?php

namespace App\Services\User;

use App\Interfaces\User\userUpdateProfileInterface;

class UserService implements userUpdateProfileInterface
{
    /**
     * Create a new class instance.
     */
    public $sendDataUpdatedUserFromServiceToRepositoryByInterface;
    public function __construct(userUpdateProfileInterface $userUpdateProfileInterface)
    {
        $this->sendDataUpdatedUserFromServiceToRepositoryByInterface = $userUpdateProfileInterface;
    }

    public function methodUpdateProfileInterface($userUpdateProfileRequest , $validationUserUpdatedProfile){
        $returnDataUpdateUserFromRepository = $this->sendDataUpdatedUserFromServiceToRepositoryByInterface->methodUpdateProfileInterface($userUpdateProfileRequest , $validationUserUpdatedProfile);
        return $returnDataUpdateUserFromRepository;
    }
}
