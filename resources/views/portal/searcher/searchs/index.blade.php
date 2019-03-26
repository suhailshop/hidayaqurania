@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
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
                            <i class="icon-chemistry"></i>
                        <span>ادارة بحوثي</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-graduation font-dark"></i>
                            <span class="caption-subject bold uppercase">لائحة البحوث الخاصة بي  </span>
                        </div>

                                               {{--<div class="tools"> </div>--}}
                    </div>
                    <div class="portlet-body">


                        <div>
                            <a class=" btn-group  btn-group-devided" href="{{route('addSearch')}}">
                                <label class="btn btn-transparent yellow">
                                    <i class="icon-plus"></i> إضافة بحث جديد  </label>
                            </a>
                        </div>
                        <br>

                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>

                                    <th class="all">الاسم</th>
                                     <th class="all">الفصل</th>

                                    <th class="all">المبحث</th>

                                    <th class="all">تحميل البحث</th>



                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)

                                <tr>

                                    <td>   <a href="{{route('getOneSearch',$search->ID)}}">
                                        {{$search->Name}} </a>
                                          </td>




                                    <td>
                                        <?php 
                                        $divs = explode(";", $search->DivisionAll);
                                        foreach($divs as $div){
                                            echo $div.'<br />';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                        $divs = explode(";", $search->DivisionunitAll);
                                        foreach($divs as $div){
                                            echo $div.'<br />';
                                        }
                                        ?></td>

                                    <td>
                                    
                                   
                                        <a href="{{ url('project/storage/app/public/searchs/'.$search->SearchURL) }}" target="_blank" >تحميل</a>
                                    </td>
                                    {{--<td>@if(!isset($search->Note)) لا توجد @else {{$search->Note}} @endif</td>--}}

                                   {{-- <td>@if($search->Progress == 'موافقة الادارة' || $search->Progress == 'موافقة المشرف' )
                                        <div class="badge badge-primary">{{$search->Progress}}</div> 
                                        @elseif($search->Progress == 'تم الرفع')
                                        <div class="badge badge-warning">{{$search->Progress}}</div>
                                        @elseif($search->Progress == 'رفض الادارة' || $search->Progress == 'رفض المشرف') 
                                        <div class="badge badge-danger">{{$search->Progress}}</div>
                                        @endif</td>--}}
                                {{--    <td>

                                        @if($search->Status == 'yes')
                                            <div class="badge badge-primary"> منشور </div>
                                        @elseif($search->Status == 'no')
                                            <div class="badge badge-danger"> غير منشور </div>
                                        @endif
                                    </td>--}}

                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn yellow btn-sm   dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                    <li class="myfont">
                                                            <a  href="{{route('getOneSearch',$search->ID)}}">
                                                                    <i class="fa fa-search"></i> تفاصيل البحث  </a>
                                                            </li>
                                                @if($search->cycle->startDate<=date('Y-m-d') && $search->cycle->endDate>=date('Y-m-d'))
                                                <li class="myfont">
                                                <a href="{{route('editSearch',['id'=>$search->ID])}}">
                                                        <i class="fa fa-edit"></i> تعديل </a>
                                                </li>
                                                @endif
                                                {{--<li>
                                                <a data-toggle="confirmation"
                                                data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                data-title="هل تريد الحذف ؟" href="{{route('deleteSearchPost',['id'=>$search->ID])}}">
                                                        <i class="fa fa-remove"></i> حذف </a>
                                                </li>--}}

                                            </ul>
                                        </div>
                                        
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


        </div>
</div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{!! asset('assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
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
    @endsection
@endsection