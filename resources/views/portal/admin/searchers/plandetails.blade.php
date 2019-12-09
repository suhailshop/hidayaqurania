@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />
    
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    
    <link href="{!! asset('assets/pages/css/bootstrap-year-calendar.css')!!}" rel="stylesheet" type="text/css" />
    
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
                    <a href="{{route('getSearcher',$searcher->ID)}}">صفحة الباحث</a>
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
                                <img src="{{ asset('project/storage/app/public/registrations/'.$searcher->PictureURL) }}" class="img-responsive" alt=""> </div>
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
                                        <a href="{{route('getSearcher',$searcher->ID)}}">
                                            <i class="icon-school"></i> مشاهدة المعلومات الشخصية  </a>
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



                                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))

                                            <li>
                                                <a href="#tab_1_7" data-toggle="tab">تغيير المشرف والأطروحة</a>
                                            </li>


                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab"> نسبة التقدم</a>
                                            </li>
                                            @endif

                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">الخطة الزمنية</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_4" data-toggle="tab"> تقويم الخطة</a>
                                            </li>


                                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                            <li>
                                                <a href="#tab_1_5" data-toggle="tab">تعديل الخطة </a>
                                            </li>
                                            @endif

                                            <li>
                                                <a href="#tab_1_6" data-toggle="tab">اللقاءات </a>
                                            </li>



                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">




                                            <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane active" id="tab_1_1">


                                          <form role="form" method="POST" action="{{route('updateSubmissionInfos')}}" >

                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_registration" value="{{$searcher->ID}}" />
                                                    <p class="hint">اسم الباحث :</p>
                                                    <div class="form-group">
                                                        <label class="control-label visible-ie8 visible-ie9">الاسم الكامل</label>
                                                        <input  disabled    value="{{$searcher->Fistname}}" class="form-control placeholder-no-fix" type="text"  name="Fistname" />
                                                    </div>
                                                    

                                                    <br>


                                                    <div class="form-group">
                                                        <label class="control-label">عنوان الاطروحة : </label>
                                                        <input   disabled    value="{{$searcher->these->Title}}" class="form-control placeholder-no-fix"  type="text"  name="Title" />
                                                    </div>

                                                   <br>


                                                    <p class="hint"> نسبة التقدم في الاطروحة : @if(isset($searcher->progress)) {{ ceil(((($numberOfMonths * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress) * 100)/ (($searcher->progress->Months * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress))}}% @else 0% @endif </p>
                                                    <div class="progress">
                                                        @if(isset($searcher->progress))
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: {{ ceil(((($numberOfMonths * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress) * 100)/ (($searcher->progress->Months * $searcher->progress->MonthlyProgress) + $searcher->progress->InitialProgress))}}%"></div></div>
                                                    @else
                                                        المرجو ملئ المعلومات في النافذة الخاصة
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1%"></div>
                                                     </div>
                                                    @endif



                                                <div class="form-group">
                                                    <label class="control-label ">الجامعة : </label>
                                                    <input   disabled  

                                                        @foreach($universities as $uni)
                                                            @if($searcher->University==$uni->ID)  value="{{$uni->Name}}"   @endif
                                                        @endforeach

                                                    class="form-control placeholder-no-fix" type="text"   name="University" /> </div>

                                                <div class="form-group">
                                                    <label class="control-label">المشرف : </label>
                                                    <select   disabled    class="form-control" name="supervisor">
                                                        @foreach($supervisors as $supervisor)
                                                            <option value="{{$supervisor->ID}}" @if($supervisor->ID == $searcher->these->supervisor->ID) selected @endif>{{$searcher->these->supervisor->Fistname}} {{$searcher->these->supervisor->LastName}}</option>
                                                        @endforeach
                                                    </select></div>
                                                <input type="hidden" name="these_id" value="{{$searcher->these->ID}}"/>



                                                <div class="form-group">
                                                    <label class="control-label ">تاريخ بداية البرنامج : </label>
                                                    <input  @if(auth()->user()->hasRole('admin2',auth()->user()->role_id)) disabled @endif  dir="rtl" value="{{$searcher->these->BeginningDate}}" class="form-control placeholder-no-fix"    name="BeginningDate" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label ">تاريخ نهاية البرنامج : </label>
                                                    <input  @if(auth()->user()->hasRole('admin2',auth()->user()->role_id)) disabled @endif  dir="rtl" value="{{$searcher->these->CompletionDate}}" class="form-control placeholder-no-fix"   name="CompletionDate" /> </div>
                                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                                    <div class="margin-top-10">
                                                        <input type="submit" class="btn green" value="تأكيد" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                    @endif

                                          </form>



                                        </div>
                                            <!-- END CHANGE PASSWORD TAB -->







                                        <!-- CHANGE Supervisor TAB -->
                                        @if(auth()->user()->hasRole('admin',auth()->user()->role_id))

                                            <div class="tab-pane" id="tab_1_7">
                                                <form action="{{route('changeSearcherSupervisor')}}" method="POST">
                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="id_searcher" value="{{$searcher->ID}}" />



                                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} ">

                                                            <label class="control-label ">تعديل المشرف : </label>
                                                            <select class="form-control placeholder-no-fix" name="Supervisor"  >
                                                                @foreach($supervisors as $sup)
                                                                    <option  @if($sup->ID == $searcher->these->supervisor->ID) selected @endif   value="{{$sup->ID}}">{{$sup->Fistname}} {{$sup->LastName}}</option>
                                                                @endforeach
                                                            </select>
                                                    </div>




                                                    <div class="form-group">

                                                            <label class="control-label ">تعديل عنوان البحث</label>
                                                            <input required class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="عنوان الأطروحة" value="{{$searcher->these->Title}}" name="Title" />

                                                    </div>



                                                    <div class="form-group">
                                                            <label class="control-label">تعديل مدة البرنامج</label>
                                                            <select required class="form-control placeholder-no-fix" name="ProgramDuration">


                                                                <option selected value="{{$searcher->these->ProgramDuration}}">{{$searcher->these->ProgramDuration}}</option>
                                                                <option value="12">12 شهر</option>
                                                                <option value="24">24 شهر</option>
                                                                <option value="36">36 شهر</option>
                                                            </select>
                                                    </div>




                                                    <div class="form-group">

                                                        <label class="control-label">تاريخ بداية البرنامج</label>
                                                        <input required class="form-control placeholder-no-fix" type="date" value="{{$searcher->these->BeginningDate}}"  min="2014-01-01"  max="2040-12-31" autocomplete="off" placeholder="تاريخ البداية" name="BeginningDate" />

                                                    </div>




                                                    <div class="form-group">
                                                        <label class="control-label">تاريخ نهاية البرنامج</label>
                                                        <input required class="form-control placeholder-no-fix" type="date"  value="{{$searcher->these->CompletionDate}}"  min="2014-01-01"  max="2040-12-31" autocomplete="off" placeholder="تاريخ النهاية" name="CompletionDate" />
                                                    </div>







                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">حفظ التغييرات</button>
                                                                <button type="reset" class="btn default">الغاء</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>



                                            </div>
                                        @endif
                                    <!-- END CHANGE Supervisor TAB -->








                                        <!-- CHANGE PASSWORD TAB -->
                                        @if(auth()->user()->hasRole('admin',auth()->user()->role_id))

                                        <div class="tab-pane" id="tab_1_2">
                                            <form action="{{route('searcherProgressPost')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_searcher" value="{{$searcher->ID}}" />
                                                <div class="form-group">
                                                    <label class="control-label ">مدة الدراسة بالاشهر : </label>
                                                    <input class="form-control placeholder-no-fix"  type="number"  required value="@if(isset($searcher->progress->Months)){{$searcher->progress->Months}}@endif"  name="Months" />

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label ">التقدم في كل شهر : </label>
                                                    <input class="form-control placeholder-no-fix" type="number" step="0.01" value="@if(isset($searcher->progress->MonthlyProgress)){{$searcher->progress->MonthlyProgress}}@endif" required name="MonthlyProgress" />

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label ">التقدم البدئي : </label>
                                                    <input class="form-control placeholder-no-fix" type="number" step="0.01" value="@if(isset($searcher->progress->InitialProgress)){{$searcher->progress->InitialProgress}}@endif" required name="InitialProgress" />

                                                </div>
                                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                                    <div class="margin-top-10">
                                                        <input type="submit" class="btn green" value="تأكيد" />
                                                        <input type="reset" value="الغاء" class="btn default" />
                                                    </div>
                                                @endif
                                            </form>



                                        </div>
                                        @endif
                                        <!-- END CHANGE PASSWORD TAB -->




                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th class="all">المهام</th>
                                                            <th class="min-tablet">تاريخ البداية</th>
                                                            <th class="min-tablet">تاريخ النهاية</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($searcher->plan as $pla)
                                                        <tr>
                                                            <td>{{$pla->Record}}</td>
                                                            <td>{{$pla->StartDate}}</td>
                                                            <td>{{$pla->EndDate}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->


                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_4" style="direction: ltr">
                                                
                                                    <div id="calendar"></div>
                                                
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->


                                            <!-- CHANGE PASSWORD TAB -->
                                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                            
                                                                                     


                                            <div class="tab-pane" id="tab_1_5">
                                            <form action="{{route('editPlanEnable')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id_searcher" value="{{$searcher->ID}}" />
                                                        @if($searcher->EnablePlanEdit=='true')
                                                        <input type="submit" class="btn btn-danger" value="ايقاف التعديلات " />
                                                        @else 
                                                        <input type="submit" class="btn btn-success" value="السماح بالتعديلات" />
                                                        @endif
                                                </form>
                                                
                                            </div>
                                            @endif
                                            <!-- END CHANGE PASSWORD TAB -->



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
                    foreach($searcher->plan as $pp){
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