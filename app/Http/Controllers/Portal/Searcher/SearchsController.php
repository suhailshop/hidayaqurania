<?php

namespace App\Http\Controllers\Portal\Searcher;

use App\User;
use App\Role;
use App\Countrie;
use App\Search;
use App\Division;
use App\Registration;
use App\Divisionunit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
       
        $divisionunits=Divisionunit::where('Division',1)->get();
        $divisions = Division::all();
        return view('portal.searcher.searchs.add',compact('divisions','divisionunits'));
    }
    public function addPost(Request $request){
        $search = new Search;
        $search->Name = $request->input('name');
        $search->Alias = $request->input('alias');
        $search->Division = $request->input('division');
        $search->Order = $request->input('order');
        $search->Divisionunit = $request->input('divisionunit');
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
        return redirect()->route('allSearchs');
    }
    public function edit($id){
        
        $divisionunits=Divisionunit::all();
        $search = Search::where('ID',$id)->first();
        $divisions = Division::all();
        return view('portal.searcher.searchs.edit',compact('search','divisions','divisionunits'));
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
            'searchURL'=>$fileName            
        ));
                
        return redirect()->route('allSearchs');
    }
    public function delete($id){
        Search::where('ID', $id)->forcedelete(); 
        return redirect()->route('allSearchs');
    }
}
