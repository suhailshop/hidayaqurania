@extends('layout.master')

@section('pageTitle', 'دورة جديدة')
@section('pageStyle')
    {{--include here the style of the current page--}}
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
                        <li>
                                <i class="icon-reload"></i>
                                 <a href="{{route('allCycle')}}">إدارة الدورات</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                        <li>
                            <span>دورة جديدة</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-yellow m-bordered">
                <h3 class="myfont">إضافة دورة جديدة</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالدورة :
            </div>
<div class="row">
    
<form action="{{route('addCyclePost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> لديك بعض الاخطاء في النموذج . يرجى مراجعة أدناه. </div>
                                   
                                    <div class="form-group  margin-top-20">
                                       
                                         <label class="col-md-2 control-label">أدخل اسم التقرير الدوري </label>
                                                    <div class="col-md-10">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" required class="form-control" name="name"  placeholder="مثال : التقرير الدوري الثامن"/> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <label class="col-md-2 control-label">تاريخ بداية السماح لإرسال التقرير</label>
                                                    <div class="col-md-10">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="date" required  class="form-control" name="startDate" placeholder="تاريخ البداية *"/> </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        
                                         <label class="col-md-2 control-label">آخر تاريخ مسموح لإرسال التقرير</label>
                                                    <div class="col-md-10">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="date"  required class="form-control" name="endDate" placeholder="تاريخ النهاية *"/> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                         <label class="col-md-2 control-label">الدفعة</label>
                                                    <div class="col-md-10">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" min="1" max="10" required class="form-control" name="regiment" placeholder="الدفعة *"/> </div>
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
                    <!-- END V<ALIDATION STATES-->
                </div>



        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{!! asset('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') !!}" type="text/javascript"></script>    
    <script src="{!! asset('assets/pages/scripts/form-input-mask.min.js') !!}" type="text/javascript"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
@endsection