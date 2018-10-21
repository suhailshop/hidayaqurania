<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Facultie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
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

        $faculties = Facultie::all();
        return view('portal.admin.faculties.index')->with('faculties',$faculties);
    }
  
    public function add(){     
      
        return view('portal.admin.faculties.add');
    }
    public function addPost(Request $request){
       
        $facultie = new Facultie;
        $facultie->Name = $request->input('name');
        $facultie->PresidentName = $request->input('presidentname');
        $facultie->City = $request->input('city');
        $facultie->Location = $request->input('location');
        $facultie->Phonne = $request->input('phonne');
        $facultie->Fax = $request->input('fax');
        $facultie->Email = $request->input('email');
        $facultie->Status = "yes";
        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->logo->getClientOriginalExtension();
            
            $request->logo->storeAs('public/faculties',$fileName);
            $facultie->Logo = $fileName;
        }
        $facultie->save();
        return redirect()->route('allFaculty');
    }
    public function edit($id){
        $facultie = Facultie::where('ID',$id)->first();
        return view('portal.admin.faculties.edit',compact('facultie'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('img');
        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->logo->getClientOriginalExtension();
            
            $request->logo->storeAs('public/faculties',$fileName);
        }
        DB::table('faculties')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'PresidentName'=>$request->input('presidentname'),
            'City'=>$request->input('city'),
            'Location'=>$request->input('location'),
            'Phonne'=>$request->input('phonne'),
            'Fax'=>$request->input('fax'),
            'Email'=>$request->input('email'),
            'Status'=>$request->input('status'),
            'Logo'=>$fileName            
        ));
                
        return redirect()->route('allFaculty');
    }
    public function delete($id){
        Facultie::where('ID', $id)->forcedelete(); 
        return redirect()->route('allFaculty');
    }
}