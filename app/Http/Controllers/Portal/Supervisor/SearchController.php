<?php

namespace App\Http\Controllers\Portal\Supervisor;

use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Search;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
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

  
    
    public function updateSearchProgressok($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'موافقة المشرف'     
        ));
        return redirect()->route('allSearcherSupervisor');
    }

    public function updateSearchProgressko($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'رفض المشرف'        
        ));
        return redirect()->route('allSearcherSupervisor');
    }
   
}
