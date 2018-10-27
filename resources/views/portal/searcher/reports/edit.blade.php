@extends('layout.master')

@section('pageTitle', 'تعديل تقريري ')
@section('pageStyle')
    {{--include here the style of the current page--}}
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{!! asset('assets/global/plugins/select2/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') !!}" rel="stylesheet" type="text/css" />
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
                                 <a href="{{route('allSearcherReports')}}">إدارة تقاريري</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                        <li>
                            <span>تعديل تقرير</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-green m-bordered">
                <h3>تعديل معلومات التقرير </h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالتقرير :
            </div>
<div class="row">
    
<form action="{{route('editSearcherReportPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-6">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form ">
                   
                    
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> لديك بعض الاخطاء في النموذج . يرجى مراجعة أدناه. </div>
                               
                                    <input type="hidden" value="{{$report->ID}}" name="id"/>
                                    <input type="hidden" value="{{$report->URL}}" name="URL"/>
                                <div class="form-group  ">
                                   
                                    <div class="col-md-12">
                                        <label>القسم</label>
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select  class="form-control" name="Section" >
                                                @foreach($sections as $section)
                                                    <option @if($report->Section==$section->ID) selected @endif value="{{$section->ID}}" >{{$section->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>الصنف *</label>
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" value="{{$report->TypeCyclic}}" name="TypeCyclic" placeholder="الصنف *"/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-md-12">
                                            <label>التاريخ *</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="date" class="form-control" value="{{$report->DateSearcher}}" name="DateSearcher" placeholder="التاريخ *"/> </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-md-12">
                                            <label>تقييم الجزء المنجز *</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" class="form-control" value="{{$report->DoneRange}}" name="DoneRange" placeholder="تقييم الجزء المنجز *"/> </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-md-12">
                                            <label>عدد الجلسات *</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" class="form-control" value="{{$report->SessionsCount}}" name="SessionsCount" placeholder="عدد الجلسات *"/> </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-md-12">
                                            <label>مجموع ساعات الاشراف *</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" class="form-control" value="{{$report->HoursNumber}}" name="HoursNumber" placeholder="مجموع ساعات الاشراف  *"/> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>مدى الالتزام بالتعديلات *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="number" class="form-control" value="{{$report->UpdatedRange}}" name="UpdatedRange" placeholder="مدى الالتزام بالتعديلات *"/> </div>
                                            </div>
                                    </div>
                                    
                                    
                            </div>
                    </div></div></div>
                            <div class="col-md-6">
                                    <div class="portlet light portlet-fit portlet-form ">
                                            
                                             
                                             <div class="portlet-body">
                                                 
                            <div class="form-body">
                                  
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>تاريخ الاعتماد *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="date" class="form-control" value="{{$report->DateCommittee}}" name="DateCommittee" placeholder="تاريخ الاعتماد *"/> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>الأسباب *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <textarea class="form-control" name="Reasons" placeholder="الأسباب *">{{$report->Reasons}}</textarea> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>الصعوبات *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <textarea class="form-control" name="Difficulties" placeholder="الصعوبات *">{{$report->Difficulties}}</textarea> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>الملاحظات *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <textarea class="form-control" name="Notes" placeholder="الملاحظات *">{{$report->Notes}}</textarea> </div>
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
                                    <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                    <label>الحالة</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select  class="form-control" name="status" placeholder="الحالة *"/>
                                                    
                                                        <option @if($report->Status=='yes') selected @endif value="yes" >مفعلة</option>
    
                                                        <option @if($report->Status=='no') selected @endif value="no" >غير مفعلة</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">تأكيد</button>
                                                <button type="reset" class="btn default">الغاء</button>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
            </form>
                    <!-- END VALIDATION STATES-->
                </div>



        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{!! asset('assets/global/plugins/select2/js/select2.full.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') !!}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
     <!-- BEGIN PAGE LEVEL SCRIPTS -->
     <script src="{!! asset('assets/pages/scripts/form-validation.min.js') !!}" type="text/javascript"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
@endsection