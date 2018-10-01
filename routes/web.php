<?php

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

Route::get('/', function () {
    return view('site.welcome');
});


Auth::routes();






Route::group(array('prefix' => 'portal', 'namespace' => 'Portal', 'middleware' => 'portal'), function () {



    Route::get('/', function () {
        return view('portal.welcome');
    });

    Route::get('/login', function () {
        return view('portal.login');
    });

    Route::get('/register', function () {
        return view('portal.register');
    });

    Route::get('/password/reset', function () {
        return view('portal.reset_password');
    });



});