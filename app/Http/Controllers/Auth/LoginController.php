<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    */

    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $login = request('identity');
        $filteredLogin = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$filteredLogin => $login]);

        return $filteredLogin;

    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'identity' => 'required|string',
            'password' => 'required|string',
            'email' => 'string|exists:users',
            'username' => 'string|exsits:users'
        ]);

    }
}
