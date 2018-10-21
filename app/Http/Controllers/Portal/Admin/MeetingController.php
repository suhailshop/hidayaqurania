<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
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

        $meetings = Meeting::all();
        return view('portal.admin.meetings.index')->with('meetings',$meetings);
    }
  
    public function add(){        
      
        return view('portal.admin.meetings.add');
    }
    public function addPost(Request $request){
       
        $meeting = new Meeting;
        $meeting->Name = $request->input('name');
        $meeting->Date = $request->input('date');
        $meeting->Location = $request->input('location');
        $meeting->save();
        return redirect()->route('allMeeting');
    }
    public function edit($id){
        $meeting = Meeting::where('ID',$id)->first();

        return view('portal.admin.meetings.edit',compact('meeting'));
    }
    public function editPost(Request $request){
       
        DB::table('meetings')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Date'=>$request->input('date'),
            'Location'=>$request->input('location'),
             
        ));
                
        return redirect()->route('allMeeting');
    }
    public function delete($id){
        Meeting::where('ID', $id)->forcedelete(); 
        return redirect()->route('allMeeting');
    }

    public function allSearcherMeeting($id){
        $searchers=DB::table('meetings_searchers')
            ->join('registrations','meetings_searchers.Searcher','=','registrations.ID')
            ->join('meetings','meetings_searchers.Meeting','=','meetings.ID')
            ->where('meetings.ID',$id)
            ->where('meetings_searchers.Status','yes')
            ->get(['registrations.FistName','registrations.LastName','registrations.NationalNumber','registrations.Phonne1']);
        
        return view('portal.admin.meetings.allSearcherMeeting',compact('searchers'));
    }
}
