<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\notifications;
use Mail;

class EmailController extends Controller
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
    public function sendSup(){
        $supervisors = Registration::where('Type','Supervisor')->get();
        return view('portal.admin.email.sup')->with('supervisors',$supervisors);
        
    }
    public function sendStu(){
        $searchers = Registration::where('Type','Searcher')->get();
        return view('portal.admin.email.stu')->with('searchers',$searchers);
    }

    public function sendemailstupost(Request $request ){
        $msg="";
        $type="";
        if($request->input('selectedstu')!=NULL)
        {
            foreach($request->input('selectedstu') as $stu){
                
                Mail::to($stu)->send(new notifications($stu,$request->input('subject'),$request->input('text')));
            }
            $msg ="تم ارسال الايميل للباحثين";
            $type="success";
            Session::put('success_edit', 'تم ارسال الايميل بنجاح');  
        }else{
            $msg ="لم يتم ارسال الايميل المرجو اختيار باحث واحد على الاقل";
            $type = "danger";
            Session::put('success_edit', 'المرجو اختيار باحث على الاقل');  
        }
        $searchers = Registration::where('Type','Searcher')->get();
        return view('portal.admin.email.stu')->with('searchers',$searchers)->with('msg',$msg)->with('type',$type);
    }

    public function sendemailsuppost(Request $request ){
        $msg="";
        $type="";
        if($request->input('selectedsup')!=NULL)
        {
            foreach($request->input('selectedsup') as $stu){
                
                Mail::to($stu)->send(new notifications($stu,$request->input('subject'),$request->input('text')));
            }
            $msg ="تم ارسال الايميل للمشرفين";
            $type="success";
            Session::put('success_edit', 'تم ارسال الايميل بنجاح');  
            
        }else{
            $msg ="لم يتم ارسال الايميل المرجو اختيار مشرف واحد على الاقل";
            $type = "danger";
            Session::put('success_edit', 'المرجو اختيار مشرف واحد على الاقل');  
        }
        $supervisors = Registration::where('Type','Supervisor')->get();
        return view('portal.admin.email.sup')->with('supervisors',$supervisors)->with('msg',$msg)->with('type',$type);
    }
}
