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
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', function() {
    return redirect('/login');
});

Route::get('/login', function(){
    return view('auth.Login');
});

Route::get('/home', function() {
    return view('index');
});

Route::get('/test', function() {
    return view('containers.dashboard.Index');
});