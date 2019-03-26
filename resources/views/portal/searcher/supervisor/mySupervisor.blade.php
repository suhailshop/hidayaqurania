@extends('layout.master')

@section('pageTitle', 'المشرف الأكاديمي')
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
                        <span>المشرف</span>
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
                                <img src=" {{ asset('project/storage/app/public/registrations/'.$supervisor->PictureURL) }}" class="img-responsive" alt="">
                               
                                
                                 </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$supervisor->Fistname}} {{$supervisor->LastName}}</div>
                                <div class="profile-usertitle-job"> مشرفي الأكاديمي </div>
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
                                    <div class="portlet-title tabbable-line rtl">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">صفحة المشرف الأكاديمي </span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات المشرف</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <div role="form"  class="form-horizontal rtl"  >


                                                    <h4 class="block myfont">المعلومات الشخصية</h4>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الاسم  </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم " data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Fistname}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>








                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الجنسية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنسية " data-container="body"></i>
                                                                <select disabled name="nationalitie" class="form-control">
                                                                    @foreach($nationalities as $nationalitie)
                                                                        <option @if($supervisor->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <hr>



                                                    <h4 class="block myfont"> معلومات الجامعة ودولة الاقامة </h4>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">اسم الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجامعة " data-container="body"></i>
                                                                 <select disabled name="University" required class="form-control">
                                                                    @foreach($universities as $uni)
                                                                        <option @if($supervisor->University==$uni->ID) selected @endif value="{{$uni->ID}}">{{$uni->Name}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">اسم الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية" data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Faculty}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الدولة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدولة " data-container="body"></i>
                                                                <select disabled name="countrie" class="form-control">
                                                                    @foreach($countries as $countrie)
                                                                        <option @if($supervisor->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">المدينة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="المدينة " data-container="body"></i>
                                                                <input disabled value="{{$supervisor->City}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان" data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Location}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>




                                                    <hr>






                                                    <h4 class="block myfont"> معلومات الاتصال </h4>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">البريد الالكتروني </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الهاتف 1" data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Email}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">رقم الهاتف 1</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الهاتف 1" data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Phonne1}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">رقم الهاتف 2</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الهاتف 2" data-container="body"></i>
                                                                <input disabled value="{{$supervisor->Phonne2}}" class="form-control placeholder-no-fix" type="text"  />

                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->


                                         



                                           
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