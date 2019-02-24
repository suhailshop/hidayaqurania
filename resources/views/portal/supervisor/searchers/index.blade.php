@extends('layout.master')

@section('pageTitle', 'الباحثين')
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
                                               <th class="desktop"> الجامعة</th>
                                    <th class="all">الكلية</th>

                                    <th class="all">عنوان الرسالة</th>
                                    <th class="desktop">الحالة</th>
                                    <th class="all">خيارات.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchers as $searcher)
                                <tr>
                                    <td>    <a href="{{route('getSearcherProfile',['id'=>$searcher->ID])}}" >
                                            {{$searcher->Fistname}} {{$searcher->LastName}}
                                        </a> </td>
                                     <td>{{$searcher->University}}</td>
                                    <td>{{$searcher->Faculty}}</td>

                                    
                                    <td>{{$searcher->thesesTitle}}</td>
                                    <td>{{$searcher->Status}}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn yellow btn-xs   dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li class="myfont">
                                                <a href="{{route('getSearcherSearchs',['id'=>$searcher->ID])}}" >
                                                    <i class="fa fa-search-plus"></i> البحوث</a>
                                                </li>

                                                <li class="myfont">
                                                    <a href="{{route('getSearcherSearchs',['id'=>$searcher->ID])}}" >
                                                        <i class="fa fa-search-plus"></i> صفحة الطالب</a>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
     <!-- END PAGE LEVEL PLUGINS -->

     @if ($message = Session::get('success_add'))
     <script>
        $.confirm({
         title: 'تهانينا!',
         content: '<?php echo Session::get("success_add"); ?>',
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
     <?php Session::forget('success_add');?>
     @endif  

     @if ($message = Session::get('success_update'))
     <script>
        $.confirm({
         title: 'تهانينا!',
         content: '<?php echo Session::get("success_update"); ?>',
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
     <?php Session::forget('success_update');?>
     @endif

     
     @if ($message = Session::get('success_updatenote'))
     <script>
        $.confirm({
         title: 'تهانينا!',
         content: '<?php echo Session::get("success_updatenote"); ?>',
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
     <?php Session::forget('success_updatenote');?>
     @endif
     
     @if ($message = Session::get('success_delete'))
     <script>
        $.confirm({
         title: 'تهانينا!',
         content: '<?php echo Session::get("success_delete"); ?>',
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
     <?php Session::forget('success_delete');?>
     @endif
    @endsection
@endsection