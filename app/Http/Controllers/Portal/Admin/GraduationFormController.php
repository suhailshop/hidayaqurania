<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Cycle;
use App\Graduation_form;
use App\Nationalitie;
use App\These;
use App\Universitie;
use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Search;
use App\Registration;
use App\Examiner_reports;
use App\Reviewers_reports;
use App\Supervisors_reports;
use App\Searchers_reports;
use App\Admin2_reports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class GraduationFormController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if (Auth::user() != null) {
                $role = Role::get()->where('id', $this->user->role_id)->first();
                //if(($role->name!='admin2') and ($role->name!='admin'))  { return redirect('/portal');}
                return $next($request);
            } else {
                return redirect('/login');
            }
        });
    }


    // add graduation form :
    public function getGraduationForms()
    {
        $this->user = Auth::user();
        $idRegistration = Registration::where('User', $this->user->id)->first()->ID;

        $searchers = DB::table('theses')
            ->leftJoin('registrations', 'registrations.ID', '=', 'theses.Searcher')
            ->leftJoin('nationalities', 'nationalities.ID', '=', 'registrations.Nationalitie')
            ->leftJoin('countries', 'countries.ID', '=', 'registrations.Countrie')
            ->leftJoin('universities', 'universities.ID', '=', 'registrations.University')
            ->leftJoin('graduation_forms', 'graduation_forms.Searcher', '=', 'registrations.ID')
            ->where('theses.Supervisor', $idRegistration)
            ->select('registrations.*', 'countries.Name as countrieName', 'nationalities.Name as nationalitieName', 'theses.Title as thesesTitle', 'graduation_forms.studentAgreementDate as stdsubmission', 'graduation_forms.searchURL as searchURL', 'graduation_forms.searcher as seracherForm', 'graduation_forms.supervisorAgreementDate as supsubmission', 'registrations.User as UserId', 'graduation_forms.ID as formID', 'universities.Name as uniName')
            ->get();
        return view('portal.supervisor.searchers.searchersGraduationForms')->with('searchers', $searchers);
    }



    // show list to Admin
    public function getGraduationFormsAdmin(){

        $searchers = DB::table('theses')
            ->leftJoin('registrations', 'registrations.ID', '=', 'theses.Searcher')
            ->leftJoin('universities', 'universities.ID', '=', 'registrations.University')
            ->leftJoin('graduation_forms', 'graduation_forms.Searcher', '=', 'registrations.ID')
            ->select('registrations.*',  'theses.Title as thesesTitle', 'graduation_forms.studentAgreementDate as stdsubmission', 'graduation_forms.searchURL as searchURL', 'graduation_forms.searcher as seracherForm', 'graduation_forms.supervisorAgreementDate as supsubmission', 'registrations.User as UserId', 'graduation_forms.ID as formID' ,'universities.Name as uniName')
            ->get();

        return view('portal.admin.GraduationForm.AllGraduationForms')->with('searchers', $searchers);

    }


    public function getOne($id = null)
    {

        $studentId = null;

        if (isset($id)) {
            $studentId = $id;
        }


        $isSupervisor = false;

        $submitted = false;

        if (auth()->user()->hasRole('student', auth()->user()->role_id)) {
            $studentId = $this->user = Auth::user()->id;
        }

        if (auth()->user()->hasRole('supervisor', auth()->user()->role_id)) {
            $isSupervisor = true;
        }


        $student = Registration::where('User', $studentId)->first();


        $myformData = Graduation_form::where('Searcher', $student->ID)->first();

        $conditions = null;
        if ($myformData) {
            $conditions = explode(';', $myformData->conditions);
        }

        if ($myformData) {
            $submitted = true;
        }


        if (isset($id)) {

            $thesis = These::where('Searcher', $studentId)->first(); // supervisor id is here too.

        } else {

            $thesis = These::where('Searcher', $student->ID)->first(); // supervisor id is here too.

        }

        $university = Universitie::where('ID', $student->University)->first();

        $supervisorData = Registration::where('ID', $thesis->Supervisor)->first();

        return view('portal.admin.graduationForm.getGraduationForm', compact('student', 'myformData', 'thesis', 'supervisorData', 'university', 'submitted', 'conditions', 'isSupervisor' , 'studentId'));
    }


    public function getOnePost(Request $request)
    {

        $graduationForm = new Graduation_form;

        $cond = '';

        foreach ($request->input('conditions') as $d) {
            $cond .= $d . ';';
        }

        $graduationForm->conditions = $cond;

        if ($request->hasFile('searchURLb4')) {
            $request->validate([
                'searchURLb4' => 'required|file',
            ]);
            $fileName = "PreSubmissionThesis" . time() . '.' . request()->searchURLb4->getClientOriginalExtension();

            $request->searchURLb4->storeAs('public/searchs', $fileName);
            $graduationForm->searchURL = $fileName;
        }

        $graduationForm->studentAgreement = $request->input('studentAgreement');
        $graduationForm->studentAgreementDate = $request->input('studentAgreementDate');
        $graduationForm->totalPartialHidayat = $request->input('totalPartialHidayat');
        $graduationForm->totalFullHidayat = $request->input('totalFullHidayat');
        $graduationForm->supervisorAgreement = $request->input('supervisorAgreement');
        $graduationForm->supervisorAgreementDate = $request->input('supervisorAgreementDate');
        $graduationForm->Supervisor = $request->input('supervisorID');
        $graduationForm->Searcher = $request->input('searcherID');

        $graduationForm->save();

        Session::put('success_edit', 'تم اضافة النموذج بنجاح');
        return redirect()->route('b4graduatoinForm');

    }


    public function getOnePostUpdate(Request $request)
    {

        $userID = Registration::where('User' , $request->input('stdID'))->first() ;

        $graduationForm = Graduation_form::where('Searcher', $userID->ID)->first();

        $studentId = $request->input('stdID');

        DB::table('graduation_forms')
            ->where('ID', $graduationForm->ID)
            ->update(['supervisorAgreement' => $request->input('supervisorAgreement'),
                'supervisorAgreementDate' => $request->input('supervisorAgreementDate'),]);


        $graduationForm->save();

        Session::put('success_edit', 'تم اعتماد النموذج بنجاح');

        return redirect()->route('b4graduatoinForm', ['id'=>$studentId]);

    }

}