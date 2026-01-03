<?php

namespace App\Http\Requests\Auth;

use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthResetPasswordRequest extends FormRequest
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
            "password" => 'required|min:6|max:255'
        ];
    }

    public function messages(){
        return [
            "password.required" => __('validation.password.required'),
            "password.min" => __('validation.password.min'),
            "password.max" => __('validation.password.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [] ;
        foreach($validator->errors()->getMessages() as $failed => $messages){
            $errors[$failed][]=[
                "message" => $messages[0],
            ];
            break;
        }
        throw new HttpResponseException(
            response()->json([
                "success" => false ,
                "data" => null ,
                "errors" => $errors
            ],422)
        );
    }
}
