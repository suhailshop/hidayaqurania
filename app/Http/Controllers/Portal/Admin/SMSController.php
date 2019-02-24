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

use Nexmo;


class SMSController extends Controller
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
        return view('portal.admin.sms.sup')->with('supervisors',$supervisors);
        
    }
    public function sendStu(){
        $searchers = Registration::where('Type','Searcher')->get();
        return view('portal.admin.sms.stu')->with('searchers',$searchers);
    }

    public function sendsmsstupost(Request $request ){
        $msg="";
        $type="";
        if($request->input('selectedstu')!=NULL)
        {
            $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('806ba54a', 'hsRZYwq8S6dGTKxb'));
            foreach($request->input('selectedstu') as $stu){
               
                $message = $client->message()->send([
                    'to' => $stu,
                    'from' => 'Hidaya Qurania',
                    'text' => $request->input('text'),
                    'type' => 'unicode'
                ]);
            }
            $msg ="تم ارسال SMS للباحثين";
            $type="success";  
            Session::put('success_edit', 'تم ارسال ال SMS للباحثين بنجاح'); 
            
        }else{
            $msg ="لم يتم ارسال SMS المرجو اختيار باحث واحد على الاقل";
            $type = "danger";
            Session::put('success_edit', 'المرجو اختيار باحث واحد على الاقل'); 
            
        }
        $searchers = Registration::where('Type','Searcher')->get();
        return view('portal.admin.sms.stu')->with('searchers',$searchers)->with('msg',$msg)->with('type',$type);
    }

    public function sendsmssuppost(Request $request ){
        $msg="";
        $type="";
        if($request->input('selectedsup')!=NULL)
        {
            $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('806ba54a', 'hsRZYwq8S6dGTKxb'));
            foreach($request->input('selectedsup') as $stu){
                $message = $client->message()->send([
                    'to' => $stu,
                    'from' => 'Hidaya Qurania',
                    'text' => $request->input('text'),
                    'type' => 'unicode'
                ]);                
            }
            $msg ="تم ارسال SMS للمشرفين";
            $type="success";
            Session::put('success_edit', 'تم ارسال ال SMS للمشرفين'); 
            
            
        }else{
            $msg ="لم يتم ارسال SMS المرجو اختيار مشرف واحد على الاقل";
            $type = "danger";
            Session::put('success_edit', 'المرجو اختيار مشرف واحد على الاقل'); 
            
        }
        $supervisors = Registration::where('Type','Supervisor')->get();
        return view('portal.admin.sms.sup')->with('supervisors',$supervisors)->with('msg',$msg)->with('type',$type);
    }
}
