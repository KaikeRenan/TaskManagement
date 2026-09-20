<?php

namespace Modules\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "name" => "sometimes|required|string|max:255",
            "project_id" => 'required|integer|exists:projects,id',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',
            'name.max' => 'Name may not be greater than 255 characters.',

            'project_id.required' => 'Project ID is required.',
            'project_id.integer' => 'Project ID must be an integer.',
            'project_id.exists' => 'Project ID must exist in the projects table.',
        ];
    }
}
