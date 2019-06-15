<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\Section;
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
                if($role->name=='admin' || $role->name=='supervisor' || $role->name=='admin2'){ return redirect('/portal');}
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $id = $this->user->id ;
        $searcherId = Registration::where('User', $id)->first()->ID;
        $searchs = Search::where('Searcher', $searcherId)->get();

         return view('portal.searcher.searchs.index')->with('searchs',$searchs);
    }


   /* public function getdivisionunit(){
        $divisionunits = Divisionunit::all();
        $html = '<select name="divisionunit" class="form-control" >';
        foreach($divisionunits as $divi){
            $html =$html.'<option value="'.$divi->id.'">'.$divi->Name.'</option>';
        }
        $html .='</select>';
        return $html;
    }*/


    public function add(){

        $endDate = date(now(),  strtotime("+1 day"));

        $cycles = Cycle::where('startDate','<=',date(now()))->where('endDate','>=',$endDate)->get();
         $divisionunits=Divisionunit::orderBy('Order')->get();
         $divisions = Division::orderBy('Order')->get();

        return view('portal.searcher.searchs.add',compact('divisions','divisionunits','cycles'));
    }
    public function addPost(Request $request){
        $search = new Search;
        $search->Name = $request->input('name');
        $search->Alias = $request->input('alias');
        $search->Order = $request->input('order');


        // updated in 15/6/2019 :
        // reason : when searchers upload their file and chose multiple division they can't do it
       // $search->Division = Division::where('Name',$request->input('division')[0])->first()->ID;

        //$search->Divisionunit = Divisionunit::where('Name',$request->input('divisionunit')[0])->first()->ID;
       
        $divAll='';
        foreach($request->input('division') as $d  ){
            $divAll.= $d.';';
        }
        $search->DivisionAll = $divAll;

        $divAllUnit = '';

        foreach($request->input('divisionunit') as $d  ){
            $divAllUnit.= $d.';';
        }
        $search->DivisionunitAll = $divAllUnit;


        $search->Cycle = $request->input('cycle');
        $this->user= Auth::user();

        $search->Searcher = Registration::where('User',$this->user->id)->first()->ID;
        $search->Status = "yes";
        $search->Progress= "تم الرفع";
        if($request->hasFile('searchURL')){
            $request->validate([
                'searchURL' => 'required|file',
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
        $sections = Section::all();
        $search = Search::where('ID',$id)->first();
        $divisions = Division::all();
        return view('portal.searcher.searchs.edit',compact('search','divisions','divisionunits','cycles','sections'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('URL');
        if($request->hasFile('searchURL')){
            $request->validate([
                'searchURL' => 'required|file',
            ]);
            $fileName = "fileName".time().'.'.request()->searchURL->getClientOriginalExtension();
            $request->searchURL->storeAs('public/searchs',$fileName);
        }
        
               
        $divAll='';
        foreach($request->input('division') as $d  ){
            $divAll.= $d.';';
        }
        $search->DivisionAll = $divAll;

        $divUnitAll = '';
        foreach($request->input('divisionunit') as $d  ){
            $divUnitAll.= $d.';';
        }
        $search->DivisionunitAll = $divUnitAll;

        DB::table('searchs')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Division'=>Division::where('Name',$request->input('division')[0])->first()->ID,
            'Status'=>$request->input('status'),
            'DivisionAll'=>$divAll,
            'DivisionunitAll'=>$divUnitAll,
            'Alias'=>$request->input('alias'),
            'Divisionunit' => Divisionunit::where('Name',$request->input('divisionunit')[0])->first()->id,
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

        $fileName = null;
        if($request->hasFile('filename')){
           /* $request->validate([
                'filename' => 'file',
            ]);*/
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/searcher_reports',$fileName);
        }
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


        Session::put('success_edit', 'تم اضافة التقرير  بنجاح');           
        return redirect()->route('allSearchs');
    }
}