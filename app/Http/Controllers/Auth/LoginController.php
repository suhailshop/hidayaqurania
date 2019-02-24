<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Role;
use App\Registration;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/portal';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
            
        $email=$request->input('email');
        $password=$request->input('password');
        $remember_me = $request->has('remember_me') ? true : false;  
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_me))
        {
                $user = auth()->user();
                $registration = Registration::where('User',$user->id)->first();
                $role = Role::where('ID',$user->role_id)->first();
                if($role->name=='student'){
                    if ($registration->Status != 'مفعل') {
                        Auth::logout();
                        return redirect(route('login'))->withErrors(['notactive' => 'تم استقبال طلبكم وجاري العمل عليه']);
                    }
                } 
                Auth::login($user,true);
                return redirect()->intended(route('portalwelcome'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember_me'))->withErrors([
            'email' => 'البريد الالكتروني او كلمة المرور خاطئة',
        ]);
        
    }

    public function authenticated(Request $request, $user)
    {  
        $registration = Registration::where('User',$user->id)->first();
        $role = Role::where('ID',$user->role_id)->first();
        if($role->name=='student'){
            if ($registration->Status != 'مفعل') {
                Auth::logout();
                return redirect(route('login'))->withErrors(['notactive' => 'تم استقبال طلبكم وجاري العمل عليه']);
            }
        }          
    }   
}
