<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AlunoRequest extends Request
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
            'turma'    => 'required',['required'=>'O nome da turma é obrigatório'],
            'nome'     => 'required|min:5',['required'=>'O nome do Aluno é obrigatório', 'min'=>'O nome do aluno não poder ter menos de 5 caracteres'],
            'cpf'      => 'required'
        ];
    }
}
