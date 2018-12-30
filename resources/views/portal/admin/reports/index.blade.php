@extends('layout.master')

@section('pageTitle', 'التقارير')
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
                            <i class="icon-notebook"></i>
                        <span>ادارة التقارير</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-6">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-graduation font-dark"></i>
                            <span class="caption-subject bold uppercase">لائحة  تقارير الباحثين  </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive " width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الباحث</th>
                                    <th class="none">الصنف</th>
                                    <th class="none">القسم</th>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reports_searchers as $report)
                                <tr>
                                    <td>{{$report->searcher->Fistname}} {{$report->searcher->LastName}}</td>
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
                                        <button type="button" class="btn red" data-toggle="modal" data-target="#exampleModalSer{{$report->ID}}">مشاهدة</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalSer{{$report->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                    <button type="button" class="btn green" data-toggle="modal" data-target="#exampleModal2">أضف تقرير</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <form action="{{route('addReportDetails')}}"  class="form-horizontal" enctype="multipart/form-data" method="POST">
                                                {{ csrf_field() }}
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">تقرير الادارة </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="position: relative;overflow-y: auto;max-height: 400px;">
                                                            
                                                            <div class="form-body">
                                                                <input type="hidden" value="{{$report->ID}}" name="id" />
                                                                <input type="hidden" value="searcher" name="type" />
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>اللجنة *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <select class="form-control" name="Committee" >
                                                                                @foreach($committees as $com)
                                                                                    <option value="{{$com->ID}}">{{$com->FirstName}} {{$com->LastName}}</option>
                                                                                @endforeach    
                                                                            </select> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>القسم *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <select class="form-control" name="Section" >
                                                                                @foreach($sections as $sec)
                                                                                    <option value="{{$sec->ID}}">{{$sec->Name}} </option>
                                                                                @endforeach    
                                                                            </select> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>تقييم الجزء المنجز *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="number" class="form-control" name="DoneRange" placeholder="تقييم الجزء المنجز *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>مدى التقدم الحالي  *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="number" class="form-control" name="CurrentProgress" placeholder="مدى التقدم الحالي *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>مدى الالتزام بتوجيهات اللجنة  *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="number" class="form-control" name="QualityDirection" placeholder="مدى الالتزام بتوجيهات اللجنة  *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>رأي اللجنة *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <textarea class="form-control" name="Recommendations" ></textarea> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>الجزء المنجز *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="number" class="form-control" name="UpdatedRange" placeholder=" الجزء المنجز *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>تاريخ الاعتماد *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="date" class="form-control" name="DateCommittee" placeholder=" تاريخ الاعتماد *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>أسباب عدم القبول *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <textarea class="form-control" name="Reasons" ></textarea> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>رئيس اللجنة العلمية *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="text" class="form-control" name="President" placeholder=" رئيس اللجنة العلمية *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-md-12">
                                                                        <label>اعتماد أستاذ الكرسي *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="text" class="form-control" name="Professor" placeholder=" اعتماد أستاذ الكرسي *"/> </div>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                    <div class="col-md-12">
                                                                        <label>الملف *</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <input type="file" class="form-control" name="URL" > </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-primary">تأكيد</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                    @endif                               
                                    @endif
                                    </td>
                                    <td>@if($report->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


        </div>
        <div class="col-md-6">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-graduation font-dark"></i>
                            <span class="caption-subject bold uppercase">لائحة تقارير المشرفين  </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive " width="100%" id="sample_5">
                            <thead>
                                <tr>
                                    <th class="all">المشرف</th>
                                    <th class="none">الصنف</th>
                                    <th class="all">التاريخ</th>
                                    <th class="none"> اللجنة</th>
                                    <th class="none">تقييم الجزء المنجز</th>
                                    <th class="none">جودة البحث</th>
                                    <th class="none">مدى الالتزام التوجيهات</th>
                                    <th class="none">القدر المعدل</th>
                                    <th class="none">تاريخ الاعتماد</th>
                                    <th class="none">الصعوبات</th>
                                    <th class="none"> الملاحظات الايجابية</th>
                                    <th class="none">الملاحظات السلبية</th>
                                    <th class="all">التحميل</th>
                                    <th class="all">تقرير الادارة</th>
                                    <th class="none">الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reports_supervisors as $report)
                                <tr>
                                    <td>{{$report->supervisor->Fistname}}</td>
                                    <td>{{$report->TypeCyclic}}</td>
                                    <td>{{$report->DateSupervisor}}</td>
                                    <td>@if(isset($report->committesreport->committee)) {{$report->committesreport->committee->FirstName}} {{$report->committesreport->committee->LastName}} @endif</td>
                                    <td>{{$report->DoneRange}}</td>
                                    <td>{{$report->QualityProcess}}</td>
                                    <td>{{$report->QualityDirection}}</td>
                                    <td>{{$report->UpdatedRange}}</td>
                                    <td>{{$report->DateCommittee}}</td>
                                    <td>{{$report->Difficulties}}</td>
                                    <td>{{$report->NotesPositive}}</td>
                                    <td>{{$report->NotesNegative}}</td>
                                    <td>
                                        <a href="{{ url('storage/supervisorsreports/'.$report->URL) }}" >تحميل</a>
                                    </td>
                                    <td>
                                            @if(isset($report->committesreport) )
                                                <button type="button" class="btn red" data-toggle="modal" data-target="#exampleModalSup{{$report->ID}}">مشاهدة</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalSup{{$report->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <button type="button" class="btn green" data-toggle="modal" data-target="#exampleModal1">أضف تقرير</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="{{route('addReportDetails')}}"  class="form-horizontal" enctype="multipart/form-data" method="POST">
                                                        {{ csrf_field() }}
                                                        <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">تقرير الادارة </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="position: relative;overflow-y: auto;max-height: 400px;">
                                                                    
                                                                    <div class="form-body">
                                                                        <input type="hidden" value="{{$report->ID}}" name="id" />
                                                                        <input type="hidden" value="supervisor" name="type" />
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>اللجنة *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control" name="Committee" >
                                                                                        @foreach($committees as $com)
                                                                                            <option value="{{$com->ID}}">{{$com->FirstName}} {{$com->LastName}}</option>
                                                                                        @endforeach    
                                                                                    </select> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>القسم *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control" name="Section" >
                                                                                        @foreach($sections as $sec)
                                                                                            <option value="{{$sec->ID}}">{{$sec->Name}} </option>
                                                                                        @endforeach    
                                                                                    </select> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>تقييم الجزء المنجز *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="number" class="form-control" name="DoneRange" placeholder="تقييم الجزء المنجز *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>مدى التقدم الحالي  *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="number" class="form-control" name="CurrentProgress" placeholder="مدى التقدم الحالي *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>مدى الالتزام بتوجيهات اللجنة  *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="number" class="form-control" name="QualityDirection" placeholder="مدى الالتزام بتوجيهات اللجنة  *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>رأي اللجنة *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <textarea class="form-control" name="Recommendations" ></textarea> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>الجزء المنجز *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="number" class="form-control" name="UpdatedRange" placeholder=" الجزء المنجز *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>تاريخ الاعتماد *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="date" class="form-control" name="DateCommittee" placeholder=" تاريخ الاعتماد *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>أسباب عدم القبول *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <textarea class="form-control" name="Reasons" ></textarea> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>رئيس اللجنة العلمية *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" class="form-control" name="President" placeholder=" رئيس اللجنة العلمية *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <label>اعتماد أستاذ الكرسي *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" class="form-control" name="Professor" placeholder=" اعتماد أستاذ الكرسي *"/> </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                            <div class="col-md-12">
                                                                                <label>الملف *</label>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="file" class="form-control" name="URL" > </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                                                                <button type="submit" class="btn btn-primary">تأكيد</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>                                        
                                            @endif
                                            </td>
                                    <td>@if($report->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                   
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