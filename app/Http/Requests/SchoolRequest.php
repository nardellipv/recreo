<?php

namespace recreo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'director1' => 'required',
            'director2' => 'required',
            'first_time' => 'required',
        ];
    }
}
