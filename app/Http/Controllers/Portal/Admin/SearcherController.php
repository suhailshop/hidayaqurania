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
        $criterias = Criteria::all();
        return view('portal.admin.searchers.index')->with('searchers',$searchers)->with('criterias',$criterias)->with('meetings',$meetings)->with('supervisors',$supervisors);
    }

    public function get($id){
        $searcher = Registration::where('ID',$id)->first();
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
        
        return view('portal.admin.searchers.get')->with('searcher',$searcher)->with('numberOfMonths',$numberOfMonths);
    }

    public function searcherProgressPost(Request $request){
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
            
        return redirect()->route('getSearcher',array('id' => $searcher->ID));
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

    public function addCriteriasToSearcher(Request $request){
        
        foreach($request->input('criterias') as $m)
        {
            DB::table('searcher_critera')->insert([
                'Searcher' => $request->input('searcher'),
                'Criteria' => $m,
                'Status' => 'yes'
            ]);

        }
        return redirect()->route('allSearcher');
    }
}

