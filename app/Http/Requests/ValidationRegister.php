<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRegister extends FormRequest
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
            'name' => ['required'],
            'no_kp' => ['required', 'unique:users,no_kp'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Sila Masukkan Nama Penuh !",
            'no_kp.required' => "Sila Masukkan No Kad Pengenalan !",
            'no_kp.unique' => "No Kad Pengenalan Telah Didaftarkan !",
            'email.required' => "Sila Masukkan Email !",
            'email.email' => "Sila Masukkan Email Yang Sah !",
            'email.unique' => "Email Telah Didaftarkan !",
            'password.required' => "Sila Masukkan Kata Laluan !",
            'password.min' => "Sila Masukkan Kata Laluan Sekurang-Kurangnya 5 Aksara !",
        ];
    }
}
