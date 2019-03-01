@extends('layout.master')

@section('pageTitle', 'حساب الباحث')
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
                        <a href="{{route('allSearcher')}}" class="nav-link nav-toggle"> الباحثون </a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                            <i class="icon-user"></i>
                        <span>صفحة الباحث</span>
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
                                <img src="{{ asset('project/storage/app/public/registrations/'.$registration->PictureURL) }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$registration->Fistname}} {{$registration->LastName}}</div>
                                <div class="profile-usertitle-job"> باحث </div>
                            </div>

                            <div class="profile-userbuttons">
                                <a type="button"  href=" {{ url('https://api.whatsapp.com/send?phone='.$registration->Phonne2) }}" target="_blank" class="btn btn-circle green btn-sm">تواصل عبر الواتس</a>
                                <a type="button"  href=" {{ url('mailto:'.$registration->Email.'?subject=موسوعة الهدايات القرآنية') }}" target="_blank" class="btn btn-circle red btn-sm">ارسال بريد الكتروني</a>

                             </div>

                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                        <a href="{{route('plandetails',$registration->ID)}}">
                                        <i class="icon-school"></i> مشاهدة المعلومات الأكاديمية  <i class="fa fa-search"></i></a>
                                    </li>
                                    <br>
                                    <li class="active">
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <i class="icon-school"></i> 
                                                @if(empty($registration->Code))
                                                    لا يوجد رقم للباحث <i class="icon-plus"></i>
                                                @else
                                                   رقم الباحث : {{$registration->Code}} <i class="fa fa-edit"></i>
                                                @endif
                                            </a>
                                    </li>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">رقم الباحث :</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{route('updateCodeSearcher')}}">
                                                            {{ csrf_field() }}
                                                        <input type="hidden" name="idsearcher" value="{{$registration->ID}}"/>
                                                        <div class="form-group">
                                                        <input type="text" class="form-control " name="code" value="{{$registration->Code}}" />
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
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
                                            <div class="caption-subject font-yellow-madison bold uppercase">صفحة الباحث </div>

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
                                                <div role="form" class="form-horizontal" >
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$registration->ID}}" />



                                                    <h4 class="block myfont">معلومات أساسية</h4>



                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الاسم الأول </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                <input disabled value="{{$registration->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />
                                                                @if ($errors->has('firstname'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">اللقب</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="اسم العائلة" data-container="body"></i>
                                                                <input  disabled value="{{$registration->LastName}}"  class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" />
                                                                @if ($errors->has('lastname'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال  اللقب'}}</strong>
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
                                                                <select  disabled name="gender" class="form-control">
                                                                    <option @if($registration->Gender=='ذكر') selected @endif value="ذكر"> ذكر</option>
                                                                    <option @if($registration->Gender=='أنثى') selected @endif value="أنثى"> أنثى</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">تاريخ الميلاد </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ الميلاد" data-container="body"></i>
                                                                <input   disabled value="{{$registration->BirthDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />

                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">مكان الميلاد </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="مكان الميلاد" data-container="body"></i>
                                                                <input disabled value="{{$registration->BirthCity}}" class="form-control placeholder-no-fix" type="text" placeholder="مكان الميلاد" name="BirthCity" />
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
                                                                        <option @if($registration->Nationalitie==$nationalitie->ID) selected @endif value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
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
                                                                <input disabled value="{{$registration->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" />
                                                                @if ($errors->has('PassportNumber'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم الجواز'}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('NationalNumber') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الهوية الوطنية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهوية" data-container="body"></i>
                                                                <input disabled value="{{$registration->NationalNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" />
                                                                @if ($errors->has('NationalNumber'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم الهوية الوطنية'}}</strong>
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
                                                                        <option @if($registration->Countrie==$countrie->ID) selected @endif value="{{$countrie->ID}}">{{$countrie->Name}}</option>
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
                                                                <input disabled value="{{$registration->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان" data-container="body"></i>
                                                                <input disabled value="{{$registration->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>


                                                    <h4 class="block myfont">معلومات الجامعة</h4>


                                                    <div class="form-group{{ $errors->has('University') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجامعة" data-container="body"></i>
                                                                <input disabled value="{{$registration->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية" data-container="body"></i>
                                                                <input disabled value="{{$registration->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">نوع الشهادة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="نوع الشهادة" data-container="body"></i>
                                                                <input disabled value="{{$registration->CertificateType}}" class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدرجة العلمية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدرجة العلمية" data-container="body"></i>
                                                                <input disabled value="{{$registration->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('InscriptionDate') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">تاريخ التسجيل</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ التسجيل" data-container="body"></i>
                                                                <input disabled value="{{$registration->InscriptionDate}}" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" />
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
                                                                <input disabled value="{{$registration->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 1" name="Phonne1" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الواتس اب </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهاتف 2" data-container="body"></i>
                                                                <input disabled value="{{$registration->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />
                                                            </div>
                                                        </div>
                                                    </div>


                                    

                                                </div>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->







                                            <div class="tab-pane" id="tab_1_4">


                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        @if($registration->CV!="")
                                                                            <a class="btn btn-primary" target="_blank" href="{{ asset('project/storage/app/public/CV/'.$registration->CV) }}" style="margin: inherit;">تحميل السيرة الذاتية الخاصة بالباحث</a>
                                                                        @else

                                                                        <br />
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> لم يقم الباحث برفع السيرة الذاتية</div>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        
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
    @endsection
@endsection