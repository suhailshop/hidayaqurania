@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
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

    @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
    <li class="active">
            <a href="#" data-toggle="modal" data-target="#exampleModal">
            <i class="icon-school"></i>
                @if(empty($registration->Code))
                    لا يوجد رقم للباحث <i class="icon-plus"></i>
                @else
                    <span class="rtl" style="direction: rtl;">   رقم الباحث : {{$registration->Code}} <i class="fa fa-edit"></i>
</span>
                @endif
            </a>
    </li>
    @endif

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
                        <input type="text" class="form-control "  required name="code" value="{{$registration->Code}}" />
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <br>
          @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
          <li class="active">
                  <a href="#" data-toggle="modal" data-target="#exampleModal159">
                  <i class="icon-school"></i>
                      @if(empty($registration->regiment))
                          لم يتم ادخال الدفعة <i class="icon-plus"></i>
                      @else
                          <span class="rtl" style="direction: rtl;">   الدفعة : {{$registration->regiment}} <i class="fa fa-edit"></i>
                         </span>
                      @endif
                  </a>
          </li>
          @endif

          <div class="modal fade" id="exampleModal159" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">دفعة الباحث :</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('updateRegimentSearcher')}}">
                            {{ csrf_field() }}
                        <input type="hidden" name="idsearcher" value="{{$registration->ID}}"/>
                        <div class="form-group">
                        <input type="text" class="form-control " required name="regiment" value="{{$registration->regiment}}" />
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
                                            <div class="caption-subject font-yellow-madison bold uppercase">حسابي </div>

                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات شخصية</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">تغيير الصورة</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">تغيير الرقم السري</a>
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
                                                <form role="form" class="form-horizontal" action="{{route('updateSearcherProfile')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$registration->ID}}" />










                                                    <h4 class="block myfont">معلومات أساسية</h4>




                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الاسم الثلاثي </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الاسم كاملا" data-container="body"></i>
                                                                <input required value="{{$registration->Fistname}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم الثلاثي" name="firstname" />
                                                                @if ($errors->has('firstname'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال الاسم الثلاثي '}}</strong>
                                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    {{--  <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                          <label class="col-md-2 control-label">اللقب</label>
                                                          <div class="col-md-10">
                                                              <div class="input-icon right">
                                                                  <i class="fa fa-info-circle tooltips" data-original-title="اسم العائلة" data-container="body"></i>
                                                                  <input required value="{{$registration->LastName}}"  class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" />
                                                                  @if ($errors->has('lastname'))
                                                                      <span class="help-block">
                                                              <strong>{{ 'المرجو ادخال  اللقب'}}</strong>
                                                          </span>
                                                                  @endif
                                                              </div>
                                                      </div>
                                                      </div>--}}




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">الجنس</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الجنس" data-container="body"></i>
                                                                <select name="gender" class="form-control">
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
                                                                <input required value="{{$registration->BirthDate}}"  min="1500-01-01" max="2022-12-31" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ الولادة" name="birthdate" />

                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group{{ $errors->has('BirthCity') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">مكان الميلاد </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="مكان الميلاد" data-container="body"></i>
                                                                <input required value="{{$registration->BirthCity}}"  class="form-control placeholder-no-fix" type="text" placeholder="مكان الميلاد" name="BirthCity" />
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
                                                                <select name="nationalitie" class="form-control">
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
                                                                <input required value="{{$registration->PassportNumber}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" />
                                                                @if ($errors->has('PassportNumber'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال رقم الجواز'}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('NationalNumber') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الهوية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهوية" data-container="body"></i>
                                                                <input  value="{{$registration->NationalNumber}}" class="form-control placeholder-no-fix" type="number" placeholder="رقم الهوية خاص بمواطني ومقيمي المملكة العربية السعودية " name="NationalNumber" />
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
                                                                <select name="countrie" class="form-control">
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
                                                                <input required value="{{$registration->City}}" class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" />

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">العنوان</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="العنوان" data-container="body"></i>
                                                                <input required value="{{$registration->Location}}" class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" />
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

                                                                <select name="University" required class="form-control">
                                                                    @foreach($universities as $uni)
                                                                        <option @if($registration->University==$uni->ID) selected @endif value="{{$uni->ID}}">{{$uni->Name}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الكلية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الكلية" data-container="body"></i>
                                                                <input required value="{{$registration->Faculty}}" class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" />
                                                            </div>
                                                        </div>
                                                    </div>












                                                    <div class="form-group{{ $errors->has('CertificateType') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">الدرجة العلمية</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الدرجة العلمية" data-container="body"></i>
                                                                <input required value="{{$registration->CertificateDegree}}" class="form-control placeholder-no-fix" type="text" placeholder="مثال : دكتوراة" name="CertificateDegree" />
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group{{ $errors->has('InscriptionDate') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">تاريخ تسجيل الرسالة في الجامعة</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="تاريخ تسجيل الرسالة الجامعية" data-container="body"></i>
                                                                <input required value="{{$registration->InscriptionDate}}" min="2000-01-01" max="2050-12-31" class="form-control placeholder-no-fix" type="date" placeholder="تاريخ تسجيل الرسالة في الجامعة" name="InscriptionDate" />
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <hr>



                                                    <h4 class="block myfont">معلومات الاتصال</h4>



                                                    الرجاء ادخال رقم الجوال مع كود الدولة حسب المثال التالي : 966505055050

                                                    <br><br>
                                                    <div class="form-group{{ $errors->has('Phonne1') ? ' has-error' : '' }}">


                                                        <label class="col-md-2 control-label">رقم الجوال 1</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الجوال 1" data-container="body"></i>
                                                                <input required value="{{$registration->Phonne1}}" class="form-control placeholder-no-fix" type="text" placeholder="أدخل الرقم مع كود الدولة : 96650505050" name="Phonne1" />
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="form-group{{ $errors->has('Phonne2') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">رقم الواتس اب </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="رقم الهاتف 2" data-container="body"></i>
                                                                <input required value="{{$registration->Phonne2}}" class="form-control placeholder-no-fix" type="text" placeholder="رقم الهاتف 2" name="Phonne2" />
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="margiv-top-10">
                                                        <input type="submit"  class="btn blue" value="حفظ التغييرات" />
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->





                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> يمكنك اختيار صورة جديدة لحسابك من هنا </p>
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
                                                        <input type="submit" value="حفظ التغييرات" class="btn blue" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->


                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form class="form-horizontal" action="{{route('updateSearcherPassword')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_user" value="{{$registration->User}}" />

                                                    <input type="hidden" name="reg_id" value="{{$registration->ID}}" />






                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label">أدخل الرقم السري الجديد</label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="الرقم السري" data-container="body"></i>
                                                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" required   placeholder="أدخل الرقم السري الجديد" name="Password" />
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال كلمة السر'}}</strong>
                                                        </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="margin-top-10">
                                                        <input type="submit" class="btn blue" value="حفظ التغييرات" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>


                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_4">
                                                <form action="{{route('uploadSearcherCV')}}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_user" value="{{$registration->id}}" />
                                                    <div class="form-group">






                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                           {{-- @if(!empty($registration->CV))
                                                                <a class="btn btn-primary" target="_blank" href="{{ asset('storage/CV/'.$registration->registration->CV) }} " style="margin: inherit;">تنزيل نسخة من السيرة الذاتية  </a>
                                                            @endif--}}

                                                            <br />
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> رفع السيرة الذاتية   </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                                                                <input type="file" accept="application/pdf, application/msword,.doc,.docx" name="CV" required> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> الغاء </a>
                                                            </div>
                                                        </div>





                                                    </div>
                                                    <div class="margin-top-10">
                                                        <input type="submit" class="btn blue" value="رفع" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                </form>
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