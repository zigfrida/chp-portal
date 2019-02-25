<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// for Auth:: stuff
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';
    // https://codeburst.io/learn-how-to-redirect-authenticated-users-to-corresponding-path-in-laravel-dd613e2f9e3
    public function redirectTo()
    {
        // get user's role
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return '/admin';
                break;
            case 'standard':
                return '/';
                break;
            case 'jew':
                return '/hitler-playground';
                break;
        }
    }

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
