@extends('layout.master')

@section('pageTitle', 'حسابي')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
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
                            <i class="icon-user"></i>
                        <span>معلوماتي</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="{{ asset('storage/registrations/'.auth()->user()->registration->PictureURL) }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$registration->Fistname}} {{$registration->LastName}}</div>
                                <div class="profile-usertitle-job"> باحث </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="{{route('searcherProfile')}}">
                                            <i class="icon-settings"></i> تعديل معلوماتي الشخصية </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                      
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">حسابي </span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات شخصية</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">تغيير الصورة</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">معلومات الحساب</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" action="{{route('searcherProfileEdit')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$registration->ID}}" />
                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="control-label visible-ie8 visible-ie9">الاسم العائلي</label>
                                                        <input required value="{{$registration->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />
                                                        @if ($errors->has('firstname'))
                                                        <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم العائلي'}}</strong>
                                                        </span>
                                                    @endif
                                                    </div>
                                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                        <label class="control-label visible-ie8 visible-ie9">الاسم الشخصي</label>
                                                        <input required value="{{$registration->LastName}}"  class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" /> 
                                                        @if ($errors->has('lastname'))
                                                        <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم الشخصي'}}</strong>
                                                        </span>
                                                    @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الجنس</label>
                                                        <select name="gender" class="form-control">
                                                            <option @if($registration->Gender=='ذكر') selected @endif value="ذكر"> ذكر</option>
                                                            <option @if($registration->Gender=='أنثى') selected @endif value="أنثى"> أنثى</option>
                                                        </select></div>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">تاريخ الولادة</label>
                                                        <input required value="{{$registration->BirthDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">مكان الولادة</label>
                                                            <input required value="{{$registration->BirthCity}}" class="form-control placeholder-no-fix" type="text" placeholder="مكان الولادة" name="BirthCity" /> </div>
                                                    
                                                    <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">الجنسية</label>
                                                            <select name="nationalitie" class="form-control">
                                                                @foreach($nationalities as $nationalitie)
                                                                    <option @if($registration->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">رقم جواز السفر</label>
                                                            <input required value="{{$registration->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" /> </div>
                                                    <div class="form-group">
                                                                <label class="control-label visible-ie8 visible-ie9">الرقم الوطني</label>
                                                                <input required value="{{$registration->NationalNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" /> </div>
                                                   
                                                        
                                                    <p class="hint">  معلومات الاقامة : </p>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                                                        <select name="countrie" class="form-control">
                                                            @foreach($countries as $countrie)
                                                                <option @if($registration->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                                                        <input required value="{{$registration->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" /> </div>
                                                    <div class="form-group">
                                                            <label class="control-label visible-ie8 visible-ie9">العنوان</label>
                                                            <input required value="{{$registration->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" /> </div>
                                                   
                                                    <p class="hint">  معلومات دراسية : </p>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الجامعة</label>
                                                        <input required value="{{$registration->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" /> </div>              
                                    
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الكلية</label>
                                                        <input required value="{{$registration->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" /> </div>
                                                     
                                                    <div class="form-group">
                                                                <label class="control-label visible-ie8 visible-ie9">نوع الشهادة</label>
                                                                <input required value="{{$registration->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" /> </div>
                                                   
                                                    <div class="form-group">
                                                                <label class="control-label visible-ie8 visible-ie9">درجة الشهادة</label>
                                                                <input required value="{{$registration->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" /> </div>
                                                    <div class="form-group">
                                                                <label class="control-label visible-ie8 visible-ie9">تاريخ التسجيل</label>
                                                                <input required value="{{$registration->InscriptionDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" /> </div>
                                                                                
                                                    <p class="hint">  معلومات الاتصال : </p>
                                                    <div class="form-group">
                                                                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 1 </label>
                                                                    <input required value="{{$registration->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" /> </div>              
                                                
                                                    <div class="form-group">
                                                                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 2</label>
                                                                    <input required value="{{$registration->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" /> </div>
                                                                
                                    
                                                   
                                                    <div class="margiv-top-10">
                                                        <input type="submit"  class="btn green" value="تأكيد" />  
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> يمكنك اختيار صورة جديدة </p>
                                            <form action="{{route('searcherProfileEditAvatar')}}" method="POST" role="form" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$registration->ID}}" />
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> اختر صورة </span>
                                                                    <span class="fileinput-exists"> تغيير </span>
                                                                    <input type="file" accept="image/gif, image/jpeg, image/jpg" name="PictureURL" required> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> الغاء </a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="margin-top-10">
                                                        <input type="submit" value="تأكيد" class="btn green" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                            <form action="{{route('searcherProfileEditPassword')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_user" value="{{$user->id}}" />
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                                                        <input class="form-control placeholder-no-fix" type="email" autocomplete="off" required value="" placeholder="البريد الالكتروني" name="Email" />
                                                        @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال البريد الالكتروني'}}</strong>
                                                        </span>
                                                        @endif
                                                     </div>
                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" required id="register_password" placeholder="كلمة المرور" name="Password" /> 
                                                        @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال كلمة المرور'}}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <input type="submit" class="btn green" value="تأكيد" />
                                                        <input type="reset" value="الغاء" class="btn default" /> 
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>


        </div>
</div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
     
         <script src="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/global/plugins/jquery.sparkline.min.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/profile.min.js')!!}" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection