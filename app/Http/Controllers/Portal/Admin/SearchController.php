<?php

namespace App\Http\Controllers\Portal\Admin;

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
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function getAll(){
        $searchs = Search::all();
        return view('portal.admin.searchs.index',compact('searchs'));
    }
  
    
    public function updateProgressok($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'موافقة الادارة'     
        ));
        return redirect()->route('getAllSearchs');
    }

    public function updateProgressko($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'رفض الادارة'        
        ));
        return redirect()->route('getAllSearchs');
    }
   
}
