<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCompras extends FormRequest
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
            'Empresa'=>'required|alpha',
            'DireccionEmpresa'=>'required|alpha',
            'Dirrecion'=>'required',
            'Condado'=>'required',
            'Codigopostal'=>'required|numeric|min:4',
            'Telefono'=>'required|numeric|min:10',
            'Empresa1'=>'required|alpha',
            'DireccionEmpresa1'=>'required|alpha',
            'Dirrecion1'=>'required',
            'Condado1'=>'required',
            'Codigopostal1'=>'required|numeric|min:4',
            'Telefono1'=>'required|numeric|min:10'
        ];
    }
}
