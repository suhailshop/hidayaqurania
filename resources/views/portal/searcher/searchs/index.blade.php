@extends('layout.master')

@section('pageTitle', 'البحوث')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
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
                            <i class="icon-chemistry"></i>
                        <span>ادارة بحوثي</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-graduation font-dark"></i>
                            <span class="caption-subject bold uppercase">لائحة البحوث الخاصة بي  </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الاختصار</th>
                                    <th class="all">الاسم</th>
                                    <th class="all">القسم</th>
                                    <th class="all">المبحث</th>
                                    <th class="none"> الترتيب</th>
                                    <th class="all">الملف</th>
                                    <th class="none">ملاحظات المشرف</th>
                                    <th class="desctop">الحالة</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)
                                <tr>
                                    <td>{{$search->Alias}}</td>
                                    <td>{{$search->Name}}</td>
                                    <td>{{$search->division->Name}}</td>
                                    <td>{{$search->divisionunit->Name}}</td>
                                    <td>{{$search->Order}}</td>
                                    <td>
                                        <a href="{{ url('storage/searchs/'.$search->SearchURL) }}" >تحميل</a>
                                    </td>
                                    <td>@if(!isset($search->Note)) لا توجد @else {{$search->Note}} @endif</td>
                                    <td>@if($search->Progress == 'موافقة الادارة' || $search->Progress == 'موافقة المشرف' ) 
                                        <div class="badge badge-primary">{{$search->Progress}}</div> 
                                        @elseif($search->Progress == 'تم الرفع')
                                        <div class="badge badge-warning">{{$search->Progress}}</div>
                                        @elseif($search->Progress == 'رفض الادارة' || $search->Progress == 'رفض المشرف') 
                                        <div class="badge badge-danger">{{$search->Progress}}</div>
                                        @endif</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                    <li>
                                                            <a data-toggle="confirmation"
                                                            data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                            data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                            data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                            data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                            data-title="هل تريد الموافقة ؟" href="{{route('getOneSearch',$search->ID)}}">
                                                                    <i class="fa fa-search"></i> اظهار البحث </a>
                                                            </li>
                                                <li>
                                                <a href="{{route('editSearch',['id'=>$search->ID])}}">
                                                        <i class="fa fa-edit"></i> تعديل </a>
                                                </li>
                                                <li>
                                                <a data-toggle="confirmation"
                                                data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                data-title="هل تريد الحذف ؟" href="{{route('deleteSearchPost',['id'=>$search->ID])}}">
                                                        <i class="fa fa-remove"></i> حذف </a>
                                                </li>

                                            </ul>
                                        </div>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


        </div>
</div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{!! asset('assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection