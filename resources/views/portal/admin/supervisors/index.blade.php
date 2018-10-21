@extends('layout.master')

@section('pageTitle', 'المشرفين')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
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
                            <i class="icon-briefcase"></i>
                        <span>إدارة المشرفين</span>
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
                            <span class="caption-subject bold uppercase">لائحة المشرفين المسجلين بالنظام</span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="min-phone-l">الاسم الكامل</th>
                                    <th class="min-tablet">الجنس</th>
                                    <th class="none">تاريخ الازدياد</th>
                                    <th class="none">مكان الازدياد</th>
                                    <th class="none">الجنسية</th>
                                    <th class="desktop">الدولة</th>
                                    <th class="none">المدينة</th>
                                    <th class="none">العنوان</th>
                                    <th class="none">رقم جواز السفر</th>
                                    <th class="none">الرقم الوطني</th>
                                    <th class="none"> البريد الالكتروني </th>
                                    <th class="none"> الهاتف</th>
                                    <th class="none"> الجامعة</th>
                                    <th class="none">الكلية</th>
                                    <th class="none">الصورة</th>
                                    <th class="desktop">الحالة</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supervisors as $supervisor)
                                <tr>
                                    <td>{{$supervisor->Fistname}} {{$supervisor->LastName}}</td>
                                    <td>{{$supervisor->Gender}}</td>
                                    <td>{{$supervisor->BirthDate}}</td>
                                    <td>{{$supervisor->BirthCity}}</td>
                                    <td>{{$supervisor->nationalitie->Name}}</td>
                                    <td>{{$supervisor->countrie->Name}}</td>
                                    <td>{{$supervisor->City}}</td>
                                    <th>{{$supervisor->Location}}</th>
                                    <td>{{$supervisor->PassportNumber}}</td>
                                    <td>{{$supervisor->NationalNumber}}</td>
                                    <td>{{$supervisor->Email}}</td>
                                    <td>{{$supervisor->Phonne1}}</td>
                                    <td>{{$supervisor->University}}</td>
                                    <td>{{$supervisor->Faculty}}</td>
                                    <td>
                                        <img src="{{ url('storage/registrations/'.$supervisor->PictureURL) }}" 
                                            style="width: 39%;height: 39%;" class="img-responsive" alt=""> </div>
                                    </td>        
                                    <td>@if($supervisor->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                <a href="#">
                                                        <i class="fa fa-edit"></i> خيار </a>
                                                </li>
                                                <li>
                                                        <a href="#">
                                                                <i class="fa fa-edit"></i> خيار </a>
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
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
           <!-- BEGIN PAGE LEVEL PLUGINS -->
           <script src="../assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>
           
           <script src="../assets/pages/scripts/ui-confirmations.min.js" type="text/javascript"></script>
           <!-- END PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection