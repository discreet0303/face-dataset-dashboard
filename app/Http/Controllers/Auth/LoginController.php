<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
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
    protected $loginUrl = RouteServiceProvider::LOGIN;
    protected $dashboardUrl = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'account';
    }

    public function login(Request $request) {
        $loginInfo = $request->only('account', 'password');
        $loginInfo['is_activated'] = 1;
        
        if (Auth::attempt($loginInfo)) return redirect($this->dashboardUrl);
        else return redirect($this->loginUrl);
    }

    public function logout() {
        Auth::logout();
        return redirect($this->loginUrl);
    }
}
