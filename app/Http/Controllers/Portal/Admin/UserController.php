<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Nationalitie;
use App\Countrie;
use App\Registration;
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
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/');}            
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
        Session::put('success_add', 'تم اضافة المستخدم بنجاح');
        $user->save();
        return redirect()->route('allUser');
    }

    public function addUserSearcher(){
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        return view('portal.admin.users.addUserSearcher',compact('nationalities','countries'));
    }

    public function addUserSearcherPost(Request $request){
        $user = new User;
        $user->name=$request->input('firstname');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('name','student')->first()->id;
        $user->save();       

        $registration = new Registration;
        $registration->PassportNumber = $request->input('PassportNumber');
        $registration->NationalNumber = $request->input('NationalNumber');
        $registration->Fistname = $user->name;
        $registration->Lastname = $request->input('lastname');
        $registration->Gender = $request->input('gender');
        $registration->BirthDate = $request->input('birthdate');
        $registration->BirthCity = $request->input('BirthCity');
        $registration->Nationalitie = $request->input('nationalitie');
        $registration->Countrie = $request->input('countrie');
        $registration->City = $request->input('city1');
        $registration->Location = $request->input('location');
        $registration->University = $request->input('University');
        $registration->Faculty = $request->input('Faculty');
        $registration->CertificateType = $request->input('CertificateType');
        $registration->CertificateDegree = $request->input('CertificateDegree');
        $registration->InscriptionDate = $request->input('InscriptionDate');
        $registration->Phonne1 = $request->input('Phonne1');
        $registration->Phonne2 = $request->input('Phonne2');
        $registration->Type = "searcher";
        $registration->Status = 'غير مفعل';
        $registration->User = $user->id;
        $registration->Email = $request->input('email');
        $profileImage = $request->file('PictureURL');
        $profileImageSaveAsName = time().'.'.$profileImage->getClientOriginalExtension();
        $upload_path = 'public/registrations';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->storeAs($upload_path, $profileImageSaveAsName);
        $registration->PictureURL = $profileImageSaveAsName;
        $registration->save();
        Session::put('success_add', 'تم اضافة المستخدم بنجاح');        
        return redirect()->route('allUser');
    }
}
