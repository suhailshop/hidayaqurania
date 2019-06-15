<?php

namespace App\Http\Controllers\Portal\Supervisor;

use App\Nationalitie;
use App\Plan;
use App\Universitie;
use App\User;
use App\Role;
use App\Countrie;
use App\Search;
use App\Division;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


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
                if($role->name=='admin' || $role->name=='student' || $role->name=='admin2'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){
        $this->user= Auth::user();
        $idRegistration= Registration::where('User',$this->user->id)->first()->ID;
       
        $searchers = DB::table('theses')
                    ->leftJoin('registrations','registrations.ID','=','theses.Searcher')
                    ->leftJoin('nationalities','nationalities.ID','=','registrations.Nationalitie')
                    ->leftJoin('countries','countries.ID','=','registrations.Countrie')
                    ->where('theses.Supervisor',$idRegistration)
                    ->select('registrations.*','countries.Name as countrieName','nationalities.Name as nationalitieName','theses.Title as thesesTitle')
                    ->get();
        return view('portal.supervisor.searchers.index')->with('searchers',$searchers);
    }
  
    public function getSearcherSearchs($id){
        $searcher = Registration::where('ID',$id)->get()->first();
        $searchs = DB::table('searchs')
        ->join('registrations','registrations.ID','=','searchs.Searcher')
        ->leftJoin('divisionunits','divisionunits.id','=','searchs.Divisionunit')
        ->leftJoin('divisions','divisions.ID','=','searchs.Division')
        ->where('registrations.ID',$id)
        ->select('searchs.*','divisionunits.Name as divName','divisions.Name as diviName', 'DivisionAll', 'DivisionunitAll')
        ->get();
        return view('portal.supervisor.searchers.getSearcherSearchs',compact('searchs','searcher'));
    }



    // search profile with limit info for supervisor
    public function getSearcherProfile($id) {
        $searcher = Registration::where('ID',$id)->get()->first();
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        $universities  = Universitie::all();
        return view('portal.supervisor.searchers.SearcherProfile',compact('searcher' , 'nationalities' , 'countries' ,'universities'));
    }



    public function getSearcherAcademic($id){

        $registration = Registration::where('ID',$id)->first();

        $user= User::where('id', $registration->User)->first();

        $countries = Countrie::all();
        $universities = Universitie::all();
        $searcher = Registration::where('User',$user->id)->first();

        $plans = Plan::where('Searcher',$id)->get();
        $meetings = DB::table('meetings_searchers')
            ->join('registrations','meetings_searchers.Searcher','registrations.ID')
            ->join('meetings','meetings_searchers.Meeting','meetings.ID')
            ->distinct()
            ->select('meetings.Date','meetings.Location','meetings.Name')
            ->get();
        // Set dates
        $dateIni = $registration->these->BeginningDate;
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
        $supervisors = Registration::where('Type','supervisor')->get();
        return view('portal.supervisor.searchers.SearcherAcademic')->with('registration',$registration)->with('countries',$countries)->with('supervisors',$supervisors)->with('numberOfMonths',$numberOfMonths)->with('meetings',$meetings)->with('plans', $plans)->with('enabledPlan',$searcher->EnablePlanEdit)->with('searcher', $searcher)->with('universities', $universities);

    }




    
    public function addSupervisorNote(Request $request){
        
        DB::table('searchs')->where('ID',$request->input('search'))
        ->update(array(
            'Note'=>$request->input('note')          
        ));
        Session::put('success_updatenote', 'تمت اضافة الملاحظات بنجاح');        
        return redirect()->back();
    }
   
}
