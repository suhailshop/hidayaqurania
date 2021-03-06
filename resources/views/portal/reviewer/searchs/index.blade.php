@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    
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
                        <span>ادارة البحوث</span>
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
                            <span class="caption-subject bold uppercase">لائحة البحوث   </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    
                                    <th class="all">اسم الجزء البحثي</th>

                                    <th class="none">القسم</th>
                                    
                                     <th class="all">رقم التقرير</th>


                                    <th class="all">الباحث</th>
                                     <th class="all">تحميل البحث</th>
                                   {{-- <th> حالة التحكيم </th>--}}
                                     <th class="all">تحكيم البحث</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)
                                <tr>
                                    
                                    <td>{{$search->Name}}</td>

                                      <td>
                                        @isset($search->divname)
                                            {{$search->divname}}
                                        @else

                                        <?php
                                        $divs = explode(";", $search->DivisionunitAll);
                                        foreach($divs as $div){
                                            echo $div.'<br />';
                                        }
                                        ?>

                                        @endisset
                                    </td>
                                    
                                     <td>{{$search->Cycle}}</td>

                                    <td>{{$search->Fistname}} {{$search->LastName}}</td>
                                     <td>
                                        <a href="{{ url('project/storage/app/public/searchs/'.$search->SearchURL) }}" target="_blank" >تحميل</a>
                                    </td>
                                   {{-- <td>  @if($search->Progress=='تم الرفع')
                                        <span class="badge badge-warning">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                        <span class="badge badge-danger">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                        <span class="badge badge-success">{{$search->Progress}}</span>
                                        @endif                                    
                                    </td>--}}
                                    {{--<td>  <span class="badge badge-danger"> لم يتم التحكيم </span> </td>--}}
                                    <td>
                                        <a  href="{{route('getOneSearch',$search->ID)}}">
                                            <i class="fa fa-search"></i> تحكيم البحث </a>
                                           
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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
       
        <script type="text/javascript">
            $(document).ready(function() {
                $('.multiple-checkboxes').multiselect({
                    nonSelectedText:'لا مراجع',
                    allSelectedText: 'الكل', 
                });
            });
        </script>

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
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection