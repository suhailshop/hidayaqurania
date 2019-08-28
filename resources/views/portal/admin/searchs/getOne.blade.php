@extends('layout.master')
@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
{{--include here the style of the current page--}}
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<style type="text/css">
   @media screen {
        #printSection {
           display: none;
        }
   }

   @media print {
        body > *:not(#printSection) {
           display: none;
        }
        #printSection, #printSection * {
            visibility: visible;
        }
        #printSection {
            position:absolute;
            left:0;
            top:0;
        }
   }
</style>
@endsection
@section('pageTitle', 'الرئيسية')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
   <!-- BEGIN PAGE HEADER-->
   <div class="page-bar">
      <ul class="page-breadcrumb">
         <li>
            <i class="icon-home"></i>
            <a href="{{route('portalwelcome')}}">الرئيسية</a>
            <i class="fa fa-angle-left"></i>
         </li>
         @if(auth()->user()->hasRole('student',auth()->user()->role_id))
         <li class="nav-item  ">
            <i class="icon-chemistry"></i>
            <a href="{{route('allSearchs')}}" class="nav-link ">
            <span class="title"> لائحة بحوثي </span>
            </a>
            <i class="fa fa-angle-left"></i>
         </li>
         @elseif(auth()->user()->hasRole('supervisor',auth()->user()->role_id))
         <li>
            <i class="icon-chemistry"></i>
            <a href="{{route('getSearcherSearchs',['id'=>$search->Searcher])}}" > إدارة بحوث الطالب</a>
            {{-- <a href="{{route('getAllSearchs')}}">إدارة بحوث الطالب</a>--}}
            <i class="fa fa-angle-left"></i>
         </li>
         @endif
         <li>
            <i class="icon-user"></i>
            <span>معلومات البحث</span>
         </li>
      </ul>
   </div>
   <!-- END PAGE HEADER-->
   <div class="row">
      <div class="col-md-12">
         <!-- BEGIN EXAMPLE TABLE PORTLET-->
         <div class="col-md-12">
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
               <div class="row">
                  <div class="col-md-12">
                     <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                           <div class="caption caption-md">
                              <i class="icon-globe theme-font hide"></i>
                           </div>
                           <ul class="nav nav-tabs navbar-left">
                              <li class="active">
                                 <a href="#tab_1_1" data-toggle="tab">معلومات البحث</a>
                              </li>
                              <li>
                                 <a href="#tab_1_2" data-toggle="tab">معلومات الباحث </a>
                              </li>
                              @if( auth()->user()->hasRole('admin2',auth()->user()->role_id) && count($search->admin2_reports)==0 ||
                                   auth()->user()->hasRole('admin',auth()->user()->role_id) && count($search->admin2_reports)==0 )
                              <li>
                                 <a href="#tab_1_3" data-toggle="tab">إضافة تقرير الادارة  </a>
                              </li>
                              @endif
                              @if(auth()->user()->hasRole('supervisor',auth()->user()->role_id) && count($search->supervisors_reports)==0)
                              <li>
                                 <a href="#tab_1_4" data-toggle="tab">إضافة تقرير المشرف </a>
                              </li>
                              @endif
                              @if(auth()->user()->hasRole('student',auth()->user()->role_id) && $search->cycle->startDate<=date('Y-m-d') && $search->cycle->endDate>=date('Y-m-d') && count($search->searchers_reports)==0)
                              <li>
                                 <a href="#tab_1_5" data-toggle="tab">إضافة تقرير الطالب </a>
                              </li>
                              @endif
                             
                              <?php 
                              $alreadySubmit=false;
                              foreach($search->reviewers_reports as $re){
                                  if(!empty(auth()->user()->registration)){
                                if($re->reviewer == auth()->user()->registration->ID){
                                    $alreadySubmit=true;
                                }}
                              }
                              ?>
                              @if(auth()->user()->hasRole('reviewer',auth()->user()->role_id) && !$alreadySubmit)
                              <li>
                                 <a href="#tab_1_6" data-toggle="tab">إضافة تقرير الباحث المساعد</a>
                              </li>
                              @endif
                             
                              @if(auth()->user()->hasRole('admin',auth()->user()->role_id) &&  count($search->examiner_reports)==0)
                              <li>
                                 <a href="#tab_1_8" data-toggle="tab">إضافة تقرير الفاحص </a>
                              </li>
                              @endif
                              @if(auth()->user()->hasRole('admin',auth()->user()->role_id) &&  count($search->examiner_reports)!=0)
                              <li>
                                 <a href="#tab_1_9" data-toggle="tab">تعديل تقرير الفاحص </a>
                              </li>
                              @endif
                              <li>
                                 <a href="#tab_1_7" data-toggle="tab">تقارير البحث   </a>
                              </li>
                           </ul>
                        </div>
                        <div class="portlet-body">
                           <div class="tab-content">
                              <!-- معلومات البحث -->
                              <div class="tab-pane active" id="tab_1_1">
                                 {{--    @if($search->Progress=='تم الرفع')
                                 <span class="badge badge-warning">{{$search->Progress}}</span>
                                 @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                 <span class="badge badge-danger">{{$search->Progress}}</span>
                                 @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                 <span class="badge badge-success">{{$search->Progress}}</span>
                                 @endif--}}
                                 <form role="form" method="POST" action="#" >
                                    <span class="badge badge-info">تاريخ ووقت الإرسال : {{$search->created_at}} </span>
                                    <br> <br>
                                    <div class="form-group">
                                       <label class="control-label ">الاسم </label>
                                       <input  value="{{$search->Name}}" readonly class="form-control placeholder-no-fix" type="text"  />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">وصف البحث</label>
                                       <input  value="{{$search->Alias}}" readonly  class="form-control placeholder-no-fix" type="text"   /> 
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">التقرير الدوري رقم:</label>
                                       <input  value="{{$search->Cycle}}" readonly  class="form-control placeholder-no-fix" type="text"   />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">الفصل</label>
                                       <pre    style="font-family: 'droid-sans', serif"><?php 
                                          $divs = explode(";", $search->DivisionAll);
                                          foreach($divs as $div){
                                              echo $div.'<br />';
                                          }
                                          ?>    
                                                                </pre>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">المبحث</label>
                                       <pre  style="font-family: 'droid-sans', serif" ><?php 
                                          $divs = explode(";", $search->DivisionunitAll);
                                          foreach($divs as $div){
                                              echo $div.'<br />';
                                          }
                                          ?>
                                                                    </pre>
                                    </div>
                                    <div class="form-group">
                                       <a class="btn blue btn-block" href="{{ url('project/storage/app/public/searchs/'.$search->SearchURL) }}" target="_blank" >تحميل نسخة البحث</a>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">ملاحظات المشرف</label>
                                       <textarea  readonly class="form-control"  >@if(isset($search->Note)) {{$search->Note}} @else لا تعليق @endif </textarea>  
                                    </div>
                                    <br />
                                    @if(auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id))
                                    {{-- <a class="btn btn-primary" href="{{route('updateProgressok',['id'=>$search->ID])}}">موافقة الادارة</a>
                                    <a class="btn btn-danger" href="{{route('updateProgressko',['id'=>$search->ID])}}">رفض الادارة</a>--}}
                                    @endif
                                 </form>
                              </div>
                              <!-- معلومات الباحث -->
                              <div class="tab-pane" id="tab_1_2">
                                 <form role="form" method="POST" action="#" >
                                    <div class="form-group">
                                       <label class="control-label ">الاسم  </label>
                                       <input  value="{{$search->searcher->Fistname}}" readonly class="form-control placeholder-no-fix" type="text"  />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">الجامعة</label>
                                       <input  value="{{$search->searcher->university->Name}}" readonly class="form-control placeholder-no-fix" type="text"   name="LastName" />
                                    </div>
                                 </form>


                                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#searcherallinfo">
                                    عرض تفاصيل معلومات الباحث
                                 </button>


                                 <div class="modal fade" id="searcherallinfo" tabindex="-1" role="dialog" aria-labelledby="searcherallinfolabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="searcherallinfolabel">
                                                <button type="button" class="btn btn-primary" onclick="printDiv('print-me6');">طباعة</button>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                </button>
                                             </h5>
                                          </div>
                                          <div class="modal-bod">
                                             <form role="form" method="POST"  action="#" enctype="multipart/form-data" id="print-me6">
                                                <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل الباحث" readonly /></div>

                                                <div class="form-group cl-12">
                                                   <label class="control-label ">اسم الباحث </label>
                                                   <input class="form-control" name="searcher_name" value="{{$search->searcher->Fistname}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                   <label class="control-label ">رقم الباحث في الموسوعة</label>
                                                   <input class="form-control" name="searcher_id" value="{{$search->searcher->Code}}" readonly>
                                                </div>


                                                <div class="form-group">
                                                   <label class="control-label ">الجنسية</label>
                                                   <input class="form-control" name="searcher_id" value="{{$nationality->Name}}" readonly>
                                                </div>

                                                <div class="form-group">
                                                   <label class="control-label ">اسم المشرف </label>
                                                   <select   disabled   class="form-control" >
                                                      @foreach($supervisors as $supervisor)
                                                         <option value="{{$supervisor->ID}}" @if($supervisor->ID == $thesis->supervisor->ID) selected @endif>{{$thesis->supervisor->Fistname}} {{$thesis->supervisor->LastName}}</option>
                                                      @endforeach
                                                   </select>
                                                </div>


                                                <div class="form-group">
                                                   <label class="control-label ">  الجامعة </label>
                                                   <select disabled name="University" required class="form-control">
                                                      @foreach($universities as $uni)
                                                         <option @if($search->University==$uni->ID) selected @endif value="{{$uni->ID}}">{{$uni->Name}}</option>
                                                      @endforeach
                                                   </select>
                                                </div>


                                                <div class="form-group">
                                                   <label class="control-label ">عنوان الرسالة </label>
                                                   <input class="form-control" name="searcher_id" value="{{$thesis->Title}}" readonly>
                                                </div>

                                                <div class="form-group">
                                                   <label class="control-label ">تاريخ تسجيل الرسالة </label>
                                                   <input class="form-control" name="searcher_id" value="{{$thesis->BeginningDate}}" readonly>
                                                </div>

                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>


                              </div>
                              <!-- تقرير الإدارة -->
                              <div class="tab-pane" id="tab_1_3">
                                 <form role="form" method="POST" action="{{route('addadmin2_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <div class="form-group">
                                       <label class="control-label ">1. مدى مطابقة تقرير الطالب مع واقع عمله ؟ : *</label>
                                       <textarea required class="form-control " name="q1" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">2. مدى مطابقة تقرير الطالب مع تقرير الشرف ؟ : *</label>
                                       <textarea required class="form-control " name="q2" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">3. أهم الايجابيات على عمل الطالب ؟ : *</label>
                                       <textarea required class="form-control " name="q3" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">4. أهم المآخذ على عمل الطالب ؟  : *</label>
                                       <textarea required class="form-control " name="q4" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">5. التوصيات والمقترحات : *</label>
                                       <textarea required class="form-control " name="q5" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">6. ملاحظات عامة  : *</label>
                                       <textarea required class="form-control " name="note" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رفع ملف (اختياري) : </label>
                                       <input  class="form-control " name="filename" type="file"  />
                                    </div>
                                    <button type="submit" class="btn btn-primary">تأكيد</button>
                                 </form>
                              </div>
                              <!-- تقرير المشرف -->
                              <div class="tab-pane" id="tab_1_4">
                                 <form role="form" method="POST" action="{{route('addsupervisor_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <div class="form-group">
                                       <label class="control-label ">1. نسبة ما تم إنجازه من الرسالة : *</label>
                                       <select required class="form-control" name="q1">
                                          <option  value="" selected disabled>الرجاء اختيار النسبة</option>
                                          <option value="10%">10%</option>
                                          <option value="20%">20%</option>
                                          <option value="30%">30%</option>
                                          <option value="40%">40%</option>
                                          <option value="50%">50%</option>
                                          <option value="60%">60%</option>
                                          <option value="70%">70%</option>
                                          <option value="80%">80%</option>
                                          <option value="90%">90%</option>
                                          <option value="100%">100%</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">2. مسوغات وتوضيحات حول نسبة الإنجاز : *</label>
                                       <textarea required class="form-control " name="q2" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">3. مدى جودة البحث والتزامه بالمنهج العلمي  المحدد من الكرسي *   </label>
                                       <select required class="form-control" name="q3">
                                          <option  value="" selected disabled>الرجاء اختيار النسبة</option>
                                          <option value="ممتاز">ممتاز</option>
                                          <option value="جيد جدا">جيد جدا</option>
                                          <option value="جيد">جيد</option>
                                          <option value="مقبول">مقبول</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">4. مدى الالتزام بتوجيهات المشرف واللجنة * </label>
                                       <select required class="form-control" name="q4">
                                          <option  value="" selected disabled>الرجاء اختيار النسبة</option>
                                          <option value="أكثر من 10%">أكثر من 10%</option>
                                          <option value="أكثر من 20%">أكثر من 20%</option>
                                          <option value="أكثر من 30%">أكثر من 30%</option>
                                          <option value="أكثر من 40%">أكثر من 40%</option>
                                          <option value="أكثر من 50%">أكثر من 50%</option>
                                          <option value="أكثر من 60%">أكثر من 60%</option>
                                          <option value="أكثر من 70%">أكثر من 70%</option>
                                          <option value="أكثر من 80%">أكثر من 80%</option>
                                          <option value="أكثر من 90%">أكثر من 90%</option>
                                          <option value="100%">100%</option>
                                       </select>
                                    </div>
                                    <p style="font-weight: bold">ملاحظات المشرف على عمل الباحث :</p>
                                    <div class="form-group">
                                       <label class="control-label ">5. أبرز الملاحظات الإيجابية على عمل الباحث  : * </label>
                                       <textarea required class="form-control " name="q5" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">6. أبرز الملاحظات السلبية على عمل الباحث : * </label>
                                       <textarea required class="form-control " name="q6" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">7. ما الصعوبات التي تواجه الباحث ( إن وجدت ) : * </label>
                                       <textarea required class="form-control " name="q7" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">8. التوصيات والمقترحات التطويرية : * </label>
                                       <textarea required class="form-control " name="q8" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">ملاحظات :  </label>
                                       <textarea  class="form-control " name="note" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رفع ملف (اختياري) </label>
                                       <input  class="form-control " name="filename" type="file" />
                                    </div>
                                    <button type="submit" class="btn btn-primary" >تأكيد</button>
                                 </form>
                              </div>
                              <!-- تقرير الباحث -->
                              <div class="tab-pane" id="tab_1_5">
                                 <form role="form" method="POST" action="{{route('addsearcher_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <div class="form-group">
                                       <label class="control-label ">1- اجمالي عدد الهدايات القرآنية التي تضمنتها رسالتك حتى تاريخه : </label>
                                       <input type="number" required class="form-control " name="q1" ></input>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">2- مستوى التواصل بين المشرف و الطالب : </label>
                                       <textarea required class="form-control " name="q2" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">3- أسباب عدم التواصل ان وجد : </label>
                                       <textarea required class="form-control " name="q3" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">4- عدد الجلسات الاشرافية : </label>
                                       <input type="number" required class="form-control " name="q4" ></input>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">5- مجموع ساعات الإشراف : </label>
                                       <input type="number" required class="form-control " name="q5" ></input>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">6- مدى الالتزام بتعديلات المشرف واللجنة العلمية بالكرسي   : </label>
                                       <textarea required class="form-control " name="q6" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">7- أسباب عدم الالتزام بتعديلات المشرف  : </label>
                                       <textarea required class="form-control " name="q7" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">8- مالصعوبات التي تواجه الباحث ( إن وجدت )  : </label>
                                       <textarea required class="form-control " name="q8" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">9- إضافات أخرى : </label>
                                       <textarea required class="form-control " name="q9" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رفع ملف (اختياري) : </label>
                                       <input  class="form-control " name="filename" type="file"  />
                                    </div>
                                    <button type="submit" class="btn btn-primary">تأكيد</button>
                                 </form>
                              </div>
                              <!-- تقرير الباحث المساعد -->
                              <div class="tab-pane" id="tab_1_6">
                                 <form role="form" method="POST" action="{{route('addreviewers_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <div class="form-group">
                                       <label class="control-label ">1- كفاية المصادر وأصالتها، والمراجع وحداثتها، ومدى إفادة الباحث منها، واستيعابه للدراسات السابقة. (الدرجة 1-10) : * </label>
                                       <select required class="form-control" name="q1">
                                          <option value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q1_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">2- مدى تقيد الطالب بعقيدة أهل السنة والجماعة فيما يقرره من هدايات.(الدرجة 1-10) : * </label>
                                       <select required class="form-control" name="q2">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q2_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">3- التقيد بالخطة والإجراءات الموضوعة للدراسة.(الدرجة 1-10)  * </label>
                                       <select required  class="form-control" name="q3">
                                          <option  value="" selected  disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات * : </label>
                                       <textarea required class="form-control " name="q3_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">4- مراعاة ضوابط الكتابة العلمية من سلامة اللغة، ودقة الصياغة، ووضوحها، والقدرة على تنظيم المعلومات والأفكار، وعرضها بطريقة علمية، ودعمها بالأدلة المناسبة.(الدرجة 1-10) * : </label>
                                       <select required class="form-control" name="q4">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q4_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">5- مدى التزام الباحث بضوابط النقل والاقتباس، والتحلي بالأمانة العلمية، والتزام منهج البحث العلمي وخطواته الإجرائية في التوثيق، والتخريج والحكم على الأحاديث، والترجمة للأعلام وغيرها.(الدرجة 1-10)  : * </label>
                                       <select required class="form-control" name="q5">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q5_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">6- مستوى تطبيق الباحث لمحتوى الدراسة التأصيلية والتزامه بها، وبالضوابط والإجراءات الموضوعة للمشروع.(الدرجة 1-10) * : </label>
                                       <select required class="form-control" name="q6">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q6_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">7- ظهور شخصية الباحث، ومستوى ما له من تحليلات ومناقشات واستنتاجات وإضافات.(الدرجة 1-10) * : </label>
                                       <select required class="form-control" name="q7">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q7_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">8- مطابقة المحتوى للعنوان، وتحقيق الباحث للأهداف، ومستوى الإضافات العلمية التي قدمها(الدرجة 1-10) : * </label>
                                       <select required class="form-control" name="q8">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q8_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">9- مدى ارتباط الهدايات بالواقع ودورها في حل المشكلات. (الدرجة 1-10) : * </label>
                                       <select required class="form-control" name="q9">
                                          <option  value=""  selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : * </label>
                                       <textarea required class="form-control " name="q9_details" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">10- التنسيق والإخراج (الدرجة 1-10) : * </label>
                                       <select required class="form-control" name="q10">
                                          <option  value="" selected disabled>الرجاء اختيار الدرجة</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">التعليقات والمبررات  : *</label>
                                       <textarea required class="form-control " name="q10_details"></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">ملحوظات ومقترحات اضافية : * </label>
                                       <textarea required class="form-control " name="q11" ></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رابط ملف البحث بعد التحديث *</label>
                                       <input required class="form-control " name="filename" type="file"  />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">ملاحظات  : </label>
                                       <textarea  class="form-control " name="note" ></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">تأكيد</button>
                                 </form>
                              </div>
                              <!-- تفاصيل التقرير لكل تقرير -->
                              <div class="tab-pane" id="tab_1_7">
                                 <div class="portlet light ">
                                    <div class="portlet-title">
                                       <div class="caption">
                                          <span class="caption-subject font-primay "> التقارير الدورية الخاصة بالبحث </span>
                                       </div>
                                    </div>
                                    <div class="portlet-body">
                                       <table class="table table-hover table-striped table-bordered" >
                                          <tbody>
                                             @if(auth()->user()->hasRole('student',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('reviewer',auth()->user()->role_id))
                                             <!-- تقرير الباحث -->
                                             <tr>
                                                <td> تقرير الباحث </td>
                                                <td>
                                                   @if(!empty($search->searchers_reports[0]))
                                                   تم الارسال من طرف : {{$search->searcher->Fistname}} {{$search->searcher->LastName}} 
                                                   @endif
                                                </td>
                                                <td>
                                                   @if(!empty($search->searchers_reports[0]))
                                                   تم الارسال بتاريخ :{{$search->searchers_reports[0]->date}} 
                                                   @endif
                                                </td>
                                                <td>
                                                   <!-- تفاصيل تقرير الباحث -->
                                                   @if(count($search->searchers_reports)>0)
                                                   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#searchermodal">
                                                   عرض تقرير الباحث
                                                   </button>

                                                   <div class="modal fade" id="searchermodal" tabindex="-1" role="dialog" aria-labelledby="searchermodallabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h5 class="modal-title" id="searchermodallabel"> 
                                                               <button type="button" class="btn btn-primary" onclick="printDiv('print-me5');">طباعة</button> 
                                                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id) )

                                                               <a type="button" class="btn btn-danger" href="{!! route('delete_reports',['id' => $search->searchers_reports[0]->ID , 'idsearch' => $search->ID , 'type' => 'searcher_reports' ] ) !!}">حذف </a>

                                                                @endif
                                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                               </button>
                                                            </h5>
                                                             
                                                              
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="POST"  action="#" enctype="multipart/form-data" id="print-me5">
                                                                <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل التقرير" readonly /></div>                                                                    
                                                                
                                                                  <div class="form-group">
                                                                     <label class="control-label ">1- اجمالي عدد الهدايات القرآنية التي تضمنتها رسالتك حتى تاريخه : </label>
                                                                     <textarea readonly class="form-control " name="q1" >{{$search->searchers_reports[0]->q1}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">2- مستوى التواصل بين المشرف و الطالب : </label>
                                                                     <textarea readonly class="form-control " name="q2" >{{$search->searchers_reports[0]->q2}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">3- أسباب عدم التواصل ان وجد : </label>
                                                                     <textarea readonly class="form-control " name="q3" >{{$search->searchers_reports[0]->q3}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">4- عدد الجلسات الاشرافية : </label>
                                                                     <textarea readonly class="form-control " name="q4" >{{$search->searchers_reports[0]->q4}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">5- مجموع ساعات الإشراف : </label>
                                                                     <textarea readonly class="form-control " name="q5" >{{$search->searchers_reports[0]->q5}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">6- مدى الالتزام بتعديلات المشرف واللجنة العلمية بالكرسي   : </label>
                                                                     <textarea readonly class="form-control " name="q6" >{{$search->searchers_reports[0]->q6}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">7- أسباب عدم الالتزام بتعديلات المشرف  : </label>
                                                                     <textarea readonly class="form-control " name="q7" >{{$search->searchers_reports[0]->q7}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">8- مالصعوبات التي تواجه الباحث ( إن وجدت )  : </label>
                                                                     <textarea readonly class="form-control " name="q8" >{{$search->searchers_reports[0]->q8}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">9- إضافات أخرى : </label>
                                                                     <textarea readonly class="form-control " name="q9" >{{$search->searchers_reports[0]->q9}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label "> الملف : </label>
                                                                     <a class="btn btn-primary" target="_blank" href="{{url('project/storage/app/public/searcher_reports/'.$search->searchers_reports[0]->filename)}}"> تحميل الملف </a>
                                                                  </div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   @else
                                                   <span class="btn btn-danger"> لم يتم إرسال التقرير </span>
                                                   @endif
                                                </td>
                                             </tr>
                                             @endif
                                             <!-- تقرير المشرف -->
                                             @if(auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('reviewer',auth()->user()->role_id) || auth()->user()->hasRole('supervisor',auth()->user()->role_id))
                                             <tr>
                                                <td> تقرير المشرف </td>
                                                <td>
                                                   @if(!empty($search->supervisors_reports[0]))
                                                   تم الارسال من طرف : {{$search->supervisors_reports[0]->superviso->Fistname}} {{$search->supervisors_reports[0]->superviso->LastName}}
                                                   @endif
                                                </td>
                                                <td>
                                                   @if(!empty($search->supervisors_reports[0]))
                                                   تم الارسال بتاريخ : {{$search->supervisors_reports[0]->date}} @endif 
                                                </td>
                                                <td>
                                                   <!-- تفاصيل تقرير المشرف -->
                                                   @if(count($search->supervisors_reports)>0)
                                                   <button type="button" class="btn  btn-info" data-toggle="modal" data-target="#supervisormodal">
                                                   عرض تقرير المشرف
                                                   </button>
                                                   <div class="modal fade" id="supervisormodal" tabindex="-1" role="dialog">
                                                      <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h5 class="modal-title" id="searchermodallabel">
                                                                    <button type="button" class="btn btn-primary" onclick="printDiv('print-me4');">طباعة</button> 
                                                                    @if(auth()->user()->hasRole('admin',auth()->user()->role_id) )

                                                                    <a type="button" class="btn btn-danger" href="{!! route('delete_reports',['id' => $search->supervisors_reports[0]->ID , 'idsearch' => $search->ID , 'type' => 'supervisors_reports' ] ) !!}">حذف </a>      

                                                                    @endif
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                                    </h5>
                                                            
                                                               </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="POST" action="#" enctype="multipart/form-data" id="print-me4">
                                                                <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل التقرير" readonly /></div>                                                                    
                                                                
                                                                  <div class="form-group">
                                                                     <label class="control-label ">نسبة ما تم إنجازه من الرسالة : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q1}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">مسوغات وتوضيحات حول نسبة الإنجاز : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q2}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">مدى جودة البحث والتزامه بالمنهج العلمي  المحدد من الكرسي
                                                                     (ممتاز، جيد جدا، جيد، مقبول)  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q3}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">مدى الالتزام بتوجيهات المشرف واللجنة
                                                                     العلمية بالكرسي
                                                                     100%, 90%,...etc
                                                                     : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q4}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">أبرز الملاحظات الإيجابية على عمل الباحث  : </label>
                                                                     <p style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q5}} </p>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">أبرز الملاحظات السلبية على عمل الباحث : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q6}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">ما الصعوبات التي تواجه الباحث ( إن وجدت ) : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q7}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التوصيات والمقترحات التطويرية : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->supervisors_reports[0]->q8}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">ملاحظات : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">@if(empty($search->supervisors_reports[0]->note)) لا توجد @else {{$search->supervisors_reports[0]->note}} @endif</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label "> الملف : </label>
                                                                     <a class="btn btn-primary" target="_blank" href="{{url('project/storage/app/public/supervisor_reports/'.$search->supervisors_reports[0]->filename)}}"> تحميل الملف </a>
                                                                  </div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   @else
                                                   <span class="btn btn-danger"> لم يتم إرسال التقرير </span>
                                                   @endif
                                                </td>
                                             </tr>
                                             @endif
                                             @if(auth()->user()->hasRole('reviewer',auth()->user()->role_id) 
                                             ||  auth()->user()->hasRole('admin2',auth()->user()->role_id) 
                                             ||  auth()->user()->hasRole('admin',auth()->user()->role_id))
                                             <!-- تقرير الباحث المساعد -->
                                             <tr>
                                                <td> تقرير الباحث المساعد </td>
                                                <td>@if(count($search->reviewers_reports)>0)
                                                    @foreach($search->reviewers_reports as $rev)
                                                    تم الارسال من طرف : {{$rev->reviewe->Fistname}} {{$rev->reviewe->LastName}} 
                                                    <br>
                                                    @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(count($search->reviewers_reports)>0)
                                                    @foreach($search->reviewers_reports as $rev)
                                                    تم الارسال بتاريخ : {{$rev->date}}  
                                                    <br>
                                                    @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                   <!-- تفاصيل تقرير الباحث المساعد -->
                                                   @if(count($search->reviewers_reports)>0)
                                                   @foreach($search->reviewers_reports as $rev)

                                                <button type="button" class="btn btn-sm  btn-info"  data-toggle="modal" data-target="#reviewermodal{{$rev->ID}}">
                                                    عرض تقرير الباحث المساعد: {{$rev->reviewe->Fistname}}
                                                   </button>
                                                   <div class="modal fade" id="reviewermodal{{$rev->ID}}" tabindex="-1" role="dialog" aria-labelledby="reviewermodallabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h5 class="modal-title" id="reviewermodallabel">
                                                                    <button type="button" class="btn btn-primary" onclick="printDiv('print-me3{{$rev->ID}}');">طباعة</button> 
                                                                    @if(auth()->user()->hasRole('admin',auth()->user()->role_id) )

<a type="button" class="btn btn-danger" href="{!! route('delete_reports',['id' => $search->reviewers_reports[0]->ID , 'idsearch' => $search->ID , 'type' => 'reviewers_reports' ] ) !!}">حذف </a>      

@endif
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                               </h5>
                                                              
                                                               </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="POST" action="#" enctype="multipart/form-data" id="print-me3{{$rev->ID}}">
                                                                <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل التقرير" readonly /></div>                                                                    
                                                                
                                                                  <div class="form-group">
                                                                     <label class="control-label ">1- كفاية المصادر وأصالتها، والمراجع وحداثتها، ومدى إفادة الباحث منها، واستيعابه للدراسات السابقة. (الدرجة 1-10) : </label>
                                                                     <input readonly class="form-control " name="q1" type="text" value="{{$rev->q1}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q1_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">2- مدى تقيد الطالب بعقيدة أهل السنة والجماعة فيما يقرره من هدايات.(الدرجة 1-10) : </label>
                                                                     <input readonly class="form-control " name="q2" type="text" value="{{$rev->q2}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q2_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">3- التقيد بالخطة والإجراءات الموضوعة للدراسة.(الدرجة 1-10)  : </label>
                                                                     <input readonly class="form-control " name="q3" type="text"  value="{{$rev->q3}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q3_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">4- مراعاة ضوابط الكتابة العلمية من سلامة اللغة، ودقة الصياغة، ووضوحها، والقدرة على تنظيم المعلومات والأفكار، وعرضها بطريقة علمية، ودعمها بالأدلة المناسبة.(الدرجة 1-10) * : </label>
                                                                     <input readonly class="form-control " name="q4" type="text"  value="{{$rev->q4}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q4_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">5- مدى التزام الباحث بضوابط النقل والاقتباس، والتحلي بالأمانة العلمية، والتزام منهج البحث العلمي وخطواته الإجرائية في التوثيق، والتخريج والحكم على الأحاديث، والترجمة للأعلام وغيرها.(الدرجة 1-10)  : </label>
                                                                     <input readonly class="form-control " name="q5" type="text"  value="{{$rev->q5}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q5_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">6- مستوى تطبيق الباحث لمحتوى الدراسة التأصيلية والتزامه بها، وبالضوابط والإجراءات الموضوعة للمشروع.(الدرجة 1-10) * : </label>
                                                                     <input readonly class="form-control " name="q6" type="text"  value="{{$rev->q6}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q6_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">7- ظهور شخصية الباحث، ومستوى ما له من تحليلات ومناقشات واستنتاجات وإضافات.(الدرجة 1-10) * : </label>
                                                                     <input readonly class="form-control " name="q7" type="text" value="{{$rev->q7}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q7_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">8- مطابقة المحتوى للعنوان، وتحقيق الباحث للأهداف، ومستوى الإضافات العلمية التي قدمها(الدرجة 1-10) : </label>
                                                                     <input readonly class="form-control " name="q8" type="text" value="{{$rev->q8}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q8_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">9- مدى ارتباط الهدايات بالواقع ودورها في حل المشكلات. (الدرجة 1-10) : </label>
                                                                     <input readonly class="form-control " name="q9" type="text" value="{{$rev->q9}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q9_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">10- التنسيق والإخراج (الدرجة 1-10) : </label>
                                                                     <input readonly class="form-control " name="q10" type="text" value="{{$rev->q10}}"  />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التعليقات والمبررات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q10_details}} </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">ملحوظات ومقترحات اضافية :  </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->q11}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">ملاحظات  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$rev->note}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">رابط ملف البحث بعد المراجعة والتعليقات</label>
                                                                     <a class="btn btn-primary" target="_blank" href="{{url('project/storage/app/public/reviewers_reports/'.$rev->filename)}}"> تقرير المراجع </a>
                                                                  </div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <br>
                                                   @endforeach
                                                   @else
                                                   <span class="btn btn-danger"> لم يتم إرسال التقرير </span>
                                                   @endif
                                                </td>
                                             </tr>
                                             @endif
{{--                                             @if(auth()->user()->hasRole('student',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('supervisor',auth()->user()->role_id) || auth()->user()->hasRole('admin',auth()->user()->role_id))--}}

                                             <!-- new update on 12/6/2018 , student no longer see this report -->
                                             <!-- newer update on 18/6/2018 , supervisor no longer see this report -->
                                             @if(auth()->user()->hasRole('admin2',auth()->user()->role_id)  || auth()->user()->hasRole('admin',auth()->user()->role_id))
                                                <!-- تقرير الإدارة -->
                                             <tr>
                                                <td> تقرير اللجنة العلمية </td>
                                                <td>
                                                   @if(auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id) )
                                                   @if(!empty($search->admin2_reports[0]))
                                                   تم الارسال من طرف : {{$search->admin2_reports[0]->admin2}}
                                                   @endif
                                                   @endif
                                                </td>
                                                <td>
                                                   @if(!empty($search->admin2_reports[0]))
                                                   تم الارسال بتاريخ : {{$search->admin2_reports[0]->date}}
                                                   @endif
                                                </td>
                                                <td>
                                                   <!-- تفاصيل تقرير الإدارة -->
                                                   @if(count($search->admin2_reports)>0)
                                                   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#admin2modal">
                                                   عرض تقرير الادارة
                                                   </button>
                                                   <div class="modal fade" id="admin2modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h5 class="modal-title" id="exampleModalLabel">
                                                                   <button type="button" class="btn btn-primary" onclick="printDiv('print-me2');">طباعة</button> 
                                                                   @if(auth()->user()->hasRole('admin',auth()->user()->role_id) )

