<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTask extends FormRequest
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
            'new-task' => 'string|required',
        ];
    }

    public function messages(): array
    {
        return [
            'new-task' => 'You didn\'t enter a new task',
        ];
    }
}
