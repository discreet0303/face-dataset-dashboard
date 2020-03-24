<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function userManagementPage() {
        $users = User::all();

        return view('pages.UserManagementPage', [
            'users' => $users
        ]);
    }
}