<a type="button" class="btn btn-danger" href="{!! route('delete_reports',['id' => $search->admin2_reports[0]->ID , 'idsearch' => $search->ID , 'type' => 'admin2_reports' ] ) !!}">حذف </a>      

@endif
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                                </h5>
                                                             
                                                               </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="POST" action="#"  id="print-me2" >
                                                                    <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل التقرير" readonly /></div>                                                                    
                                                                  <div class="form-group">
                                                                     <label class="control-label ">مدى مطابقة تقرير الطالب مع واقع عمله ؟ : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->q1}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">مدى مطابقة تقرير الطالب مع تقرير الشرف ؟ : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->q2}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">اهم الايجابيات على عمل الطالب ؟ : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->q3}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">أهم المآخذ على عمل الطالب ؟  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->q4}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">التوصيات والمقترحات : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->q5}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">ملاحظات عامة  : </label>
                                                                     <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->admin2_reports[0]->note}}</div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label "> الملف : </label>
                                                                     <a class="btn btn-primary" target="_blank" href="{{ url('storage/admin2_reports/'.$search->admin2_reports[0]->filename) }}"> تقرير الادارة </a>
                                                                  </div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   @else
                                                   <span class="btn btn-danger"> لم يتم إرسال التقرير </span>
                                                   @endif
                                                </td>
                                               
                                                @if(auth()->user()->hasRole('student',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('reviewer',auth()->user()->role_id))




                                            <!-- تفاصيل التقرير الفاحص -->
                                             @endif

                                             @endif
                                             @if( auth()->user()->hasRole('admin',auth()->user()->role_id) ||  
                                             ((auth()->user()->hasRole('student',auth()->user()->role_id) && !empty($search->examiner_reports[0]) && $search->examiner_reports[0]->searcher_access==1 ) ) )
                                             <tr>

                                                @if( auth()->user()->hasRole('admin', auth()->user()->role_id))
                                                   <td> تقرير الفاحص الخاص بالباحث </td>

                                                @else


                                                <td> التقرير الإداري الخاص بك </td>

                                                @endif
                                                <td>

                                                   بإمكانك الآن الاطلاع على التقرير الإداري الخاص بك وطباعته.

{{--                                                   @if(!empty($search->examiner_reports[0]))--}}
{{--                                                   تم الارسال من طرف : {{$search->examiner_reports[0]->admin}}--}}
{{--                                                   @endif--}}

                                                </td>
                                                <td>
                                                   @if(!empty($search->examiner_reports[0]))
                                                   تم النشر بتاريخ :{{$search->examiner_reports[0]->date}}
                                                   @endif
                                                </td>
                                                <td >
                                                   <!-- تفاصيل التقرير الفاحص -->
                                                   @if(count($search->examiner_reports)>0)





                                                      @if( auth()->user()->hasRole('admin', auth()->user()->role_id))


                                                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#searchermodal123">
                                                   عرض تقرير الفاحص
                                                   </button>

                                                   <div class="modal fade" id="searchermodal123" tabindex="-1" role="dialog" aria-labelledby="searchermodallabel123" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h5 class="modal-title" id="searchermodallabel123">
                                                                   <button type="button" class="btn btn-primary" onclick="printDiv('print-me1');">طباعة</button>
                                                                   @if(auth()->user()->hasRole('admin',auth()->user()->role_id) )

<a type="button" class="btn btn-danger" href="{!! route('delete_reports',['id' => $search->examiner_reports[0]->id , 'idsearch' => $search->ID , 'type' => 'examiner_reports' ] ) !!}">حذف </a>

@endif
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                                   </h5>

                                                               </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="POST" action="#" enctype="multipart/form-data" id="print-me1">
                                                                <div class="form-group"><input style="text-align:center" class="form-control " value="تفاصيل التقرير" readonly /></div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">اسم الجزء البحثي</label>
                                                                     <input readonly class="form-control " name="q1" value="{{$search->examiner_reports[0]->searche->Name}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">فصل الجزء البحثي</label>
                                                                     <input readonly class="form-control " name="q1" value="{{$search->examiner_reports[0]->searche->Alias}}"/>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">تم الرفع من قبل </label>
                                                                     <input readonly class="form-control " name="q2" value="{{$search->examiner_reports[0]->admin}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label ">تم كتابة التعليق من طرف </label>
                                                                     <input readonly class="form-control " name="q2" value="{{$search->examiner_reports[0]->comment_admin}}" />
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label class="control-label "> هل يتسطيع الباحث رؤية التقرير </label>
                                                                     <input readonly class="form-control " name="q2" value="{{$search->examiner_reports[0]->searcher_access == 1 ? "نعم" : "لا"}}" >
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label class="control-label "> ملاحظات </label>
                                                                    <br />
                                                                    <div style="background-color:#eef1f5;padding:6px 12px;border:1px solid #c2cad8;border-radius:4px;white-space:pre-wrap;">{{$search->examiner_reports[0]->comment}}</div>
                                                                 </div>

                                                                  <div class="form-group">
                                                                     <label class="control-label "> الملف : </label>
                                                                     <a class="btn btn-primary" target="_blank" href="{{url('../storage/app/public/examiner_reports/'.$search->examiner_reports[0]->file)}}"> تحميل الملف </a>
                                                                  </div>
                                                               </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   @else

                                                         <a class="btn btn-primary" target="_blank" href="{{url('../storage/app/public/examiner_reports/'.$search->examiner_reports[0]->file)}}"> تنزيل التقرير الخاص بك </a>


                                                      @endif


                                                   @else
                                                   <span class="btn btn-danger"> لم يتم إرسال التقرير </span>
                                                   @endif
                                                </td>
                                             </tr>
                                             @endif
                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>

                               <!-- تفاصيل تقرير الفاحص -->
                              <div class="tab-pane" id="tab_1_8">
                                 <form role="form" method="POST" action="{{route('addexaminer_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <input type="hidden" value="{{$search->searcher->ID}}" name="searcher" />
                                    <div class="form-group">
                                       <label class="control-label ">اسم الباحث </label>
                                       <input class="form-control" name="searcher_name" value="{{$search->searcher->Fistname}}" readonly>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رقم الباحث في الموسوعة</label>
                                       <input class="form-control" name="searcher_id" value="{{$search->searcher->Code}}" readonly>
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label ">الجنسية</label>
                                       <input class="form-control" name="searcher_id" value="{{$nationality->Name}}" readonly>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label ">اسم المشرف </label>
                                       <select   disabled   class="form-control" >
                                          @foreach($supervisors as $supervisor)
                                             <option value="{{$supervisor->ID}}" @if($supervisor->ID == $thesis->supervisor->ID) selected @endif>{{$thesis->supervisor->Fistname}} {{$thesis->supervisor->LastName}}</option>
                                          @endforeach
                                       </select>
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label ">  الجامعة </label>
                                       <select disabled name="University" required class="form-control">
                                          @foreach($universities as $uni)
                                             <option @if($search->University==$uni->ID) selected @endif value="{{$uni->ID}}">{{$uni->Name}}</option>
                                          @endforeach
                                       </select>
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label ">عنوان الرسالة </label>
                                       <input class="form-control" name="searcher_id" value="{{$thesis->Title}}" readonly>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label ">تاريخ تسجيل الرسالة </label>
                                       <input class="form-control" name="searcher_id" value="{{$thesis->BeginningDate}}" readonly>
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label ">اسم الجزء البحثي </label>
                                       <input class="form-control " readonly  name="search_name" value="{{$search->Name}}" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">وصف الجزء البحثي </label>
                                       <input class="form-control " readonly  name="search_alias" value="{{$search->Alias}}" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">هل يستطيع الباحث رؤية التقرير ؟ </label>
                                       <input class="form-control " type="checkbox"  name="searcher_access" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رفع ملف تقرير الفاحص الخاص بهذا الباحث  *</label>
                                       <input required class="form-control " name="filename" type="file"  />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">ملاحظات  : </label>
                                       <textarea  class="form-control " name="comment" ></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">تأكيد</button>
                                 </form>
                              </div>
                              @if(count($search->examiner_reports)>0)
                              <div class="tab-pane" id="tab_1_9">
                                 <form role="form" method="POST" action="{{route('updateexaminer_reports')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$search->ID}}" name="search" />
                                    <input type="hidden" value="{{$search->searcher->ID}}" name="searcher" />
                                    <input type="hidden" value="{{$search->examiner_reports[0]->id}}" name="id_report_examiner" />
                                    <div class="form-group">
                                       <label class="control-label ">اسم الباحث </label>
                                       <input class="form-control" name="searcher_name" value="{{$search->searcher->Fistname}}" readonly>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">رقم الباحث </label>
                                       <input class="form-control" name="searcher_id" value="{{$search->searcher->Code}}" readonly>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">اسم البحث </label>
                                       <input class="form-control " readonly  name="search_name" value="{{$search->Name}}" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label ">وصف البحث </label>
                                       <input class="form-control " readonly  name="search_alias" value="{{$search->Alias}}" />
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label "> هل يتسطيع الباحث رؤية التقرير </label>
                                       <input readonly class="form-control " name="q2" value="{{$search->examiner_reports[0]->searcher_access == 1 ? "نعم" : "لا"}}" >
                                    </div>


                                    <div class="form-group">
                                       <label class="control-label ">هل يستطيع الباحث رؤية التقرير ؟ </label>
                                       <input readonly class="form-control " name="q2" value="{{$search->examiner_reports[0]->searcher_access == 1 ? "حاليا: نعم" : "حالياً: لا"}}" >

                                       <input class="form-control " type="checkbox"  name="searcher_access" @if($search->examiner_reports[0]->searcher_access == 1) checked @endif />
                                    </div>


                           <div class="form-group">
                               <a class="btn btn-primary" target="_blank" href="{{url('../storage/app/public/examiner_reports/'.$search->examiner_reports[0]->file)}}"> تنزيل التقرير الخاص بك </a>

                           </div>

                                    <div class="form-group">
                                       <label class="control-label ">تحديث ملف تقرير الفاحص</label>
                                       <input class="form-control" name="filename" type="file"  />
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label ">ملاحظات  : </label>
                                       <textarea  class="form-control " name="comment" > {{$search->examiner_reports[0]->comment}} </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">تعديل</button>
                                 </form>

                              </div>
                              @endif

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PROFILE CONTENT -->
         </div>
      </div>
   </div>
   <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@section('pageScript')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/jquery.sparkline.min.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/pages/scripts/profile.min.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/scripts/datatable.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/datatables/datatables.min.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js')!!}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
  function printDiv(div) {
    // Create and insert new print section
    var elem = document.getElementById(div);
    var domClone = elem.cloneNode(true);
    var $printSection = document.createElement("div");
    $printSection.id = "printSection";
    $printSection.appendChild(domClone);
    document.body.insertBefore($printSection, document.body.firstChild);

    window.print();

    // Clean up print section for future use
    var oldElem = document.getElementById("printSection");
    if (oldElem != null) { oldElem.parentNode.removeChild(oldElem); }
                          //oldElem.remove() not supported by IE

    return true;
}
   $('#table12').DataTable( {
    "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
    },
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "aButtons": [
            "copy",
            "save"
        ]
    }
   } );
   $('#table13').DataTable( {
    "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
    },
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "aButtons": [
            "copy",
            "save"
        ]
    }
   } );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL PLUGINS -->
@if ($message = Session::get('success_add'))
<script>
   $.confirm({
   title: 'تهانينا!',
   content: '<?php echo Session::get("success_add"); ?>',
   type: 'green',
   typeAnimated: true,autoClose: 'tryAgain|3000',
   buttons: {
       tryAgain: {
           text: 'اغلاق',
           btnClass: 'btn-green',
           action: function(){
           }
       }
   }
   });
</script>
<?php Session::forget('success_add');?>
@endif
@endsection
@endsection