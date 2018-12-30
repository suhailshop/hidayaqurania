@extends('layout.master')

@section('pageTitle', 'الخطة الزمنية للباحث')
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


            <h1 class="page-title"> البوابة الالكترونية لموسوعة الهدايات القرآنية

            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                    <a href="{{route('portalwelcome')}}">الرئيسية</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                        <i class="icon-user"></i>
                    <a href="{{route('getSearcher',$searcher->ID)}}">صفحة الطالب</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                        <i class="icon-compass"></i>
                        <span>معلومات الخطة الزمنية</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="col-md-12">
                   
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
                                                <a href="#tab_1_3" data-toggle="tab">جدول الخطة الزمنية</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_4" data-toggle="tab">تتبع الخطة الزمنية</a>
                                            </li>
                                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                            <li>
                                                <a href="#tab_1_5" data-toggle="tab">تعديل الخطة الزمنية</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                          
                                           
                                              <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane active" id="tab_1_3">
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