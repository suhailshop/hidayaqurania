<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Cycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CycleController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name!='admin' ){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $cycles = Cycle::all();
        return view('portal.admin.cycles.index')->with('cycles',$cycles);
    }
  
    public function add(){
        
        return view('portal.admin.cycles.add');
    }
    public function addPost(Request $request){
       
        $cycle = new Cycle;
        $cycle->name = $request->input('name');
        $cycle->startDate = $request->input('startDate');
        $cycle->endDate = $request->input('endDate');
       
        $cycle->save();
        Session::put('success_add', 'تم اضافة التقرير الدوري بنجاح');        
        
        return redirect()->route('allCycle');
    }
    public function edit($id){
        $cycle = Cycle::where('ID',$id)->first();
        return view('portal.admin.cycles.edit',compact('cycle'));
    }
    public function editPost(Request $request){
       
        DB::table('cycles')->where('ID',$request->input('id'))
        ->update(array(
            'name'=>$request->input('name'),
            'startDate'=>$request->input('startDate'),
            'endDate'=>$request->input('endDate'),       
        ));
        Session::put('success_edit', 'تم تعديل التقرير الدوري بنجاح');                
        return redirect()->route('allCycle');
    }
    public function delete($id){
        Cycle::where('ID', $id)->forcedelete(); 
        Session::put('success_delete', 'تم حذف التقرير الدوري بنجاح');        
        
        return redirect()->route('allCycle');
    }
    public function getCycle($id){
        $cycles = DB::select("select  searchs.ID,concat(reg1.Fistname ,' ', reg1.LastName) as searcher , concat(reg2.Fistname ,' ', reg2.LastName) as supervisor ,  concat(reg3.Fistname ,' ', reg3.LastName) as reviewer, `cycles`.`name`
            from `searchs` 
            left join `cycles` on `cycles`.`ID` = `searchs`.`Cycle` 
            left join supervisors_reports on supervisors_reports.search = searchs.ID
            left join reviewers_reports on reviewers_reports.search = searchs.ID
            left join `registrations` reg1 on reg1.`ID` = `searchs`.`Searcher`
            left join `registrations` reg2 on reg2.`ID` = supervisors_reports.supervisor
            left join `registrations` reg3 on reg3.`ID` = reviewers_reports.reviewer
            where cycles.ID=".$id." ");
        return view('portal.admin.cycles.getCycle',compact('cycles'));
    }
}
