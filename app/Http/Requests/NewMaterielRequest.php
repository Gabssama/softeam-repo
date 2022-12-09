<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMaterielRequest extends FormRequest
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
            'title' => ['bail','required',  'string','max:50'],
            'price' => ['bail','required',  'integer','digits_between:1,4'],
        ];
    }

    public function messages()
    {
        return [
            
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre doit contenir 50 caractères maximum.',
            'price.required' => 'Le prix est obligatoire.',
            'price.integer' => 'Le prix doit être un nombre entier.',
            'price.digits_between' => 'Le prix doit être compris entre 1 et 99999.'

        ];
    }
}
