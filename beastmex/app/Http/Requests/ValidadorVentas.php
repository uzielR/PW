<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorVentas extends FormRequest
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
            //
              //
              'NombreCliente' =>'required|alpha',
              'ApellidoPaterno'=>'required|alpha',
              'ApellidoMaterno'=>'required|alpha',
              'NombreProducto'=>'required|alpha',
              'Marca5'=>'required|alpha',
              'Cantidad5'=>'required|numeric',
              'Precio5'=>'required|numeric',
        ];
    }
}
