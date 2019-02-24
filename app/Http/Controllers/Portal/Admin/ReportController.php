<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ReportController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $reports_searchers = Searchersreport::all();
        $reports_supervisors = Supervisorsreport::all();
        $committees = Committee::all();
        $sections = Section::all();
        return view('portal.admin.reports.index',compact('reports_searchers','reports_supervisors','committees','sections'));
    }
  
    public function get($id){
        $type   = 'searcher';
        $report =  Searchersreport::where('ID',$id)->get();
        if(!isset($report)){
            $type   = 'supervisor';
            $report =  Supervisorsreport::where('ID',$id)->get();
        }
        return view('portal.admin.reports.get',compact('report','type'));
    }
    public function add(Request $request){
        $report = new Committesreport;
        if($request->input('type')=='searcher'){
            $report->Searcherreports = $request->input('id');
        }
        else{
            $report->Supervisorreports = $request->input('id');
        }
        $report->Section = $request->input('Section');
        $report->Committee = $request->input('Committee');
        $report->DoneRange = $request->input('DoneRange');
        $report->CurrentProgress = $request->input('CurrentProgress');
        $report->QualityDirection = $request->input('QualityDirection');
        $report->Recommendations = $request->input('Recommendations');
        $report->UpdatedRange = $request->input('UpdatedRange');
        $report->DateCommittee = $request->input('DateCommittee');
        $report->Reasons = $request->input('Reasons');
        $report->President = $request->input('President');
        $report->Professor = $request->input('Professor');
        $report->Status = "yes";
        if($request->hasFile('URL')){
            $request->validate([
                'URL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->URL->getClientOriginalExtension();
            
            $request->URL->storeAs('public/adminreports',$fileName);
            $report->URL = $fileName;
        }
        $report->save();
        Session::put('success_edit', 'تم اضافة التقرير بنجاح'); 
        
        return redirect()->route('allAdminReports');
    }
   
}
