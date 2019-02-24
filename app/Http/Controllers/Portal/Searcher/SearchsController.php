<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\User;
use App\Role;
use App\Countrie;
use App\Search;
use App\Division;
use App\Registration;
use App\Divisionunit;
use App\Cycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class SearchsController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='admin' || $role->name=='supervisor' || $role->name=='admin2'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $searchs = Search::all();
        return view('portal.searcher.searchs.index')->with('searchs',$searchs);
    }


    public function getdivisionunit($id){
        $divisionunits = Divisionunit::where('Division',intval($id))->get();
        $html = '<select name="divisionunit" class="form-control" >';
        foreach($divisionunits as $divi){
            $html =$html.'<option value="'.$divi->id.'">'.$divi->Name.'</option>';
        }
        $html .='</select>';
        return $html;
    }


    public function add(){
       
        $cycles = Cycle::where('startDate','<=',date(now()))->where('endDate','>=',date(now()))->get();
        $divisionunits=Divisionunit::where('Division',1)->get();
        $divisions = Division::all();
        return view('portal.searcher.searchs.add',compact('divisions','divisionunits','cycles'));
    }
    public function addPost(Request $request){
        $search = new Search;
        $search->Name = $request->input('name');
        $search->Alias = $request->input('alias');
        $search->Division = $request->input('division');
        $search->Order = $request->input('order');
        $search->Divisionunit = $request->input('divisionunit');
        $search->Cycle = $request->input('cycle');
        $this->user= Auth::user();
        $search->Searcher = Registration::where('User',$this->user->id)->first()->ID;
        $search->Status = "yes";
        $search->Progress= "تم الرفع";
        if($request->hasFile('searchURL')){
            $request->validate([
                'searchURL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->searchURL->getClientOriginalExtension();
            
            $request->searchURL->storeAs('public/searchs',$fileName);
            $search->searchURL = $fileName;
        }
        $search->save();
        Session::put('success_edit', 'تم اضافة البحث بنجاح');           
        return redirect()->route('allSearchs');
    }
    public function edit($id){
        $cycles = Cycle::where('startDate','<=',date(now()))->where('endDate','>=',date(now()))->get();
        $divisionunits=Divisionunit::all();
        $search = Search::where('ID',$id)->first();
        $divisions = Division::all();
        return view('portal.searcher.searchs.edit',compact('search','divisions','divisionunits','cycles'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('URL');
        if($request->hasFile('searchURL')){
            $request->validate([
                'searchURL' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->searchURL->getClientOriginalExtension();
            $request->searchURL->storeAs('public/searchs',$fileName);
        }
        DB::table('searchs')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Division'=>$request->input('division'),
            'Status'=>$request->input('status'),
            'Alias'=>$request->input('alias'),
            'Divisionunit' => $request->input('divisionunit'),
            'Cycle'=> $request->input('cycle'),
            'searchURL'=>$fileName            
        ));
        Session::put('success_edit', 'تم تعديل البحث بنجاح');           
        return redirect()->route('allSearchs');
    }
    public function delete($id){
        Search::where('ID', $id)->forcedelete(); 
        Session::put('success_edit', 'تم حذف البحث بنجاح');           
        return redirect()->route('allSearchs');
    }
    public function addsearcher_reports(Request $request){
        if($request->hasFile('filename')){
            $request->validate([
                'filename' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/searcher_reports',$fileName);
        
        DB::table('searchers_reports')->insert([
            'search'=>$request->input('search'),
            'q1'=>$request->input('q1'),
            'q2'=>$request->input('q2'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'q6'=>$request->input('q6'),
            'q7'=>$request->input('q7'),
            'q8'=>$request->input('q8'),
            'q9'=>$request->input('q9'),
            'filename'=>$fileName,
            'date'=>date('Y-m-d')
        ]);
        }

        Session::put('success_edit', 'تم اضافة التقرير  بنجاح');           
        return redirect()->route('allSearchs');
    }
}
