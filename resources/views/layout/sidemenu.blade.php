<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
            <a href="{{route('portalwelcome')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
            <span class="title">الرئيسية</span>
                    <span class="arrow"></span>
                </a>
                
            </li>
            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
            <li class="nav-item  ">
                <a href="{{route('allSearcher')}}" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">الباحثين</span>
                        <span class="arrow"></span>
                    </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">المشرفين</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{route('allSupervisor')}}" class="nav-link ">
                                    <span class="title">لائحة المشرفين</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                            <a href="{{route('addSupervisor')}}" class="nav-link ">
                                    <span class="title">أضف مشرف</span>
                                </a>
                            </li>
                    </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-cup"></i>
                        <span class="title">اللقاءات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{route('allMeeting')}}" class="nav-link ">
                                    <span class="title">لائحة اللقاءات</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                            <a href="{{route('addMeeting')}}" class="nav-link ">
                                    <span class="title">أضف لقاء</span>
                                </a>
                            </li>
                    </ul>
                </li>
            <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-graduation"></i>
                    <span class="title">الجامعات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('allUniversity')}}" class="nav-link ">
                                <span class="title">لائحة الجامعات</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="{{route('addUniversity')}}" class="nav-link ">
                                <span class="title">أضف جامعة</span>
                            </a>
                        </li>
                </ul>
            </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-directions"></i>
                            <span class="title">الدول</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{route('allCountrie')}}" class="nav-link ">
                                        <span class="title">لائحة الدول</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                <a href="{{route('addCountrie')}}" class="nav-link ">
                                        <span class="title">أضف دولة</span>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-grid"></i>
                                <span class="title">الكليات</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('allFaculty')}}" class="nav-link ">
                                            <span class="title">لائحة الكليات</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                    <a href="{{route('addFaculty')}}" class="nav-link ">
                                            <span class="title">أضف كلية</span>
                                        </a>
                                    </li>
                            </ul>
                        </li>
                       
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-badge"></i>
                                        <span class="title">المعايير</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                            <li class="nav-item  ">
                                                <a href="{{route('allCriteria')}}" class="nav-link ">
                                                    <span class="title">لائحة المعايير</span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                            <a href="{{route('addCriteria')}}" class="nav-link ">
                                                    <span class="title">أضف معيار</span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                                <a href="{{route('searcherok')}}" class="nav-link ">
                                                        <span class="title">الباحثين المستوفين</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a href="{{route('searcherko')}}" class="nav-link ">
                                                            <span class="title">الباحثين الغير مستوفين</span>
                                                        </a>
                                                    </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-globe"></i>
                                            <span class="title">الجنسيات</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                                <li class="nav-item  ">
                                                    <a href="{{route('allNationalite')}}" class="nav-link ">
                                                        <span class="title">لائحة الجنسيات</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                <a href="{{route('addNationalite')}}" class="nav-link ">
                                                        <span class="title">أضف جنسية</span>
                                                    </a>
                                                </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="icon-docs"></i>
                                                <span class="title">الكتب</span>
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                    <li class="nav-item  ">
                                                        <a href="{{route('allBook')}}" class="nav-link ">
                                                            <span class="title">لائحة الكتب</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item  ">
                                                    <a href="{{route('addBook')}}" class="nav-link ">
                                                            <span class="title">أضف كتاب</span>
                                                        </a>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                    <i class="icon-credit-card"></i>
                                                    <span class="title">المساعدات</span>
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li class="nav-item  ">
                                                            <a href="{{route('allHelp')}}" class="nav-link ">
                                                                <span class="title">لائحة المساعدات</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item  ">
                                                        <a href="{{route('addHelp')}}" class="nav-link ">
                                                                <span class="title">أضف مساعدة</span>
                                                            </a>
                                                        </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item  ">
                                                <a href="javascript:;" class="nav-link nav-toggle">
                                                        <i class="icon-chemistry"></i>
                                                        <span class="title">الاختبارات</span>
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                            <li class="nav-item  ">
                                                            <a href="{{route('addProvide')}}" class="nav-link ">
                                                                    <span class="title">أضف اختبار</span>
                                                                </a>
                                                            </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a href="javascript:;" class="nav-link nav-toggle">
                                                            <i class="icon-envelope-open"></i>
                                                            <span class="title">ارسال بريد</span>
                                                            <span class="arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                                <li class="nav-item  ">
                                                                    <a href="{{route('sendEmailSup')}}" class="nav-link ">
                                                                        <span class="title"> الى المشرفين </span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item  ">
                                                                <a href="{{route('SendEmailStu')}}" class="nav-link ">
                                                                        <span class="title">الى الطلاب</span>
                                                                    </a>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item  ">
                                                        <a href="javascript:;" class="nav-link nav-toggle">
                                                                <i class="icon-bubbles"></i>
                                                                <span class="title">ارسال SMS</span>
                                                                <span class="arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu">
                                                                    <li class="nav-item  ">
                                                                        <a href="{{route('sendSMSSup')}}" class="nav-link ">
                                                                            <span class="title"> الى المشرفين </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item  ">
                                                                    <a href="{{route('sendSMSStu')}}" class="nav-link ">
                                                                            <span class="title">الى الطلاب</span>
                                                                        </a>
                                                                    </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item  ">
                                                                <a href="{{route('allAdminReports')}}" class="nav-link nav-toggle">
                                                                        <i class="icon-notebook"></i>
                                                                        <span class="title">التقارير</span>
                                                                        <span class="arrow"></span>
                                                                    </a>
                                                                </li>
                                                        <li class="nav-item  ">
                                                                <a href="{{route('allConfigs')}}" class="nav-link nav-toggle">
                                                                        <i class="icon-settings"></i>
                                                                        <span class="title">الاعدادات</span>
                                                                        <span class="arrow"></span>
                                                                    </a>
                                                                </li>
                                                        @endif
                     @if(auth()->user()->hasRole('supervisor',auth()->user()->role_id))
                     <li class="nav-item  ">
                        <a href="{{route('allSearcherSupervisor')}}" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">طلابي</span>
                                <span class="arrow"></span>
                            </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-chemistry"></i>
                                <span class="title">تقاريري </span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('allSupervisorReports')}}" class="nav-link ">
                                            <span class="title"> لائحة تقاريري </span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                    <a href="{{route('addSupervisorReport')}}" class="nav-link ">
                                            <span class="title">اضافة تقرير</span>
                                        </a>
                                    </li>
                            </ul>
                        </li>
                     @endif
                     @if(auth()->user()->hasRole('student',auth()->user()->role_id))
                     <li class="nav-item  ">
                        <a href="{{route('allHelp')}}" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">المساعدات</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-chemistry"></i>
                                        <span class="title">بحوثي </span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                            <li class="nav-item  ">
                                                <a href="{{route('allSearchs')}}" class="nav-link ">
                                                    <span class="title"> لائحة بحوثي </span>
                                                </a>
                                            </li>
                                            <li class="nav-item  ">
                                            <a href="{{route('addSearch')}}" class="nav-link ">
                                                    <span class="title">اضافة بحث</span>
                                                </a>
                                            </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-chemistry"></i>
                                            <span class="title">تقاريري </span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-menu">
                                                <li class="nav-item  ">
                                                    <a href="{{route('allSearcherReports')}}" class="nav-link ">
                                                        <span class="title"> لائحة تقاريري </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                <a href="{{route('addSearcherReport')}}" class="nav-link ">
                                                        <span class="title">اضافة تقرير</span>
                                                    </a>
                                                </li>
                                        </ul>
                                    </li>
                                
                            </li>
                      
                     @endif
              </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
                