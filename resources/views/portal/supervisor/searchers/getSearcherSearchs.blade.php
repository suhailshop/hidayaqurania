@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
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
                        <span>ادارة بحوث الطالب</span>
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
                            <span class="caption-subject bold uppercase">لائحة البحوث الخاصة بالباحث  : {{$searcher->Fistname}} {{$searcher->LastName}} </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>

                                    <th class="all"> الجزء البحثي</th>
                                    <th class="none">الفصل </th>
                                    <th class="all">المبحث </th>

                                     <th class="all">تحميل البحث</th>
                                     
                                    <th class="all">ملاحظات المشرف</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)
                                <tr>

                                    <td>
                                        <a   href="{{route('getOneSearch',$search->ID)}}">
                                             {{$search->Name}}</a>

                                       </td>


                                    <td>
                                        @isset($search->diviName)
                                        {{$search->diviName}}
                                        @else
                                        {{$search->DivisionAll}}
                                        @endisset

                                    </td>


                                    <td>
                                        @isset($search->divName)
                                        {{$search->divName}}
                                        @else
                                            {{$search->DivisionunitAll}}
                                        @endisset

                                    </td>



                                  {{--  <td>  @if($search->Progress=='تم الرفع')
                                            <span class="badge badge-warning">{{$search->Progress}}</span>
                                            @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                            <span class="badge badge-danger">{{$search->Progress}}</span>
                                            @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                            <span class="badge badge-success">{{$search->Progress}}</span>
                                            @endif                                    
                                        </td>--}}
                                    <td>
                                        <a href="{{ url('storage/searchs/'.$search->SearchURL) }}" target="_blank" >تحميل</a>

                                    </td>

                                   
                                    <td>@if(isset($search->Note)) {{$search->Note}} @else 'لم يتم كتابة ملاحظة' @endif </td>

                                    <td>
                                        
                                            
                                        <div class="btn-group pull-right">
                                            <button class="btn yellow btn-xs   dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                    @if(!isset($search->Note))
                                                <li class="myfont">
                                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal{{$search->ID}}">
                                                        <i class="fa fa-comment"></i> اضافة ملاحظة </a>
                                                </li>

                                                
                                        @endif
                                        <li class="myfont">
                                                <a   href="{{route('getOneSearch',$search->ID)}}">
                                                        <i class="fa fa-search"></i> تفاصيل البحث </a>
                                        </li>

                                    {{--    <li>
                                                <a data-toggle="confirmation"
                                                data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                data-title="هل تريد الموافقة ؟" href="{{route('updateSearchProgressok',['id'=>$search->ID])}}">
                                                        <i class="fa fa-check"></i> موافقة المشرف </a>
                                                </li>
                                                <li>
                                                        <a data-toggle="confirmation"
                                                        data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                        data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                        data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                        data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                        data-title="هل تريد الرفض ؟" href="{{route('updateSearchProgressko',['id'=>$search->ID])}}">
                                                                <i class="fa fa-close"></i> رفض المشرف </a>
                                                        </li>--}}
                                            </ul>
                                        </div>
                                    </td>
                                    
                                </tr>
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModal{{$search->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$search->ID}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('addSupervisorNote')}}" method="post" >
                                                    {{ csrf_field() }}
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel{{$search->ID}}">أضف ملاحظات حول البحث</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                    <input type="hidden" name="search" value="{{$search->ID}}" />
                                                    <div class="form-group  ">
                                                            
                                                             <div class="col-md-12">
                                                                 <div class="input-icon right">
                                                                     <i class="fa"></i>
                                                                     <textarea class="form-control" name="note"  ></textarea>
                                                             </div>
                                                         </div>
                                                </div>
                                                <br />
                                                <br />
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                            <button type="submit" class="btn btn-primary">حفظ </button>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
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
    @endsection
@endsection