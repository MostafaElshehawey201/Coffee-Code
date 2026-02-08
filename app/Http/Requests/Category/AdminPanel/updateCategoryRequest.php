<?php

namespace App\Http\Requests\Category\AdminPanel;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateCategoryRequest extends FormRequest
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
            "title_ar" => "nullable|string|max:255",
            "title_en" => "nullable|string|max:255",
            "body_ar"  => "nullable|string|max:1000",
            "body_en"  => "nullable|string|max:1000",
        ];
    }

    public function messages()
    {
        return [
            "title.string" => __('validation.titleCategory.string'),
            "title.max" => __('validation.titleCategory.max'),
            "body.string" => __('validation.bodyCategory.string'),
            "body.max" => __('validation.bodyCategory.max'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = [];
        foreach ($validator->errors()->getMessages() as $failed => $values) {
            $errors[$failed] = [
                "messages" => $values,
            ];
            break;
        }
        throw new HttpResponseException(
            response()->json([
                "success" => false,
                "data" => null,
                "errors" => $errors,
            ], 500)
        );
    }
}
