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

    
    
    Route::get('/students','Admin\StudentController@index')->name('allStudent');

    Route::get('/supervisors','Admin\SupervisorController@index')->name('allSupervisor');
    Route::get('/supervisors/add','Admin\SupervisorController@add')->name('addSupervisor');

    
    Route::get('/universities','Admin\UniversityController@index')->name('allUniversity');
    Route::get('/universities/add','Admin\UniversityController@add')->name('addUniversity');
    Route::post('/universities/add','Admin\UniversityController@addPost')->name('addUniversityPost');
    Route::get('/universities/edit/{id}','Admin\UniversityController@edit')->name('editUniversity');
    Route::post('/universities/edit','Admin\UniversityController@editPost')->name('editUniversityPost');
    Route::get('/universities/delete/{i}','Admin\UniversityController@delete')->name('deleteUniversityPost');
    
    Route::get('/countries','Admin\CountrieController@index')->name('allCountrie');
    Route::get('/countries/add','Admin\CountrieController@add')->name('addCountrie');

    Route::get('/faculties','Admin\FacultyController@index')->name('allFaculty');
    Route::get('/faculties/add','Admin\FacultyController@add')->name('addFaculty');
    
    Route::get('/configs','Admin\ConfigController@index')->name('allConfigs');
    
    Route::get('/criterias','Admin\CriteriaController@index')->name('allCriteria');
    Route::get('/criterias/add','Admin\CriteriaController@add')->name('addCriteria');

    Route::get('/nationalites','Admin\NationaliteController@index')->name('allNationalite');
    Route::get('/nationalites/add','Admin\NationaliteController@add')->name('addNationalite');

    Route::get('/books','Admin\BookController@index')->name('allBook');
    Route::get('/books/add','Admin\BookController@add')->name('addBook');

    Route::get('/helps','Admin\HelpController@index')->name('allHelp');
    Route::get('/helps/add','Admin\HelpController@add')->name('addHelp');

    Route::get('/provides/add','Admin\ProvidesController@add')->name('addProvide');
    
    Route::get('/emails/sendSup','Admin\EmailController@sendSup')->name('sendEmailSup');
    Route::get('/emails/sendStu','Admin\EmailController@sendStu')->name('SendEmailStu');

    Route::get('/sms/sendSup','Admin\SMSController@sendSup')->name('sendSMSSup');
    Route::get('/sms/sendStu','Admin\SMSController@sendStu')->name('sendSMSStu');





});