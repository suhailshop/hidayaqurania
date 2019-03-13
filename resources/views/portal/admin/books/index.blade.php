@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
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
                            <i class="icon-docs"></i>
                        <span>إدارة المراجع العلمية</span>
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
                            <span class="caption-subject bold uppercase">لائحة المراجع  العلمية</span>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                    
                    
                        <div>
                            <a class=" btn-group  btn-group-devided" href="{{route('addBook')}}">
                                <label class="btn btn-transparent yellow">
                                    <i class="icon-plus"></i> إضافة مرجع علمي جديد  </label>
                            </a>
                        </div>
                        <br>
                        
                        
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الاسم</th>
                                    <th class="all">الكاتب</th>
                                    <th class="all">الوصف</th>
                                    <th class="desktop">الرابط</th>
                                    <!--<th class="none"> صورة الغلاف</th>-->
                                     @if(auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id) )
                                    <th class="all">خيارات.</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                <tr>
                                    <td>{{$book->Name}}</td>
                                    <td>{{$book->Author}}</td>
                                    <td>{{$book->ISBN}}</td>
                                    <td> <a href="{{$book->URL}}" target="_blank">تنزيل</a></td>
                                    <!--<td>
                                        <img src="{{ url('storage/books/'.$book->PictureURL) }}" 
                                            style="width: 59%;height: 59%;" class="img-responsive" alt=""> </div>
                                    </td>-->
                                    
                                     @if(auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id))
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn yellow btn-xs   dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right myfont">
                                                <li class="myfont">
                                                <a href="{{route('editBook',['id'=>$book->ID])}}">
                                                        <i class="fa fa-edit"></i> تعديل </a>
                                                </li>
                                                <li class="myfont">
                                                <a data-toggle="confirmation"
                                                data-btn-ok-label="نعم" data-btn-ok-class="btn-success"
                                                data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
                                                data-btn-cancel-label="لا" data-btn-cancel-class="btn-danger"
                                                data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
                                                data-title="هل تريد الحذف ؟" href="{{route('deleteBookPost',['id'=>$book->ID])}}">
                                                        <i class="fa fa-remove"></i> حذف </a>
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