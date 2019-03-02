<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Universitie;
use App\User;
use App\Role;
use App\Nationalitie;
use App\Countrie;
use App\Registration;
use App\These;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
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
        $admins =DB::table('users')
                ->join('roles','users.role_id','=','roles.id') 
                ->whereIn('roles.name',array('admin','admin2'))
                ->get(['roles.name as rolename','users.email','users.name']);
        return view('portal.admin.users.index')->with('admins',$admins);
    }

    public function addUserAdmin(){
        return view('portal.admin.users.addUserAdmin');
    }

    public function addUserAdminPost(Request $request){
        $user           = new User;
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id  = Role::where('name',$request->input('role'))->first()->id;
        $user->save();
        Session::put('success_add', 'تم اضافة المستخدم بنجاح');        
        return redirect()->route('allUser');
    }

    public function addUserSearcher(){
        $supervisors = Registration::where('Type','supervisor')->get();
        return view('portal.admin.users.addUserSearcher',compact('supervisors'));
    }

    public function addUserSearcherPost(Request $request){
        $user = new User;
        $user->name=$request->input('firstname');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('name','student')->first()->id;
        $user->save();       

        $registration = new Registration;
        $registration->Fistname = $user->name;
        $registration->Type = "searcher";
        $registration->Status = 'غير مفعل';
        $registration->User = $user->id;
        $registration->Email = $request->input('email');
        $registration->Code = $request->input('Code');
        $registration->save();

        $these = new These;
        $these->Title = $request->input('Title');
        $these->ProgramDuration = $request->input('ProgramDuration');
        $these->BeginningDate = $request->input('BeginningDate');
        $these->CompletionDate = $request->input('CompletionDate');
        $these->Notes = $request->input('Notes');
        $these->Supervisor = $request->input('Supervisor');
        $these->Searcher = $registration->id;
        $these->save();
        Session::put('success_add', 'تم اضافة المستخدم بنجاح');        
        return redirect()->route('allUser');
    }








    public function addUserSupervisor(){
        $universities = Universitie::all();
        return view('portal.admin.users.addUserSupervisor', compact('universities'));
    }


    public function addUserSupervisorPost(Request $request){
        $user = new User;
        $user->name=$request->input('firstname');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('name','supervisor')->first()->id;
        $user->save();

        $registration = new Registration;
        $registration->Fistname = $user->name;
        $registration->Type = "supervisor";
        $registration->Status = 'yes';
        $registration->User = $user->id;
        $registration->Email = $request->input('email');
        $registration->University = $request->input('university');
        $registration->save();

        Session::put('success_add', 'تم اضافة المشرف بنجاح');
        return redirect()->route('allUser');
    }







    public function addUserReviewer(){
        $countries = Countrie::all();
        return view('portal.admin.users.addUserReviwer', compact('countries'));
    }


    public function addUserReviewerPost(Request $request){
        $user = new User;
        $user->name=$request->input('firstname');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('name','reviewer')->first()->id;
        $user->save();

        $registration = new Registration;
        $registration->Fistname = $user->name;
        $registration->Type = "reviewer";
        $registration->Status = 'yes';
        $registration->User = $user->id;
        $registration->Email = $request->input('email');
        $registration->Countrie = $request->input('country');
        $registration->save();

        Session::put('success_add', 'تم اضافة باحث مساعد بنجاح');
        return redirect()->route('allUser');
    }







}
