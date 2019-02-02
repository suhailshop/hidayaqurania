@extends('layout.master')

@section('pageTitle', 'مراجع جديد')
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
                                <i class="icon-like"></i>
                                 <a href="{{route('allReviewer')}}">إدارة  المراجعين</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                        <li>
                            <span>مراجع جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-green m-bordered">
                <h3>أضافة مراجع جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالمراجع :
            </div>
<div class="row">
    
<form action="{{route('addReviewerPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                            <div class="portlet-body">
                        <div class="form-body">
                               
                            
                            <p class="hint">  معلومات شخصية: </p>
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} ">
                                    <div class="col-md-12">
                                <input class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />
                                @if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ 'المرجو ادخال الاسم العائلي'}}</strong>
                                </span>
                            @endif
                                    </div>
                            </div>
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                <input class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" /> 
                                @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ 'المرجو ادخال الاسم الشخصي'}}</strong>
                                </span>
                            @endif
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                <label class="control-label visible-ie8 visible-ie9">الجنس</label>
                                <select name="gender" class="form-control">
                                    <option value="ذكر"> ذكر</option>
                                    <option value="أنثى"> أنثى</option>
                                </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                <label class="control-label visible-ie8 visible-ie9">تاريخ الولادة</label>
                                <input class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />
                                    </div>
                                   </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                    <label class="control-label visible-ie8 visible-ie9">مكان الولادة</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="مكان الولادة" name="BirthCity" />
                                    </div> </div>
                            
                            <div class="form-group">
                                    <div class="col-md-12">
                                    <label class="control-label visible-ie8 visible-ie9">الجنسية</label>
                                    <select name="nationalitie" class="form-control">
                                        @foreach($nationalities as $nationalitie)
                                    <option value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                    <label class="control-label visible-ie8 visible-ie9">رقم جواز السفر</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" /> </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="control-label visible-ie8 visible-ie9">الرقم الوطني</label>
                                        <input class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" /> </div>
                            </div>
                                <div class="form-group last">
                                    <div class="col-md-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                             <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%; height: 100%;max-width: 200px; max-height: 150px;"> 
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> اختر صورة </span>
                                                    <input type="file" name="PictureURL"> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                            </div>
                                        </div>
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

                                        <p class="hint">  معلومات الاقامة : </p>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                                            <select name="countrie" class="form-control">
                                                @foreach($countries as $countrie)
                                            <option value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                                                @endforeach
                                            </select></div>
                                        </div>
                                        
                                        <div class="form-group">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                                            <input class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" /> </div>
                                        </div><div class="form-group">  <div class="col-md-12">
                                                <label class="control-label visible-ie8 visible-ie9">العنوان</label>
                                                <input class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" /> </div>
                                       </div>
                                        
                                                
                                                
                                        <p class="hint">  معلومات دراسية : </p>
                                        <div class="form-group">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">الجامعة</label>
                                            <input class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" /> </div>              
                                        </div>
                                        <div class="form-group">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">الكلية</label>
                                            <input class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" /> </div>
                                        </div>
                                        <div class="form-group">  <div class="col-md-12">
                                                    <label class="control-label visible-ie8 visible-ie9">نوع الشهادة</label>
                                                    <input class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" /> </div>
                                        </div>
                                        <div class="form-group">  <div class="col-md-12">
                                                    <label class="control-label visible-ie8 visible-ie9">درجة الشهادة</label>
                                                    <input class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" /> </div>
                                        </div><div class="form-group">  <div class="col-md-12">
                                                    <label class="control-label visible-ie8 visible-ie9">تاريخ التسجيل</label>
                                                    <input class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" /> </div>
                                          </div>                          
                                        <p class="hint">  معلومات الاتصال : </p>
                                        <div class="form-group">  <div class="col-md-12">
                                                        <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 1 </label>
                                                        <input class="form-control placeholder-no-fix" type="number" placeholder="رقم الهاتف 1" name="Phonne1" /> </div>              
                                        </div>
                                        <div class="form-group">  <div class="col-md-12">
                                                        <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 2</label>
                                                        <input class="form-control placeholder-no-fix" type="number" placeholder="رقم الهاتف 2" name="Phonne2" /> </div>
                                        </div>
                        
                                        <p class="hint">  معلومات الحساب : </p>
                                        <div class="alert alert-danger" role="alert">
                                                <strong>ملاحظة! </strong>         المرجو الاحتفاظ بمعلومات الحساب ليتم ارسالها للمراجع الجديد    
                                              </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  <div class="col-md-12">
                                            <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                                            <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="البريد الالكتروني" name="email" />
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
                                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" id="register_password" placeholder="كلمة المرور" name="password" /> 
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ 'المرجو ادخال كلمة المرور'}}</strong>
                                            </span>
                                            @endif
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