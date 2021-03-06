<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TurmaRequest extends Request
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
            //
            'polo' => 'required',
            'curso'      =>'required',
            'nome'       =>'required|min:5',
            'data_inicio'=>'required'
        ];
    }
}
