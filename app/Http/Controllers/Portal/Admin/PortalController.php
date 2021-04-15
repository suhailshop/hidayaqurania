<?php

namespace App\Http\Controllers\Portal;

use App\Nationalitie;
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
use Carbon\Carbon;
use DateTime;
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

        // added on 3 March 2020 : control the batch (batch1, batch2, ..etc):
        $student_batch = '';

        if($role->name=='student'){

        $student_batch = Registration::where('User',$this->user->id)->first()->regiment;
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
        } // end of student


        $searchers = Registration::where('type','searcher')->get();
        if($role->name=='supervisor'){
            
            $this->user= Auth::user();
            $id = Registration::where('User',$this->user->id)->first()->ID;
            $myreports = Supervisorsreport::where('Supervisor',$id)->get();
            $searchers = DB::table('theses')
            ->leftJoin('registrations','registrations.ID','=','theses.Searcher')
            ->leftJoin('nationalities','nationalities.ID','=','registrations.Nationalitie')
            ->leftJoin('countries','countries.ID','=','registrations.Countrie')
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
        $supervisors = Registration::where('type','supervisor')->where('Status', 'yes')->get();
        $universities = Universitie::all();
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
        $books = Book::all();
        $theses = These::all();
        $helps=Help::all()->sum('Price');
        $provides=Provide::all();
        $reviwers = Registration::where('type','reviewer')->get();
        $lastsearchers= Registration::where('Type','searcher')->orderBy('created_at', 'asc')->take(7)->get();
        $allsearchs = Search::all();



        return view('portal.welcome',compact(['searchsok','searchsko','cycles','admin_reports','myreports','searchs','sections','divisions','countries','my_searchs','these_name','universities','supervisors','searchers','books','theses','helps','provides','lastsearchers' , 'reviwers' , 'allsearchs' ,'nationalities' , 'student_batch']));
    }


    public static function getDays($to)
    {


        $from1 =  Carbon::now()->format('Y-m-d');

        $to1 = new Carbon($to);

        //dd(  $from1  == $to);
        
        
 
    
         if ($from1 >= $to)
       {
           return '<span class="badge badge-danger"> انتهى وقت الإرسال  </span>' ;

       } else {

           $diff_in_days = $to1->diffInDays($from1);
           return '<span class="badge badge-info"> تبقى عدد : '. $diff_in_days . ' يوم للإرسال </span>' ;
       }
       

    }


    public static function getBatch($batch) {

        if($batch == 1)
            return "الأولى" ;
        elseif ($batch == 2)
            return "الثانية" ;
        elseif ($batch == 3)
            return "الثالثة" ;
        elseif ($batch == 4)
            return "الرابعة" ;
        elseif ($batch == 5)
            return "الخامسة" ;
        elseif ($batch == 6)
            return "السادسة" ;
        elseif ($batch == 7)
            return "السابعة" ;
        elseif ($batch == 8)
            return "الثامنة" ;
        elseif ($batch == 9)
            return "التاسعة" ;
        elseif ($batch == 10)
            return "العاشرة" ;

    }
}