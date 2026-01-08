<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class userUpdateProfileRequest extends FormRequest
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
            "name" => 'nullable|string|min:3|max:255',
            "email" => 'nullable|email',
            'phone' => 'nullable|digits:11',
            "password" => 'nullable|string|min:6|max:255',
            "file" => "nullable|image|mimes:png,jpg,phg,gif,jpeg"
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
            'image.image' => __('validation.file.image'),
            "image.mimes" => __('validation.file.mimes'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        foreach ($validator->errors()->getMessages() as $failed => $messages) {
            $errors[$failed][] = [
                "messages" => $messages[0],
            ];
            break;
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
