<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Universitie;
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


class ReviewerController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if(($role->name!='admin2') and ($role->name!='admin'))  { return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){
        
        $reviewers = Registration::where('Type','reviewer')->get();
        $universities = Universitie::all();
        return view('portal.admin.reviewers.index')->with('reviewers',$reviewers)->with('universities', $universities);
    }


    public function addReviewer(){
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();
        return view('portal.admin.reviewers.add',compact('nationalities','countries'));
    }

    public function addReviewerPost(Request $request){
        $user = new User;
        $user->name=$request->input('firstname');
        $user->email =$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('name','reviewer')->first()->id;
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
        $registration->Type = "reviewer";
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
        Session::put('success_edit', 'تم اضافة المراجع بنجاح'); 
        return redirect()->route('allReviewer');
    }
    public function delete($id){
        $reviewer = Registration::where('ID', $id)->first();
        User::destroy($reviewer->User);

        Registration::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تمت حذف المراجع بنجاح'); 
        return redirect()->route('allReviewer');
    }




    public function showProfile($id){

        $reviwer = Registration::where('ID',$id)->get()->first();
        $nationalities = Nationalitie::all();
        $countries = Countrie::all();

         $searchs = DB::table('searchs')
            ->join('divisions','divisions.ID','=','searchs.Division')
            ->join('divisionunits','divisionunits.ID','=','searchs.Divisionunit')
            ->join('reviewersearchs','reviewersearchs.search','=','searchs.ID')
            ->join('registrations','registrations.ID','=','searchs.Searcher')
            ->join('users','users.id','=','registrations.User')
            ->where('reviewersearchs.reviewer',$reviwer->ID)
            ->get(['divisionunits.Name as NameDivUni','divisions.Name as divname','searchs.*','registrations.Fistname','registrations.LastName']);



        return view('portal.admin.reviewers.profil',compact('reviwer' , 'nationalities' , 'countries', 'searchs')) ;


    }




    public function getAllReviewerSearchs($id){
        $searchs = DB::table('searchs')
                    ->leftJoin('divisions','divisions.ID','=','searchs.Division')
                    ->leftJoin('divisionunits','divisionunits.ID','=','searchs.Divisionunit')
                    ->join('reviewersearchs','reviewersearchs.search','=','searchs.ID')
                    ->join('registrations','registrations.ID','=','searchs.Searcher')
                    ->join('users','users.id','=','registrations.User')
                    ->where('reviewersearchs.reviewer',$id)
                    ->get(['divisionunits.Name as NameDivUni','divisions.Name as divname','searchs.*','registrations.Fistname','registrations.LastName']);
        return view('portal.admin.reviewers.allsearchs',compact('searchs'));
    }

    public function getOneProfile($id){
        
        $registration = Registration::where('ID',$id)->first();
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
        $user = $registration->user;
        return view('portal.admin.reviewers.getOne',compact('registration','user','countries','nationalities'));
    }

}
