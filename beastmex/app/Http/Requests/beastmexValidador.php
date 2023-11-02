<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class beastmexValidador extends FormRequest
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
            'Nombre'=>'required',
            'Marca'=>'required',
            'Cantidad'=>'required|numeric',
            'Costo'=>'required|numeric',
            'Precio'=>'required|numeric',
            'Fecha_ingreso'=>'required|date',
            'foto'=>'required'
            
        ];
    }
}
