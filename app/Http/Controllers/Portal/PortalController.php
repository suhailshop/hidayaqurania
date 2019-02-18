<?php

namespace App\Http\Controllers\Portal;

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

        $this->user= Auth::user();
        $id = Registration::where('User',$this->user->id)->first()->ID;
        $these_name = These::where('Searcher',$id)->first()->Title;
        $my_searchs = Search::where('Searcher',$id)->get();
        $divisions = Division::orderBy('Order','asc')->get();
        $sections = Section::orderBy('Order','asc')->get();
        $searchs = Search::where('Searcher',$id)->get();
        $myreports = Searchersreport::where('Searcher',$id)->get();
        $admin_reports = DB::table('committesreports')
                ->join('searchersreports','searchersreports.ID','=','committesreports.Searcherreports')
                ->where('searchersreports.Searcher',$id)
                ->count();




        }




        $searchers = Registration::where('type','searcher')->get();
        $supervisors = Registration::where('type','supervisor')->get();
        $universities = Universitie::all();
        $countries = Countrie::all();
        $books = Book::all();
        $theses = These::all();
        $helps=Help::all()->sum('Price');
        $provides=Provide::all();
        $lastsearchers= Registration::where('Type','searcher')->orderBy('created_at', 'asc')->take(7)->get();
        
        return view('portal.welcome',compact('admin_reports','myreports','searchs','sections','divisions','countries','my_searchs','these_name','universities','supervisors','searchers','books','theses','helps','provides','lastsearchers'));
    }
}
