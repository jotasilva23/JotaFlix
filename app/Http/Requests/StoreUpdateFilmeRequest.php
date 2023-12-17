<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFilmeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules =
        [
            'nome' =>'required|min:3|max:255',
            'duracao' =>'required|min:3|max:255',
            'classificacao' =>'required|min:1|max:3',
            'descricao' =>'required|min:3|max:255',
            'link' =>'required|min:3|max:255',

        ];

        return $rules;
    }
}
