<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'usuario'          => ['required'],
            'data_registro'    => ['required', 'date'],
            'primeira_entrada' => ['required'],
            'primeira_saida'   => ['required'],
            'segunda_entrada'  => ['required'],
            'segunda_saida'    => ['required']
        ];
    }
}
