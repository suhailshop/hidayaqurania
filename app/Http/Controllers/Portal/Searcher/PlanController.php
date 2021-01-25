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
use Illuminate\Support\Facades\Session;


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
                if($role->name=='admin' || $role->name=='supervisor' || $role->name=='admin2'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){
        $this->user= Auth::user();
        $searcher = Registration::where('User',$this->user->id)->first();
        $plans = Plan::where('Searcher',$searcher->ID)->get();

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

        return view('portal.searcher.plan.index')->with('plans',$plans)->with('enabledPlan',$searcher->EnablePlanEdit)->with('numberOfMonths',$numberOfMonths);
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
       // old one : return redirect()->route('searcherPlan');
       Session::put('success_edit', 'تمت اضافة الخطة الزمنية بنجاح');                
       
        return redirect()->route('searcherAcademic');

   
    }
    public function editPlan(Request $request){
        if($request->input('enabledPlan')== 'true'){
        DB::table('plans')
            ->where('ID',$request->input('id_plan'))
            ->update(['Record'=>$request->input('Record') , 'StartDate'=>$request->input('StartDate') , 'EndDate'=>$request->input('EndDate')]);}
        //return redirect()->route('searcherPlan');
        Session::put('success_edit', 'تم تعديل الخطة الزمنية بنجاح');                
        
        return redirect()->route('searcherAcademic');
    }
}
