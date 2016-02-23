<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PagamentoRequest extends Request
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
            'data_pagto'  => 'required',
            'hora_pagto'  => 'required',
            'terminal_pagto'=> 'required',
            'cod_barras_pagto'=>'required'
        ];
    }
}
