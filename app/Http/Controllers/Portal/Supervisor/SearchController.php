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
use Illuminate\Support\Facades\Session;


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
                if($role->name=='student' || $role->name=='admin' || $role->name=='admin2'){ return redirect('/portal');}
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
        Session::put('success_update', 'تم تعديل حالة البحث بنجاح');
        return redirect()->route('allSearcherSupervisor');
    }

    public function updateSearchProgressko($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'رفض المشرف'        
        ));
        Session::put('success_update', 'تم تعديل حالة البحث بنجاح');        
        return redirect()->route('allSearcherSupervisor');
    }

    public function addsupervisor_reports(Request $request){
        $regid = Registration::where('User',$this->user->id)->first();
        
        if($request->hasFile('filename')){
            $request->validate([
                'filename' => 'file',
            ]);
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/supervisor_reports',$fileName);
        
        DB::table('supervisors_reports')->insert([
            'search'=>$request->input('search'),
            'supervisor'=>$regid->ID,
            'q1'=>$request->input('q1'),
            'q2'=>$request->input('q2'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'q6'=>$request->input('q6'),
            'q7'=>$request->input('q7'),
            'q8'=>$request->input('q8'),
            'note'=>$request->input('note'),
            'filename'=>$fileName,
            'date'=>date('Y-m-d')
        ]);
        }
        Session::put('success_add', 'تمت اضافة التقرير بنجاح');        
        return redirect()->route('getOneSearch',['id'=>$request->input('search')]);
    }
   
}
