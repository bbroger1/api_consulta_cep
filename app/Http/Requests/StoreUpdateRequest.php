<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
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
            'cep' => 'required|string|max:9|min:9|unique:addresses',
            'address' => 'required|string',
            'number' => 'required|string',
            'complement' => 'nullable',
            'neighboard' => 'required|string',
            'city' => 'required|string',
            'uf' => 'required|string|max:2|min:2'
        ];
    }

    public function messages()
    {
        return [
            'cep.required' => 'CEP é obrigatório.',
            'cep.max' => 'O CEP precisa ter o formato 00000-000',
            'cep.min' => 'O CEP precisa ter o formato 00000-000',
            'address.required' => 'Logradouro é obrigatório',
            'number.required' => 'O número é obrigatório.',
            'neighboard.required' => 'Bairro é obrigatório',
            'city.required' => 'Cidade é obrigatório.',
            'uf.required' => 'UF é obrigatório.',
            'uf.max' => 'A UF deve ser no formato SP',
            'uf.min' => 'A UF deve ser no formato SP',
        ];
    }
}
