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

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                      الرئيسية
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->


            @if(auth()->user()->hasRole('student',auth()->user()->role_id))

               
            <div class="note note-info largeText">
                <p> شكرا على التسجيل .. جاري مراجعة مستنداتك وإجراءات قبولك، سوف يتم اخبارك بالخطوات </p>
            </div>




            <div class="note note-info largeText">
                <p> مخطط البحث الخاص بي : </p>
            </div>


            <div class="portlet light portlet-fit ">
                <div class="portlet-body">
                    <div class="mt-element-list">
                        <div class="mt-list-head list-todo yellow">
                            <div class="list-head-title-container">

                                <!-- هنا يتم استبدال اسم السورة حسب عنوان البحث الخاص بكل طالب، فمثلا هذا الطالب عنوان البحث الخاص به عن سورة الأنفال  -->
                                <h4 class="list-title myfont">  عنوان البحث : لم يتم تحديد عنوان بحث خاص بك
                                </h4>

                            </div>

                        </div>
                        <div class="mt-list-container list-todo">
                            <div class="list-todo-line"></div>
                            <ul>

                               سيتم إظهار مخطط البحث الخاص بك هنا فور انضمامك للبرنامج
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