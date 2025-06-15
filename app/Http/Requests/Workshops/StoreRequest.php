<?php

namespace App\Http\Requests\Workshops;

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
            'name_workshop' => 'required|string|max:255',
            'description_workshop' => 'required|string|max:1000',
            'date_workshop' => 'required|date',
            'image_workshop' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
