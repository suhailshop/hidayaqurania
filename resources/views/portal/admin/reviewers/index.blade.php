@extends('layout.master')

@section('pageTitle', 'المراجعين')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
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
                            <i class="icon-like"></i>
                        <span>إدارة الباحثون المساعدون</span>
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
                            <span class="caption-subject bold uppercase">لائحة الباحثون المساعدون  </span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الاسم الكامل</th>

                                     <th class="all">الجنسية</th>
                                    <th class="all">الدولة</th>
                                    <th class="all">المدينة</th>
                                     <th class="all"> الجامعة</th>
                                    <th class="all">الكلية</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reviewers as $reviewer)
                                <tr>
                                    <td>
                                        <a href="{{route('adminReviewersProfile',['id'=>$reviewer->ID])}}" >
                                        {{$reviewer->Fistname}} {{$reviewer->LastName}}
                                        </a>
                                    </td>

                                    <td>{{$reviewer->nationalitie->Name}}</td>
                                    <td>{{$reviewer->countrie->Name}}</td>
                                    <td>{{$reviewer->City}}</td>

                                    <td>{{$reviewer->University}}</td>
                                    <td>{{$reviewer->Faculty}}</td>



                                    @if(auth()->user()->hasRole('admin2',auth()->user()->role_id))
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn yellow btn-xs   dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                {{--<li>
                                                <a href="{{route('deleteReviwerPost',['id'=>$reviewer->ID])}}">
                                                        <i class="fa fa-remove"></i> حذف </a>
                                                </li>--}}
                                                <li class="myfont">
                                                    <a href="{{route('getAllReviewerSearchs',['id'=>$reviewer->ID])}}">
                                                            <i class="fa fa-search"></i> الابحاث </a>
                                                </li>
                                                <li class="myfont">
                                                    <a href="{{route('adminReviewersProfile',['id'=>$reviewer->ID])}}" >
                                                            <i class="fa fa-user"></i> الحساب </a>
                                                </li>

                                            </ul>
                                        </div>
                                        
                                    </td>
                                    @endif
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
    @endsection
@endsection