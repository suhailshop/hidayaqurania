@extends('layout.master')

@section('pageTitle', 'تقاريري')
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
                        <span>ادارة تقاريري</span>
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
                            <span class="caption-subject bold uppercase">لائحة التقارير الخاصة بي  </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الصنف</th>
                                    <th class="all">القسم</th>
                                    <th class="all">التاريخ</th>
                                    <th class="none"> تقييم الجزء المنجز</th>
                                    <th class="none">عدد الجلسات</th>
                                    <th class="none">مجموع ساعات الاشراف</th>
                                    <th class="none">مدى الالتزام بالتعديلات</th>
                                    <th class="none">تاريخ الاعتماد</th>
                                    <th class="none">الاسباب</th>
                                    <th class="none">الصعوبات</th>
                                    <th class="none">الملاحظات</th>
                                    <th class="all">التحميل</th>
                                    <th class="all">تقرير الادارة</th>
                                    <th class="none">الحالة</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reports as $report)
                                <tr>
                                    <td>{{$report->TypeCyclic}}</td>
                                    <td>{{$report->section->Name}}</td>
                                    <td>{{$report->DateSearcher}}</td>
                                    <td>{{$report->DoneRange}}</td>
                                    <td>{{$report->SessionsCount}}</td>
                                    <td>{{$report->HoursNumber}}</td>
                                    <td>{{$report->UpdatedRange}}</td>
                                    <td>{{$report->DateCommittee}}</td>
                                    <td>{{$report->Reasons}}</td>
                                    <td>{{$report->Difficulties}}</td>
                                    <td>{{$report->Notes}}</td>
                                    <td>
                                        <a href="{{ url('storage/searchersreports/'.$report->URL) }}" >تحميل</a>
                                    </td>
                                    <td>
                                    @if(isset($report->committesreport) )
                                        <a href="{{ url('storage/adminreports/'.$report->committesreport->URL) }}" >تحميل</a>
                                    @else 
                                        لا تقرير
                                    @endif
                                    </td>
                                    <td>@if($report->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                <a href="{{route('editSearcherReport',['id'=>$report->ID])}}">
                                                        <i class="fa fa-edit"></i> تعديل </a>
                                                </li>
                                                <li>
                                                <a data-toggle="confirmation"
                                                data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                data-title="هل تريد الحذف ؟" href="{{route('deleteSearcherReport',['id'=>$report->ID])}}">
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