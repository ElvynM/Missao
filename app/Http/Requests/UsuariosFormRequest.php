<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required','min:3'],
            'email' => ['required', 'unique:usuarios,email'],
            'telefone' => ['unique:usuarios,telefone,except,id'],
            'endereco' => ['required'],
            'cidade' => ['required'],
            // 'complemento' => ['required'],
            // 'dt_nascimento' => ['unique:usuarios,dt_nascimento'],
            // 'dt_batismo' => ['unique:usuarios,dt_batismo'],
            // 'dt_conversao' => ['unique:usuarios,dt_conversao'],
            // 'genero' => ['required','unique:usuarios,genero'],
        ];
    }

    public function messages()
    {
        return[
            'nome.*' => 'O campo nome é obrigatório e precisa de pelo menos 3 caracteres',
            'email' => 'O campo e-mail é obrigatório',
            'telefone' => 'O campo telefone é obrigatório',
            'genero' => 'O campo genero é obrigatório',
        ];
    }
}
