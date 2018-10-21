<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Registration;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearcherController extends Controller
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

        $searchers = Registration::where('Type','Searcher')->get();
        $meetings = Meeting::all();
        $supervisors = Registration::where('Type','Supervisor')->get();
        return view('portal.admin.searchers.index')->with('searchers',$searchers)->with('meetings',$meetings)->with('supervisors',$supervisors);
    }
  
   
    public function delete($id){
        Registration::where('ID', $id)->forcedelete(); 
        return redirect()->route('allSearcher');
    }

    public function addToMeeting(Request $request){
        DB::table('meetings_searchers')->insert([
            'Meeting' => $request->input('meeting'),
            'Searcher' => $request->input('searcher'),
            'Status' => 'yes'
        ]);
        
        return redirect()->route('allSearcher');
    }

    public function addThese(Request $request){
        DB::table('theses')->insert([
            'Supervisor' => $request->input('Supervisor'),
            'Searcher' => $request->input('Searcher'),
            'Title' => $request->input('Title'),
            'ProgramDuration' => $request->input('ProgramDuration'),
            'BeginningDate' => $request->input('BeginningDate'),
            'CompletionDate' => $request->input('CompletionDate'),
            'Notes' => $request->input('Notes'),

            'Status' => 'yes'
        ]);
        
        return redirect()->route('allSearcher');
    }
}
