@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/pages/css/bootstrap-year-calendar.css')!!}" rel="stylesheet" type="text/css" />
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
                        <span>خطتي الزمنية</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
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
                    </div>
                    <div class="portlet-body">
                            <div class="tab-content">
                                    
                                     
                                        <!-- CHANGE PASSWORD TAB -->
                                      <div class="tab-pane active" id="tab_1_3">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الخطة / المبحث</th>
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
                                                <form  action="{{route('editPlan')}}" method="POST">
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
                                      <div class="tab-pane " id="tab_1_4">
                                          
                                            <div id="calendar"></div>
                                      </div>
                            </div>
                    </div>
                </div>


        </div>
</div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{!! asset('assets/global/scripts/datatable.js')!!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>
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
                     foreach($plans as $pp){
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
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection