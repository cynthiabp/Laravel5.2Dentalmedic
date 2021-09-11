<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class CategoriaFormRequest extends Request
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
            'Nombre'=>'required|alpha_spaces|max:20|min:4',
            'ApellidoPaterno'=>'required|alpha_spaces|max:20|min:4',
            'ApellidoMaterno'=>'required|alpha_spaces|max:20|min:4',
            'FechaNacimiento'=>'required',
            'LugarNacimiento'=>'required|alpha_spaces|max:45|min:4',
            'Pais'=>'required|alpha_spaces|max:20|min:4',
            'Estado'=>'required|alpha_spaces|max:20|min:4',
            'Ciudad'=>'required|alpha_spaces|max:20|min:4',
            'CodigoPostal'=>'required|max:10|min:1',
            'Colonia'=>'required|alpha_spaces|max:20|min:4',
            'Calle'=>'required|alpha_spaces|max:20|min:4',
            'NumeroInte'=>'required|max:10|min:1',
            'NumeroExte'=>'required|max:10|min:1',
            'Celular'=>'max:11|min:1',
            'Lada'=>'max:10|min:1',
            'Telefono'=>'max:10|min:1',
            
        ];
    }
}
