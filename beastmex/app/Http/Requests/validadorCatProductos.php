<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCatProductos extends FormRequest
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
            //Ecribimos las reglas de validación en el return
            'txtproductBrand' => 'required|not_in:#', // 'not_in:#' verifica que no sea el valor por defecto '#'
            'txtproductName' => 'required|string',
        ];
    }
}
