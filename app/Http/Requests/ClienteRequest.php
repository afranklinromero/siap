<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            //
            'user_id' => 'required|integer',
            'user_id' => 'exists:Users,id',
            'nombres' => 'required|max:64',
            'apellidos' => 'required|max:64',
            'telefono' => 'required|max:16',
            'direccion' => 'required|max:128',
            'ubicacion' => 'required|max:128',
            'mac' => 'required|max:32',
            'estado' => 'required|max:2',

        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'id' => 'id',
            'ci' => 'Cedula Identidad',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'ubicacion' => 'Ubicacion',
            'mac' => 'Direcion MAC',
            'estado' => 'Estado',
            'user_id' => 'id usuario',
        ];
    }


    public function response(array $errors){
        return redirect('ciudad')->withErrors($errors, 'formulario');
    }
}
