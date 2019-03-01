<?php

namespace App\Http\Controllers\Portal;

use App\Searchers_reports;
use App\User;
use App\Role;
use App\Registration;
use App\Countrie;
use App\Universitie;
use App\Book;
use App\These;
use App\Help;
use App\Search;
use App\Section;
use App\Division;
use App\Provide;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Cycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PortalController extends Controller
{
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();         
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        //-------------searcher ----------------- //
        $role=Role::get()->where('id',$this->user->role_id)->first();
        $these_name='';
        $sections='';
        $divisions='';
        $my_searchs='';
        $searchs=[];
        $myreports=[];
        if($role->name=='student'){
        $cycles=Cycle::all();
        $this->user= Auth::user();
        $id = Registration::where('User',$this->user->id)->first()->ID;
        if(!empty(These::where('Searcher',$id)->first()->Title)){
            $these_name = These::where('Searcher',$id)->first()->Title;
        }else{
            $these_name= "لا أطروحة";
        }
        $my_searchs = Search::where('Searcher',$id)->get();
        $divisions = Division::orderBy('Order','asc')->get();
        $sections = Section::orderBy('Order','asc')->get();
        $searchs = Search::where('Searcher',$id)->get();
        $myreports = Searchers_reports::where('search',$id)->get();

        $admin_reports = DB::table('committesreports')
                ->join('searchersreports','searchersreports.ID','=','committesreports.Searcherreports')
                ->where('searchersreports.Searcher',$id)
                ->count();
        }

        $searchers = Registration::where('type','searcher')->get();
        if($role->name=='supervisor'){
            
            $this->user= Auth::user();
            $id = Registration::where('User',$this->user->id)->first()->ID;
            $myreports = Supervisorsreport::where('Supervisor',$id)->get();
            $searchers = DB::table('theses')
            ->join('registrations','registrations.ID','=','theses.Searcher')
            ->join('nationalities','nationalities.ID','=','registrations.Nationalitie')
            ->join('countries','countries.ID','=','registrations.Countrie')
            ->where('theses.Supervisor',$id)
            ->select('registrations.*','countries.Name as countrieName','nationalities.Name as nationalitieName','theses.Title as thesesTitle')
            ->get();
        }
        $searchsok=0;
        $searchsko=0;
        if($role->name=='reviewer'){
            
            $this->user= Auth::user();
            $id = Registration::where('User',$this->user->id)->first()->ID;
            $searchs = DB::table('searchs')
            ->join('divisions','divisions.ID','=','searchs.Division')
            ->join('divisionunits','divisionunits.ID','=','searchs.Divisionunit')
            ->join('reviewersearchs','reviewersearchs.search','=','searchs.ID')
            ->join('registrations','registrations.ID','=','searchs.Searcher')
            ->join('users','users.id','=','registrations.User')
            ->where('reviewersearchs.reviewer',$id)
            ->get(['divisionunits.Name as NameDivUni','divisions.Name as divname','searchs.*','registrations.Fistname','registrations.LastName']);
            $searchsok = DB::table('searchs')
            ->join('divisions','divisions.ID','=','searchs.Division')
            ->join('divisionunits','divisionunits.ID','=','searchs.Divisionunit')
            ->join('reviewersearchs','reviewersearchs.search','=','searchs.ID')
            ->join('registrations','registrations.ID','=','searchs.Searcher')
            ->join('users','users.id','=','registrations.User')
            ->join('reviewers_reports','reviewers_reports.search','=','searchs.ID')
            ->where('reviewersearchs.reviewer',$id)
            ->get(['searchs.ID'])->count();
            
            $searchsko = count($searchs) - $searchsok;
        }
        $supervisors = Registration::where('type','supervisor')->get();
        $universities = Universitie::all();
        $countries = Countrie::all();
        $books = Book::all();
        $theses = These::all();
        $helps=Help::all()->sum('Price');
        $provides=Provide::all();
        $lastsearchers= Registration::where('Type','searcher')->orderBy('created_at', 'asc')->take(7)->get();
        
        return view('portal.welcome',compact(['searchsok','searchsko','cycles','admin_reports','myreports','searchs','sections','divisions','countries','my_searchs','these_name','universities','supervisors','searchers','books','theses','helps','provides','lastsearchers']));
    }
}