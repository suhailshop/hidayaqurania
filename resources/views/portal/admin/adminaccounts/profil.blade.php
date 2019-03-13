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
                                <img src="{{ url('project/storage/app/public/registrations/'.$user->id .'.jpg') }}" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$user->name}} </div>
                                <div class="profile-usertitle-job">
                                
                               @if( auth()->user()->hasRole('admin',auth()->user()->role_id)) 
                               
                                   <span class="badge badge-primary"> حساب إداري </span>
                               @endif  
                                   
                               @if(auth()->user()->hasRole('admin2',auth()->user()->role_id))
                                   <span class="badge badge-danger">عضو اللجنة العلمية</span>
                               @endif
                                 
                                 
                                 </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                           
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                   
                                    <li class="active">
                                            <a href="#">
                                            <i class="icon-settings"></i>  تعديل حسابي </a>
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
                                                <a href="#tab_1_2"   data-toggle="tab">تغيير الصورة</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">تغيير الرقم السري</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->


                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane active" id="tab_1_2">
                                                <p> يمكنك اختيار صورة جديدة لحسابك </p>
                                            <form action="{{route('editAdminAvatar')}}" method="POST" role="form" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="user_id" value="{{$user->id}}" />
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> اختر صورة </span>
                                                                    <span class="fileinput-exists"> تغيير </span>
                                                                    <input type="file" accept="image/jpg" name="PictureURL" required> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> الغاء </a>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="margin-top-10">
                                                        <input type="submit" value="حفظ" class="btn blue" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->




                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                            <form action="{{route('editAdminPassword')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_user" value="{{$user->id}}" />




                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label class="col-md-2 control-label"> أدخل الرقم السري الجديد </label>
                                                        <div class="col-md-10">
                                                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" required id="register_password" placeholder="كلمة المرور الجديدة" name="Password" />
                                                        @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ 'المرجو ادخال كلمة المرور'}}</strong>
                                                        </span>
                                                        @endif
                                                            </div>
                                                             
                                                    </div>
                                                    
                                                    <br><br>
                                                    
                                                     <input type="submit" class="btn blue" value="حفظ" />
                                                   <input type="reset" value="الغاء" class="btn default" /> 
                                                              
                                                    <div >
                                                      
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