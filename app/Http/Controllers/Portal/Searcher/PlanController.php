<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\User;
use App\Role;
use App\Countrie;
use App\Searchersreport;
use App\Plan;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='admin' || $role->name=='supervisor'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){
        $this->user= Auth::user();
        $id = Registration::where('User',$this->user->id)->first()->ID;
        $plans = Plan::where('Searcher',$id)->get();
        return view('portal.searcher.plan.index')->with('plans',$plans);
    }
  
    public function add(){
       
        return view('portal.searcher.plan.add');
    }
    public function addPost(Request $request){
        $plan = new Plan;
        $plan->Record = $request->input('Record');
        $plan->StartDate = $request->input('StartDate');
        $plan->EndDate = $request->input('EndDate');
        $this->user= Auth::user();
        $plan->Searcher = Registration::where('User',$this->user->id)->first()->ID;
        
        $plan->save();
        return redirect()->route('searcherPlan');
   
    }
    public function delete($id){
        Plan::where('ID', $id)->forcedelete(); 
        return redirect()->route('searcherPlan');
    }
}
