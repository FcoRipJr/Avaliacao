<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PessoaRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'data_nasc' => 'date_format:d/m/Y',
            'nacionalidade' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'cpf.required' => 'O campo cpf é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'data_nasc.required' => 'O campo data da nascimento é obrigatório',
            'nacionalidade.required' => 'O campo nacionalidade é obrigatório'
        ];
    }
}
