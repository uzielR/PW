<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorMgrRegistro extends FormRequest
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
            'txtAreaUsuario' => 'required|not_in:#', // 'not_in:#' verifica que no sea el valor por defecto '#'
            'txtApellidoPaternoUsuario' => 'required|alpha',
            'txtApellidoMaternoUser' => 'required|alpha',
            'txtNombreUsuario' => 'required|string',
            'txtemailUsuario' => 'required|email',
            'txtposicionUsuario' => 'required|string',
            'txtpasswordUsuario' => 'required|min:6|confirmed',
            'txtpasswordUsuario_confirmation' => 'required|min:6',
        ];
    }
}
