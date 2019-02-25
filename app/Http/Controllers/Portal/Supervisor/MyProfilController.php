<?php

namespace App\Http\Controllers\Portal\Supervisor;

use App\User;
use App\Role;
use App\Countrie;
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
                if($role->name=='student' || $role->name=='admin' || $role->name=='admin2'){ return redirect('/');}            
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
        $user = Auth::user();
        return view('portal.supervisor.profil',compact('registration','user','countries','nationalities'));
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
        return redirect()->route('supervisorProfile');
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
        return redirect()->route('supervisorProfile');
    }

    public function editpassword(Request $request){
      
        DB::table('users')->where('ID',$request->input('id_user'))
        ->update(array(
            'Email'=>$request->input('Email'),
            'Password'=>  bcrypt($request->input('Password'))      
        ));
        Session::put('success_edit', 'تم تعديل الحساب بنجاح');
        return redirect()->route('supervisorProfile');
    }
}
