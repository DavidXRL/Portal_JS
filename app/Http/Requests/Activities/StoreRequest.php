<?php

namespace App\Http\Requests\Activities;

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
            'name_act' => 'required|string|max:255',
            'description_activity' => 'required|string|max:1000',
            'date_activity' => 'required|date',
            'image_activity' => 'nullable|image|mimes:jpeg,png,jpg,gif',

        ];
    }
}
