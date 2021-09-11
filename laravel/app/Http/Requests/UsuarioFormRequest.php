<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class UsuarioFormRequest extends Request
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

        if ($this->method()== 'PATCH'){
            return [
            'name' => 'required|alpha_spaces|max:255',
            'email' => 'required|email|max:255|exists:users',
            'password' => 'required|min:6|confirmed', 
            'nivel' => 'required|numeric',
                      
        ];

        }else{
             return [
            'name' => 'required|alpha_spaces|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed', 
            'nivel' => 'required|numeric',  
                    
        ];

        }

       
    }
}
