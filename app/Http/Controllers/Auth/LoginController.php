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
