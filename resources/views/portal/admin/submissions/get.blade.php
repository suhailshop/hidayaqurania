@extends('layout.master')

@section('pageTitle', 'صفحة التقديم')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    
    
@endsection

@section('pageTitle', 'الرئيسية')


@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->


            <h1 class="page-title"> البوابة الالكترونية لموسوعة الهدايات القرآنية

            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                    <a href="{{route('portalwelcome')}}">الرئيسية</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                            <i class="icon-paper-plane"></i>
                        <span>معلومات التقديم</span>
                    </li>
                    
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="{{ asset('storage/registrations/'.$searcher->PictureURL) }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$searcher->Fistname}} {{$searcher->LastName}}</div>
                                <div class="profile-usertitle-job"> {{$searcher->Status}} </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="{{route('allSubmissions')}}">
                                            <i class="icon-paper-plane"></i>  رجوع لصفحة التقديمات </a>
                                    </li>
                                    @if($searcher->CV!="")
                                    <li class="">
                                        <a class="btn btn-success" target="_blank" href="{{ asset('storage/CV/'.$searcher->CV) }}" style="margin: inherit;color:white">                                                
                                        <i class="icon-arrow-right"></i>  تحميل السيرة الذاتية</a>
                                    </li>
                                @endif
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                      
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
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
                                                <a href="#tab_1_1" data-toggle="tab">معلومات شخصية</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">نسبة التقدم في الاطروحة </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                            <form role="form" method="POST" action="{{route('updateSubmissionInfos')}}" >
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$searcher->ID}}" />
                                                    <p class="hint">الاسم العائلي و الشخصي :</p>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الاسم العائلي</label>
                                                        <input  value="{{$searcher->Fistname}}" class="form-control placeholder-no-fix" type="text"  name="Fistname" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الاسم الشخصي</label>
                                                        <input  value="{{$searcher->LastName}}"  class="form-control placeholder-no-fix" type="text"   name="LastName" /> 
                                                    </div>
                                                                  
                                                    <p class="hint">  معلومات الاقامة : </p>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                                                        <select class="form-control" name="Countrie">
                                                            @foreach($countries as $countrie)
                                                                <option value="{{$countrie->ID}}" @if($countrie->ID == $searcher->countrie->ID) selected @endif>{{$countrie->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                                                        <input  value="{{$searcher->City}}" class="form-control placeholder-no-fix" type="text"  name="City" /> </div>
                                                    
                                                    <p class="hint"> نسبة التقدم في الاطروحة : @if(isset($searcher->progress)) {{ ceil(((($numberOfMonths * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress) * 100)/ (($searcher->progress->Months * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress))}}% @else 0% @endif </p>
                                                        <div class="progress">
                                                            @if(isset($searcher->progress)) 
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$searcher->progress->ID}}" aria-valuemin="0" aria-valuemax="{{($searcher->progress->Months * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress}}" style="width:{{($numberOfMonths * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress}}%"></div></div>
                                                            @else
                                                              المرجو ملئ المعلومات في النافذة الخاصة 
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1%"></div>
                                                            </div>
                                                              @endif
                                                    <div class="form-group">
                                                        <label class="control-label ">الجامعة : </label>
                                                        <input  value="{{$searcher->University}}" class="form-control placeholder-no-fix" type="text"   name="University" /> </div>              
                                    
                                                    <div class="form-group">
                                                                <label class="control-label">المشرف : </label>
                                                                <select class="form-control" name="supervisor">
                                                                @foreach($supervisors as $supervisor)
                                                                <option value="{{$supervisor->ID}}" @if($supervisor->ID == $searcher->these->supervisor->ID) selected @endif>{{$searcher->these->supervisor->Fistname}} {{$searcher->these->supervisor->LastName}}</option>
                                                                @endforeach
                                                                </select></div>
                                                            <input type="hidden" name="these_id" value="{{$searcher->these->ID}}"/>
                                                    <div class="form-group">
                                                                <label class="control-label">عنوان الاطروحة : </label>
                                                                <input  value="{{$searcher->these->Title}}" class="form-control placeholder-no-fix"  type="text"  name="Title" /> </div>
                                                    <div class="form-group">
                                                                <label class="control-label ">تاريخ بداية البرنامج : </label>
                                                                <input dir="rtl" value="{{$searcher->these->BeginningDate}}" class="form-control placeholder-no-fix"    name="BeginningDate" /> </div>
                                                    <div class="form-group">
                                                                <label class="control-label ">تاريخ نهاية البرنامج : </label>
                                                                <input dir="rtl" value="{{$searcher->these->CompletionDate}}" class="form-control placeholder-no-fix"   name="CompletionDate" /> </div>
                                                                                        
                                                                <div class="margin-top-10">
                                                                        <input type="submit" class="btn green" value="تأكيد" />
                                                                        <input type="reset" value="الغاء" class="btn default" /> 
                                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <form action="{{route('submissionProgressPost')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id_searcher" value="{{$searcher->ID}}" />
                                                        <div class="form-group">
                                                            <label class="control-label ">مدة الدراسة بالاشهر : </label>
                                                            <input class="form-control placeholder-no-fix"  type="number"  required value="@if(isset($searcher->progress->Months)){{$searcher->progress->Months}}@endif"  name="Months" />
                                                            
                                                         </div>
                                                        <div class="form-group">
                                                            <label class="control-label ">التقدم في كل شهر : </label>
                                                            <input class="form-control placeholder-no-fix" type="number" step="0.01" value="@if(isset($searcher->progress->MonthlyProgress)){{$searcher->progress->MonthlyProgress}}@endif" required name="MonthlyProgress" /> 
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="control-label ">التقدم البدئي : </label>
                                                                <input class="form-control placeholder-no-fix" type="number" step="0.01" value="@if(isset($searcher->progress->InitialProgress)){{$searcher->progress->InitialProgress}}@endif" required name="InitialProgress" />
                                                                
                                                             </div>
                                                        <div class="margin-top-10">
                                                            <input type="submit" class="btn green" value="تأكيد" />
                                                            <input type="reset" value="الغاء" class="btn default" /> 
                                                        </div>
                                                    </form>
                                                
                                                
                                                    
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                              

                                           
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
         
        <!-- END PAGE LEVEL PLUGINS -->
       
        
    @endsection
@endsection