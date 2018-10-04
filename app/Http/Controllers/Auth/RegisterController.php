<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Registration;
use App\Nationalitie;
use App\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        $countries = Countrie::all();
        $nationalities = Nationalitie::all();
    
        return view ('auth.register', compact('nationalities','countries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
          
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User;
        $user->name=$data['firstname'];
        $user->email =$data['email'];
        $user->password = bcrypt($data['password']);
        $user->role_id = Role::where('name','student')->first()->id;
        $user->save();

        $registration = new Registration;
        $registration->PassportNumber = $data['PassportNumber'];
        $registration->NationalNumber = $data['NationalNumber'];
        $registration->Fistname = $user->name;
        $registration->Lastname = $data['lastname'];
        $registration->Gender = $data['gender'];
        $registration->BirthDate = $data['birthdate'];
        $registration->BirthCity = $data['BirthCity'];
        $registration->Nationalitie = $data['nationalitie'];
        $registration->Countrie = $data['countrie'];
        $registration->City = $data['city1'];
        $registration->Location = $data['location'];
        $registration->University = $data['University'];
        $registration->Faculty = $data['Faculty'];
        $registration->CertificateType = $data['CertificateType'];
        $registration->CertificateDegree = $data['CertificateDegree'];
        $registration->InscriptionDate = $data['InscriptionDate'];
        $registration->Phonne1 = $data['Phonne1'];
        $registration->Phonne2 = $data['Phonne2'];
        $registration->Type = "searcher";
        $registration->Status = 'yes';
        $registration->User = $user->id;
        $registration->Email = $data['email'];
        if(isset($_FILES['PictureURL'])){
            
            $PictureURL = $_FILES['PictureURL']['tmp_name'];
            Validator::make($data,[
                'PictureURL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.$_FILES['PictureURL']['name'];
            move_uploaded_file($fileName, 'registrations/'.$PictureURL);
            $registration->PictureURL = $PictureURL;
        }
        $registration->save();

        return $user;
       
    }
}
