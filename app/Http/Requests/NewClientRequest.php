<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewClientRequest extends FormRequest
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
            'firstName' => ['bail','required',  'string','max:30'],
            'lastName' => ['bail','required',  'string','max:30'],
            'email' => ['bail','required',  'string','max:255', 'email','unique:App\Models\Client,email'],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Cet email est déjà utilisé.',
            'email.required' => 'L\'email est obligatoire.',
            'firstName.required' => 'Le prénom est obligatoire.',
            'firstName.max' => 'Le prénom doit contenir 30 lettres maximum.',
            'lastName.required' => 'Le nom est obligatoire.',
            'lastName.max' => 'Le nom doit contenir 30 lettres maximum.',

        ];
    }
}
