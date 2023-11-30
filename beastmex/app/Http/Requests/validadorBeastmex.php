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
            'NombreProducto' =>'required|alpha',
            'NombreMarca'=>'required|alpha',
            'CostoProducto'=>'required|numeric',
            'PrecioVenta'=>'required|numeric',
            /* 'Foto2'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048', */
            
            
        ];
    }
}
