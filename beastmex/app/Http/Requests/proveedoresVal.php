<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proveedoresVal extends FormRequest
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
            'NombreNP' =>'required|alpha',
            'apellidoPaternoNP'=>'required|alpha',
            'apellidoMaternoNP'=>'required|alpha',
            'nombreEmpresaNP'=>'required|alpha', 
            'marcaNP'=>'required|alpha',
            'direccionNP'=>'required',
            'direccion2NP'=>'required',
            'codigoPostalNP'=>'required|numeric|min:4',
            'telefonoNP'=>'required|numeric|digits:10',
            'correoNP'=>'required|email',
        ];
    }
}
