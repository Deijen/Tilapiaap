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
            'id_piscicultor' => 'required|integer',
            'Nombre' => 'required',
            'salario' => 'required|integer',
            'correo' => 'required|email'
        ];
    }

    public function messages()
    {
        return[
            'valor.required' => 'Campo Requerido',
            'valor.integer' => 'Valor ingresado no numerico'
        ];
    }
}
