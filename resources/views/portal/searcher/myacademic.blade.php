@extends('layout.master')

@section('pageTitle', 'معلوماتي الأكاديمية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
    
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    
    <link href="{!! asset('assets/pages/css/bootstrap-year-calendar.css')!!}" rel="stylesheet" type="text/css" />
    
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
                        <i class="icon-compass"></i>
                        <span>المعلومات الأكاديمية</span>
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

                            <div class="profile-userbuttons">
                                <a type="button"  href=" {{ url('https://api.whatsapp.com/send?phone='.auth()->user()->registration->Phonne2) }}" target="_blank" class="btn btn-circle green btn-sm">تواصل عبر الواتس</a>
                                <a type="button"  href=" {{ url('mailto:'.auth()->user()->registration->Email.'?subject=موسوعة الهدايات القرآنية') }}" target="_blank" class="btn btn-circle red btn-sm">ارسال بريد الكتروني</a>

                            </div>

                            <!-- END SIDEBAR USER TITLE -->

                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">

                                    <li class="active">
                                        <a href="{{route('searcherProfile')}}">
                                            <i class="icon-settings"></i> معلوماتي الشخصية </a>
                                    </li>
                                    <br>
                                    <li class="active">
                                        <a href="{{route('searcherAcademic')}}">
                                            <i class="fa fa-graduation-cap"></i>  معلوماتي الأكاديمية </a>
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
                                        </div>
                                        <ul class="nav nav-tabs navbar-left">
                                           
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">معلومات الأطروحة</a>
                                            </li>
                                            <li >
                                                <a href="#tab_1_2" data-toggle="tab">الخطة الأكاديمية</a>
                                            </li>
                                            <li >
                                                <a href="#tab_1_3" data-toggle="tab">التقويم الأكاديمي</a>
                                            </li>

                                            <li>
                                                <a href="#tab_1_6" data-toggle="tab"> لائحة اللقاءات </a>
                                            </li>



                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">




                                            <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane active" id="tab_1_1">


                                                <div role="form"     class="form-horizontal rtl"  >

                                                    <h4 class="block myfont">معلومات الأطروحة والمشرف</h4>


                                                    <br>




                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">عنوان الأطروحـة </label>
                                                        <div class="col-md-10">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-info-circle tooltips" data-original-title="عنوان الأطروحة" data-container="body"></i>
                                                                <input disabled value="{{$registration->these->Title}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />

                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">نسبة التقدم </label>
                                                        <div class="col-md-10">

                                                                <div class="hint">   @if(isset($registration->progress)) {{ ceil(((($numberOfMonths * $registration->progress->MonthlyProgress) + $registration->progress->InitialProgress) * 100)/ (($registration->progress->Months * $registration->progress->MonthlyProgress) + $registration->progress->InitialProgress))}}% @else 0% @endif </div>
                                                                <div class="progress">
                                                                    @if(isset($registration->progress))
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$registration->progress->ID}}" aria-valuemin="0" aria-valuemax="{{($registration->progress->Months * $registration->progress->MonthlyProgress) + $registration->progress->InitialProgress}}" style="width:{{($numberOfMonths * $registration->progress->MonthlyProgress) + $registration->progress->InitialProgress}}%"></div></div>
                                                                @else
                                                                    المرجو ملئ المعلومات في النافذة الخاصة
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1%"></div>
                                                            </div>
                                                            @endif

                                                            </div>

                                                    </div>



                                            <br>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">اسم الجامعة </label>
                                                <div class="col-md-10">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="اسم الجامعة" data-container="body"></i>
                                                        <input disabled value="{{$registration->University}}" class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />

                                                    </div>
                                                </div>
                                            </div>

                                            <br>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">اسم المشرف </label>
                                                <div class="col-md-8">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="اسم المشرف" data-container="body"></i>
                                                        <select   disabled   class="form-control" >
                                                            @foreach($supervisors as $supervisor)
                                                                <option value="{{$supervisor->ID}}" @if($supervisor->ID == $registration->these->supervisor->ID) selected @endif>{{$registration->these->supervisor->Fistname}} {{$registration->these->supervisor->LastName}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <a href="{{route('mySupervisorProfile',['id'=>  $registration->these->supervisor->ID])}}" class="col-md-2 btn btn-danger"><i class="icon-eye"></i> عرض صفحة المشرف</a>
                                            </div>

                                            <br>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">تاريخ بداية البرنامج </label>
                                                <div class="col-md-10">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="تاريخ بداية البرنامج" data-container="body"></i>
                                                        <input   disabled  dir="rtl" value="{{$registration->these->BeginningDate}}" class="form-control placeholder-no-fix"    name="BeginningDate" /> </div>

                                                </div>
                                                </div>

                                            <br>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">تاريخ نهاية البرنامج </label>
                                                <div class="col-md-10">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-info-circle tooltips" data-original-title="تاريخ نهاية البرنامج" data-container="body"></i>
                                                        <input   disabled  dir="rtl" value="{{$registration->these->CompletionDate}}" class="form-control placeholder-no-fix"    name="BeginningDate" /> </div>

                                                </div>
                                            </div>
                                        </div>


                                     </div>
                                            <!-- END CHANGE PASSWORD TAB -->




                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <a class="btn btn-primary" href="{{route('addPlan')}}" class="nav-link ">
                                                <i class="icon-plus"></i>
  إضافة خطة جديدة
                                            </a>
                                            <br>
                                            <br>
                                            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th class="all">التسجيل</th>
                                                    <th class="all">تاريخ البداية</th>
                                                    <th class="all">تاريخ النهاية</th>
                                                    <th class="all">خيارات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($plans as $plan)
                                                    <tr>
                                                        <td>{{$plan->Record}}</td>
                                                        <td>{{$plan->StartDate}}</td>
                                                        <td>{{$plan->EndDate}}</td>
                                                        <td>
                                                            @if($enabledPlan == 'true')
                                                                <a class="btn btn-sm"  data-toggle="modal" data-target="#exampleModal1">
                                                                    <i class="fa fa-edit"></i> تعديل </a>
                                                            @else
                                                                <a class="btn btn-sm"  data-toggle="modal" data-target="#exampleModal2">
                                                                    <i class="fa fa-edit"></i> تعديل </a>

                                                            @endif
                                                        </td>


                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">تعديل المهمة</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="alert alert-danger" >ليست لديكم صلاحيات التعديل</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form  action="{{route('editPlan2')}}" method="POST">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">تعديل المهمة</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="id_plan" value="{{$plan->ID}}" />
                                                                        <input type="hidden" name="enabledPlan" value="{{$enabledPlan}}" />
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="col-form-label">عنوان التسجيل</label>
                                                                            <input type="text" class="form-control" name="Record"  value="{{$plan->Record}}" required placeholder="عنوان التسجيل *"/>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>تاريخ البداية *</label>
                                                                            <div class="input-icon right">
                                                                                <i class="fa"></i>
                                                                                <input type="date" class="form-control" name="StartDate" required value="{{$plan->StartDate}}" placeholder="تاريخ البداية *"/> </div>

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>تاريخ النهاية *</label>
                                                                            <div class="input-icon right">
                                                                                <i class="fa"></i>
                                                                                <input type="date" class="form-control" name="EndDate" required value="{{$plan->EndDate}}" placeholder="تاريخ النهاية *"/> </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                                        <input type="submit" class="btn btn-primary" value="حفظ التعديلات" />
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>




                                        <div class="tab-pane " id="tab_1_3">

                                            <div id="calendar"></div>
                                        </div>



                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_6">

                                            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="table12">
                                                <thead>
                                                <tr>
                                                    <th  class="all">العنوان</th>
                                                    <th  class="all">التاريخ</th>
                                                    <th  class="all">المكان</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($meetings as $meeting)
                                                    <tr>
                                                        <td>{{$meeting->Name}}</td>
                                                        <td>{{$meeting->Date}}</td>
                                                        <td>{{$meeting->Location}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>


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
         
        <script src="{!! asset('assets/global/scripts/datatable.js')!!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js')!!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js')!!}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="{!! asset('assets/pages/scripts/bootstrap-year-calendar.js')!!}" type="text/javascript"></script>
        <script src="{!! asset('assets/pages/scripts/calendarapp.js')!!}" type="text/javascript"></script>

        <script type="text/javascript">
            $(function() {
    var currentYear = new Date().getFullYear();

    $('#calendar').calendar({ 
        enableContextMenu: true,
        enableRangeSelection: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],
        selectRange: function(e) {
            editEvent({ startDate: e.startDate, endDate: e.endDate });
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].name + '</div>'
                                    + '<div class="event-location">' + e.events[i].location + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        },
        dataSource:
        <?php echo "[";
                    foreach($registration->plan as $pp){
                        $stdate = strtotime($pp->StartDate);
                        $endate = strtotime($pp->EndDate);
                        $datestartmonth=date('m',strtotime($pp->StartDate))-1;
                        $dateendmonth=date('m',strtotime($pp->EndDate))-1;
                        $datestartday=date('d',strtotime($pp->StartDate));
                        $dateendday=date('d',strtotime($pp->EndDate));
                        $yearStart=date('Y',strtotime($pp->StartDate));
                        $yearEnd=date('Y',strtotime($pp->EndDate));
                        $datediff = $endate - $stdate;
                        echo "{
                        id:".$pp->ID.",
                        name: '".$pp->Record."',
                        location : 'عدد الأيام : ".round($datediff / (60 * 60 * 24))."  ',
                        startDate: new Date(".$yearStart.",  ".$datestartmonth.",".$datestartday."),
                        endDate: new Date(".$yearEnd.", ".$dateendmonth.", ".$dateendday.")
                    },";
                    
                    }
                    echo "]";
        
                   ?>
    });
    
    $('#save-event').click(function() {
        saveEvent();
    });
    });
        </script>
        
    @endsection
@endsection