<?php

namespace App\Http\Controllers\Portal\Supervisor;

use App\Nationalitie;
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
                if($role->name=='admin' || $role->name=='student' || $role->name=='admin2'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){
        $this->user= Auth::user();
        $idRegistration= Registration::where('User',$this->user->id)->first()->ID;
       
        $searchers = DB::table('theses')
                    ->join('registrations','registrations.ID','=','theses.Searcher')
                    ->join('nationalities','nationalities.ID','=','registrations.Nationalitie')
                    ->join('countries','countries.ID','=','registrations.Countrie')
                    ->where('theses.Supervisor',$idRegistration)
                    ->select('registrations.*','countries.Name as countrieName','nationalities.Name as nationalitieName','theses.Title as thesesTitle')
                    ->get();
        return view('portal.supervisor.searchers.index')->with('searchers',$searchers);
    }
  
    public function getSearcherSearchs($id){
        $searcher = Registration::where('ID',$id)->get()->first();
        $searchs = DB::table('searchs')
        ->join('registrations','registrations.ID','=','searchs.Searcher')
        ->join('divisionunits','divisionunits.id','=','searchs.Divisionunit')
        ->join('divisions','divisions.ID','=','searchs.Division')
        ->where('registrations.ID',$id)
        ->select('searchs.*','divisionunits.Name as divName','divisions.Name as diviName')
        ->get();
        return view('portal.supervisor.searchers.getSearcherSearchs',compact('searchs','searcher'));
    }



    // search profile with limit info for supervisor
    public function getSearcherProfile($id) {
        $searcher = Registration::where('ID',$id)->get()->first();
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        return view('portal.supervisor.searchers.SearcherProfile',compact('searcher' , 'nationalities' , 'countries'));
    }


    
    public function addSupervisorNote(Request $request){
        
        DB::table('searchs')->where('ID',$request->input('search'))
        ->update(array(
            'Note'=>$request->input('note')          
        ));
        Session::put('success_updatenote', 'تمت اضافة الملاحظات بنجاح');        
        return redirect()->route('allSearcherSupervisor');
    }
   
}
