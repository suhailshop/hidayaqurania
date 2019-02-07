@extends('layout.master')

@section('pageTitle', 'صفحة البحث')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
   
    
    
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
                        <i class="icon-chemistry"></i>
                    <a href="{{route('getAllSearchs')}}">لائحة البحوث</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
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
                                         
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                    @if($search->Progress=='تم الرفع') 
                                                        <span class="badge badge-warning">{{$search->Progress}}</span>
                                                    @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                                        <span class="badge badge-danger">{{$search->Progress}}</span>
                                                    @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                                        <span class="badge badge-success">{{$search->Progress}}</span>
                                                    @endif
                                                    <form role="form" method="POST" action="#" >
                                                            <div class="form-group">
                                                                <label class="control-label ">الاسم </label>
                                                                <input  value="{{$search->Name}}" readonly class="form-control placeholder-no-fix" type="text"  />
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label">الاختصار</label>
                                                                    <input  value="{{$search->Alias}}" readonly  class="form-control placeholder-no-fix" type="text"   /> 
                                                            </div>  
                                                            <div class="form-group">
                                                                <label class="control-label">الرقم الدوري</label>
                                                                <input  value="{{$search->Cycle}}" readonly  class="form-control placeholder-no-fix" type="text"   /> 
                                                        </div>  
                                                            <div class="form-group">
                                                                <label class="control-label">القسم</label>
                                                                <input  value="{{$search->division->Name}}" readonly class="form-control placeholder-no-fix" type="text"   /> 
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label">المبحث</label>
                                                                    <input  value="{{$search->divisionunit->Name}}" readonly  class="form-control placeholder-no-fix" type="text"   /> 
                                                            </div>      
                                                            <div class="form-group">
                                                                    <a href="{{ url('storage/searchs/'.$search->SearchURL) }}" >تحميل الملف</a>
                                                            </div> 
                                                            <div class="form-group">
                                                                    <label class="control-label">ملاحظات المشرف</label>
                                                                    <textarea  readonly class="form-control"  >@if(isset($search->Note)) {{$search->Note}} @else لا تعليق @endif </textarea>  
                                                            </div>  
                                                               
        
                                                            <br />
                                                            <a class="btn btn-primary" href="{{route('updateProgressok',['id'=>$search->ID])}}">موافقة الادارة</a>
                                                            <a class="btn btn-danger" href="{{route('updateProgressko',['id'=>$search->ID])}}">رفض الادارة</a>
                                                           
                                                                                                                      
                                                        </form>
                                                </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                    <form role="form" method="POST" action="#" >
                                                            <div class="form-group">
                                                                <label class="control-label ">الاسم العائلي </label>
                                                                <input  value="{{$search->searcher->Fistname}}" readonly class="form-control placeholder-no-fix" type="text"  />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label ">الاسم الشخصي</label>
                                                                <input  value="{{$search->searcher->LastName}}" readonly class="form-control placeholder-no-fix" type="text"  /> 
                                                            </div>
                                                            <div class="form-group">
                                                                    <label class="control-label ">الجامعة</label>
                                                                    <input  value="{{$search->searcher->University}}" readonly class="form-control placeholder-no-fix" type="text"   name="LastName" /> 
                                                            </div>      
                                                                                                                   
                                                        </form>                                             
                                            </div>                                     
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
        
    @endsection
@endsection