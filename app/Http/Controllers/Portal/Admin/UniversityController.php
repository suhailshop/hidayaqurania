<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Universitie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
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

        $universities = Universitie::all();
        return view('portal.admin.universities.index')->with('universities',$universities);
    }
  
    public function add(){
        $countries = Countrie::all();
        
      
        return view('portal.admin.universities.add',compact('countries'));
    }
    public function addPost(Request $request){
       
        $universitie = new Universitie;
        $universitie->Name = $request->input('name');
        $universitie->President = $request->input('president');
        $universitie->Countrie = $request->input('countrie');
        $universitie->City = $request->input('city');
        $universitie->Location = $request->input('location');
        $universitie->Phonne = $request->input('phonne');
        $universitie->Fax = $request->input('fax');
        $universitie->Email = $request->input('email');
        $universitie->ContractID = $request->input('contratid');
        $universitie->ContractDate = $request->input('contratdate');
        $universitie->Status = "yes";
        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->logo->getClientOriginalExtension();
            
            $request->logo->storeAs('public/universities',$fileName);
            $universitie->Logo = $fileName;
        }
        $universitie->save();
        return redirect()->route('allUniversity');
    }
    public function edit($id){
        $countries = Countrie::all();
        $universitie = Universitie::where('ID',$id)->first();

        return view('portal.admin.universities.edit',compact('universitie','countries'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('img');
        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->logo->getClientOriginalExtension();
            
            $request->logo->storeAs('public/universities',$fileName);
        }
        DB::table('universities')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'President'=>$request->input('president'),
            'Countrie'=>$request->input('countrie'),
            'City'=>$request->input('city'),
            'Location'=>$request->input('location'),
            'Phonne'=>$request->input('phonne'),
            'Fax'=>$request->input('fax'),
            'Email'=>$request->input('email'),
            'ContractID'=>$request->input('contratid'),
            'ContractDate'=>$request->input('contratdate'),
            'Status'=>$request->input('status'),
            'Logo'=>$fileName            
        ));
                
        return redirect()->route('allUniversity');
    }
    public function delete($id){
        Universitie::where('ID', $id)->forcedelete(); 
        return redirect()->route('allUniversity');
    }
}
