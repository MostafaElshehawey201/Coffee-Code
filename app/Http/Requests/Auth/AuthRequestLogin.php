<?php

namespace App\Http\Requests\Auth;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class AuthRequestLogin extends FormRequest
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
            "login" => 'required',
            "password" => 'required|string|min:6|max:255'
        ];
    }

    public function messages()
    {
        return [
            "login.required" => __('validation.login.required'),
            "password.required" => __('validation.password.required'),
            "password.string" => __('validation.password.string'),
            "password.min" => __('validation.password.min'),
            "password.max" => __('validation.password.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        $validationMessages = Lang::get('validation');
        foreach ($validator->errors()->getMessages() as $field => $messages) {
            foreach ($messages as $message) {
                $errors[$field][] = [
                    "message" => $message,
                ];
                break;
            }
        }
        if (is_array($validationMessages)) {
            foreach ($validationMessages as $value) {
                if (is_array($value) && isset($value['messages']) && $value['messages'] === $message) {
                    $errors[$field][] = [
                        "message" => $value['messages'],
                    ];
                }
            }
        }
        throw new HttpResponseException(
            response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors,
            ], 422)
        );
    }
}
