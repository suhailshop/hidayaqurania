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

Route::get('/home', function () {
    return view('portal.welcome');
});
Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Route::group(array('prefix' => 'portal', 'namespace' => 'Portal', 'middleware' => 'portal'), function () {
    Route::get('/', function () {
        return view('portal.welcome');
    })->name('portalwelcome');

    Route::get('/universities','Admin\UniversityController@index')->name('allUniversity');
    Route::get('/universities/add','Admin\UniversityController@add')->name('addUniversity');
    Route::post('/universities/add','Admin\UniversityController@addPost')->name('addUniversityPost');
    Route::get('/universities/edit/{id}','Admin\UniversityController@edit')->name('editUniversity');
    Route::post('/universities/edit','Admin\UniversityController@editPost')->name('editUniversityPost');
    Route::get('/universities/delete/{i}','Admin\UniversityController@delete')->name('deleteUniversityPost');



});