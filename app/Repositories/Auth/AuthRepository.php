<?php

namespace App\Repositories\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\Auth\AuthInterface;

class AuthRepository implements AuthInterface
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
}
