<?php

namespace App\Http\Controllers\Portal\Admin;

use App\Cycle;
use App\Nationalitie;
use App\These;
use App\Universitie;
use App\User;
use App\Role;
use App\Committee;
use App\Searchersreport;
use App\Supervisorsreport;
use App\Committesreport;
use App\Section;
use App\Search;
use App\Registration;
use App\Examiner_reports;
use App\Reviewers_reports;
use App\Supervisors_reports;
use App\Searchers_reports;
use App\Admin2_reports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class SearchController extends Controller
{
    private $user ;
    
    public function getAll(){
        $searchs = Search::all();
        $cycles = Cycle::all();
        $reviewers = DB::table('registrations')
                    ->join('users','registrations.User','=','users.id')
                    ->join('roles','roles.id','=','users.role_id')
                    ->where('roles.name','reviewer')->get(['registrations.id','registrations.Fistname','registrations.LastName']);
                    
        return view('portal.admin.searchs.index',compact('searchs','reviewers', 'cycles'));
    }
  
    public function getOne($id){
        $search=Search::where('ID',$id)->first();

        $universities = Universitie::all();
        $nationality = Nationalitie::where('ID', $search->searcher->Nationalitie)->first();
        $thesis = These::where('Searcher', $search->searcher->ID)->first();
        $supervisors = Registration::where('Type', 'supervisor')->get();
        $cycles = Cycle::where('ID', $search->Cycle)->first();

        return view('portal.admin.searchs.getOne',compact('search' , 'universities', 'nationality' , 'thesis' , 'supervisors', 'cycles'));
    }
    
    public function updateProgressok($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'موافقة الادارة'     
        ));
        Session::put('success_edit', 'تمت موافقة الادارة بنجاح'); 
        
        return redirect()->route('getAllSearchs');
    }



    public function updateProgressko($id){
        DB::table('searchs')->where('ID',$id)
        ->update(array(
            'Progress'=>'رفض الادارة'        
        ));
        Session::put('success_edit', 'تم رفض الادارة بنجاح'); 
        
        return redirect()->route('getAllSearchs');
    }








    public function delete($id){
        Search::where('ID', $id)->forcedelete();
        Session::put('success_edit', 'تم حذف البحث بنجاح');
        return redirect()->back();
    }










    public function addSearchReviewer(Request $request){

        $reviewers = $request->input('reviewers');
        $allreviewers = DB::table('registrations')
        ->join('users','registrations.User','=','users.id')
        ->join('roles','roles.id','=','users.role_id')
        ->join('reviewersearchs','reviewersearchs.reviewer','=','registrations.ID')
        ->where('roles.name','reviewer')
        ->where('reviewersearchs.search',$request->input('searchid'))
        ->get(['registrations.id']);

        if(isset($reviewers)){
        foreach($allreviewers as $al){
           if(!in_array($al->id,$reviewers))
           { 
                DB::table('reviewersearchs')->where('search',$request->input('searchid'))->where('reviewer',$al->id)->delete();
            }else{
                
           }
        }
        }
        
        
        if(isset($reviewers)){
            foreach($reviewers as $rev){
                $exist= DB::table('reviewersearchs')
                ->where('search',$request->input('searchid'))
                ->where('reviewer',$rev)
                ->count();

                if(empty($exist)){
                    DB::table('reviewersearchs')->insert(
                        ['search' => $request->input('searchid'), 'reviewer' => $rev]
                    );
                }else{
                    //DB::table('reviewersearchs')->where('search',$request->input('searchid'))->where('reviewer',$rev)->delete();
                }
            }
        }else{
            DB::table('reviewersearchs')->where('search',$request->input('searchid'))->delete();
        }
        Session::put('success_edit', 'تم ارسال الأبحاث لحساب الباحث المساعد بنجاح');
        
        return redirect()->route('getAllSearchs');
    }





    public function addadmin2_reports(Request $request){

        $fileName = '';
        if($request->hasFile('filename')){
           /* $request->validate([
                'filename' => 'file',
            ]);*/
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/admin2_reports',$fileName);
        }
        DB::table('admin2_reports')->insert([
            'search'=>$request->input('search'),
            'q1'=>$request->input('q1'),
            'q2'=>$request->input('q2'),
            'q3'=>$request->input('q3'),
            'q4'=>$request->input('q4'),
            'q5'=>$request->input('q5'),
            'q6'=>$request->input('q6'),
            'q6r'=>$request->input('q6r'),

            'note'=>$request->input('note'),
            'filename'=>$fileName,
            'date'=>date('Y-m-d'),
            'admin2'=>Auth::user()->name
        ]);

        Session::put('success_edit', 'تم اضافة تقرير اللجنة العلمية بنجاح');
        
       // return redirect()->route('getAllSearchs');
        //return redirect()->back();
        return redirect()->route('getOneSearch',array('id' =>$request->input('search')));

    }

    public function addexaminer_reports(Request $request){

        $fileName = '';
        if($request->hasFile('filename')){
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/examiner_reports',$fileName);
        }
        DB::table('examiner_reports')->insert([
            'searcher'=>$request->input('searcher'),
            'search'=>$request->input('search'),
            'comment_admin'=>Auth::user()->name,
            'searcher_access'=> ($request->input('searcher_access') =="on" ? 1 : 0),
            'comment'=>$request->input('comment'),
            'file'=>$fileName,
            'date'=>date('Y-m-d'),
            'admin'=>Auth::user()->name
        ]);

        Session::put('success_edit', 'تم اضافة تقرير الفاحص بنجاح');
        
        return redirect()->route('getOneSearch',array('id' =>$request->input('search')));

    }

    public function updateexaminer_reports(Request $request){

        $fileName = '';
        if($request->hasFile('filename')){
            $fileName = "fileName".time().'.'.request()->filename->getClientOriginalExtension();
            $request->filename->storeAs('public/examiner_reports',$fileName);
            DB::table('examiner_reports')->where('id',$request->input('id_report_examiner'))
            ->update(array(
                'comment_admin'=>Auth::user()->name,
                'searcher_access'=> ($request->input('searcher_access') =="on" ? 1 : 0),
                'comment'=>$request->input('comment'),
                'file'=>$fileName,
                'date'=>date('Y-m-d')
            ));
        }else{
            DB::table('examiner_reports')->where('id',$request->input('id_report_examiner'))
            ->update(array(
            'comment_admin'=>Auth::user()->name,
            'searcher_access'=> ($request->input('searcher_access') =="on" ? 1 : 0),
            'comment'=>$request->input('comment'),
            'date'=>date('Y-m-d')
            ));
        }
        Session::put('success_edit', 'تم  تعديل تقرير الفاحص بنجاح');
        
        return redirect()->route('getOneSearch',array('id' =>$request->input('search')));

    }

    public function delete_reports($id,$idsearch,$type){


        if($type == 'searcher_reports'){

            $dreport = Searchers_reports::where('id', $id)->forcedelete();

        }
        if($type == 'examiner_reports'){

            $dreport = examiner_reports::where('id', $id)->forcedelete();

        }
        if($type == 'supervisors_reports'){

            $dreport = Supervisors_reports::where('id', $id)->forcedelete();

        }
        if($type == 'reviewers_reports'){

            $dreport = Reviewers_reports::where('id', $id)->forcedelete();

        }
        if($type == 'admin2_reports'){

            $dreport = Admin2_reports::where('id', $id)->forcedelete();

        }

        return redirect()->route('getOneSearch',array('id' =>$idsearch));



    }
    
}