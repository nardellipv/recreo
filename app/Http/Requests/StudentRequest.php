<?php

namespace recreo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'dni' => 'required|numeric',
            'birth_date' => 'required|date',
            'phone' => 'required|numeric',
            'classroom' => 'required',
            'level' => 'required|numeric',
            'genero' => 'required',
            'first_time' => 'required|max:10',
        ];
    }
}
