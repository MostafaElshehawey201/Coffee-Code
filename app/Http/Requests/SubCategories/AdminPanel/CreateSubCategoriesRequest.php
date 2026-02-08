<?php

namespace App\Http\Requests\SubCategories\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateSubCategoriesRequest extends FormRequest
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
            "title_ar.required" => __('validation.title_ar.required'),
            "title_ar.string" => __('validation.title_ar.string'),
            "title_ar.max" => __('validation.title_ar.max'),
            "title_en.required" => __('validation.title_en.required'),
            "title_en.string" => __('validation.title_en.string'),
            "title_en.max" => __('validation.title_en.max'),
            "body_ar.required" => __('validation.body_ar.required'),
            "body_ar.string" => __('validation.body_ar.string'),
            "body_ar.max" => __('validation.body_ar.max'),
            "body_en.required" => __('validation.body_en.required'),
            "body_en.string" => __('validation.body_en.string'),
            "body_en.max" => __('validation.body_en.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        foreach ($validator->errors()->getMessages() as $failed => $messages) {
            $errors[$failed] = [
                "messages" => $messages,
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
