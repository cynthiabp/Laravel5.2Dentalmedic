<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class CitaFormRequest extends Request
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
            'Idpaciente'=>'required',
            'Nombre'=>'alpha_spaces|max:30|min:4',
            'Fecha'=>'required|date|date_format:Y-m-d|after:today',
            'Horainicio'=>'required',
            'Horafin'=>'required',
            'Telefono'=>'max:18|min:7',
            'Descripcion'=>'required|alpha_spaces|max:1000|min:4',
               
               

        ];
    }
}
