<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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

        $usuario = $this->route()->parameter('usuario');

        return [
            'numero_identificacion' => 'numeric|integer|between:500000,4000000000|required|unique:usuarios' . ((is_null($usuario)) ? '' : ',numero_identificacion,' . $usuario),
            'nombre'                => 'min:5|max:50|required',
            'codigo_estudiantil'    => 'numeric|integer|between:20000000000,20300000000|required|unique:usuarios' . ((is_null($usuario)) ? '' : ',codigo_estudiantil,' . $usuario),
            'correo'                => 'email|required|unique:usuarios' . ((is_null($usuario)) ? '' : ',correo,' . $usuario),
            'tipo'                  => 'required',
            'password'              => ((is_null($usuario)) ? ['min:8', 'required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/'] : ''),

        ];
    }
}
