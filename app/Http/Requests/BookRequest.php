<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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

    //Validation rules
    public function rules()
    {   
    return [
        //'title' => 'required|unique:posts|max:255',
        'title' => 'required',
        'pages' => 'required|numeric',
    ];
    }

    //Personalize error messages
    public function messages()
{
    return [
        'title.required' => 'Insira o título',
        'pages.numeric'  => 'Insira o número de páginas',
    ];
}
}
