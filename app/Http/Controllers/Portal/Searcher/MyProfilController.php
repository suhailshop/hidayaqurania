<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\Meeting;
use App\Plan;
use App\Universitie;
use App\User;
use App\Role;
use App\Countrie;
use App\Searchersreport;
use App\Nationalitie;
use App\Section;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MyProfilController extends Controller
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
        $registration = Registration::where('User',$this->user->id)->first();
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
        $universities = Universitie::all();
        $user = Auth::user();
        return view('portal.searcher.profil',compact('registration','user','countries','nationalities','universities'));
    }
  
    public function editPost(Request $request){
        
        DB::table('registrations')->where('ID',$request->input('id_registration'))
            ->update(array(
                'PassportNumber'=>$request->input('PassportNumber'),
                'NationalNumber'=>$request->input('NationalNumber'),
                'Fistname'=>$request->input('firstname'),
                'Lastname'=>$request->input('lastname'),
                'Gender'=>$request->input('gender'),
                'BirthDate'=>$request->input('birthdate'),
                'BirthCity'=>$request->input('BirthCity'),
                'Nationalitie'=>$request->input('nationalitie'),
                'Countrie'=>$request->input('countrie'),
                'City'=>$request->input('city1'),
                'Location'=>$request->input('location'),
                'University'=>$request->input('University'),  
                'Faculty'=>$request->input('Faculty'),
                'CertificateType'=>$request->input('CertificateType'),
                'CertificateDegree'=>$request->input('CertificateDegree'),
                'InscriptionDate'=>$request->input('InscriptionDate'),
                'Phonne1'=>$request->input('Phonne1'),
                'Phonne2'=>$request->input('Phonne2')          
        ));
        Session::put('success_edit', 'تم تعديل الحساب بنجاح');
        return redirect()->route('searcherProfile');
    }

    public function editAvatar(Request $request){
        if($request->hasFile('PictureURL')){
            $request->validate([
                'PictureURL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->PictureURL->getClientOriginalExtension();
            $request->PictureURL->storeAs('public/registrations',$fileName);
        }
        DB::table('registrations')->where('ID',$request->input('id_registration'))
        ->update(array(
            'PictureURL'=>$fileName            
        ));
        Session::put('success_edit', 'تم تعديل الحساب بنجاح');                
        return redirect()->route('searcherProfile');
    }

    public function editpassword(Request $request){


       DB::table('users')->where('ID',$request->input('id_user'))
        ->update(array(

            'password'=>  bcrypt($request->input('Password'))      
        ));


        Session::put('success_edit', 'تم تعديل الحساب بنجاح');
        return redirect()->route('searcherProfile');
    }

    public function uploadSearcherCV(Request $request){
        $fileName="";
        if($request->hasFile('CV')){

            $request->validate([
                'CV' => 'required|file|max:1024',
            ]);
            $fileName = "CV".time().'.'.request()->CV->getClientOriginalExtension();
            $request->CV->storeAs('public/CV',$fileName);
        }
       
        DB::table('registrations')->where('User',$request->input('id_user'))
        ->update(array(
            'CV'=>$fileName
        ));
        Session::put('success_edit', 'تمت رفع السيرة الذاتية بنجاح'); 
        return redirect()->route('searcherProfile');
    }




    public function academic(){
        $this->user= Auth::user();
        $registration = Registration::where('User',$this->user->id)->first();
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
        $user = Auth::user();
        $searcher = Registration::where('User',$this->user->id)->first();
        $plans = Plan::where('Searcher',$searcher->ID)->get();
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
        $universities = Universitie::all();
        return view('portal.searcher.myacademic')->with('registration',$registration)->with('countries',$countries)->with('supervisors',$supervisors)->with('numberOfMonths',$numberOfMonths)->with('meetings',$meetings)->with('plans', $plans)->with('enabledPlan',$searcher->EnablePlanEdit)->with('universities', $universities);
    }

    public function editPlan(Request $request){
        if($request->input('enabledPlan')== 'true'){
            DB::table('plans')
                ->where('ID',$request->input('id_plan'))
                ->update(['Record'=>$request->input('Record') , 'StartDate'=>$request->input('StartDate') , 'EndDate'=>$request->input('EndDate')]);}
        Session::put('success_edit', 'تم تعديل الخطة الزمنية بنجاح'); 
        return redirect()->route('searcherAcademic');
    }


}
