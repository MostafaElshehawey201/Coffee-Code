<?php

namespace App\Http\Requests\Menu\AdminPanel;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMenuRequest extends FormRequest
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
            "title_ar" => "required|string|max:255",
            "title_en" => "required|string|max:255",
            "body_ar" => "required|string|max:1000",
            "body_en" => "required|string|max:1000",
        ];
    }

    public function messages()
    {
        return [
            "title_ar.required" => __('validation.menu.required'),
            "title_ar.string" =>  __('validation.menu.string'),
            "title_ar.max" => __('validation.menu.max'),
            "title_en.required" => __('validation.menu.required'),
            "title_en.string" =>  __('validation.menu.string'),
            "title_en.max" => __('validation.menu.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        foreach ($validator->errors()->getMessages() as $failed => $messages) {
            $errors[$failed] = [
                "errors" => $messages,
            ];
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
