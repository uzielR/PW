<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBeastmex extends FormRequest
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
            'NombreProductoPN' =>'required|alpha',
            'NombreMarcaNP'=>'required|alpha',
            'CostoProductoPN'=>'required|numeric',
            'FechaIngresoPN'=>'required',
            'PrecioVentaPN'=>'required|numeric',
            'ImagenProducto'=>'required'
            /* 'Foto2'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048', */
            
            
        ];
    }
}
