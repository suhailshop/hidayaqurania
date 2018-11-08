@extends('layout.master')

@section('pageTitle', 'كتاب جديد')
@section('pageStyle')
    {{--include here the style of the current page--}}
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
                                <i class="icon-docs"></i>
                                 <a href="{{route('allBook')}}">إدارة الكتب</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                        <li>
                            <span>كتاب جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-green m-bordered">
                <h3>أضافة كتاب جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالكتاب :
            </div>
<div class="row">
    
<form action="{{route('addBookPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> لديك بعض الاخطاء في النموذج . يرجى مراجعة أدناه. </div>
                                   
                                    <div class="form-group  margin-top-20">
                                       
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="name"  placeholder="اسم الكتاب *"/> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="author" placeholder="اسم الكاتب *"/> </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" id="mask_isbn" class="form-control" name="isbn"  placeholder="رقم ISBN *"/> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="url" class="form-control" name="URL" placeholder="رابط الكتاب *"/> </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                            <div class="col-md-12">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="file" class="form-control" name="pictureurl" > </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">تأكيد</button>
                                                    <button type="reset" class="btn default">الغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
</form>
                    <!-- END V<ALIDATION STATES-->
                </div>



        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @section('pageScript')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{!! asset('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') !!}" type="text/javascript"></script>    
    <script src="{!! asset('assets/pages/scripts/form-input-mask.min.js') !!}" type="text/javascript"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
@endsection