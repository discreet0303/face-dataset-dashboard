<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::redirect('/', '/login');
Route::get('/login', function() {
    return view('auth.Login');
})->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/register', 'Auth\RegisterController@register');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'name' => 'dashboard.'], function() {

    Route::get('/usermanagement', 'UserController@userManagementPage');
});