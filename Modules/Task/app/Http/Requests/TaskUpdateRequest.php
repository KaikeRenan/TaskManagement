<?php

namespace Modules\Task\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string|max:255',
            'status' => 'sometimes|required|string|max:255',
            'priority' => 'sometimes|required|string|max:255',
            'due_date' => 'sometimes|nullable|date',
            'project_id' => 'sometimes|required|integer|exists:projects,id',
            'category_id' => 'sometimes|nullable|integer|exists:categories,id', // category api not yet implemented
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

            'due_date.date' => 'Due_date must be a date.',

            'project_id.required' => 'Project ID is required.',
            'project_id.integer' => 'Project ID must be an integer.',
            'project_id.exists' => 'Project ID must exist in the projects table.',

            'category_id.integer' => 'Category ID must be an integer.',
            'category_id.exists' => 'Category ID must exist in the categories table.',
        ];
    }
}
