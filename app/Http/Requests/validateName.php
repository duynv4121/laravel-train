<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateName extends FormRequest
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
            'fatherFamilyName' => ['required'],
            'fatherFirstName' => 'required',
            'fatherMobilePhone' => 'required',
            'fatherEmailAddress' => ['required', 'email']
        ];
    }

    public function messages() {
        return [
            'fatherFamilyName.required' => 'Please input family name',
            'fatherFirstName.required' => 'Please input first name',
            'fatherMobilePhone.required' => 'Please input mobile phone',
            'fatherEmailAddress.required' => 'Please input email address',
            'fatherEmailAddress.email' => 'Your email address is invalid',

        ];
    }
}
