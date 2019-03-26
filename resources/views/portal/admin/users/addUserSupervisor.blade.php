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
                            <span>مشرف جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-yellow m-bordered">
                <h3 class="myfont">إضافة مشرف جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالمشرف :
            </div>
<div class="row">
    
<form action="{{route('addUserSupervisorPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
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
                                        <strong>ملاحظة! </strong>         المرجو الاحتفاظ بمعلومات الحساب وتزويدها للمشرف الجديد
                                      </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">اسم المستخدم</label>
                                            <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم المستخدم" name="firstname" />
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ 'المرجو ادخال اسم المستخدم'}}</strong>
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

                            <p class="hint">  الجامعة : </p>
                            <div class="form-group{{ $errors->has('university') ? ' has-error' : '' }} ">
                                <div class="col-md-12">
                                    <select class="form-control placeholder-no-fix" name="university"  >
                                        @foreach($universities as $uni)
                                            <option value="{{$uni->Name}}">{{$uni->Name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>






                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn blue">حفظ</button>
                                        <button type="reset" class="btn default">الغاء</button>
                                    </div>
                                </div>
                            </div>
                            
                           
                                </div>
                            </div>


                                
                            <!-- END FORM-->
                        </div>
            </div>
            <div class="col-md-6">
                

                         
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