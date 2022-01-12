<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:191',
                'unique:people,name',
            ],
            'lname' => [
                'required',
                'string',
                'min:3',
                'max:191',
            ],
            'phone' => [
                'required',
                'digits:13',
                'unique:people,phone'
            ],
            'email' => [
                'required',
                'string',
                'max:191',
            ],
            'status_id' => [
                'required',
            ],

        ];

        if($this->getMethod() == "POST")
        {
            $rules += [
                'email' => [
                    'required',
                    'email',
                    'max:191',
                    'unique:people,email',
                ],
            ];
        }

        return $rules;
    }
}
