<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Nationalitie;
use App\Universitie;
use App\User;
use App\Role;
use App\Countrie;
use App\Registration;
use App\Meeting;
use App\Criteria;
use App\Progrss;
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
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $searchers = Registration::where('Type','searcher')->where('Status','مفعل')->get();
        $meetings = Meeting::all();
        $supervisors = Registration::where('Type','supervisor')->get();
        $criterias = Criteria::all();
        $universities = Universitie::all();
        return view('portal.admin.searchers.index')->with('searchers',$searchers)->with('criterias',$criterias)->with('meetings',$meetings)->with('supervisors',$supervisors)->with('universities', $universities);
    }

    public function plandetails($id){
        $searcher = Registration::where('ID',$id)->first();


        $meetings = DB::table('meetings_searchers')
            ->join('registrations','meetings_searchers.Searcher','registrations.ID')
            ->join('meetings','meetings_searchers.Meeting','meetings.ID')
            ->distinct()
            ->select('meetings.Date','meetings.Location','meetings.Name')
            ->get();
        $criterias = DB::table('searcher_critera')
            ->join('registrations','searcher_critera.Searcher','registrations.ID')
            ->join('criterias','searcher_critera.Criteria','criterias.ID')
            ->distinct()
            ->select('criterias.ProposedScore','criterias.MaximumScore','criterias.Name')
            ->get();

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

        $supervisors = Registration::where('Type','supervisor')->get();
        $countries = Countrie::all();

        $universities = Universitie::all();

        return view('portal.admin.searchers.plandetails')->with('searcher',$searcher)->with('countries',$countries)->with('supervisors',$supervisors)->with('numberOfMonths',$numberOfMonths)->with('criterias',$criterias)->with('meetings',$meetings)->with('universities' , $universities);
    }

    public function editPlanEnable(Request $request){
        $searcher = Registration::where('ID',$request->input('id_searcher'))->first();
        if($searcher->EnablePlanEdit=='true')
        {
                DB::table('Registrations')
                ->where('ID', $searcher->ID)
                ->update(['EnablePlanEdit' => 'false']);
        }
        else {
            DB::table('Registrations')
            ->where('ID', $searcher->ID)
            ->update(['EnablePlanEdit' => 'true']);
        }
        $searcher->save();
        Session::put('success_edit', 'تم تعديل حالة الخطة بنجاح'); 
        return redirect()->route('plandetails',array('id' => $searcher->ID));

    }

    public function get($id){
        $meetings = DB::table('meetings_searchers')
                    ->join('registrations','meetings_searchers.Searcher','registrations.ID')
                    ->join('meetings','meetings_searchers.Meeting','meetings.ID')
                    ->distinct()
                    ->select('meetings.Date','meetings.Location','meetings.Name')
                    ->get();
        $criterias = DB::table('searcher_critera')
                    ->join('registrations','searcher_critera.Searcher','registrations.ID')
                    ->join('criterias','searcher_critera.Criteria','criterias.ID')
                    ->distinct()
                    ->select('criterias.ProposedScore','criterias.MaximumScore','criterias.Name')
                    ->get();

        $searcher = Registration::where('ID',$id)->first();        
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
        
        $supervisors = Registration::where('Type','supervisor')->get();  
        $countries = Countrie::all();

        return view('portal.admin.searchers.get')->with('countries',$countries)->with('supervisors',$supervisors)->with('searcher',$searcher)->with('numberOfMonths',$numberOfMonths)->with('criterias',$criterias)->with('meetings',$meetings);
    }



    public function getSearch($id){


        $registration = Registration::where('ID',$id)->get()->first();
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
        $universities = Universitie::all();


        return view('portal.admin.searchers.getSearch', compact('registration', 'countries','nationalities','universities'));

    }

    public function updateCodeSearcher(Request $request){
        DB::table('registrations')
        ->where('ID', $request->input('idsearcher'))
        ->update(['Code' => $request->input('code')]);
        Session::put('success_edit', 'تم تعديل رقم الباحث بنجاح'); 
        
        return redirect()->route('getSearcher',array('id' =>$request->input('idsearcher')));

    }

    public function getSearcherSearchs($id) {

        $searcher = Registration::where('ID',$id)->get()->first();
        $searchs = DB::table('searchs')
            ->join('registrations','registrations.ID','=','searchs.Searcher')
            ->leftJoin('divisionunits','divisionunits.id','=','searchs.Divisionunit')
            ->leftJoin('divisions','divisions.ID','=','searchs.Division')
            ->where('registrations.ID',$id)
            ->select('searchs.*','divisionunits.Name as divName','divisions.Name as diviName')
            ->orderBy('searchs.ID', 'desc')
            ->get();
        return view('portal.admin.searchers.getSearcherSearchs',compact('searchs','searcher'));
    }



    public function searcherProgressPost(Request $request){
        $searcher = Registration::where('ID',$request->input('id_searcher'))->first();
        if(!isset($searcher->progress->ID)){
            DB::table('Progress')->insert([
                'Months' => $request->input('Months'),
                'Searcher' => $request->input('id_searcher'),
                'MonthlyProgress' => $request->input('MonthlyProgress'),
                'InitialProgress' => $request->input('InitialProgress'),
            ]);
        }
        else{
            DB::table('Progress')
            ->where('Searcher', $searcher->ID)
            ->update(['Months' => $request->input('Months'),
                      'MonthlyProgress'=>$request->input('MonthlyProgress'),
                      'InitialProgress'=>$request->input('InitialProgress')]);
        }
        Session::put('success_edit', 'تم تعديل المعلومات بنجاح'); 
        
        return redirect()->route('getSearcher',array('id' => $searcher->ID));
    }
  
   
    public function delete($id){
        Registration::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تم حذف الباحث بنجاح'); 
        
        return redirect()->route('allSearcher');
    }

    public function addToMeeting(Request $request){
        DB::table('meetings_searchers')->insert([
            'Meeting' => $request->input('meeting'),
            'Searcher' => $request->input('searcher'),
            'Status' => 'yes'
        ]);
        Session::put('success_edit', 'تم تسجيل الحضور بنجاح'); 
        
        return redirect()->route('allSearcher');
    }

    public function addThese(Request $request){
        DB::table('theses')->insert([
            'Supervisor' => $request->input('Supervisor'),
            'Searcher' => $request->input('Searcher'),
            'Title' => $request->input('Title'),
            'ProgramDuration' => $request->input('ProgramDuration'),
            'BeginningDate' => $request->input('BeginningDate'),
            'CompletionDate' => $request->input('CompletionDate'),
            'Notes' => $request->input('Notes'),

            'Status' => 'yes'
        ]);
        Session::put('success_edit', 'تم اضافة الرسالة بنجاح'); 
        
        return redirect()->route('allSearcher');
    }

    public function addCriteriasToSearcher(Request $request){
        
        foreach($request->input('criterias') as $m)
        {
            DB::table('searcher_critera')->insert([
                'Searcher' => $request->input('searcher'),
                'Criteria' => $m,
                'Status' => 'yes'
            ]);

        }
        Session::put('success_edit', 'تم اضافة المعايير بنجاح'); 
        
        return redirect()->route('allSearcher');
    }

    public function editStatusSearcher($id,$status){
        DB::table('registrations')
        ->where('ID',$id)
        ->update([
            'Status' => $status
        ]);
        Session::put('success_edit', 'تم تعديل حالة الباحث بنجاح'); 
        
        return redirect()->route('allSearcher');
    }

    public function updateSearcherInfos(Request $request){
        DB::table('registrations')
            ->where('ID',$request->input('id_registration'))
            ->update([
                'Fistname' => $request->input('Fistname'),
                'LastName' => $request->input('LastName'),
                'City' => $request->input('City'),
                'Countrie' => $request->input('Countrie'),
                'University' => $request->input('University')
            ]);
        DB::table('theses')
            ->where('ID',$request->input('these_id'))
            ->update([
                'Title' => $request->input('Title'),
                'CompletionDate' => $request->input('CompletionDate'),
                'BeginningDate' => $request->input('BeginningDate'),
                'supervisor' => $request->input('supervisor')
            ]);
            Session::put('success_edit', 'تم تعديل معلومات الباحث بنجاح'); 
            
        return redirect()->route('getSearcher',array('id' => $request->input('id_registration')));
    }



    // now admin can update user's profile on behalf of

    public function editSearcherProfile(Request $request){

        $id = $request->input('id_registration');
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
        return redirect()->route('getSearcher', ['ID'=>$id]);
    }


    // now admin can change user's password or reset it
    public function editpassword(Request $request){

        $id = $request->input('id_user');
        $regId = $request->input('reg_id');
        $newPassword = bcrypt($request->input('Password'));



            DB::table('users')
            ->where("id", '=',  $id)
            ->update(['password'=> $newPassword]);




        Session::put('success_edit', 'تم تغيير الرقم السري للحساب بنجاح');
        return redirect()->route('getSearcher', ['ID'=>$regId]);
    }



    public function changeSupervisor(Request $request){


        $searcher = $request->input('id_searcher');


        DB::table('theses')->where('Searcher',$searcher)
            ->update(array(

            'Supervisor' => $request->input('Supervisor'),
            'Searcher' => $searcher,
            'Title' => $request->input('Title'),
            'ProgramDuration' => $request->input('ProgramDuration'),
            'BeginningDate' => $request->input('BeginningDate'),
            'CompletionDate' => $request->input('CompletionDate'),


            ));

        Session::put('success_edit', 'تم تعديل المعلومات  بنجاح');
        return redirect()->route('getSearcher', ['ID'=>$searcher]);


    }

}

