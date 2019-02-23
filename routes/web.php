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


Route::get('/','Site\SiteController@index');
Route::get('/admin','Site\SiteController@admin');
Route::get('/add','Site\SiteController@add');
Route::post('/add','Site\SiteController@addpost');
Route::get('/delete/{id}','Site\SiteController@delete');
Route::get('/edit/{id}','Site\SiteController@edit');
Route::post('/edit/{id}','Site\SiteController@editpost');
Route::get('/details/{id}','Site\SiteController@details');

/*Route::get('/', function () {
    return view('site.welcome');
});*/

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

    Route::get('/reviewers','Admin\ReviewerController@index')->name('allReviewer');
    Route::get('/reviewers/addReviewer','Admin\ReviewerController@addReviewer')->name('addReviewer');
    Route::post('/reviewers/addReviewerPost','Admin\ReviewerController@addReviewerPost')->name('addReviewerPost');
    Route::get('/reviewers/delete/{id}','Admin\ReviewerController@delete')->name('deleteReviwerPost');
    

    Route::get('/users','Admin\UserController@index')->name('allUser');
    Route::get('/users/addUserAdmin','Admin\UserController@addUserAdmin')->name('addUserAdmin');
    Route::get('/users/addUserSearcher','Admin\UserController@addUserSearcher')->name('addUserSearcher');
    Route::post('/users/addUserAdminPost','Admin\UserController@addUserAdminPost')->name('addUserAdminPost');
    Route::post('/users/addUserSearcherPost','Admin\UserController@addUserSearcherPost')->name('addUserSearcherPost');
    
    Route::get('/searchers','Admin\SearcherController@index')->name('allSearcher');
    Route::get('/searchers/getSearcher/{id}','Admin\SearcherController@getSearch')->name('getSearcher');
    Route::post('/searchers/addToMeeting','Admin\SearcherController@addToMeeting')->name('addToMeeting');
    Route::post('/searchers/addThese','Admin\SearcherController@addThese')->name('addThese');
    Route::post('/searchers/addCriteriasToSearcher','Admin\SearcherController@addCriteriasToSearcher')->name('addCriteriasToSearcher'); 
    Route::post('/searchers/searcherProgressPost','Admin\SearcherController@searcherProgressPost')->name('searcherProgressPost');
    Route::get('/searchers/plandetails/{id}','Admin\SearcherController@plandetails')->name('plandetails');
    Route::post('/searchers/editPlanEnable','Admin\SearcherController@editPlanEnable')->name('editPlanEnable');
    Route::get('/searchers/editStatusSearcher/{id}/{status}','Admin\SearcherController@editStatusSearcher')->name('editStatusSearcher');
    Route::post('/searchers/updateSearcherInfos','Admin\SearcherController@updateSearcherInfos')->name('updateSearcherInfos');

    //show searchers searchs for admins
    Route::get('/searchers/getSearcherSearchs/{id}','Admin\SearcherController@getSearcherSearchs')->name('getSearcherSearchsAdmin');


    Route::get('/submissions','Admin\SubmissionController@index')->name('allSubmissions');
    Route::get('/submissions/getSubmission/{id}','Admin\SubmissionController@getSubmission')->name('getSubmission');
    Route::post('/submissions/addSubmissionToMeeting','Admin\SubmissionController@addSubmissionToMeeting')->name('addSubmissionToMeeting');
    Route::post('/submissions/addCriteriasToSubmission','Admin\SubmissionController@addCriteriasToSubmission')->name('addCriteriasToSubmission'); 
    Route::post('/submissions/submissionProgressPost','Admin\SubmissionController@submissionProgressPost')->name('submissionProgressPost');
    Route::get('/submissions/editStatusSubmission/{id}/{status}','Admin\SubmissionController@editStatusSubmission')->name('editStatusSubmission');
    Route::post('/submissions/updateSubmissionInfos','Admin\SubmissionController@updateSubmissionInfos')->name('updateSubmissionInfos');
    
    

    Route::get('/supervisors','Admin\SupervisorController@index')->name('allSupervisor');
    Route::get('/supervisors/add','Admin\SupervisorController@add')->name('addSupervisor');
    Route::post('/supervisors/add','Admin\SupervisorController@addPost')->name('addSupervisorPost');
    Route::get('/supervisors/profile/{id}','Admin\SupervisorController@showProfile')->name('adminSupervisorProfile');




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

    Route::get('/cycles','Admin\CycleController@index')->name('allCycle');
    Route::get('/cycles/add','Admin\CycleController@add')->name('addCycle');
    Route::post('/cycles/add','Admin\CycleController@addPost')->name('addCyclePost');
    Route::get('/cycles/edit/{id}','Admin\CycleController@edit')->name('editCycle');
    Route::post('/cycles/edit','Admin\CycleController@editPost')->name('editCyclePost');
    Route::get('/cycles/delete/{id}','Admin\CycleController@delete')->name('deleteCyclePost');

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


    Route::get('/reports/get/{i}','Admin\ReportController@get')->name('getReportDetails');
    Route::post('/reports/add','Admin\ReportController@add')->name('addReportDetails');
    Route::get('/reports','Admin\ReportController@index')->name('allAdminReports');

    
    Route::get('/searchs/getAll','Admin\SearchController@getAll')->name('getAllSearchs');
    Route::get('/searchs/getOneSearch/{id}','Admin\SearchController@getOne')->name('getOneSearch');
    Route::get('/searchs/updateProgressok/{id}','Admin\SearchController@updateProgressok')->name('updateProgressok');
    Route::get('/searchs/updateProgressko/{id}','Admin\SearchController@updateProgressko')->name('updateProgressko');
    Route::post('/searchs/addSearchReviewer','Admin\SearchController@addSearchReviewer')->name('addSearchReviewer');
    Route::post('/searchs/addadmin2_reports','Admin\SearchController@addadmin2_reports')->name('addadmin2_reports');
    


    //----------------------- Reviewer -------------------------
    Route::get('/searchs/getAllMySearchs','Reviewer\SearchController@getAllMySearchs')->name('getAllMySearchs');
    Route::get('/searchs/getOneMySearch/{id}','Reviewer\SearchController@getOneMySearch')->name('getOneMySearch');
    Route::post('/searchs/addreviewers_reports','Reviewer\SearchController@addreviewers_reports')->name('addreviewers_reports');
    Route::get('/reviewer/myprofile','Reviewer\MyProfilController@index')->name('reviewerProfile');
    Route::post('/reviewer/editmyprofile','Reviewer\MyProfilController@editPost')->name('reviewerProfileEdit');
    Route::post('/reviewer/editavatar','Reviewer\MyProfilController@editAvatar')->name('reviewerProfileEditAvatar');
    Route::post('/reviewer/editpassword','Reviewer\MyProfilController@editPassword')->name('reviewerProfileEditPassword');








    //----------------------- Supervisor -----------------------------
    
    Route::get('/supervisor/myprofile','Supervisor\MyProfilController@index')->name('supervisorProfile');
    Route::post('/supervisor/editmyprofile','Supervisor\MyProfilController@editPost')->name('supervisorProfileEdit');
    Route::post('/supervisor/editavatar','Supervisor\MyProfilController@editAvatar')->name('supervisorProfileEditAvatar');
    Route::post('/supervisor/editpassword','Supervisor\MyProfilController@editPassword')->name('supervisorProfileEditPassword');

    Route::get('/supervisor/searchers','Supervisor\SearcherController@index')->name('allSearcherSupervisor');
    Route::get('/supervisor/searchers/get/{id}','Supervisor\SearcherController@get')->name('getSearcherSupervisor');
    Route::get('/supervisor/getSearcherSearchs/{id}','Supervisor\SearcherController@getSearcherSearchs')->name('getSearcherSearchs');
    Route::post('/supervisor/addSupervisorNote','Supervisor\SearcherController@addSupervisorNote')->name('addSupervisorNote');
    Route::get('/supervisor/updateSearchProgressok/{id}','Supervisor\SearchController@updateSearchProgressok')->name('updateSearchProgressok');
    Route::get('/supervisor/updateSearchProgressko/{id}','Supervisor\SearchController@updateSearchProgressko')->name('updateSearchProgressko');
    Route::post('/supervisor/addsupervisor_reports','Supervisor\SearchController@addsupervisor_reports')->name('addsupervisor_reports');

    Route::get('/supervisor/getSearcherProfile/{id}','Supervisor\SearcherController@getSearcherProfile')->name('getSearcherProfile');

    Route::get('/supervisor/reports','Supervisor\ReportController@index')->name('allSupervisorReports');
    Route::get('/supervisor/addReport','Supervisor\ReportController@add')->name('addSupervisorReport');
    Route::post('/supervisor/addReportPost','Supervisor\ReportController@addPost')->name('addSupervisorReportPost');
    Route::post('/supervisor/addReportPost','Supervisor\ReportController@addPost')->name('addSupervisorReportPost');
    Route::get('/supervisor/editReport/{id}','Supervisor\ReportController@edit')->name('editSupervisorReport');
    Route::post('/supervisor/editReportPost','Supervisor\ReportController@editPost')->name('editSupervisorReportPost');
    Route::get('/supervisor/deleteReport/{id}','Supervisor\ReportController@delete')->name('deleteSupervisorReport');
    Route::get('/supervisor/allbooks','Supervisor\BooksController@index')->name('allbookssupervisor');




    //---------------------- Searcher ---------------------------------


    Route::get('/searcher/myprofile','Searcher\MyProfilController@index')->name('searcherProfile');
    //show searcher academic info
    Route::get('/searcher/myacademic','Searcher\MyProfilController@academic')->name('searcherAcademic');
    Route::post('/searcher/editPlan','Searcher\MyProfilController@editPlan')->name('editPlan2');

    Route::post('/searcher/editmyprofile','Searcher\MyProfilController@editPost')->name('searcherProfileEdit');
    Route::post('/searcher/editavatar','Searcher\MyProfilController@editAvatar')->name('searcherProfileEditAvatar');
    Route::post('/searcher/editpassword','Searcher\MyProfilController@editPassword')->name('searcherProfileEditPassword');

    Route::get('/searcher/searchs','Searcher\SearchsController@index')->name('allSearchs');
    Route::get('/searcher/addSearch','Searcher\SearchsController@add')->name('addSearch');
    Route::post('/searcher/addSearchPost','Searcher\SearchsController@addPost')->name('addSearchPost');
    Route::get('/searcher/editSearch/{id}','Searcher\SearchsController@edit')->name('editSearch');
    Route::post('/searcher/editSearchPost','Searcher\SearchsController@editPost')->name('editSearchPost');
    Route::get('/searcher/deleteSearch/{id}','Searcher\SearchsController@delete')->name('deleteSearchPost');
    Route::post('/searcher/addsearcher_reports','Searcher\SearchsController@addsearcher_reports')->name('addsearcher_reports');

    Route::get('/searcher/reports','Searcher\ReportController@index')->name('allSearcherReports');
    Route::get('/searcher/addReport','Searcher\ReportController@add')->name('addSearcherReport');
    Route::post('/searcher/addReportPost','Searcher\ReportController@addPost')->name('addSearcherReportPost');
    Route::get('/searcher/editReport/{id}','Searcher\ReportController@edit')->name('editSearcherReport');
    Route::post('/searcher/editReportPost','Searcher\ReportController@editPost')->name('editSearcherReportPost');
    Route::get('/searcher/deleteReport/{id}','Searcher\ReportController@delete')->name('deleteSearcherReport');
    Route::get('/searcher/getdivisionunit/{id}','Searcher\SearchsController@getdivisionunit');
    Route::get('/searcher/allbooks','Searcher\BooksController@index')->name('allbookssearcher');    
    Route::get('/searcher/searcherPlan','Searcher\PlanController@index')->name('searcherPlan');
    Route::get('/searcher/addPlan','Searcher\PlanController@add')->name('addPlan');
    Route::post('/searchers/editPlan','Searcher\PlanController@editPlan')->name('editPlan');
    Route::post('/searcher/addPlanPost','Searcher\PlanController@addPost')->name('addPlanPost');
    Route::get('/searcher/deletePlan/{id}','Searcher\PlanController@delete')->name('deletePlan');
    Route::post('/searcher/uploadSearcherCV','Searcher\MyProfilController@uploadSearcherCV')->name('uploadSearcherCV');

    //show my supervisor's profile.
    Route::get('/searcher/mysupervisor/{id}','Searcher\MySupervisorController@getSupervisorProfile')->name('mySupervisorProfile');


});