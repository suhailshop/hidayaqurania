<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminAccountController extends Controller
{

    private $user ;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='student' || $role->name=='supervisor' || $role->name=='reviewer'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }



    public function index(){

        $user = Auth::user();

        return view('portal.admin.adminaccounts.profil',compact('user'));
    }





    public function editAvatar(Request $request){
        $user = Auth::user();

        if($request->hasFile('PictureURL')){
            $request->validate([
                'PictureURL' => 'required|file|max:1024',
            ]);

            $fileName = $user->id .'.'.request()->PictureURL->getClientOriginalExtension();

            $request->PictureURL->storeAs('public/registrations',$fileName);
        }


        Session::put('success_edit', 'تم تعديل الحساب بنجاح');
        return redirect()->route('adminProfile');
    }



    public function editpassword(Request $request){


        DB::table('users')->where('ID',$request->input('id_user'))
            ->update(array(

                'password'=>  bcrypt($request->input('Password'))
            ));
        Session::put('success_edit', 'تم تغيير الرقم السري بنجاح');
        return redirect()->route('adminProfile');
    }












}
