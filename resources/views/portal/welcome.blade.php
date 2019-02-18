@extends('layout.master')
@section('pageTitle', 'الرئيسية')
@section('pageStyle')
{{--include here the style of the current page--}}
<link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
@endsection
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
            الرئيسية
         </li>
      </ul>
   </div>
   <!-- END PAGE HEADER-->
   {{--
   حساب الإدارة
   --}}
   @if(auth()->user()->hasRole('admin',auth()->user()->role_id) or auth()->user()->hasRole('admin2',auth()->user()->role_id))
   <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('allSearcher')}}">
            <div class="visual">
               <i class="fa fa-users"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($searchers)}}">{{count($searchers)}}</span>
               </div>
               <div class="desc"> الطلاب </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('allSupervisor')}}">
            <div class="visual">
               <i class="fa fa-briefcase"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($supervisors)}}">{{count($supervisors)}}</span>
               </div>
               <div class="desc"> المشرفين </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('allUniversity')}}">
            <div class="visual">
               <i class="fa fa-graduation-cap"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($universities)}}">{{count($universities)}}</span>
               </div>
               <div class="desc"> الجامعات </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 purple" href="{{route('allCountrie')}}">
            <div class="visual">
               <i class="fa fa-globe"></i>
            </div>
            <div class="details">
               <div class="number"> 
                  <span data-counter="counterup" data-value="{{count($countries)}}">{{count($countries)}}</span> 
               </div>
               <div class="desc"> الدول </div>
            </div>
         </a>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 grey-mint" href="{{route('allProvide')}}">
            <div class="visual">
               <i class="fa fa-certificate"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($provides)}}">{{count($provides)}}</span>
               </div>
               <div class="desc"> التزويدات </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 green-haze " href="{{route('allBook')}}">
            <div class="visual">
               <i class="fa fa-book"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($books)}}">{{count($books)}}</span>
               </div>
               <div class="desc"> الكتب </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 purple-plum" href="{{route('allThese')}}">
            <div class="visual">
               <i class="fa fa-comments"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($theses)}}">{{count($theses)}}</span>
               </div>
               <div class="desc"> الاطروحات </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allHelp')}}">
            <div class="visual">
               <i class="fa fa-credit-card"></i>
            </div>
            <div class="details">
               <div class="number"> 
                  <span data-counter="counterup" data-value="{{$helps}}">{{$helps}}</span> 
               </div>
               <div class="desc"> المساعدات </div>
            </div>
         </a>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12 col-xs-12 col-sm-12">
         <div class="portlet light ">
            <div class="portlet-title tabbable-line">
               <div class="caption">
                  <i class="icon-bubbles font-dark hide"></i>
                  <span class="caption-subject font-dark bold uppercase">اخر تسجيلات الطلاب </span>
               </div>
            </div>
            <div class="portlet-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="portlet_comments_1">
                     <!-- BEGIN: Comments -->
                     <div class="mt-comments">
                        @foreach($lastsearchers as $searcher)
                        <div class="mt-comment">
                           <div class="mt-comment-img">
                              <img width="45px" height="45px"  src="{{ url('storage/registrations/'.$searcher->PictureURL) }}" /> 
                           </div>
                           <div class="mt-comment-body">
                              <div class="mt-comment-info">
                                 <span class="mt-comment-author">{{$searcher->LastName}} {{$searcher->Fistname}} </span>
                                 <span class="mt-comment-date">{{$searcher->created_at}}</span>
                              </div>
                              <div class="mt-comment-text"> {{$searcher->Location}} , {{$searcher->City}} </div>
                              <div class="mt-comment-details">
                                 <span class="mt-comment-status mt-comment-status-pending">{{$searcher->Gender}}</span>
                                 @if(isset($searcher->these))
                                 <ul class="mt-comment-actions">
                                    <li>
                                       <a href="{{route('getSearcher',['id'=>$searcher->ID])}}">معلومات الباحث</a>
                                    </li>
                                 </ul>
                                 @endif
                              </div>
                           </div>
                        </div>
                        @endforeach                                       
                     </div>
                     <!-- END: Comments -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @elseif(auth()->user()->hasRole('supervisor',auth()->user()->role_id))
   {{--الملخص--}}
   <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allSearchs')}}">
            <div class="visual">
               <i class="fa fa-users"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($searchs)}}">{{count($searchs)}}</span>
               </div>
               <div class="desc"> طلابي </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allSearcherReports')}}">
            <div class="visual">
               <i class="fa fa-briefcase"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($myreports)}}">{{count($myreports)}}</span>
               </div>
               <div class="desc"> التقارير الدورية </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allbookssearcher')}}">
            <div class="visual">
               <i class="fa fa-graduation-cap"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="{{count($books)}}">{{count($books)}}</span>
               </div>
               <div class="desc">المصادر التعليمية </div>
            </div>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <a class="dashboard-stat dashboard-stat-v2 yellow" href="#">
            <div class="visual">
               <i class="fa fa-globe"></i>
            </div>
            <div class="details">
               <div class="number">
                  <span data-counter="counterup" data-value="10">10</span> 
               </div>
               <div class="desc">  تقارير الإدارة </div>
            </div>
         </a>
      </div>
   </div>
   {{--طلابي--}}
   <div class="row">
      <div class="col-md-12">
         <!-- BEGIN EXAMPLE TABLE PORTLET-->
         <!-- BEGIN EXAMPLE TABLE PORTLET-->
         <div class="portlet light ">
            <div class="portlet-title">
               <div class="caption font-dark">
                  <i class="icon-graduation font-dark"></i>
                  <span class="caption-subject bold uppercase">لائحة الباحثين تحت اشرافي بالنظام</span>
               </div>
            </div>
            <div class="portlet-body">
               <table class="table table-striped table-bordered table-hover dt-responsive" width="90%" id="sample_1">
                  <thead>
                     <tr>
                        <th class="all">الاسم الكامل</th>
                        <th class="all">المدينة</th>
                        <th class="all"> البريد الالكتروني </th>
                        <th class="all"> الجامعة</th>
                        <th class="all">الكلية</th>
                        <th class="all">البحوث</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($searchers as $searcher)
                     <tr>
                        <td>{{$searcher->Fistname}} {{$searcher->LastName}}</td>
                        <td>{{$searcher->City}}</td>
                        <td>{{$searcher->Email}}</td>
                        <td>{{$searcher->University}}</td>
                        <td>{{$searcher->Faculty}}</td>
                        <td>
                           <a href="{{route('getSearcherSearchs',['id'=>$searcher->ID])}}" >
                           <i class="fa fa-search-plus"></i> قائمة البحوث</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      @elseif(auth()->user()->hasRole('student',auth()->user()->role_id))
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allSearchs')}}">
               <div class="visual">
                  <i class="fa fa-users"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <span data-counter="counterup" data-value="{{count($searchs)}}">{{count($searchs)}}</span>
                  </div>
                  <div class="desc">  الأجزاء البحثية </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allSearcherReports')}}">
               <div class="visual">
                  <i class="fa fa-briefcase"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <span data-counter="counterup" data-value="{{count($myreports)}}">{{count($myreports)}}</span>
                  </div>
                  <div class="desc"> التقارير الدورية </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('allbookssearcher')}}">
               <div class="visual">
                  <i class="fa fa-graduation-cap"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <span data-counter="counterup" data-value="{{count($books)}}">{{count($books)}}</span>
                  </div>
                  <div class="desc">المصادر التعليمية </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 yellow" href="#">
               <div class="visual">
                  <i class="fa fa-globe"></i>
               </div>
               <div class="details">
                  <div class="number">
                     <span data-counter="counterup" data-value="{{$admin_reports}}">{{$admin_reports}}</span> 
                  </div>
                  <div class="desc">  تقارير الإدارة </div>
               </div>
            </a>
         </div>
      </div>
     
      <div class="portlet light portlet-fit ">
         <div class="portlet-body">
            <div class="mt-element-list">
               <div class="mt-list-head list-todo ">
                  <div class="list-head-title-container">
                     <!-- هنا يتم استبدال اسم السورة حسب عنوان البحث الخاص بكل طالب، فمثلا هذا الطالب عنوان البحث الخاص به عن سورة الأنفال  -->
                     <h4 class="list-title myfont">  عنوان الرسالة البحثية  : {{$these_name}}
                     </h4>
                  </div>
               </div>
               <div class="mt-list-container list-todo">
                  <div class="list-todo-line"></div>
                  <ul>
                     <!-- تقارير السنة الأولى  -->
                     <li class="mt-list-item">
                        <div class="list-todo-icon bg-white">
                           <i class="fa fa-book"></i>
                        </div>
                        <div class="list-todo-item yellow">
                           <a class="list-toggle-container font-white collapsed" data-toggle="collapse" href="#section1" aria-expanded="false">
                              <div class="list-toggle done uppercase">
                                 <div class="list-toggle-title ">تقارير السنة الأولى</div>
                                 <div class="badge badge-default yellow pull-right bold"> التقارير : 4</div>
                              </div>
                           </a>
                           <div class="task-list panel-collapse collapse" id="section1" aria-expanded="false" style="height: 0px;">
                              <ul>
                                 <div class="portlet light portlet-fit bg-inverse bordered">
                                    <div class="portlet-title">
                                       <div class="caption">
                                          <i class="icon-folder  font-black"></i>
                                          <span class="caption-subject bold font-dark uppercase"> قائمة التقارير الخاصة بالسنة الأولى</span>
                                       </div>
                                       <div class="actions">
                                            <a class="btn-group btn-group-devided" href="{{route('addSearch')}}">
                                                    <label class="btn btn-transparent green  btn-lg">
                                                    <i class="icon-plus"></i> إضافة بحث جديد  </label>
                                            </a>
                                       </div>
                                    </div>
                                    <div class="portlet-body">
                                        <?php $exist1=false;?>
                                       <div class="timeline  white-bg white-bg">
                                          @foreach($my_searchs as $search)
                                            @if($search->cycle->name == 'التقرير الدوري الأول' )
                                                <?php $exist1=true;?>
                                                <div class="timeline-item">
                                                    <div class="timeline-badge">
                                                        <div class="timeline-icon">
                                                        <i class="icon-docs font-blue "></i>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="timeline-body-arrow"> </div>
                                                        <div class="timeline-body-head">
                                                        <div class="timeline-body-head-caption">
                                                            <span class="timeline-body-alerttitle font-dark">التقرير الدوري الأول </span>
                                                            <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                        </div>
                                                        <div class="timeline-body-head-actions">
                                                            <div class="btn-group dropup">
                                                                    <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                        <i class="fa fa-eye"></i>
                                                                        </a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="timeline-body-content">
                                                        <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                          @endforeach
                                          @if(!$exist1)
                                             <div class="timeline-item">
                                                <div class="timeline-badge">
                                                   <div class="timeline-icon">
                                                      <i class="icon-docs font-red"></i>
                                                   </div>
                                                </div>
                                                <div class="timeline-body">
                                                   <div class="timeline-body-arrow"> </div>
                                                   <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                         <span class="timeline-body-alerttitle font-dark">التقرير الدوري الأول</span>
                                                         <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                             @foreach($cycles as $cycle)
                                                                @if($cycle->name == 'التقرير الدوري الأول')
                                                                    {{$cycle->endDate}}
                                                                @endif
                                                             @endforeach </span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                         <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                         <i class="fa"></i>
                                                         </button>
                                                      </div>
                                                   </div>
                                                   <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                   </div>
                                                </div>
                                             </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الثاني' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري  الثاني </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثاني</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الثاني')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الثالث' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثالث </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثالث</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الثالث')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الرابع' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الرابع </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الرابع</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الرابع')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                              <div class="task-footer bg-grey">
                              </div>
                           </div>
                        </div>
                     </li>
                     <!-- نهاية تقارير السنة الأولى  -->
                     <!-- تقارير السنة الثانية  -->
                     <li class="mt-list-item">
                        <div class="list-todo-icon bg-white">
                           <i class="fa fa-book"></i>
                        </div>
                        <div class="list-todo-item yellow">
                           <a class="list-toggle-container font-white collapsed" data-toggle="collapse" href="#section2" aria-expanded="false">
                              <div class="list-toggle done uppercase">
                                 <div class="list-toggle-title ">تقارير السنة الثانية</div>
                                 <div class="badge badge-default yellow pull-right bold"> التقارير : 4</div>
                              </div>
                           </a>
                           <div class="task-list panel-collapse collapse" id="section2" aria-expanded="false" style="height: 0px;">
                              <ul>
                                 {{--بداية تقارير الطالب--}}
                                 <div class="portlet light portlet-fit bg-inverse bordered">
                                    <div class="portlet-title">
                                       <div class="caption">
                                          <i class="icon-folder  font-black"></i>
                                          <span class="caption-subject bold font-dark uppercase"> قائمة التقارير الخاصة بالسنة الثانية</span>
                                       </div>
                                       <div class="actions">
                                            
                                          <a class="btn-group btn-group-devided" href="{{route('addSearch')}}">
                                             <label class="btn btn-transparent green  btn-lg">
                                             <i class="icon-plus"></i> إضافة بحث جديد  </label>
                                             </a>
                                       </div>
                                    </div>
                                    <div class="portlet-body">
                                       <div class="timeline  white-bg white-bg">
                                          <!-- TIMELINE ITEM -->
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الخامس' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الخامس </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الخامس</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الخامس')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif

                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري السادس' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري السادس </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري السادس</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري السادس')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري السابع' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري السابع </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري السابع</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري السابع')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الثامن' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثامن </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثامن</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الثامن')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                       </div>
                                    </div>
                                 </div>
                                 {{-- نهاية تقارير الطالب --}}
                              </ul>
                              <div class="task-footer bg-grey">
                              </div>
                           </div>
                        </div>
                     </li>
                     <!-- نهاية تقارير السنة الثانية  -->
                     <!-- تقارير السنة الثالثة  -->
                     <li class="mt-list-item">
                        <div class="list-todo-icon bg-white">
                           <i class="fa fa-book"></i>
                        </div>
                        <div class="list-todo-item yellow">
                           <a class="list-toggle-container font-white collapsed" data-toggle="collapse" href="#section3" aria-expanded="false">
                              <div class="list-toggle done uppercase">
                                 <div class="list-toggle-title ">تقارير السنة الثالثة</div>
                                 <div class="badge badge-default yellow pull-right bold"> التقارير : 4</div>
                              </div>
                           </a>
                           <div class="task-list panel-collapse collapse" id="section3" aria-expanded="false" style="height: 0px;">
                              <ul>
                                 <div class="portlet light portlet-fit bg-inverse bordered">
                                    <div class="portlet-title">
                                       <div class="caption">
                                          <i class="icon-folder  font-black"></i>
                                          <span class="caption-subject bold font-dark uppercase"> قائمة التقارير الخاصة بالسنة الثالثة</span>
                                       </div>
                                       <div class="actions">
                                            <a class="btn-group btn-group-devided" href="{{route('addSearch')}}">
                                                    <label class="btn btn-transparent green  btn-lg">
                                                    <i class="icon-plus"></i> إضافة بحث جديد  </label>
                                            </a>
                                       </div>
                                    </div>
                                    <div class="portlet-body">
                                       <div class="timeline  white-bg white-bg">
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري التاسع' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري التاسع </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري التاسع</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري التاسع')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري العاشر' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري العاشر </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري العاشر</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري العاشر')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الحادي عشر' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الحادي عشر </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                                <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                                    <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الحادي عشر</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الحادي عشر')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                          <!-- TIMELINE ITEM -->
                                          
                                          <?php $exist1=false;?>
                                          @foreach($my_searchs as $search)
                                          @if($search->cycle->name == 'التقرير الدوري الثاني عشر' )
                                              <?php $exist1=true;?>
                                              <div class="timeline-item">
                                                  <div class="timeline-badge">
                                                      <div class="timeline-icon">
                                                      <i class="icon-docs font-blue "></i>
                                                      </div>
                                                  </div>
                                                  <div class="timeline-body">
                                                      <div class="timeline-body-arrow"> </div>
                                                      <div class="timeline-body-head">
                                                      <div class="timeline-body-head-caption">
                                                          <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثاني عشر </span>
                                                          <span class="timeline-body-time font-green"> تم الإرسال بتاريخ :  {{$search->created_at->format('d-m-Y')}}</span>
                                                      </div>
                                                      <div class="timeline-body-head-actions">
                                                          <div class="btn-group dropup">
                                                          <a class="btn btn-circle blue btn-sm " href="{{route('getOneSearch',$search->ID)}}"> عرض التقارير
                                                              <i class="fa fa-eye"></i>
                                                              </a>
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="timeline-body-content">
                                                      <span class="font-blue"> الجزء البحثي بعنوان : <a href="{{route('getOneSearch',$search->ID)}}"> {{$search->Name}} </a></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endif
                                          @endforeach
                                          @if(!$exist1)
                                           <div class="timeline-item">
                                              <div class="timeline-badge">
                                                 <div class="timeline-icon">
                                                    <i class="icon-docs font-red"></i>
                                                 </div>
                                              </div>
                                              <div class="timeline-body">
                                                 <div class="timeline-body-arrow"> </div>
                                                 <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                       <span class="timeline-body-alerttitle font-dark">التقرير الدوري الثاني عشر</span>
                                                       <span class="timeline-body-time font-red">آخر موعد لإرسال التقرير : 
                                                           @foreach($cycles as $cycle)
                                                              @if($cycle->name == 'التقرير الدوري الثاني عشر')
                                                                  {{$cycle->endDate}}
                                                              @endif
                                                           @endforeach </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                       <button class="btn btn-circle red btn-sm disable" type="button"> لم يتم إرسال التقرير
                                                       <i class="fa"></i>
                                                       </button>
                                                    </div>
                                                 </div>
                                                 <div class="timeline-body-content"><span class="font-red">     لم يتم إرسال التقرير / البحث</span>
                                                 </div>
                                              </div>
                                           </div>
                                          @endif
                                          <!-- END TIMELINE ITEM -->
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                              <div class="task-footer bg-grey">
                              </div>
                           </div>
                        </div>
                     </li>
                     <!-- نهاية تقارير السنة الثالثة  -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
      @endif
   </div>
   <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@section('pageScript')
<script src="{!! asset('assets/global/plugins/counterup/jquery.waypoints.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/counterup/jquery.counterup.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/scripts/datatable.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/pages/scripts/dashboard.min.js') !!}" type="text/javascript"></script>
@endsection
@endsection