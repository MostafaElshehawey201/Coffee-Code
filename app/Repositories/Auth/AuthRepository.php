<?php

namespace App\Repositories\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;

class AuthRepository implements AuthInterface, AuthLoginInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function methodAuthInterface($validationAuthRequest)
    {


        $user = User::where('email', $validationAuthRequest['email'])->first();
        if ($user) {
            throw new Exception(__('validation.email.used'));
        }
        $user = User::where('phone', $validationAuthRequest['phone'])->first();
        if ($user) {
            throw new Exception(__('validation.phone.used'));
        }
        $user = User::create([
            "name" => $validationAuthRequest['name'],
            "email" => $validationAuthRequest['email'],
            "phone" => $validationAuthRequest['phone'],
            "password" => Hash::make($validationAuthRequest['password']),
        ]);
        return $user;
    }

    public function methodLoginInterface($validationDataRequest)
    {
        $user = User::where(function ($query) use ($validationDataRequest) {
            $query->where('email', $validationDataRequest['login'])
                ->orWhere('phone', $validationDataRequest['login']);
        })->first();

        if (!$user) {
            throw new Exception(__('messages.noData'));   
        }

        if (!Hash::check($validationDataRequest['password'], $user->password)) {
            throw new Exception(__('messages.noPassword')); 
        }

        return $user;
    }
}
