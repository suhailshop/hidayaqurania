@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
    {{--include here the style of the current page--}}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageTitle', 'الرئيسية')


@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->


 

{{--
            <li class="nav-item  ">
                <a href="{{route('getAllSearchs')}}" class="nav-link nav-toggle">
                    <i class="icon-docs"></i>
                    <span class="title">البحوث</span>
                    <span class="arrow"></span>
                </a>
            </li>--}}


            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                    <a href="{{route('portalwelcome')}}">الرئيسية</a>
                        <i class="fa fa-angle-left"></i>
                    </li>
                    <li>
                            <i class="icon-chemistry"></i>
                        <span>ادارة البحوث</span>
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
                            <span class="caption-subject bold uppercase">لائحة البحوث بالنظام  </span>
                        </div>
                        <div class="tools"> </div>

                    </div>
                    <br>
                    الرجاء تعيين باحث مساعد واحد أو أكثر لكل بحث في القائمة حتى يستطيع الباحث المساعد مشاهدة البحث ومن ثم تقييمه.

                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">الرقم</th>
                                    <th class="all">الباحث</th>
                                    <th class="all">جزء البحث</th>
                                     <th class="none">القسم</th>
                                     <th class="all">رقم التقرير</th>
                                    <th class="all">دفعة الطالب</th>


                                     <th class="all">الملف</th>

                                    @if(auth()->user()->hasRole('admin',auth()->user()->role_id) || auth()->user()->hasRole('admin2',auth()->user()->role_id))
                                        <th class="all">تعيين باحث مساعد</th>
                                        <th class="all">خيارات.</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($searchs as $search)
                                <tr>
                                    <td> {{$search->searcher->Code}}</td>
                                    <td>{{$search->searcher->Fistname}} {{$search->searcher->LastName}}</td>
                                    <td>
                                        <a   href="{{route('getOneSearch',$search->ID)}}">
                                        {{$search->Name}}
                                        </a>
                                    </td>
                                     <td>
                                         <?php
                                        $divs = explode(";", $search->DivisionunitAll);
                                        foreach($divs as $div){
                                            echo $div.'<br />';
                                        }
                                        ?>
                                     </td>

                                    <td>{{$search->cycle->name}}</td>

                                    <td>{!!   App\Http\Controllers\Portal\PortalController::getBatch($search->searcher->regiment)  !!}</td>
                                     <td>
                                        <a href="{{ url('project/storage/app/public/searchs/'.$search->SearchURL) }}" target="_blank" >تحميل</a>
                                    </td>


                                   {{-- <td>  @if($search->Progress=='تم الرفع')
                                        <span class="badge badge-warning">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='رفض الادارة' || $search->Progress=='رفض المشرف' ) 
                                        <span class="badge badge-danger">{{$search->Progress}}</span>
                                        @elseif($search->Progress=='موافقة المشرف' || $search->Progress=='موافقة الادارة' ) 
                                        <span class="badge badge-success">{{$search->Progress}}</span>
                                        @endif                                    
                                    </td>--}}


                                    @if(auth()->user()->hasRole('admin2',auth()->user()->role_id) || auth()->user()->hasRole('admin',auth()->user()->role_id))
                                   <td>
                                       <a  data-toggle="modal" data-target="#exampleModal{{$search->ID}}">
                                           <i class="fa fa-check-square-o"></i> تعيين / إلغاء تعيين </a>
                                       <div class="modal fade" id="exampleModal{{$search->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                               <div class="modal-content">
                                                   <form method="POST" action="{{route('addSearchReviewer')}}">
                                                       {{ csrf_field() }}


                                                       <div class="modal-header">
                                                           <h5 class="modal-title myfont" id="exampleModalLabel">الباحثون المساعدون</h5>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                           </button>
                                                       </div>
                                                       <div class="modal-body">
                                                           <input type="hidden" name="searchid" value="{{$search->ID}}"/>
                                                           <div class="form-group">
                                                               <label class="col-md-4">لائحة الباحثون المساعدون :</label>
                                                               <select class="col-md-8 multiple-checkboxes form-control" name="reviewers[]" multiple="multiple">


                                                                   <?php
                                                                   $isAssigned = false;
                                                                   $arr = array();
                                                                   foreach($search->reviewersearch as $rev)
                                                                   {
                                                                       array_push($arr,$rev->reviewer);
                                                                   }
                                                                   ?>

                                                                   @foreach($reviewers as $rev)
                                                                       <option value="{{$rev->id}}" @if(in_array($rev->id,$arr)) selected <?php  $isAssigned = true;  ?> @endif>{{$rev->Fistname}} {{$rev->LastName}}</option>
                                                                   @endforeach

                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                           <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div>
                                       </div>
                                       @if(!$isAssigned)
                                             <span class="badge badge-danger"> لم يتم تعيين باحث مساعد </span>
                                       @endif

                                   </td>

                                    <td>
                                        <a   href="{{route('getOneSearch',$search->ID)}}">
                                            <i class="fa fa-search"></i> اظهار البحث </a>

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
        <script src="{!! asset('assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
       
        <script type="text/javascript">
            $(document).ready(function() {
                $('.multiple-checkboxes').multiselect({
                    nonSelectedText:'لا مراجع',
                    allSelectedText: 'الكل',

                });
            });
        </script>

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
        <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@endsection