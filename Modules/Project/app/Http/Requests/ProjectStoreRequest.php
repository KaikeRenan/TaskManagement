<?php

namespace Modules\Project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
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

            'description.string' => 'Description must be a string.',
            'description.max' => 'Description may not be greater than 255 characters.',

            'user_id.required' => 'User ID is required.',
            'user_id.integer' => 'User ID must be an integer.',
            'user_id.exists' => 'User ID must exist in the users table.',
        ];
    }
}
