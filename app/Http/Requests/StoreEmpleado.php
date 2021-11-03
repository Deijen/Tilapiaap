<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_piscicultor' => 'min:0|required|integer',
            'Nombre' => 'required',
            'salario' => 'required|integer|min:0',
            'correo' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'correo.email' => 'Direccion de correo no valida.',
            'salario.integer' => 'Valor ingresado no numerico'
        ];
    }
}
