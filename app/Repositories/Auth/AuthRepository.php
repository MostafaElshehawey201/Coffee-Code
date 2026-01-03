<?php

namespace App\Repositories\Auth;

use Exception;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\Auth\AuthInterface;
use App\Interfaces\Auth\AuthLoginInterface;
use App\Interfaces\Auth\AuthResetPasswordInterface;
use App\Interfaces\Auth\AuthForgetPasswordInterface;
use App\Interfaces\Auth\AuthCheckOtpForgetPasswordInterface;

class AuthRepository implements AuthInterface, AuthLoginInterface, AuthForgetPasswordInterface,
 AuthCheckOtpForgetPasswordInterface , AuthResetPasswordInterface 
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

    public function methodForgetPasswordInterface($validationForgetPasswordRequest)
    {
        $user = User::where(function ($query) use ($validationForgetPasswordRequest) {
            $query->where('email', $validationForgetPasswordRequest['login'])
                ->orWhere('phone', $validationForgetPasswordRequest['login']);
        })->first();

        if (!$user) {
            throw new Exception(__('messages.noPassword'));
        }
        $otp = rand(100000, 999999);
        Otp::create([
            "otp" => $otp,
            "expire_at" => now()->addMinutes(2),
            "user_id" => $user->id,
        ]);
        return $otp;
    }

    public function methodCheckOtpForgetPassword($validationDataCheckOtpForgetPassword) {
        $otp = Otp::where('otp' , $validationDataCheckOtpForgetPassword['otp'])->first();
        if(!$otp){
            throw new Exception(__('validation.otp.notFound'));
        }
        if($otp->is_used == 1 ){
            $otp->delete();
            throw new Exception(__('validation.otp.used'));
        }
        if($otp->expire_at < now()){
            $otp->delete();
            throw new Exception(__('validation.otp.expire_at'));
        }
        $user = $otp->user;
        $token = $user->createToken('auth-token')->plainTextToken;
        $otp->update([
            "is_used" => 1
        ]);
        return $token;
    }

    public function methodResetPasswordInterface($validationAuthResetPassword){
        $user = Auth::user();
        /** @var \App\Models\User $user */
        $user->update([
            "password" => $validationAuthResetPassword['password'],
        ]);
        return $user;
    }
}
