<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationLogin extends FormRequest
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
            'no_kp' => ['required'],
            'password' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'no_kp.required' => "Sila Masukkan No Kad Pengenalan !",
            'password.required' => "Sila Masukkan Kata Laluan !",
        ];
    }
}
