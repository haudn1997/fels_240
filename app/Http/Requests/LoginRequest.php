<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required|min:4|max:32',
        ];
    }

    public function messages ()
    {
        return [
            'email.required' => trans('message.email'),
            'password.required' => trans('message.password'),
            'password.min' => trans('message.passmin'),
            'password.max' => trans('message.passmax'),
        ];
    }
}
