<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaConocimientoRequest extends FormRequest
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
        $area = $this->route()->parameter('areasConocimiento');

        return [
            'nombre'      => 'required|min:4|unique:areas_conocimientos' . ((is_null($area)) ? '' : ',nombre,' . $area),
            'descripcion' => 'min:5|nullable',
        ];
    }
}
