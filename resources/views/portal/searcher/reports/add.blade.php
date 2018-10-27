@extends('layout.master')

@section('pageTitle', 'تقرير جديد')
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
                                <i class="icon-chemistry"></i>
                                 <a href="{{route('allSearcherReports')}}">إدارة تقاريري</a>
                                <i class="fa fa-angle-left"></i>
                            </li>
                        <li>
                            <span>تقرير جديد</span>
                        </li>
                    </ul>
                </div>
            <!-- END PAGE HEADER-->
            <div class="m-heading-1 border-green m-bordered">
                <h3>أضافة تقرير جديد</h3>
                <p> المرجو ملء الخانات بالمعلومات الخاصة بالتقرير :
            </div>
<div class="row">
    
<form action="{{route('addSearcherReportPost')}}" method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form ">
                       
                        
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> لديك بعض الاخطاء في النموذج . يرجى مراجعة أدناه. </div>
                                   
                                    <div class="form-group  ">
                                       
                                        <div class="col-md-12">
                                            <label>القسم</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select  class="form-control" name="Section" >
                                                    @foreach($sections as $section)
                                                        <option value="{{$section->ID}}" >{{$section->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>الصنف *</label>
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="TypeCyclic" placeholder="الصنف *"/> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>التاريخ *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="date" class="form-control" name="DateSearcher" placeholder="التاريخ *"/> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>تقييم الجزء المنجز *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="number" class="form-control" name="DoneRange" placeholder="تقييم الجزء المنجز *"/> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>عدد الجلسات *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="number" class="form-control" name="SessionsCount" placeholder="عدد الجلسات *"/> </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                <label>مجموع ساعات الاشراف *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="number" class="form-control" name="HoursNumber" placeholder="مجموع ساعات الاشراف  *"/> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>مدى الالتزام بالتعديلات *</label>
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="number" class="form-control" name="UpdatedRange" placeholder="مدى الالتزام بالتعديلات *"/> </div>
                                                </div>
                                        </div>
                                        
                                </div>
                        </div></div></div>
                                <div class="col-md-6">
                                        <div class="portlet light portlet-fit portlet-form ">
                                                
                                                 
                                                 <div class="portlet-body">
                                                     
                                <div class="form-body">
                                      
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>تاريخ الاعتماد *</label>
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="date" class="form-control" name="DateCommittee" placeholder="تاريخ الاعتماد *"/> </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>الأسباب *</label>
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <textarea class="form-control" name="Reasons" placeholder="الأسباب *"></textarea> </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>الصعوبات *</label>
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <textarea class="form-control" name="Difficulties" placeholder="الصعوبات *"></textarea> </div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>الملاحظات *</label>
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <textarea class="form-control" name="Notes" placeholder="الملاحظات *"></textarea> </div>
                                                </div>
                                        </div>
                                        

                                    <div class="form-group ">
                                            <div class="col-md-12">
                                                <label>الملف *</label>
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="file" class="form-control" name="URL" > </div>
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