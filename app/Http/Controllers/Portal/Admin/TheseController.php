<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Role;
use App\These;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TheseController extends Controller
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

        //$theses = These::all();
        $theses = DB::table('theses')
            ->leftJoin('registrations', 'theses.Searcher', '=', 'registrations.ID')
            ->select('theses.*', 'registrations.Fistname')
            ->get();

        return view('portal.admin.these.index')->with('theses',$theses);
    }


}
