<?php

namespace App\Http\Requests\Auth;

use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Lang;

class AuthCheckOtpForgetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'otp' => 'required|digits:6'
        ];
    }

    public function messages()
    {
        return [
            'otp.required' => __('validation.otp.required'),
            'otp.digits' => __('validation.otp.digits'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        // $validateMessages = Lang::get('validation');
        foreach ($validator->errors()->getMessages() as $failed => $messages) {
                $errors[$failed]= [
                    "message" => $messages,
                ];
                break;
        }
        throw new HttpResponseException(
            response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors
            ], 422)
        );
    }
}
