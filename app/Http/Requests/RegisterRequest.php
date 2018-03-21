<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'email_register' => 'required|email' ,
            'password_register' => 'required|min:4|max:32',
            'passwordAgain' => 'required|same:password_register',
        ];
    }

    public function messages ()
    {
        return [
            'username.required' => trans('message.username'),
            'email_register.required' => trans('message.email'),
            'email_register.email' => trans('message.email_email'),
            'password_register.required' => trans('message.password'),
            'password_register.min' => trans('message.passmin'),
            'password_register.max' => trans('message.passmax'),
            'passwordAgain.required' => trans('message.passwordAgain_required'),
            'passwordAgain.same' => trans('message.passwordAgain_same'), 
        ];
    }
}
