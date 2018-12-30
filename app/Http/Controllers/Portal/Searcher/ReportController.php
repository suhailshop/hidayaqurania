<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\User;
use App\Role;
use App\Countrie;
use App\Searchersreport;
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
                if($role->name=='admin' || $role->name=='supervisor' || $role->name=='admin2'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $reports = Searchersreport::all();
        return view('portal.searcher.reports.index')->with('reports',$reports);
    }
  
    public function add(){
       
        $sections = Section::all();
        return view('portal.searcher.reports.add',compact('sections'));
    }
    public function addPost(Request $request){
        $report = new Searchersreport;
        $report->TypeCyclic = $request->input('TypeCyclic');
        $report->Section = $request->input('Section');
        $report->DateSearcher = $request->input('DateSearcher');
        $report->DoneRange = $request->input('DoneRange');
        $report->SessionsCount = $request->input('SessionsCount');
        $report->HoursNumber = $request->input('HoursNumber');
        $report->UpdatedRange = $request->input('UpdatedRange');
        $report->DateCommittee = $request->input('DateCommittee');
        $report->Reasons = $request->input('Reasons');
        $report->Difficulties = $request->input('Difficulties');
        $report->Notes = $request->input('Notes');
        $this->user= Auth::user();
        $report->Searcher = Registration::where('User',$this->user->id)->first()->ID;
        $report->Status = "yes";
        if($request->hasFile('URL')){
            $request->validate([
                'URL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->URL->getClientOriginalExtension();
            
            $request->URL->storeAs('public/searchersreports',$fileName);
            $report->URL = $fileName;
        }
        $report->save();
        return redirect()->route('allSearcherReports');
    }
    public function edit($id){
        $report = Searchersreport::where('ID',$id)->first();
        $sections = Section::all();
        return view('portal.searcher.reports.edit',compact('report','sections'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('URL');
        if($request->hasFile('URL')){
            $request->validate([
                'URL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->URL->getClientOriginalExtension();
            $request->URL->storeAs('public/searchersreports',$fileName);
        }
        DB::table('searchersreports')->where('ID',$request->input('id'))
            ->update(array(
                'TypeCyclic'=>$request->input('TypeCyclic'),
                'Section'=>$request->input('Section'),
                'DateSearcher'=>$request->input('DateSearcher'),
                'DoneRange'=>$request->input('DoneRange'),
                'SessionsCount'=>$request->input('SessionsCount'),
                'HoursNumber'=>$request->input('HoursNumber'),
                'UpdatedRange'=>$request->input('UpdatedRange'),
                'Reasons'=>$request->input('Reasons'),
                'DateCommittee'=>$request->input('DateCommittee'),
                'Difficulties'=>$request->input('Difficulties'),
                'Notes'=>$request->input('Notes'),
                'Status'=>$request->input('status'),                
                'URL'=>$fileName            
        ));
        return redirect()->route('allSearcherReports');
    }
    public function delete($id){
        Searchersreport::where('ID', $id)->forcedelete(); 
        return redirect()->route('allSearcherReports');
    }
}
