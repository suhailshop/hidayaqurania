<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Criteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CriteriaController extends Controller
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

        $criterias = Criteria::all();
        return view('portal.admin.criterias.index')->with('criterias',$criterias);
    }
  
    public function add(){
        
      
        return view('portal.admin.criterias.add');
    }
    public function addPost(Request $request){
       
        $criteria = new Criteria;
        $criteria->Name = $request->input('name');
        $criteria->ProposedScore = $request->input('proposedscore');
        $criteria->MaximumScore = $request->input('maximumscore');
        $criteria->Status = "yes";
        $criteria->save();
        Session::put('success_edit', 'تم اضافة المعيار بنجاح');  
        return redirect()->route('allCriteria');
    }
    public function edit($id){
        $criteria = Criteria::where('ID',$id)->first();

        return view('portal.admin.criterias.edit',compact('criteria'));
    }
    public function editPost(Request $request){
        
        DB::table('criterias')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'ProposedScore'=>$request->input('proposedscore'),
            'MaximumScore'=>$request->input('maximumscore'),
            'Status'=>$request->input('status')        
        ));
        Session::put('success_edit', 'تم تعديل المعيار بنجاح');  
        return redirect()->route('allCriteria');
    }
    public function delete($id){
        Criteria::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تم حذف المعيار بنجاح');  
        return redirect()->route('allCriteria');
    }

    public function searcherok(){
        $searchers = DB::table('registrations')
                    ->join('searcher_critera','searcher_critera.Searcher','=','registrations.ID')
                    ->join('criterias','criterias.ID','=','searcher_critera.Criteria')
                    ->where('searcher_critera.Status','yes')
                    ->distinct('registrations.ID')
                    ->get(['registrations.*']);
        return view('portal.admin.criterias.searcherok',compact('searchers'));
    }

    public function searcherko(){
        $searchers = DB::table('registrations')
        ->join('searcher_critera','searcher_critera.Searcher','=','registrations.ID')
        ->join('criterias','criterias.ID','=','searcher_critera.Criteria')
        ->where('searcher_critera.Status','no')
        ->distinct('registrations.ID')
        ->get(['registrations.*']);
        return view('portal.admin.criterias.searcherko',compact('searchers'));

    }
}
