<?php

namespace App\Http\Requests\Workshops_Activities;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name_activity' => 'required|string|max:250',
            'description_activity' => 'required|string',
            'date_activity' => 'required|date',
            'time_activity' => 'required|date_format:H:i',
            'image_activity' => 'required|image|mimes:jpeg,png,jpg,gif',
            'workshop_id' => 'required|exists:workshops,id',
        ];
    }
}
