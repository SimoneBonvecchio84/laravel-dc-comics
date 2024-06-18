<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'       => ['required', 'min:3', 'max:70'],
            'description' => ['min:10'],
            'price'       => ['required'],
            'series'      => ['required'],
            'type'        => ['required']
        ];
    }

    public function messages():array {
        return [
            'titel.required' => 'il titolo non può essere vuoto'
        ];
    }
}
