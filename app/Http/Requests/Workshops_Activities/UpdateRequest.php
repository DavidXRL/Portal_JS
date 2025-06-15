<?php

namespace App\Http\Requests\Workshops_Activities;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name_activity' => 'nullable|string|max:250',
            'description_activity' => 'required|string',
            'date_activity' => 'nullable|date',
            'time_activity' => 'nullable|date_format:H:i',
            'image_activity' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'workshop_id' => 'required|exists:workshops,id',
        ];
    }
}
