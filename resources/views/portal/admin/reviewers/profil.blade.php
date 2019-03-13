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
                        <span>صفحة الباحث المساعد </span>
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
                                

                                
                                <img src="{{ asset('project/storage/app/public/registrations/'.$reviwer->PictureURL) }}" class="img-responsive" alt="">
                                
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$reviwer->Fistname}} {{$reviwer->LastName}}</div>
                                <div class="profile-usertitle-job"> باحث مساعد </div>
                            </div>

                            <div class="profile-userbuttons">
                                <a type="button"  href=" {{ url('https://api.whatsapp.com/send?phone='.$reviwer->Phonne2) }}" target="_blank" class="btn btn-circle green btn-sm">تواصل عبر الواتس</a>
                                <a type="button"  href=" {{ url('mailto:'.$reviwer->Email.'?subject=موسوعة الهدايات القرآنية') }}" target="_blank" class="btn btn-circle red btn-sm">ارسال بريد الكتروني</a>

                             </div>

                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="{{route('reviewerProfile')}}">
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
                                            <div class="caption-subject font-yellow-madison bold uppercase">حسابي </div>

                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات الباحث المساعد</a>
                                            </li>

                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">قائمة البحوث المحكمة</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <div role="form" class="form-horizontal" >

                                                    <input type="hidden" name="id_registration" value="{{$reviwer->ID}}" />



                                                    <h4 class="block myfont">معلومات أساسية</h4>






                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الاسم الكامل</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                <input disabled value="{{$reviwer->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />
                                                                @if ($errors->has('firstname'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>


 



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الجنس</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنس" data-container="body"></i>
                                                                <select disabled name="gender" class="form-control">
                                                                    <option @if($reviwer->Gender=='ذكر') selected @endif value="ذكر"> ذكر</option>
                                                                    <option @if($reviwer->Gender=='أنثى') selected @endif value="أنثى"> أنثى</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">تاريخ الميلاد </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ الميلاد" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->BirthDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />

                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">مكان الميلاد </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="مكان الميلاد" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->BirthCity}}" class="form-control placeholder-no-fix" type="text" placeholder="مكان الميلاد" name="BirthCity" />
                                                                @if ($errors->has('BirthCity'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال مكان الميلاد'}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>

                                                            </div>
                                                        </div>




                                                    <div class="form-group{{ $errors->has('nationalitie') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجنسية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنسية" data-container="body"></i>
                                                                <select disabled name="nationalitie" class="form-control">
                                                                    @foreach($nationalities as $nationalitie)
                                                                        <option @if($reviwer->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group{{ $errors->has('PassportNumber') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم جواز السفر</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم جواز السفر" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" />
                                                                @if ($errors->has('PassportNumber'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم الجواز'}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('NationalNumber') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الهوية </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهوية" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->NationalNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهوية فقط لمواطني ومقيمي المملكة العربية السعودية " name="NationalNumber" />
                                                                @if ($errors->has('NationalNumber'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم الهوية '}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <hr>




                                                    <h4 class="block myfont">معلومات الإقامة</h4>



                                                    <div  class="form-group{{ $errors->has('countrie') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">دولة الإقامة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="دولة الإقامة" data-container="body"></i>
                                                                <select disabled name="countrie" class="form-control">
                                                                    @foreach($countries as $countrie)
                                                                        <option @if($reviwer->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group{{ $errors->has('city1') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">مدينة الإقامة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="مدينة الإقامة" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>


                                                    <h4 class="block myfont">معلومات  الجامعة</h4>


                                                    <div class="form-group{{ $errors->has('University') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجامعة" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">نوع الشهادة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="نوع الشهادة" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدرجة العلمية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدرجة العلمية" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('InscriptionDate') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">تاريخ التسجيل</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ التسجيل" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->InscriptionDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" />
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <hr>



                                                    <h4 class="block myfont">معلومات الاتصال</h4>



                                                    <div class="form-group{{ $errors->has('Phonne1') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الهاتف 1</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهاتف 1" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الواتس اب </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهاتف 2" data-container="body"></i>
                                                                <input disabled required value="{{$reviwer->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <!-- END PERSONAL INFO TAB-->



                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">

                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption font-dark">
                                                            <i class="icon-graduation font-dark"></i>
                                                            <span class="caption-subject bold uppercase">لائحة البحوث   </span>
                                                        </div>
                                                        <div class="tools"> </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                                            <thead>
                                                            <tr>

                                                                <th class="all">اسم الجزء البحثي</th>

                                                                <th class="all">القسم</th>

                                                                <th class="all">الباحث</th>
                                                                <th class="all">تحميل البحث</th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($searchs as $search)
                                                                <tr>

                                                                    <td>
                                                                        <a   href="{{route('getOneSearch',$search->ID)}}">
                                                                        {{$search->Name}}
                                                                        </a>
                                                                    </td>

                                                                    <td>{{$search->divname}}</td>

                                                                    <td>{{$search->Fistname}} {{$search->LastName}}</td>
                                                                    <td>
                                                                        <a href="{{ url('project/storage/app/public/searchs/'.$search->SearchURL) }}" target="_blank">تحميل</a>
                                                                    </td>
                                                                    {{-- <td>  @if($search->Progress=='تم الرفع')
                                                                         <span class="badge badge-warning">{{$search->Progress}}</span>
                                                                         @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' )
                                                                         <span class="badge badge-danger">{{$search->Progress}}</span>
                                                                         @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' )
                                                                         <span class="badge badge-success">{{$search->Progress}}</span>
                                                                         @endif
                                                                     </td>--}}

                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>


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