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
    Route::get('/','PortalController@index')->name('portalwelcome');

    
    
    Route::get('/searchers','Admin\SearcherController@index')->name('allSearcher');
    Route::get('/searchers/getSearcher/{id}','Admin\SearcherController@get')->name('getSearcher');
    Route::post('/searchers/addToMeeting','Admin\SearcherController@addToMeeting')->name('addToMeeting');
    Route::post('/searchers/addThese','Admin\SearcherController@addThese')->name('addThese');
    Route::post('/searchers/addCriteriasToSearcher','Admin\SearcherController@addCriteriasToSearcher')->name('addCriteriasToSearcher'); 
    

    Route::get('/supervisors','Admin\SupervisorController@index')->name('allSupervisor');
    Route::get('/supervisors/add','Admin\SupervisorController@add')->name('addSupervisor');
    Route::post('/supervisors/add','Admin\SupervisorController@addPost')->name('addSupervisorPost');

    
    Route::get('/universities','Admin\UniversityController@index')->name('allUniversity');
    Route::get('/universities/add','Admin\UniversityController@add')->name('addUniversity');
    Route::post('/universities/add','Admin\UniversityController@addPost')->name('addUniversityPost');
    Route::get('/universities/edit/{id}','Admin\UniversityController@edit')->name('editUniversity');
    Route::post('/universities/edit','Admin\UniversityController@editPost')->name('editUniversityPost');
    Route::get('/universities/delete/{id}','Admin\UniversityController@delete')->name('deleteUniversityPost');
    
    Route::get('/countries','Admin\CountrieController@index')->name('allCountrie');
    Route::get('/countries/add','Admin\CountrieController@add')->name('addCountrie');
    Route::post('/countries/add','Admin\CountrieController@addPost')->name('addCountriePost');
    Route::get('/countries/edit/{id}','Admin\CountrieController@edit')->name('editCountrie');
    Route::post('/countries/edit','Admin\CountrieController@editPost')->name('editCountriePost');
    Route::get('/countries/delete/{id}','Admin\CountrieController@delete')->name('deleteCountriePost');

    Route::get('/faculties','Admin\FacultyController@index')->name('allFaculty');
    Route::get('/faculties/add','Admin\FacultyController@add')->name('addFaculty');
    Route::post('/faculties/add','Admin\FacultyController@addPost')->name('addFacultyPost');
    Route::get('/faculties/edit/{id}','Admin\FacultyController@edit')->name('editFaculty');
    Route::post('/faculties/edit','Admin\FacultyController@editPost')->name('editFacultyPost');
    Route::get('/faculties/delete/{id}','Admin\FacultyController@delete')->name('deleteFacultyPost');
    
    Route::get('/configs','Admin\ConfigController@index')->name('allConfigs');
    
    Route::get('/criterias','Admin\CriteriaController@index')->name('allCriteria');
    Route::get('/criterias/add','Admin\CriteriaController@add')->name('addCriteria');
    Route::post('/criterias/add','Admin\CriteriaController@addPost')->name('addCriteriaPost');
    Route::get('/criterias/edit/{id}','Admin\CriteriaController@edit')->name('editCriteria');
    Route::post('/criterias/edit','Admin\CriteriaController@editPost')->name('editCriteriaPost');
    Route::get('/criterias/delete/{id}','Admin\CriteriaController@delete')->name('deleteCriteriaPost');
    Route::get('/criterias/searcherok','Admin\CriteriaController@searcherok')->name('searcherok');
    Route::get('/criterias/searcherko','Admin\CriteriaController@searcherko')->name('searcherko');

    Route::get('/nationalites','Admin\NationalitieController@index')->name('allNationalite');
    Route::get('/nationalites/add','Admin\NationalitieController@add')->name('addNationalite');
    Route::post('/nationalites/add','Admin\NationalitieController@addPost')->name('addNationalitePost');
    Route::get('/nationalites/edit/{id}','Admin\NationalitieController@edit')->name('editNationalitie');
    Route::post('/nationalites/edit','Admin\NationalitieController@editPost')->name('editNationalitePost');
    Route::get('/nationalites/delete/{id}','Admin\NationalitieController@delete')->name('deleteNationalitiePost');

    Route::get('/books','Admin\BookController@index')->name('allBook');
    Route::get('/books/add','Admin\BookController@add')->name('addBook');
    Route::post('/books/add','Admin\BookController@addPost')->name('addBookPost');
    Route::get('/books/edit/{id}','Admin\BookController@edit')->name('editBook');
    Route::post('/books/edit','Admin\BookController@editPost')->name('editBookPost');
    Route::get('/books/delete/{id}','Admin\BookController@delete')->name('deleteBookPost');

    Route::get('/meetings','Admin\MeetingController@index')->name('allMeeting');
    Route::get('/meetings/add','Admin\MeetingController@add')->name('addMeeting');
    Route::post('/meetings/add','Admin\MeetingController@addPost')->name('addMeetingPost');
    Route::get('/meetings/edit/{id}','Admin\MeetingController@edit')->name('editMeeting');
    Route::post('/meetings/edit','Admin\MeetingController@editPost')->name('editMeetingPost');
    Route::get('/meetings/delete/{id}','Admin\MeetingController@delete')->name('deleteMeetingPost');
    Route::get('/meetings/allSearcherMeeting/{id}','Admin\MeetingController@allSearcherMeeting')->name('allSearcherMeeting');
    

    Route::get('/helps','Admin\HelpController@index')->name('allHelp');
    Route::get('/helps/add','Admin\HelpController@add')->name('addHelp');

    
    Route::get('/theses','Admin\TheseController@index')->name('allThese');

    Route::get('/provides/add','Admin\ProvidesController@add')->name('addProvide');
    Route::get('/provides','Admin\ProvidesController@index')->name('allProvide');
    
    
    Route::get('/emails/sendSup','Admin\EmailController@sendSup')->name('sendEmailSup');
    Route::post('/emails/sendemailsuppost','Admin\EmailController@sendemailsuppost')->name('sendemailsuppost');
    Route::get('/emails/sendStu','Admin\EmailController@sendStu')->name('SendEmailStu');
    Route::post('/emails/sendemailstupost','Admin\EmailController@sendemailstupost')->name('sendemailstupost');
    

    Route::get('/sms/sendSup','Admin\SMSController@sendSup')->name('sendSMSSup');
    Route::post('/sms/sendsmssuppost','Admin\SMSController@sendsmssuppost')->name('sendsmssuppost');
    Route::get('/sms/sendStu','Admin\SMSController@sendStu')->name('sendSMSStu');
    Route::post('/sms/sendsmsstupost','Admin\SMSController@sendsmsstupost')->name('sendsmsstupost');



    //----------------------- Supervisor -----------------------------
    
    Route::get('/supervisor/searchers','Supervisor\SearcherController@index')->name('allSearcherSupervisor');
    Route::get('/supervisor/searchers/get/{id}','Supervisor\SearcherController@get')->name('getSearcherSupervisor');
    Route::get('/supervisor/getSearcherSearchs/{id}','Supervisor\SearcherController@getSearcherSearchs')->name('getSearcherSearchs');
    Route::post('/supervisor/addSupervisorNote','Supervisor\SearcherController@addSupervisorNote')->name('addSupervisorNote');
    
    
    

    //---------------------- Searcher ---------------------------------

    
    Route::get('/searcher/searchs','Searcher\SearchsController@index')->name('allSearchs');
    Route::get('/searcher/addSearch','Searcher\SearchsController@add')->name('addSearch');
    Route::post('/searcher/addSearchPost','Searcher\SearchsController@addPost')->name('addSearchPost');
    Route::get('/searcher/editSearch/{id}','Searcher\SearchsController@edit')->name('editSearch');
    Route::post('/searcher/editSearchPost','Searcher\SearchsController@editPost')->name('editSearchPost');
    Route::get('/searcher/deleteSearch/{id}','Searcher\SearchsController@delete')->name('deleteSearchPost');
    
});