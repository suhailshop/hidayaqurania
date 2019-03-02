@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
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


            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{route('portalwelcome')}}">الرئيسية</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                        <i class="icon-user"></i>
                        <span>المشرفون</span>
                        <i class="fa fa-angle-left"></i>

                    </li>
                    <li>
                        <i class="icon-user"></i>
                        <span>صفحة المشرف</span>
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
                                    <img src="{{ asset('storage/registrations/'.$supervisor->PictureURL) }}" class="img-responsive" alt=""> </div>
                                <!-- END SIDEBAR USERPIC -->
                                <!-- SIDEBAR USER TITLE -->
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name"> {{$supervisor->Fistname}} {{$supervisor->LastName}}</div>
                                    <div class="profile-usertitle-job"> مشرف </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->


                                <br>

                                <div class="profile-userbuttons">
                                    <a type="button"  href=" {{ url('https://api.whatsapp.com/send?phone='.$supervisor->Phonne2) }}" target="_blank" class="btn btn-circle green btn-sm">تواصل عبر الواتس</a>
                                    <a type="button"  href=" {{ url('mailto:'.$supervisor->Email.'?subject=موسوعة الهدايات القرآنية') }}" target="_blank" class="btn btn-circle red btn-sm">ارسال بريد الكتروني</a>

                                </div>


                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu">
                                    <ul class="nav">

                                        <li class="active">
                                            <a href="#">
                                                <i class="icon-settings"></i> صفحة معلومات المشرف </a>
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
                                                <span class="caption-subject font-blue-madison bold uppercase">تفاصيل حساب المشرف </span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_1" data-toggle="tab">معلومات المشرف</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_2" data-toggle="tab">قائمة طلاب المشرف</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" class="form-horizontal" action="{{route('supervisorProfileEdit')}}" method="POST">

                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id_registration" value="{{$supervisor->ID}}" />





                                                        <h4 class="block myfont">معلومات أساسية</h4>




                                                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                            <label class="col-md-2 control-label">الاسم  </label>
                                                            <div class="col-md-10">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                    <input required value="{{$supervisor->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم " name="firstname" />
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
                                                                    <input required value="{{$supervisor->LastName}}" class="form-control placeholder-no-fix" type="text" placeholder="اللقب" name="lastname" />
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
                                                                        <option @if($supervisor->Gender=='ذكر') selected @endif value="ذكر"> ذكر</option>
                                                                        <option @if($supervisor->Gender=='أنثى') selected @endif value="أنثى"> أنثى</option>
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
                                                                    <input required value="{{$supervisor->BirthDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />

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
                                                                    <input required value="{{$supervisor->BirthCity}}" class="form-control placeholder-no-fix" type="text" placeholder="مكان الميلاد" name="BirthCity" /> </div>
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
                                                                            <option @if($supervisor->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
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
                                                                    <input required value="{{$supervisor->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" /> </div>
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
                                                                    <input required value="{{$supervisor->NationalNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" /> </div>
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
                                                                            <option @if($supervisor->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
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
                                                                    <input required value="{{$supervisor->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

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
                                                                    <input required value="{{$supervisor->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />

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
                                                                    <input required value="{{$supervisor->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" />

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
                                                                    <input required value="{{$supervisor->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />

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
                                                                    <input required value="{{$supervisor->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" />

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
                                                                    <input required value="{{$supervisor->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="الدرجة العلمية " name="CertificateDegree" />

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
                                                                    <input required value="{{$supervisor->InscriptionDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" />

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
                                                                    <input required value="{{$supervisor->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" />

                                                                    @if ($errors->has('Phonne1'))
                                                                        <span class="help-block">
                                                    <strong>{{ 'المرجو ادخال هاتف 1 '}}</strong>
                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                            <label class="col-md-2 control-label"> هاتف 2 </label>
                                                            <div class="col-md-10">
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-info-circle tooltips" data-original-title="هاتف 1 " data-container="body"></i>
                                                                    <input required value="{{$supervisor->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />

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



                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption font-dark">
                                                                <i class="icon-graduation font-dark"></i>
                                                                <span class="caption-subject bold uppercase">لائحة الباحثين تحت اشرافي بالنظام</span>
                                                            </div>
                                                            <div class="tools"> </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                                                <thead>
                                                                <tr>
                                                                    <th class="min-phone-l">الاسم الكامل</th>
                                                                    <th class="desktop"> الجامعة</th>
                                                                    <th class="all">الكلية</th>

                                                                    <th class="all">عنوان الرسالة</th>
                                                                    <th class="desktop">الحالة</th>
                                                                    <th class="all">خيارات.</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($searchers as $searcher)
                                                                    <tr>
                                                                        <td>    <a href="{{route('getSearcher',$searcher->ID)}}" >
                                                                                {{$searcher->Fistname}} {{$searcher->LastName}}
                                                                            </a> </td>
                                                                        <td>{{$searcher->University}}</td>
                                                                        <td>{{$searcher->Faculty}}</td>


                                                                        <td>{{$searcher->thesesTitle}}</td>
                                                                        <td>{{$searcher->Status}}</td>
                                                                        <td>
                                                                            <div class="btn-group pull-right">
                                                                                <button class="btn yellow btn-xs   dropdown-toggle" data-toggle="dropdown">اختر
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right">
                                                                                    <li class="myfont">
                                                                                        <a href="{{route('getSearcherSearchsAdmin',$searcher->ID)}}" >
                                                                                            <i class="fa fa-search-plus"></i> بحوث الطالب</a>
                                                                                    </li>

                                                                                    <li class="myfont">
                                                                                        <a href="{{route('getSearcher',$searcher->ID)}}" >
                                                                                            <i class="fa fa-search-plus"></i> صفحة الطالب</a>
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
                                                <!-- END CHANGE AVATAR TAB -->


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