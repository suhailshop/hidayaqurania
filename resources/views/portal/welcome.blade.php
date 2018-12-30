@extends('layout.master')

@section('pageTitle', 'الرئيسية')
@section('pageStyle')
    {{--include here the style of the current page--}}
@endsection



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
                      الرئيسية
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->

            <div class="note note-info">
                <p> هذه الصفحة الرئيسية للبوابة الالكترونية </p>
            </div>
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
                            <span data-counter="counterup" data-value="{{count($supervisors)}}">{{count($supervisors)}}</span></div>
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
                                <span data-counter="counterup" data-value="{{count($countries)}}">{{count($countries)}}</span> </div>
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
                            <span data-counter="counterup" data-value="{{count($books)}}">{{count($books)}}</span></div>
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
                                <span data-counter="counterup" data-value="{{$helps}}">{{$helps}}</span> </div>
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
                                                    <img width="45px" height="45px"  src="{{ url('storage/registrations/'.$searcher->PictureURL) }}" /> </div>
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
                حساب مشرف
            @elseif(auth()->user()->hasRole('student',auth()->user()->role_id))
               
            <div class="note note-info largeText">
                <p> ملخص الحساب الخاص بي : </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('allSearchs')}}">
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
                    <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('allSearcherReports')}}">
                        <div class="visual">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{count($myreports)}}">{{count($myreports)}}</span></div>
                            <div class="desc"> التقارير الدورية </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('allbookssearcher')}}">
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
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$admin_reports}}">{{$admin_reports}}</span> </div>
                            <div class="desc">  تقارير الإدارة </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="note note-info largeText">
                <p> مخطط البحث الخاص بي : </p>
            </div>


            <div class="portlet light portlet-fit ">
                <div class="portlet-body">
                    <div class="mt-element-list">
                        <div class="mt-list-head list-todo grey">
                            <div class="list-head-title-container">

                                <!-- هنا يتم استبدال اسم السورة حسب عنوان البحث الخاص بكل طالب، فمثلا هذا الطالب عنوان البحث الخاص به عن سورة الأنفال  -->
                                <h4 class="list-title myfont">  عنوان البحث : {{$these_name}}
                                </h4>

                            </div>

                        </div>
                        <div class="mt-list-container list-todo">
                            <div class="list-todo-line"></div>
                            <ul>

                                <!-- القسم الأول  -->
                                @foreach($sections as $section)
                                <li class="mt-list-item">
                                    <div class="list-todo-icon bg-white">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="list-todo-item grey">
                                    <a class="list-toggle-container font-white collapsed" data-toggle="collapse" href="#section{{$section->ID}}" aria-expanded="false">
                                            <div class="list-toggle done uppercase">
                                            <div class="list-toggle-title ">{{$section->Name}}</div>
                                                <div class="badge badge-default pull-right bold">الفصول : {{count($section->divisions)}}</div>
                                            </div>
                                        </a>
                                        <div class="task-list panel-collapse collapse" id="section{{$section->ID}}" aria-expanded="false" style="height: 0px;">
                                            <ul>

                                               <!--  الفصل الأول  -->
                                               @foreach($section->divisions as $divs)

                                                <li class="task-list-item">
                                                    <div class="task-icon">
                                                        <a href="javascript:;">
                                                            <i class="fa fa-sticky-note-o"></i>
                                                        </a>
                                                    </div>
                                                    <div class="task-status">
                                                            @if(count($divs->divisionunit) <= count($divs->searchs))
                                                           
                                                            <span class="badge badge-success"> تم إكمال الفصل </span>
                                                            @else
                                                            <span class="badge badge-danger"> الفصل لم يكتمل بعد</span>
                                                          
                                                            @endif
                                                             
                                                    </div>
                                                    <div class="task-content">
                                                        <h4 class="uppercase bold myfont">
                                                            <a class="list-toggle-container collapsed" data-toggle="collapse"  href="#section1data{{$divs->ID}}" aria-expanded="false">  {{$divs->Name}}</a>
                                                        </h4>


                                                        <div class="mt-list-container list-simple ext-1 group">
                                                            <div class="panel-collapse collapse" id="section1data{{$divs->ID}}" aria-expanded="false" style="height: 0px;">
                                                                <ul>

                                                                    @foreach($divs->searchs as $search)
                                                                    <li class="mt-list-item">
                                                                        <div class="list-icon-container">
                                                                            <span class="badge badge-warning"> {{$search->Progress}}</span>
                                                                        </div>

                                                                        <div class="list-item-content">
                                                                            <h5 class="uppercase myfont">
                                                                            <a href="{{ url('storage/searchs/'.$search->SearchURL) }}" target="newtab">{{$search->divisionunit->Name}}</a>
                                                                            </h5>
                                                                        </div>
                                                                    </li>

                                                                    @endforeach

                                                                  

                                                                    <br>
                                                                 </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </li>
                                                @endforeach
                                            

                                             </ul>
                                            <div class="task-footer bg-grey">

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
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
   
        <script src="{!! asset('assets/pages/scripts/dashboard.min.js') !!}" type="text/javascript"></script>
    @endsection
@endsection