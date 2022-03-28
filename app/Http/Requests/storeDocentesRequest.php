<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocentesRequest extends FormRequest
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
            'nombre'=>'required|max:10',

            'apellidos'=>'required|max:30',

            'titulo'=>'required|max:15',

            'cursoAsociado'=>'required|max:20',

            'foto'=>'required|image'
        ];
    }
}
