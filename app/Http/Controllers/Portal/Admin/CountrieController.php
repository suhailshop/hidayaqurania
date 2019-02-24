<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CountrieController extends Controller
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
    public function index(){

        $countries = Countrie::all();
        return view('portal.admin.countries.index')->with('countries',$countries);
    }
  
    public function add(){
        
      
        return view('portal.admin.countries.add');
    }
    public function addPost(Request $request){
       
        $countrie = new Countrie;
        $countrie->Name = $request->input('name');
        $countrie->Status = "yes";
        if($request->hasFile('flag')){
            $request->validate([
                'flag' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->flag->getClientOriginalExtension();
            
            $request->flag->storeAs('public/countries',$fileName);
            $countrie->Flag = $fileName;
        }
        $countrie->save();
        Session::put('success_edit', 'تم اضافة الدولة بنجاح');  
        return redirect()->route('allCountrie');
    }
    public function edit($id){
        $countrie = Countrie::where('ID',$id)->first();

        return view('portal.admin.countries.edit',compact('countrie'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('img');
        if($request->hasFile('flag')){
            $request->validate([
                'flag' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->flag->getClientOriginalExtension();
            $request->flag->storeAs('public/countries',$fileName);
        }
        DB::table('countries')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Status'=>$request->input('status'),
            'Flag'=>$fileName            
        ));
        Session::put('success_edit', 'تم تعديل الدولة بنجاح');  
        return redirect()->route('allCountrie');
    }
    public function delete($id){
        Countrie::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تم حذف الدولة بنجاح');  
        return redirect()->route('allCountrie');
    }

 
}
