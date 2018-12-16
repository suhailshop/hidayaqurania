@extends('layout.master')

@section('pageTitle', 'التقديمات')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css') !!}" rel="stylesheet" type="text/css" />
    
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
                            <i class="icon-paper-plane"></i>
                        <span>إدارة التقديمات</span>
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
                            <span class="caption-subject bold uppercase">لائحة التقديمات بالنظام</span>
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
                                @foreach($searchers as $searcher)
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
                                    <td>
                                            <div class="btn-group pull-right">
                                                    <button class="btn red btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">{{$searcher->Status}}
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                        <a href="{{route('editStatusSubmission',['id'=>$searcher->ID,'status'=>'مفعل'])}}" type="button">
                                                        <i class="fa fa-check"></i>مفعل </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{route('editStatusSubmission',['id'=>$searcher->ID,'status'=>'مرشح أولي'])}}" type="button">
                                                        <i class="fa fa-angle-up"></i>مرشح أولي </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{route('editStatusSubmission',['id'=>$searcher->ID,'status'=>'مرشح نهائي'])}}" type="button">
                                                        <i class="fa fa-angle-double-up"></i>مرشح نهائي </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{route('editStatusSubmission',['id'=>$searcher->ID,'status'=>'مستبعد'])}}" type="button">
                                                        <i class="fa fa-sign-out"></i>مستبعد </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{route('editStatusSubmission',['id'=>$searcher->ID,'status'=>'موقف'])}}" type="button">
                                                        <i class="fa fa-stop"></i>موقف </a>
                                                        </li>
                                                    </ul>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">اختر
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                <a href="{{route('getSubmission',$searcher->ID)}}" >
                                                                <i class="fa fa-user"></i> عرض صفحة المتقدم
                                                            </a></li><li>
                                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fa fa-check"></i> تسجيل حضور </a>
                                                </li>

                                                <li>
                                                <a href="#"  type="button" data-toggle="modal" data-target="#exampleModal2">
                                                    <i class="fa fa-balance-scale"></i>  تنقيط المعايير </a>
                                                </li>
                                                
                                                

                                            </ul>
                                        </div>
                                        
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{route('addSubmissionToMeeting')}}" method="post" >
                                                {{ csrf_field() }}
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">اختر اللقاء و سجل الحضور</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                                <input type="hidden" name="searcher" value="{{$searcher->ID}}" />
                                                <div class="form-group  ">
                                                        
                                                         <div class="col-md-12">
                                                             <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <select class="form-control" name="meeting"  >
                                                                     @foreach($meetings as $meeting) 
                                                                         <option value="{{$meeting->ID}}">{{$meeting->Name}} - {{$meeting->Date}}</option>
                                                                    @endforeach
                                                                 </select>
                                                         </div>
                                                     </div>
                                            </div>
                                            <br />
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                        <button type="submit" class="btn btn-primary">حفظ الحضور</button>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                              
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('addCriteriasToSubmission')}}" method="post" >
                                                    {{ csrf_field() }}
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">المرجو اختيار المعايير المستوفاة من طرف المتقدم : </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                @if(count($searcher->searcher_criteria)<=0)
                                                    <input type="hidden" name="searcher" value="{{$searcher->ID}}" />
                                                    <div class="form-group  " style="height:100px">
                                                            
                                                             <div class="col-md-12">
                                                                 <div class="input-icon right">
                                                                     <i class="fa"></i>
                                                                     <select class="form-control" name="criterias[]" 
                                                                            multiple="multiple" data-label="left" 
                                                                            data-select-all="true" data-width="100%" data-filter="true" data-action-onchange="true">
                                                                            @foreach($criterias as $criteria)   
                                                                                <option value="{{$criteria->ID}}">{{$criteria->Name}} ( {{$criteria->ProposedScore}} / {{$criteria->MaximumScore}} ) </option>
                                                                            @endforeach
                                                                     </select>
                                                             </div>
                                                         </div>
                                                </div>
                                                <br />
                                                @else
                                                <div class="mt-element-list">
                                                        @foreach($searcher->searcher_criteria as $cri)

                                                            <div class="mt-list-container list-simple ext-1 group">
                                                                <a class="list-toggle-container" data-toggle="collapse" href="#completed-simple" aria-expanded="false">
                                                                    <div class="list-toggle done uppercase"> {{$cri->criteria->Name}}
                                                                    </div>
                                                                </a>
                                                                <div class="panel-collapse collapse in" id="completed-simple" aria-expanded="false" style="">
                                                                    <ul>
                                                                        <li class="mt-list-item ">
                                                                            
                                                                            <div class="list-item-content">
                                                                                <h3 class="uppercase"> 
                                                                                    الدرجة المقترحة : {{$cri->criteria->ProposedScore}} 
                                                                                    <br />
                                                                                    الدرجة القصوى  : {{$cri->criteria->MaximumScore}} </h3>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        </div>
                                                    
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                            @if(count($searcher->searcher_criteria)<=0)
                                                <button type="submit" class="btn btn-primary">حفظ </button>
                                            @endif
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
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
         <script src="../assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
         <script src="../assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection