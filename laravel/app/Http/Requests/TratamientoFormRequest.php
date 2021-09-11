<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class TratamientoFormRequest extends Request
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
'Nombre'=>'required|alpha_spaces|max:50|min:4',
'Precio'=>'required',


            
        ];
    }
}
