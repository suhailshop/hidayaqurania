<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Search;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    private $user ;
    
    public function getAll(){
        $searchs = Search::all();
        $reviewers = DB::table('registrations')
                    ->join('users','registrations.User','=','users.id')
                    ->join('roles','roles.id','=','users.role_id')
                    ->where('roles.name','reviewer')->get(['registrations.id','registrations.Fistname','registrations.LastName']);
        return view('portal.admin.searchs.index',compact('searchs','reviewers'));
    }
  
    public function getOne($id){
        $search=Search::where('ID',$id)->first();
        return view('portal.admin.searchs.getOne',compact('search'));
    }
    
    public function updateProgressok($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'موافقة الادارة'     
        ));
        return redirect()->route('getAllSearchs');
    }



    public function updateProgressko($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'رفض الادارة'        
        ));
        return redirect()->route('getAllSearchs');
    }




    public function addSearchReviewer(Request $request){

        $reviewers = $request->input('reviewers');
        $allreviewers = DB::table('registrations')
        ->join('users','registrations.User','=','users.id')
        ->join('roles','roles.id','=','users.role_id')
        ->join('reviewerSearchs','reviewerSearchs.reviewer','=','registrations.ID')
        ->where('roles.name','reviewer')
        ->where('reviewerSearchs.search',$request->input('searchid'))
        ->get(['registrations.id']);

        if(isset($reviewers)){
        foreach($allreviewers as $al){
           if(!in_array($al->id,$reviewers))
           { 
                DB::table('reviewerSearchs')->where('search',$request->input('searchid'))->where('reviewer',$al->id)->delete();
            }else{
                
           }
        }
        }
        
        
        if(isset($reviewers)){
            foreach($reviewers as $rev){
                $exist= DB::table('reviewerSearchs')
                ->where('search',$request->input('searchid'))
                ->where('reviewer',$rev)
                ->count();

                if(empty($exist)){
                    DB::table('reviewerSearchs')->insert(
                        ['search' => $request->input('searchid'), 'reviewer' => $rev]
                    );
                }else{
                    //DB::table('reviewerSearchs')->where('search',$request->input('searchid'))->where('reviewer',$rev)->delete();
                }
            }
        }else{
            DB::table('reviewerSearchs')->where('search',$request->input('searchid'))->delete();
        }
        return redirect()->route('getAllSearchs');
    }



    public function addadmin2_reports(Request $request){
        if($request->hasFile('filename')){
            $request->validate([
                'filename' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/admin2_reports',$fileName);
                
        DB::table('admin2_reports')->insert([
            'search'=>$request->input('search'),
            'q1'=>$request->input('q1'),
            'q2'=>$request->input('q2'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'note'=>$request->input('note'),
            'filename'=>$fileName,
            'date'=>date('Y-m-d'),
            'admin2'=>Auth::user()->name
        ]);
        }
        return redirect()->route('getAllSearchs');
    }
}
