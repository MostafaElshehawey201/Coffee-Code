<?php

namespace App\Repositories\Auth;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function __construct() {}

    public function whereEmail($email)
    {
        return User::where('email', $email)->exists();
    }
    public function wherePhone($phone)
    {
        return User::where('phone', $phone)->exists();
    }
    public function create($DTO)
    {
        return User::create([
            "name" => $DTO->name,
            "email" => $DTO->email,
            "phone" => $DTO->phone,
            "password" => Hash::make($DTO->password),
        ]);
    }

    public function first($DTO)
    {
        return User::where(function ($q) use ($DTO) {
            $q->where('email', $DTO->login)
                ->orWhere('phone', $DTO->login);
        })->first();
    }
    public function Password($user, $DTO)
    {
        return Hash::check($DTO->password, $user->password);
    }
    public function whereLogin($DTO)
    {
        return User::where(function ($q) use ($DTO) {
            $q->where('email', $DTO->login)
                ->orWhere('phone', $DTO->login);
        })->first();
    }
    public function createOtp($otp, $user)
    {
        Otp::create([
            "otp" => $otp,
            "expire_at" => now()->addMinutes(2),
            "user_id" => $user->id,
        ]);
    }

    public function whereOtp($otp)
    {
        return Otp::where('otp', $otp)->first();
    }
    public function finUserOtp($otp)
    {
        return User::where('id', $otp->user_id)->first();
    }

    public function resetPassword($user, $DTOPassword)
    {
        return $user->update([
            "password" => Hash::make($DTOPassword)
        ]);
    }
}
