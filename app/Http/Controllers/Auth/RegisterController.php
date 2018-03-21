<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function getShow ()
    {
        return view('user.login');
    }

    public function postRegister (RegisterRequest $request)
    {
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email_register;
        $user->password = $request->password_register;

        if ($user->save()) {
            return redirect()->route('login')->with('announce_register', trans('message.announce_register'));    
        }

        return redirect()->route('register')->with('announce_register', trans('message.announce_fail'));
    }
}
