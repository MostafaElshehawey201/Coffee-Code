<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Auth;
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

    public function profile(){
        return Auth::guard('sanctum')->user();
    }
    


    public function methodUpdateProfileInterface($userUpdateProfileRequest , $validationUserUpdatedProfile){
        $returnDataUpdateUserFromRepository = $this->sendDataUpdatedUserFromServiceToRepositoryByInterface->methodUpdateProfileInterface($userUpdateProfileRequest , $validationUserUpdatedProfile);
        return $returnDataUpdateUserFromRepository;
    }
}
