<?php

namespace App\Http\Controllers\Portal\Reviewer;

use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Search;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name!='reviewer' ){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function getAllMySearchs(){
        $regid = Registration::where('User',$this->user->id)->first();
        $searchs = DB::table('searchs')
                    ->join('divisions','divisions.ID','=','searchs.Division')
                    ->join('divisionunits','divisionunits.ID','=','searchs.Divisionunit')
                    ->join('reviewersearchs','reviewersearchs.search','=','searchs.ID')
                    ->join('registrations','registrations.ID','=','searchs.Searcher')
                    ->join('users','users.id','=','registrations.User')
                    ->where('reviewersearchs.reviewer',$regid->ID)
                    ->get(['divisionunits.Name as NameDivUni','divisions.Name as divname','searchs.*','registrations.Fistname','registrations.LastName']);
        return view('portal.reviewer.searchs.index',compact('searchs'));
    }

    public function addreviewers_reports(Request $request){
        $regid = Registration::where('User',$this->user->id)->first();
        if($request->hasFile('filename')){
            $request->validate([
                'filename' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/reviewers_reports',$fileName);
        
        DB::table('reviewers_reports')->insert([
            'search'=>$request->input('search'),
            'reviewer'=>$regid->ID,
            'q1'=>$request->input('q1'),
            'q2_details'=>$request->input('q2_details'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'q6'=>$request->input('q6'),
            'q7'=>$request->input('q7'),
            'q8'=>$request->input('q8'),
            'q9'=>$request->input('q9'),
            'q10'=>$request->input('q10'),
            'q11'=>$request->input('q11'),
            'q1_details'=>$request->input('q1_details'),
            'q2'=>$request->input('q2'),
            'q3_details'=>$request->input('q3_details'),
            'q4_details'=>$request->input('q4_details'),
            'q5_details'=>$request->input('q5_details'),
            'q6_details'=>$request->input('q6_details'),
            'q7_details'=>$request->input('q7_details'),
            'q8_details'=>$request->input('q8_details'),
            'q9_details'=>$request->input('q9_details'),
            'q10_details'=>$request->input('q10_details'),
            'note'=>$request->input('note'),
            'filename'=>$fileName,
        ]);
        }
        return redirect()->route('getAllMySearchs');
    }
  
   
    
}
