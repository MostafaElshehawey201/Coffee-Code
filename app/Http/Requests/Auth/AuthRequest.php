<?php

namespace App\Http\Requests\Auth;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class AuthRequest extends FormRequest
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
            "name" => 'required|string|min:3|max:255',
            "email" => 'required|email',
            'phone' => 'required|digits:11',
            "password" => 'required|string|min:6|max:255',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => __('validation.name.required'),
            "name.string" => __('validation.name.string'),
            "name.min" => __('validation.name.min'),
            "name.max" => __('validation.name.max'),
            "email.required" => __('validation.email.required'),
            "email.email" => __('validation.email.email'),
            "email.exists" => __('validation.email.exists'),
            "phone.required" => __('validation.phone.required'),
            "phone.digits" => __('validation.phone.digits'),
            "phone.exists" => __('validation.phone.exists'),
            "password.required" => __('validation.password.required'),
            "password.string" => __('validation.password.string'),
            "password.min" => __('validation.password.min'),
            "password.max" => __('validation.password.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        $validationMassages = Lang::get('validation');
        foreach ($validator->errors()->getMessages() as $field => $messages) {
            foreach ($messages as $message) {
                $errors[$field][] = [
                    'message' => $message
                ];
                break;
            }
        }
        if (is_array($validationMassages)) {
            foreach ($validationMassages as $value) {
                if (is_array($value) && isset($value['messages']) && $value['messages'] === $message) {
                    $foundMessage = $value['messages'];
                    $errors[$field][] = [
                        "message" => $foundMessage
                    ];
                }
            }
        }
        throw new HttpResponseException(
            response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors
            ])
        );
    }
}
