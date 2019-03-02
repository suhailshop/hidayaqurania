<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Nationalitie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class NationalitieController extends Controller
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

        $nationalities = Nationalitie::all();
        return view('portal.admin.nationalities.index')->with('nationalities',$nationalities);
    }
  
    public function add(){
        
      
        return view('portal.admin.nationalities.add');
    }
    public function addPost(Request $request){
       
        $nationalitie = new Nationalitie;
        $nationalitie->Name = $request->input('name');
        $nationalitie->Status = "yes";
       
        $nationalitie->save();
        Session::put('success_edit', 'تم اضافة الجنسية بنجاح'); 
        
        return redirect()->route('allNationalite');
    }
    public function edit($id){
        $nationalitie = Nationalitie::where('ID',$id)->first();

        return view('portal.admin.nationalities.edit',compact('nationalitie'));
    }
    public function editPost(Request $request){
       
        DB::table('nationalities')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Status'=>$request->input('status')        
        ));
        Session::put('success_edit', 'تم تعديل الجنسية بنجاح'); 

        
        return redirect()->route('allNationalite');
    }
    public function delete($id){
        Nationalitie::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تم حذف الجنسية بنجاح'); 
        
        return redirect()->route('allNationalite');
    }
}
