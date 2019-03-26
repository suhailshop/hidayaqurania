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
                            <span>اداري جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-yellow m-bordered">
                <h3 class="myfont">إضافة مدير جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالمشرف :
            </div>
<div class="row">
    
<form action="{{route('addUserAdminPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        
            <div class="col-md-12">
                
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                                <div class="form-body">

                                    @if ($errors->email)
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="alert alert-danger">هذا البريد الالكتروني مسجل مسبقاً</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif


                                    <div class="form-group">
                                            <label class="col-md-2 control-label">الاسم</label>
                                            <div class="col-md-10">
                                                     <input class="form-control placeholder-no-fix" type="text" placeholder="مثال : د. ياسين قاري" name="name" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">البريد الالكتروني</label>
                                            <div class="col-md-10">
                                                     <input class="form-control placeholder-no-fix" type="email" placeholder="البريد الالكتروني" name="email" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">كلمة المرور</label>
                                            <div class="col-md-10">
                                                     <input class="form-control placeholder-no-fix" type="password" placeholder="كلمة المرور" name="password" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">نوع الحساب</label>
                                            <div class="col-md-10">
                                                    <select name="role" class="form-control">
                                                        <option selected  disabled>اختر نوع الحساب</option>
                                                        <option value="admin">حساب الإدارة العام</option>
                                                        <option value="admin2">عضو اللجنة العلمية</option>
                                                    </select>
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
     <script src="{!! asset('assets/pages/scripts/form-validation.min.js') !!}" type="text/javascript"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
@endsection