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
            'image' => ['mimes:png,jpg,jpeg'],
            'nama_fail' => ['mimes:pdf,doc,docx,ppt,pptx,xls,xlsx'],
            'id_department' => ['required'],
            'tarikh_fail' => ['required'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'image.mimes' => "Hanya Masukkan Jenis Fail Format (.png, .jpg, .jpeg) Sahaja !",
            'nama_fail.mimes' => "Hanya Masukkan Jenis Fail Format (.pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx) Sahaja !",
            'id_department.required' => "Sila Pilih Jabatan !",
            'tarikh_fail' => "Sila Masukkan Tarikh Serah Fail !",
        ];
    }
}
