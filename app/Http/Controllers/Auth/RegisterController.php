<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $dashboardUrl = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }
    
    public function register(Request $request) {
        $userInfo = $request->all();
        $validator = Validator::make($request->all(), [
            'account' => 'required|string|max:20',
            'username' => 'required|string|max:20',
            'password' => 'required|string|max:16|confirmed',
            'primary_role' => [
                'required',
                Rule::in(['super-admin', 'admin', 'user'])
            ],
        ]);

        if ($validator->fails()) {
            return 123;
            return redirect($this->dashboardUrl)->withErrors($validator)->withInput();
        }

        $userInfo['password'] = Hash::make($userInfo['password']);
        $userInfo['is_activated'] = 1;
        User::create($userInfo);

        $msg = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Create User Success!!',
        ];
        return redirect($this->dashboardUrl)->with($msg);
    }
}
