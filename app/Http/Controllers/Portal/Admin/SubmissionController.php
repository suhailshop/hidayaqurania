<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Registration;
use App\Meeting;
use App\Criteria;
use App\Progrss;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class SubmissionController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $searchers = Registration::where('Type','searcher')->where('Status','!=','مفعل')->get();
        $meetings = Meeting::all();
        $supervisors = Registration::where('Type','supervisor')->get();
        $criterias = Criteria::all();
        return view('portal.admin.submissions.index')->with('searchers',$searchers)->with('criterias',$criterias)->with('meetings',$meetings)->with('supervisors',$supervisors);
    }

    

    public function getSubmission($id){
        $searcher = Registration::where('ID',$id)->first();      
        $supervisors = Registration::where('Type','supervisor')->get();  
        $countries = Countrie::all();
        // Set dates
        $dateIni = $searcher->these->BeginningDate;
        $dateFin = date("Y-m-d");

        // Get year and month of initial date (From)
        $yearIni = date("Y", strtotime($dateIni));
        $monthIni = date("m", strtotime($dateIni));

        // Get year an month of finish date (To)
        $yearFin = date("Y", strtotime($dateFin));
        $monthFin = date("m", strtotime($dateFin));

        // Checking if both dates are some year

        if ($yearIni == $yearFin) {
        $numberOfMonths = ($monthFin-$monthIni) + 1;
        } else {
        $numberOfMonths = ((($yearFin - $yearIni) * 12) - $monthIni) + 1 + $monthFin;
        }
        
        return view('portal.admin.submissions.get')->with('countries',$countries)->with('supervisors',$supervisors)->with('searcher',$searcher)->with('numberOfMonths',$numberOfMonths);
    }

    public function submissionProgressPost(Request $request){
        $searcher = Registration::where('ID',$request->input('id_searcher'))->first();
        if(!isset($searcher->progress->ID)){
            DB::table('Progress')->insert([
                'Months' => $request->input('Months'),
                'Searcher' => $request->input('id_searcher'),
                'MonthlyProgress' => $request->input('MonthlyProgress'),
                'InitialProgress' => $request->input('InitialProgress'),
            ]);
        }
        else{
            DB::table('Progress')
            ->where('Searcher', $searcher->ID)
            ->update(['Months' => $request->input('Months'),
                      'MonthlyProgress'=>$request->input('MonthlyProgress'),
                      'InitialProgress'=>$request->input('InitialProgress')]);
        }
        Session::put('success_edit', 'تم اضافة المهمة بنجاح'); 
        return redirect()->route('getSubmission',array('id' => $searcher->ID));
    }
  

    public function addSubmissionToMeeting(Request $request){
        DB::table('meetings_searchers')->insert([
            'Meeting' => $request->input('meeting'),
            'Searcher' => $request->input('searcher'),
            'Status' => 'yes'
        ]);
        Session::put('success_edit', 'تم اضافة الحضور بنجاح'); 
        return redirect()->route('allSubmissions');
    }

    public function addCriteriasToSubmission(Request $request){
        
        foreach($request->input('criterias') as $m)
        {
            DB::table('searcher_critera')->insert([
                'Searcher' => $request->input('searcher'),
                'Criteria' => $m,
                'Status' => 'yes'
            ]);

        }
        Session::put('success_edit', 'تم اضافة المعايير للطالب بنجاح'); 
        return redirect()->route('allSubmissions');
    }
    public function editStatusSubmission($id,$status){
        DB::table('registrations')
            ->where('ID',$id)
            ->update([
                'Status' => $status
        ]);
        Session::put('success_edit', 'تم تعديل الحالة بنجاح'); 
        return redirect()->route('allSubmissions');
    }

    public function updateSubmissionInfos(Request $request){
        DB::table('registrations')
            ->where('ID',$request->input('id_registration'))
            ->update([
                'Fistname' => $request->input('Fistname'),
                'LastName' => $request->input('LastName'),
                'City' => $request->input('City'),
                'Countrie' => $request->input('Countrie'),
                'University' => $request->input('University')
            ]);
        DB::table('theses')
            ->where('ID',$request->input('these_id'))
            ->update([
                'Title' => $request->input('Title'),
                'CompletionDate' => $request->input('CompletionDate'),
                'BeginningDate' => $request->input('BeginningDate'),
                'supervisor' => $request->input('supervisor')
            ]);
        Session::put('success_edit', 'تم تعديل معلومات التقديم بنجاح'); 
        return redirect()->route('getSubmission',array('id' => $request->input('id_registration')));
    }
}

