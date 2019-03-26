<?php

namespace App\Http\Controllers\Site;


use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class SiteController extends Controller
{

    public function index(){
        $news = News::orderBy('id','desc')->get();
        return view('site.home',compact('news'));
    }
    public function admin(){
        $news = News::orderBy('id','desc')->get();
        return view('site.admin',compact('news'));
    }
    public function add(){
        $news = News::orderBy('id','desc')->get();
        return view('site.add',compact('news'));
    }
    public function edit($id){
        $news = News::find($id);
        return view('site.edit',compact('news'));
    }
    public function details($id){
        $news = News::find($id);
        if($news){
            $cdate =  $this->getdate($news->created_at);
            return view('site.details',compact('news'))->with('cdate',$cdate);

        }else{
            return view('site.errors.404');
        }
    }
    public function getdate($date='') {


        date_default_timezone_set('Africa/Cairo');
        if(empty($date)){
            $time = time();
        }else{
            $time = strtotime($date);
        }
        $Arabicmonth[1] = "يناير";
        $Arabicmonth[2] = "فبراير";
        $Arabicmonth[3] = "مارس";
        $Arabicmonth[4] = "ابريل";
        $Arabicmonth[5] = "مايو";
        $Arabicmonth[6] = "يونيو‏";
        $Arabicmonth[7] = "يوليو‏ ";
        $Arabicmonth[8] = "أغسطس‏ ";
        $Arabicmonth[9] = "سبتمبر‏ ";
        $Arabicmonth[10] = " أكتوبر";
        $Arabicmonth[11] = "نوفمبر‏ ";
        $Arabicmonth[12] = " ديسمبر‏ ";


        $Arabicday['Sat']='السبت';
        $Arabicday['Sun']='الاحد';
        $Arabicday['Mon']='الاثنين';
        $Arabicday['Tue']='الثلاثاء';
        $Arabicday['Wed']='الاربعاء';
        $Arabicday['Thu']='الخميس';
        $Arabicday['Fri']='الجمعه';

        if(date("A",$time)=='am'){
            $am = 'صباحا' ;
        }else{
            $am = 'مساءا' ;
        }
        $mth = 'الساعة ('.date("h:i",$time).') '. $am .' - '.@$Arabicday[date("D",$time)].' '.date("d",$time).' / '.@$Arabicmonth[date("m",$time)].' / '.date("Y",$time);



        return $mth;



    }
    public function addpost(Request $request){

        $input=$request->except('_token');
        $this->validate($request,[
            'title' =>'required',
            'details' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->file('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $input['image'] = $imageName;
        }
        $input['created_at']=date("Y-m-d H:i:s");
        $input['updated_at']=date("Y-m-d H:i:s");
        DB::table('news')->insert($input);

        return Redirect::back()->with('success','تمت اضافة الخبر');


        return view('site.add');


    }
    public function editpost($id,Request $request){

        $input=$request->except('_token');
        $this->validate($request,[
            'title' =>'required',
            'details' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->file('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $input['image'] = $imageName;
        }
        $input['created_at']=date("Y-m-d H:i:s");
        DB::table('news')->where('id', $id)->update($input);

        return Redirect::back()->with('success','تمت تعديل الخبر');


        return view('site.edit');


    }
    public function delete($id)
    {
        DB::table('news')->where('id', '=', $id)->delete();
        return Redirect::back()->with('success','تم حذف الخبر');

    }

}