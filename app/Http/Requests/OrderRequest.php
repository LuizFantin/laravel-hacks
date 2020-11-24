<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'status' => 'required',
            'paid' => 'required',
            'track_code' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'status.required' => 'Selecione um Status da order',
            'paid.required' => 'Selecione um status de pagamento',
            'track_code.required' => 'Digite um track code',
            'track_code.min' => 'Track code curto demais'
        ];
    }
}
