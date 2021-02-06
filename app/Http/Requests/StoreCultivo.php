<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCultivo extends FormRequest
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
            'cantidadTilapias' => 'required|integer|min:0',
            'costosMantenimiento' => 'required|integer|min:0',
            'intensidad' => 'required',
            'estado' => 'required',
            'oxigeno' => 'required|integer|min:0',
            'temperatura' => 'required|integer|min:1',
            'ph' => 'required|integer|min:0',
            'amonio' => 'required|integer|min:0',
            'nitritos' => 'required|integer|min:0',
            'dioxidoCarbono' => 'required|integer|min:0',
            'fosfatos' => 'required|integer|min:0',
            'cloruros' => 'required|integer|min:0',
            'sulfatos' => 'required|integer|min:0'
        ];
    }

    public function messages()
    {
        return[
            'costosMantenimiento.min' => 'Los costos de mantenimiento deben ser al menos 1',
            'cantidadTilapias.min' => 'La cantidad de tilapias debe ser al menos 0'
        ];
    }

}
