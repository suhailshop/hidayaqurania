@extends('layout.master')

@section('pageTitle', 'ارسال الايميلات')
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
                            <i class="icon-envelope-open"></i>
                        <span>ارسال ايميلات الى المشرفين</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

         
            <div class="row">
                
                    <form method="POST" action="{{route('sendemailsuppost')}}" >
                        
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                @if(isset($msg) && isset($type)) 
                                    @if($type=='danger')
                                        <div class="alert alert-danger" role="alert">
                                                
                                                <strong>تنبيه !</strong>  {{$msg}}
                                        </div>
                                    @else
                                        <div class="alert alert-success" role="alert">
                                                <strong>مبروك !</strong>  {{$msg}}
                                        </div>
                                    @endif
                                @endif
                                    <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-envelope-open font-dark"></i>
                                                    <span class="caption-subject bold uppercase">معلومات الرسالة *</span>
                                                </div>
                                                <div class="tools"> </div>
                                            </div>
                                            <div class="portlet-body">
                                    <div class="form-group">
                                            <label for="subject">العنوان *</label>
                                            <input type="text" class="form-control" id="subject" required name="subject" />
                                        </div>
                                        <div class="form-group">
                                            <label for="text" >الرسالة * </label>
                                        <textarea name="text" class="form-control" required></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="ارسال" /></div></div>
                            </div>
            <div class="col-md-6">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-graduation font-dark"></i>
                            <span class="caption-subject bold uppercase">المرجو اختيار المشرفين </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                                
                            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                <thead>
                                    <tr>
                                        
                                        <th class="min-phone-l">الاسم الكامل</th>
                                        <th class="none">الجنس</th>
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
                                        <th class="all">اختر</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($supervisors as $searcher)
                                    <tr>
                                        <td>{{$searcher->Fistname}} {{$searcher->LastName}}</td>
                                        <td>{{$searcher->Gender}}</td>
                                        <td>{{$searcher->BirthDate}}</td>
                                        <td>{{$searcher->BirthCity}}</td>
                                        <td>{{$searcher->nationalitie->Name}}</td>
                                        <td>{{$searcher->countrie->Name}}</td>
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
                                        <td>@if($searcher->Status == 'yes') مفعلة @else غير مفعلة @endif</td>
                                        <td><input class="form-check-input" type="checkbox" value="{{$searcher->Email}}" name="selectedsup[]" id="defaultCheck1"></td>
                                        
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                    </div>
                    
                </div>
        </div>
        
        
    </form>
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