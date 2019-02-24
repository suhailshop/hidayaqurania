@extends('layout.master')

@section('pageTitle', 'حسابي')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
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
                                <div class="profile-usertitle-job"> مشرف </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="{{route('supervisorProfile')}}">
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
                                                <form role="form" class="form-horizontal" action="{{route('supervisorProfileEdit')}}" method="POST">

                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$registration->ID}}" />





                                                    <h4 class="block myfont">معلومات أساسية</h4>




                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الاسم  </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                <input required value="{{$registration->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم " name="firstname" />
                                                                @if ($errors->has('firstname'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">اللقب</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="اللقب " data-container="body"></i>
                                                                <input required value="{{$registration->LastName}}" class="form-control placeholder-no-fix" type="text" placeholder="اللقب" name="lastname" />
                                                                @if ($errors->has('LastName'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال اللقب '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجنس</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنس" data-container="body"></i>
                                                                <select name="gender" class="form-control">
                                                                    <option @if($registration->Gender=='ذكر') selected @endif value="ذكر"> ذكر</option>
                                                                    <option @if($registration->Gender=='أنثى') selected @endif value="أنثى"> أنثى</option>
                                                                </select>
                                                                @if ($errors->has('gender'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الجنس '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">تاريخ الميلاد</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ الميلاد" data-container="body"></i>
                                                                <input required value="{{$registration->BirthDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />

                                                                @if ($errors->has('birthdate'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال تاريخ الميلاد '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">مكان الميلاد</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="مكان الولادة" data-container="body"></i>
                                                                <input required value="{{$registration->BirthCity}}" class="form-control placeholder-no-fix" type="text" placeholder="مكان الميلاد" name="BirthCity" /> </div>
                                                                @if ($errors->has('BirthCity'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال مكان الميلاد '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>




                                            <div class="form-group{{ $errors->has('nationalitie') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">الجنسية</label>
                                                <div class="col-md-10">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="الجنسية" data-container="body"></i>
                                                        <select name="nationalitie" class="form-control">
                                                            @foreach($nationalities as $nationalitie)
                                                                <option @if($registration->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                                            @endforeach
                                                        </select>

                                                        @if ($errors->has('nationalitie'))
                                                            <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الجنسية '}}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم جواز السفر</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="جواز السفر" data-container="body"></i>
                                                                <input required value="{{$registration->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" /> </div>
                                                            @if ($errors->has('BirthCity'))
                                                                <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم جواز السفر '}}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الرقم الوطني</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الرقم الوطني" data-container="body"></i>
                                                                <input required value="{{$registration->NationalNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" /> </div>
                                                            @if ($errors->has('BirthCity'))
                                                                <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الرقم الوطني'}}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>





                                                    <br>


                                                    <h4 class="block myfont">معلومات الإقامة</h4>





                                                    <div class="form-group{{ $errors->has('countrie') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدولة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدولة " data-container="body"></i>
                                                                <select name="countrie" class="form-control">
                                                                    @foreach($countries as $countrie)
                                                                        <option @if($registration->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('countrie'))
                                                                <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الدولة '}}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                        </div>


                                                    <div class="form-group{{ $errors->has('countrie') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">المدينة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="المدينة " data-container="body"></i>
                                                                <input required value="{{$registration->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

                                                            @if ($errors->has('countrie'))
                                                                    <span class="help-block">
                                                        <strong>{{ 'المرجو ادخال المدينة '}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان " data-container="body"></i>
                                                                <input required value="{{$registration->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />

                                                                @if ($errors->has('location'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال العنوان '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                     </div>
                                                    </div>





                                                    <br>

                                                    <h4 class="block myfont">معلومات الجامعة</h4>


                                                    <div class="form-group{{ $errors->has('University') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجامعة " data-container="body"></i>
                                                                <input required value="{{$registration->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" />

                                                            @if ($errors->has('University'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال الجامعة '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية " data-container="body"></i>
                                                                <input required value="{{$registration->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />

                                                                @if ($errors->has('Faculty'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال الكلية '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الشهادة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الشهادة " data-container="body"></i>
                                                                <input required value="{{$registration->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" />

                                                            @if ($errors->has('CertificateType'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال الشهادة '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('CertificateDegree') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدرجة العلمية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدرجة العلمية " data-container="body"></i>
                                                                <input required value="{{$registration->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="الدرجة العلمية " name="CertificateDegree" />

                                                                @if ($errors->has('CertificateDegree'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال الدرجة العلمية '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('InscriptionDate') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">تاريخ الالتحاق </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ الالتحاق " data-container="body"></i>
                                                                <input required value="{{$registration->InscriptionDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" />

                                                            @if ($errors->has('InscriptionDate'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال الدرجة العلمية '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <br>

                                                    <h4 class="block myfont">معلومات الاتصال</h4>



                                                    <div class="form-group{{ $errors->has('Phonne1') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label"> هاتف 1 </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="هاتف 1 " data-container="body"></i>
                                                                <input required value="{{$registration->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" />

                                                                @if ($errors->has('Phonne1'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال هاتف 1 '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label"> رقم الواتس اب </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="هاتف 1 " data-container="body"></i>
                                                                <input required value="{{$registration->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />

                                                                @if ($errors->has('Phonne1'))
                                                                    <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال هاتف 1 '}}</strong>
                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>





                                                   
                                                    <div class="margiv-top-10">
                                                        <input type="submit"  class="btn green" value="تأكيد" />  
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> يمكنك اختيار صورة جديدة </p>
                                            <form action="{{route('supervisorProfileEditAvatar')}}" method="POST" role="form" enctype="multipart/form-data">
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
                                            <form action="{{route('supervisorProfileEditPassword')}}" method="POST">
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
 
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection