<?php

namespace App\Http\Controllers\Portal\Supervisor;

use App\User;
use App\Role;
use App\Countrie;
use App\Supervisorsreport;
use App\Section;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                if($role->name=='admin' || $role->name=='searcher' || $role->name=='admin2'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $reports = Supervisorsreport::all();
        return view('portal.supervisor.reports.index')->with('reports',$reports);
    }
  
    public function add(){
        return view('portal.supervisor.reports.add');
    }
    public function addPost(Request $request){
        $report = new Supervisorsreport;
        $report->TypeCyclic = $request->input('TypeCyclic');
        $report->DateSupervisor = $request->input('DateSupervisor');
        $report->DoneRange = $request->input('DoneRange');
        $report->QualityProcess = $request->input('QualityProcess');
        $report->QualityDirection = $request->input('QualityDirection');
        $report->UpdatedRange = $request->input('UpdatedRange');
        $report->DateCommittee = $request->input('DateCommittee');
        $report->Difficulties = $request->input('Difficulties');
        $report->NotesPositive = $request->input('NotesPositive');
        $report->NotesNegative = $request->input('NotesNegative');
        $this->user= Auth::user();
        $report->Supervisor = Registration::where('User',$this->user->id)->first()->ID;
        $report->Status = "yes";
        if($request->hasFile('URL')){
            $request->validate([
                'URL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->URL->getClientOriginalExtension();
            
            $request->URL->storeAs('public/supervisorsreports',$fileName);
            $report->URL = $fileName;
        }
        $report->save();
        return redirect()->route('allSupervisorReports');
    }
    public function edit($id){
        $report = Supervisorsreport::where('ID',$id)->first();
        return view('portal.supervisor.reports.edit',compact('report'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('URL');
        if($request->hasFile('URL')){
            $request->validate([
                'URL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->URL->getClientOriginalExtension();
            $request->URL->storeAs('public/supervisorsreports',$fileName);
        }
        DB::table('supervisorsreports')->where('ID',$request->input('id'))
            ->update(array(
                'TypeCyclic'=>$request->input('TypeCyclic'),
                'DateSupervisor'=>$request->input('DateSupervisor'),
                'DoneRange'=>$request->input('DoneRange'),
                'QualityProcess'=>$request->input('QualityProcess'),
                'QualityDirection'=>$request->input('QualityDirection'),
                'UpdatedRange'=>$request->input('UpdatedRange'),
                'DateCommittee'=>$request->input('DateCommittee'),
                'Difficulties'=>$request->input('Difficulties'),
                'NotesPositive'=>$request->input('NotesPositive'),
                'NotesNegative'=>$request->input('NotesNegative'),
                'Status'=>$request->input('Status'),                
                'URL'=>$fileName            
        ));
        return redirect()->route('allSupervisorReports');
    }
    public function delete($id){
        Supervisorsreport::where('ID', $id)->forcedelete(); 
        return redirect()->route('allSupervisorReports');
    }
}
