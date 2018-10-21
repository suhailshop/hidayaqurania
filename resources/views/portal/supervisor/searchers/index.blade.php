@extends('layout.master')

@section('pageTitle', 'الباحثين')
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
                            <i class="icon-users"></i>
                        <span>إدارة طلبتي</span>
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
                            <span class="caption-subject bold uppercase">لائحة الباحثين تحت اشرافي بالنظام</span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="min-phone-l">الاسم الكامل</th>
                                    <th class="none">الجنس</th>
                                    <th class="desc">تاريخ الازدياد</th>
                                    <th class="none">مكان الازدياد</th>
                                    <th class="desktop">الجنسية</th>
                                    <th class="none">الدولة</th>
                                    <th class="none">المدينة</th>
                                    <th class="none">العنوان</th>
                                    <th class="none">رقم جواز السفر</th>
                                    <th class="none">الرقم الوطني</th>
                                    <th class="none"> البريد الالكتروني </th>
                                    <th class="none"> الهاتف</th>
                                    <th class="none"> الجامعة</th>
                                    <th class="none">الكلية</th>
                                    <th class="none">الصورة</th>
                                    <th class="desktop">الاطروحة</th>
                                    <th class="desktop">الحالة</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchers as $searcher)
                                <tr>
                                    <td>{{$searcher->Fistname}} {{$searcher->LastName}}</td>
                                    <td>{{$searcher->Gender}}</td>
                                    <td>{{$searcher->BirthDate}}</td>
                                    <td>{{$searcher->BirthCity}}</td>
                                    <td>{{$searcher->countrieName}}</td>
                                    <td>{{$searcher->nationalitieName}}</td>
                                    <td>{{$searcher->City}}</td>
                                    <th>{{$searcher->Location}}</th>
                                    <td>{{$searcher->PassportNumber}}</td>
                                    <td>{{$searcher->NationalNumber}}</td>
                                    <td>{{$searcher->Email}}</td>
                                    <td>{{$searcher->Phonne1}}</td>
                                    <td>{{$searcher->University}}</td>
                                    <td>{{$searcher->Faculty}}</td>
                                    <td>
                                        <img src="{{ url('storage/registrations/'.$searcher->PictureURL) }}" 
                                            style="width: 39%;height: 39%;" class="img-responsive" alt=""> </div>
                                    </td>        
                                    
                                    <td>{{$searcher->thesesTitle}}</td>
                                    <td>@if($searcher->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                <a href="{{route('getSearcherSearchs',['id'=>$searcher->ID])}}" >
                                                    <i class="fa fa-search-plus"></i> البحوث</a>
                                                </li>
                                                

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
    @endsection
@endsection