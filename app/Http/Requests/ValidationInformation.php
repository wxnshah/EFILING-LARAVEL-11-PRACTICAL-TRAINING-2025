<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationInformation extends FormRequest
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
            'id_gender' => ['required'],
            'no_matrik' => ['required'],
            'tarikh_lapor' => ['required'],
            'id_course' => ['required'],
            'id_ipta' => ['required'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'id_gender' => "Sila Pilih Jantina !",
            'no_matrik' => "Sila Masukkan No Matrik !",
            'tarikh_lapor' => "Sila Masukkan Tarikh Lapor Diri !",
            'id_course' => "Sila Pilih Kursus !",
            'id_ipta' => "Sila Pilih IPTA / Universiti !",
        ];
    }
}
