@extends('layout.master')

@section('pageTitle', 'البحوث')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    
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

                                    <th class="all">القسم</th>

                                    <th class="all">الباحث</th>
                                     <th class="all">تحميل البحث</th>
                                     <th class="all">تحكيم البحث</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)
                                <tr>
                                    
                                    <td>{{$search->Name}}</td>

                                    <td>{{$search->divname}}</td>

                                    <td>{{$search->Fistname}} {{$search->LastName}}</td>
                                     <td>
                                        <a href="{{ url('storage/searchs/'.$search->SearchURL) }}" >تحميل</a>
                                    </td>
                                   {{-- <td>  @if($search->Progress=='تم الرفع')
                                        <span class="badge badge-warning">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                        <span class="badge badge-danger">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                        <span class="badge badge-success">{{$search->Progress}}</span>
                                        @endif                                    
                                    </td>--}}
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
    @endsection
@endsection