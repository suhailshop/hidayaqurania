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
            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('allStudent')}}">
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
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                            <a href="{{route('getStudent',['id'=>$searcher->ID])}}">معلومات الباحث</a>
                                                            </li>
                                                        </ul>
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

            @elseif(auth()->user()->hasRole('student',auth()->user()->role_id))

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