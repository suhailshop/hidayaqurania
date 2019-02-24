@extends('layout.master')

@section('pageTitle', 'تقاريري')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
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
                                        <button type="button" class="btn green" data-toggle="modal" data-target="#exampleModal">مشاهدة</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">تقرير الادارة </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="panel-group accordion" id="accordion1">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1"> تحميل الملف : </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_1" class="panel-collapse in">
                                                                        <div class="panel-body">
                                                                            <p><a class="btn red" href="{{ url('storage/adminreports/'.$report->committesreport->URL) }}"  target="_blank">تحميل </a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2"> القسم : </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_2" class="panel-collapse collapse">
                                                                        <div class="panel-body" style=" overflow-y:auto;">
                                                                            <p> {{$report->committesreport->section->Name}} </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5"> اللجنة : </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapse_5" class="panel-collapse collapse">
                                                                            <div class="panel-body" style=" overflow-y:auto;">
                                                                                <p> الاسم العائلي : {{$report->committesreport->committee->FirstName}} </p>
                                                                                <p>الاسم الشخصي : {{$report->committesreport->committee->LastName}}</p>
                                                                                <p>الجنس : {{$report->committesreport->committee->Gender}}</p>
                                                                                <p>المهمة : {{$report->committesreport->committee->Function}}</p>                                                                               

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">  التقييم : </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_3" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <p> تقييم الجزء المنجز : {{$report->committesreport->DoneRange}} </p>
                                                                            <p> مدى التقدم الحالي : {{$report->committesreport->CurrentProgress}} </p>
                                                                            <p>مدى الالتزام بتوجيهات اللجنة : {{$report->committesreport->QualityDirection}} </p>
                                                                            <p>رأي اللجنة : {{$report->committesreport->Recommendations}}</p>
                                                                            <p>الجزء المنجز : {{$report->committesreport->UpdatedRange}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4"> معلومات أخرى : </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_4" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <p> أسباب عدم القبول : {{$report->committesreport->Reasons}} </p>
                                                                            <p> تاريخ الاعتماد : {{$report->committesreport->DateCommittee}} </p>
                                                                            <p>  رئيس اللجنة العلمية : {{$report->committesreport->President}}<p>
                                                                            <p> اعتماد استاذ الكرسي : {{$report->committesreport->Professor}}  </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal">اغلاق</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @else 
                                    <button type="button" class="btn red" > لا تقرير</button>                                      
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
     <!-- END PAGE LEVEL PLUGINS -->

     @if ($message = Session::get('success_edit'))
     <script>
        $.confirm({
         title: 'تهانينا!',
         content: '<?php echo Session::get("success_edit"); ?>',
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
     <?php Session::forget('success_edit');?>
     @endif  

    @endsection
@endsection