<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Registration;
use App\User;
use Auth;

class AccountController extends Controller
{
    private $user ;

    public function index(Request $request)
    {
        $this->user= Auth::user();
        $role_id = Role::where('name','supervisor')->first()->id;
       
        $user = User::where('email',auth()->user()->email)->where('role_id',$role_id)->first();
        Auth::logout();
        Auth::login($user,true);
        return redirect()->intended(route('portalwelcome'));
        
    }

    
}
