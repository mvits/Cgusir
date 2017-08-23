<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
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

        $autor = $this->route()->parameter('autore');

        return [
            'nombre'            => 'required|min:4|unique:autores' . ((is_null($autor)) ? '' : ',nombre,' . $autor),
            'link_bibliografia' => 'url|nullable',
        ];
    }
}
