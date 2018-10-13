<?php

namespace App\Http\Controllers\Portal;

use App\User;
use App\Role;
use App\Registration;
use App\Countrie;
use App\Universitie;
use App\Book;
use App\These;
use App\Help;
use App\Provide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PortalController extends Controller
{
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

        $searchers = Registration::where('type','searcher')->get();
        $supervisors = Registration::where('type','supervisor')->get();
        $universities = Universitie::all();
        $countries = Countrie::all();
        $books = Book::all();
        $theses = These::all();
        $helps=Help::all()->sum('Price');
        $provides=Provide::all();
        $lastsearchers= Registration::where('Type','searcher')->orderBy('created_at', 'asc')->take(7)->get();
        
        return view('portal.welcome',compact('countries','universities','supervisors','searchers','books','theses','helps','provides','lastsearchers'));
    }
}
