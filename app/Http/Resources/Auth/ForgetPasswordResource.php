<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForgetPasswordResource extends JsonResource
{
    protected $otp;

    public function __construct( $otp)
    {
        $this->otp = $otp;
    }

    public function toArray(Request $request): array
    {
        return [
                "otp" => $this->otp,
        ];
    }
}
