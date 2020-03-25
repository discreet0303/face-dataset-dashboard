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
        $users = User::where('id', '>', 1)->get();

        return view('pages.UserManagementPage', [
            'users' => $users
        ]);
    }

    public function deleteUser($userId) {
        User::destroy($userId);

        $msg = [
            'status' => 'success',
            'icon' => 'success',
            'title' => 'Delete User Success!!',
        ];
        
        return redirect()->route('dashboard.usermanagement')->with($msg);
    }
}
