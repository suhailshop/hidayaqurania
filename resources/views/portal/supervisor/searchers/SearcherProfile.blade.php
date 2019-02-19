@extends('layout.master')

@section('pageTitle', 'صفحة معلومات الباحث')
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
                        <i class="icon-users"></i>

                        <a href="{{route('allSearcherSupervisor')}}">إدارة طلبتي</a>
                        <i class="fa fa-angle-left"></i>
                     </li>
                    <li>
                        <i class="icon-users"></i>
                        <span>صفحة معلومات الباحث</span>
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
                                <img src="{{ asset('storage/registrations/'.$searcher->PictureURL) }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$searcher->Fistname}} {{$searcher->LastName}}</div>
                                <div class="profile-usertitle-job"> باحث </div>
                            </div>

                            <div class="profile-userbuttons">
                                <a type="button"  href=" {{ url('https://api.whatsapp.com/send?phone='.$searcher->Phonne2) }}" target="_blank" class="btn btn-circle green btn-sm">تواصل عبر الواتس</a>
                                <a type="button"  href=" {{ url('mailto:'.$searcher->Email.'?subject=موسوعة الهدايات القرآنية') }}" target="_blank" class="btn btn-circle red btn-sm">ارسال بريد الكتروني</a>

                             </div>

                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="#">
                                            <i class="icon-settings"></i>  معلومات الباحث </a>
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
                                            <div class="caption-subject font-yellow-madison bold uppercase">صفحة معلومات الباحث </div>

                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات شخصية</a>
                                            </li>

                                            <li>
                                                <a href="#tab_1_4" data-toggle="tab">السيرة الذاتية</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <div role="form" class="form-horizontal">



                                                    <h4 class="block myfont">معلومات الباحث الأساسية</h4>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الاسم  </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">اللقب</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="اسم العائلة" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->LastName}}"  class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" />

                                                            </div>
                                                    </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الجنس</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنس" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->Gender}}"  class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" />


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
                                                                        <option @if($searcher->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>




                                                    <h4 class="block myfont">معلومات الإقامة</h4>



                                                    <div  class="form-group">
                                                        <label class="col-md-2 control-label">دولة الإقامة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="دولة الإقامة" data-container="body"></i>
                                                                <select disabled name="countrie" class="form-control">
                                                                    @foreach($countries as $countrie)
                                                                        <option  @if($searcher->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
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
                                                                <input disabled required value="{{$searcher->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>


                                                    <h4 class="block myfont">معلومات المؤهل العلمي</h4>


                                                    <div class="form-group{{ $errors->has('University') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجامعة" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">نوع الشهادة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="نوع الشهادة" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدرجة العلمية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدرجة العلمية" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" />
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
                                                                <input disabled required value="{{$searcher->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الواتس اب </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهاتف 2" data-container="body"></i>
                                                                <input disabled required value="{{$searcher->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->



 


                                            <div class="tab-pane" id="tab_1_4">



                                                            <div class="form-group">






                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        @if($searcher->CV!="")
                                                                            <a class="btn btn-primary" target="_blank" href="{{ asset('storage/CV/'.$searcher->CV) }}" style="margin: inherit;">تحميل الملف</a>
                                                                        @else
                                                                        <br />
                                                                        <div class="block"> لم يقم الباحث برفع السيرة الذاتية </div>
                                                                        @endif
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