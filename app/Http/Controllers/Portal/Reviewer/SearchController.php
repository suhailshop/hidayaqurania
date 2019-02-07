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
  
   
    
}
