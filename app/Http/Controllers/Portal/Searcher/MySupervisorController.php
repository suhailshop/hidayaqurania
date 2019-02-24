<?php

namespace App\Http\Controllers\Portal\Searcher;

 use App\Countrie;
 use App\Http\Controllers\Controller;
 use App\Nationalitie;
 use App\Registration;
 use App\Role;
 use Illuminate\Support\Facades\Auth;

 class MySupervisorController extends Controller
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


    // search profile with limit info for supervisor
    public function getSupervisorProfile($id) {
        $supervisor = Registration::where('ID',$id)->get()->first();
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        return view('portal.searcher.supervisor.mySupervisor',compact('supervisor' , 'nationalities' , 'countries'));
    }



}
