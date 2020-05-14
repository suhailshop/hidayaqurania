@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
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


            <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                             <a href="{{route('portalwelcome')}}">الرئيسية</a>
                            <i class="fa fa-angle-left"></i>
                        </li>
                        <li>
                            <span>باحث جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-yellow m-bordered">
                <h3>إضافة باحث جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالطالب :
            </div>
<div class="row">
    
<form action="{{route('addUserSearcherPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                            <div class="portlet-body">
                        <div class="form-body">
                                <p class="hint">  معلومات الحساب : </p>
                            @if ($errors->email)
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="alert alert-danger">هذا البريد الالكتروني مسجل مسبقاً</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="alert alert-danger" role="alert">
                                        <strong>ملاحظة! </strong>         المرجو الاحتفاظ بمعلومات الحساب ليتم ارسالها للطالب الجديد    
                                      </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">اسم الباحث الثلاثي</label>
                                            <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم الباحث" name="firstname" />
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ 'المرجو ادخال اسم الباحث'}}</strong>
                                            </span>
                                            @endif
                                            </div>
                                         </div>
                                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  <div class="col-md-12">
                                                <label class="control-label visible-ie8 visible-ie9">رقم الباحث</label>
                                                <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="رقم الباحث" name="Code" />
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال رقم الباحث'}}</strong>
                                                </span>
                                                @endif
                                                </div>
                                             </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  <div class="col-md-12">
                                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                                    <input required class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="البريد الالكتروني" name="email" />
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ 'المرجو ادخال البريد الالكتروني'}}</strong>
                                    </span>
                                    @endif
                                    </div>
                                 </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                                    <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" id="register_password" placeholder="كلمة المرور" name="password" /> 
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ 'المرجو ادخال كلمة المرور'}}</strong>
                                    </span>
                                    @endif
                                        </div>
                                </div>
                                <br>

                            <p class="hint">  الدفعة : فضلاً قم بتعيين رقم الدفعة للطالب </p>
                            <div class="form-group{{ $errors->has('regiment') ? ' has-error' : '' }} ">
                                <div class="col-md-12">
                                    <input required class="form-control placeholder-no-fix" type="number" min="1" max="20" placeholder="دفعة الطالب" name="regiment" />

                                </div>
                            </div>

                            
                           
                                </div>
                            </div>
                                
                            <!-- END FORM-->
                        </div>
            </div>
            <div class="col-md-6">
                
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                                <div class="form-body">
 
                                        <p class="hint">  المشرف: </p>
                                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} ">
                                                <div class="col-md-12">
                                            <select class="form-control placeholder-no-fix" name="Supervisor"  >
                                                @foreach($supervisors as $sup)
                                            <option value="{{$sup->ID}}">{{$sup->Fistname}} {{$sup->LastName}}</option>
                                                @endforeach
                                            </select>
                                            
                                            </div>
                                        </div>
                                        <p class="hint">  الأطروحة: </p>
                                <div class="form-group">  <div class="col-md-12">
                                        <label class="control-label visible-ie8 visible-ie9">عنوان الأطروحة</label>
                                        <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="عنوان الأطروحة" name="Title" />
                                        
                                        </div>
                                </div>
                                <div class="form-group">  <div class="col-md-12">
                                        <label class="control-label visible-ie8 visible-ie9">مدة البرنامج بالأشهر</label>


                                        <select required class="form-control placeholder-no-fix" name="ProgramDuration">

                                            <option disabled value="">اختر مدة الدراسة</option>
                                            <option value="12">12 شهر</option>
                                            <option value="24">24 شهر</option>
                                            <option value="36">36 شهر</option>
                                        </select>


                                        </div>
                                </div>
                                <div class="form-group">

                                    <label class="col-md-2">تاريخ بداية البرنامج</label>

                                    <div class="col-md-10">
                                         <input required class="form-control placeholder-no-fix" type="date"  min="2014-01-01"  max="2040-12-31" autocomplete="off" placeholder="تاريخ البداية" name="BeginningDate" />
                                        
                                        </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-2">تاريخ نهاية البرنامج</label>

                                    <div class="col-md-10">

                                        <input required class="form-control placeholder-no-fix" type="date"  min="2014-01-01"  max="2040-12-31" autocomplete="off" placeholder="تاريخ النهاية" name="CompletionDate" />
                                        
                                        </div>
                                </div>
                                <div class="form-group">  <div class="col-md-12">
                                        <label class="control-label visible-ie8 visible-ie9">ملاحظات</label>
                                        <textarea class="form-control placeholder-no-fix"  name="Notes" placeholder="ملاحظات"></textarea>
                                        
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
                    <!-- END VALIDATION STATES-->
                         
                </form>
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
     <script src="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>     
     <script src="{!! asset('assets/pages/scripts/form-validation.min.js') !!}" type="text/javascript"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
@endsection