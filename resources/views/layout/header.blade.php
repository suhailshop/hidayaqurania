<!DOCTYPE html>
<!--
البوابة الالكترونية لموسوعة الهدايات القرآنية
-->
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" dir="rtl">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6KWW5J');</script>
<!-- End Google Tag Manager -->


    <meta charset="utf-8" />
    <title> @yield('pageTitle') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="بوابة الهدايات القرآنية" name="description" />
    <meta content="M.Moussa, M.Badouch" name="developer" />
     <meta content="كرسي الملك عبدالله للقرآن الكريم بجامعة أم القرى" name="owner" />




    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=droid-sans" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- Force to use Arabic Font for the entire app -->
    <style>
        html, h1,h2,h3,h4,div{
            font-family: 'droid-sans', serif;
        }

        .page-title{
            font-family: 'droid-sans', serif;

        }

        .myfont {
            font-family: 'droid-sans', serif;
        }

        .dashcolor {
            color: #fedda0;
        }

        body{
            font-family: 'droid-sans', serif;
        }


    </style>

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{!! asset('assets/global/css/components-rtl.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{!! asset('assets/global/css/plugins-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->




    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{!! asset('assets/layouts/layout2/css/layout-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/layouts/layout2/css/themes/blue-rtl.min.css') !!} " rel="stylesheet" type="text/css" id="style_color" />
    <link href="{!! asset('assets/layouts/layout2/css/custom-rtl.min.css') !!}  " rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->



    <!-- Begin Page Level Style -->
    <!-- for each page, we include it's Style seperately to enhance the performance -->
    @yield('pageStyle')
    <!-- End Page Level Style -->

<?php  date_default_timezone_set("Asia/Riyadh");   ?>




 <link rel="shortcut icon" href="favicon.ico" />

<meta name="theme-color" content="#655129" />
</head>
<!-- END HEAD -->


<!-- BEGIN BODY -->

{{--@if(Auth::check())--}}
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid  ">
{{--@else--}}
{{--<body class="page-header-fixed page-sidebar-closed-hide-logo page-footer-fixed page-content-white page-boxed">--}}
{{--@endif--}}





<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner  ">



        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/portal')}}">

                <img src="{!! asset('assets/pages/img/logona.png') !!}" alt="logo" class="logo-default" /> </a>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->




        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->


       



        <!-- BEGIN PAGE TOP -->
        <div class="page-top">

            

 

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu" >
            

 
                <ul class="nav navbar-nav pull-right">
                
                               
 
                    
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    @if (Auth::user())
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                        @if(auth()->user()->registration ==null)
                            <img alt="" class="img-circle" src="{!! asset('assets/layouts/layout2/img/avatar.png') !!}" />
                            
                            @else 
                            <img alt="" class="img-circle" src="{{ asset('project/storage/app/public/registrations/'.auth()->user()->registration->PictureURL) }}" />
                            
                            @endif
                            <span class="username username-hide-on-mobile myfont" style="color: black; font-size: small">  {{auth()->user()->name }} </span>
                            <i class="fa fa-angle-down" style="color: black;"></i>
                        </a>
                        

 
                        <ul class="dropdown-menu dropdown-menu ">
                            
                            
                            <li class="myfont">
                                <a href="{{ route('logout') }}">
                                    <i class="icon-key"></i>خروج</a>
                            </li>
                        </ul>
                    </li>
                    @else 
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> دخول للموقع </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{route('login')}}">
                                    <i class="icon-user"></i> دخول </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('register') }}">
                                    <i class="icon-key"></i>حساب جديد</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->


        </div>
        <!-- END PAGE TOP -->



    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->






<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">


        <!-- BEGIN SIDEBAR -->
        @if (Auth::user())
        @include('layout.sidemenu')
        @endif
        <!-- END SIDEBAR -->