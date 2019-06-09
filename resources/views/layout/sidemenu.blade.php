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
        <ul class="page-sidebar-menu page-sidebar-menu-light  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
            <a href="{{route('portalwelcome')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
            <span class="title">الرئيسية</span>
                    <span class="arrow"></span>
                </a>
                
            </li>

            @if(auth()->user()->getCurrentRole(auth()->user()->id) == 'admin')
                @if(auth()->user()->hasRoleSupervisor(auth()->user()->email))
                <li class="nav-item  ">
                    <a href="{{route('changeAccountToSupervisor')}}" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-transfer"></i>
                        <span class="title">تغيير لـ حساب المشرف</span>
                     </a>
                </li>
                @endif
            @endif

            @if(auth()->user()->getCurrentRole(auth()->user()->id) == 'supervisor')
                @if(auth()->user()->hasRoleAdmin2(auth()->user()->email))
                <li class="nav-item  ">
                    <a href="{{route('changeAccountToAdmin2')}}" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-transfer"></i>
                        <span class="title">تغيير لـ حساب المدير</span>

                    </a>
                </li>
                @endif
            @endif

            @if(auth()->user()->hasRole('admin',auth()->user()->role_id) or auth()->user()->hasRole('admin2',auth()->user()->role_id))

            <li class="nav-item  ">
                <a href="{{route('allSearcher')}}" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">الباحث</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endif






            @if(auth()->user()->hasRole('admin',auth()->user()->role_id) or auth()->user()->hasRole('admin2',auth()->user()->role_id))

                <li class="nav-item  ">
                    <a href="{{route('allSupervisor')}}" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">المشرف</span>
                        <span class="arrow"></span>
                    </a>
                </li>



            @endif





            @if(auth()->user()->hasRole('admin',auth()->user()->role_id) or auth()->user()->hasRole('admin2',auth()->user()->role_id))



                <li class="nav-item  ">
                    <a href="{{route('allReviewer')}}" class="nav-link nav-toggle">
                        <i class="icon-like"></i>
                        <span class="title">الباحث المساعد</span>
                        <span class="arrow"></span>
                    </a>
                </li>

               


            @endif







            {{-- قائمة المراجع--}}
            @if(auth()->user()->hasRole('reviewer',auth()->user()->role_id))
            <li class="nav-item  ">
                <a href="{{route('getAllMySearchs')}}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">البحوث</span>
                        <span class="arrow"></span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{route('reviewerProfile')}}" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">معلوماتي</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            @endif





            @if(auth()->user()->hasRole('admin',auth()->user()->role_id) or auth()->user()->hasRole('admin2',auth()->user()->role_id))
         
            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))




                    <li class="nav-item  ">
                        <a href="{{route('allUser')}}" class="nav-link nav-toggle">
                            <i class="icon-screen-desktop"></i>
                            <span class="title">الإدارة</span>
                            <span class="arrow"></span>
                        </a>
                    </li>



                    <li class="nav-item  ">
                         <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-screen-desktop"></i>
                            <span class="title">إدارة الحسابات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">

                                <li class="nav-item  ">
                                <a href="{{route('addUserAdmin')}}" class="nav-link ">
                                        <span class="title">أضف مدير</span>
                                    </a>
                                </li>
                            <li class="nav-item  ">
                                <a href="{{route('addUserReviewer')}}" class="nav-link ">
                                    <span class="title">أضف باحث مساعد</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{route('addUserSupervisor')}}" class="nav-link ">
                                    <span class="title">أضف مشرف</span>
                                </a>
                            </li>
                                <li class="nav-item  ">
                                    <a href="{{route('addUserSearcher')}}" class="nav-link ">
                                            <span class="title">أضف طالب</span>
                                        </a>
                                 </li>
                        </ul>
                    </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-reload"></i>
                    <span class="title">أرقام التقارير الدورية</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('allCycle')}}" class="nav-link ">
                                <span class="title">لائحة الأرقام</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="{{route('addCycle')}}" class="nav-link ">
                                <span class="title">أضف رقم تقرير</span>
                            </a>
                        </li>
                </ul>
            </li>

            @endif



                <li class="nav-item  ">
                    <a href="{{route('getAllSearchs')}}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">إرسال بحث لباحث مساعد</span>
                        <span class="arrow"></span>
                    </a>
                </li>




                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">المراجع</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('allBook')}}" class="nav-link ">
                                <span class="title">لائحة المراجع</span>
                            </a>
                        </li>

                            <li class="nav-item  ">
                                <a href="{{route('addBook')}}" class="nav-link ">
                                    <span class="title">أضف مرجع علمي</span>
                                </a>
                            </li>

                    </ul>
                </li>

{{--
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

--}}


                <li class="nav-item  ">
                    <a href="{{route('adminProfile')}}" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">حسابي</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                
                
                

             @if(auth()->user()->hasRole('admin',auth()->user()->role_id))

                <li class="nav-item  ">
                    <a href="{{route('allSubmissions')}}" class="nav-link nav-toggle">
                        <i class="icon-paper-plane"></i>
                        <span class="title">التقديمات</span>
                        <span class="arrow"></span>
                    </a>

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
                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                <li class="nav-item  ">
                                <a href="{{route('addMeeting')}}" class="nav-link ">
                                        <span class="title">أضف لقاء</span>
                                    </a>
                                </li>
                                @endif
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
                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                            <li class="nav-item  ">
                            <a href="{{route('addUniversity')}}" class="nav-link ">
                                    <span class="title">أضف جامعة</span>
                                </a>
                            </li>
                            @endif
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
                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                <li class="nav-item  ">
                                <a href="{{route('addCountrie')}}" class="nav-link ">
                                        <span class="title">أضف دولة</span>
                                    </a>
                                </li>
                                @endif
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
                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                <li class="nav-item  ">
                                <a href="{{route('addFaculty')}}" class="nav-link ">
                                        <span class="title">أضف كلية</span>
                                    </a>
                                </li>
                                @endif
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
                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                <li class="nav-item  ">
                                <a href="{{route('addCriteria')}}" class="nav-link ">
                                        <span class="title">أضف معيار</span>
                                    </a>
                                </li>
                                @endif
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
                            @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                            <li class="nav-item  ">
                            <a href="{{route('addNationalite')}}" class="nav-link ">
                                    <span class="title">أضف جنسية</span>
                                </a>
                            </li>
                            @endif
                    </ul>
             </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-screen-desktop"></i>
                    <span class="title">إدارة الموقع الالكتروني</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item  ">
                        <a href="{{route('news')}}" class="nav-link ">
                            <span class="title">الأخبار</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="{{route('conferences')}}" class="nav-link ">
                            <span class="title">المؤتمرات</span>
                        </a>
                    </li>


                </ul>
            </li>

                {{-- <li class="nav-item  ">
                    <a href="{{route('allAdminReports')}}" class="nav-link nav-toggle">
                            <i class="icon-notebook"></i>
                            <span class="title">التقارير</span>
                            <span class="arrow"></span>
                        </a>
                </li>  --}}

               {{-- <li class="nav-item  ">
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
                                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                                <li class="nav-item  ">
                                <a href="{{route('addHelp')}}" class="nav-link ">
                                        <span class="title">أضف مساعدة</span>
                                    </a>
                                </li>
                                @endif
                        </ul>
                </li>  --}}

                @if(auth()->user()->hasRole('admin',auth()->user()->role_id))
                {{-- <li class="nav-item  ">
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
                    </li> --}}
                @endif

               {{-- <li class="nav-item  ">
                <a href="{{route('allConfigs')}}" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">
                    </span>
                    <span class="arrow"></span>
                </a>
            </li> --}}
            
                @endif

            @endif


                @if(auth()->user()->hasRole('supervisor',auth()->user()->role_id))
                <li class="nav-item  ">
                    <a href="{{route('supervisorProfile')}}" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">معلوماتي</span>
                        <span class="arrow"></span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{route('allSearcherSupervisor')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">طلابي</span>
                            <span class="arrow"></span>
                        </a>
                </li>

              {{--  <li class="nav-item  ">
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
                 </li>--}}


                <li class="nav-item  ">
                    <a href="{{route('allbookssupervisor')}}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">المصادر العلمية</span>
                        <span class="arrow"></span>
                    </a>
                </li>
               




            @endif





          {{--  قائمة الباحث--}}

                     @if(auth()->user()->hasRole('student',auth()->user()->role_id))




                    <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-chemistry"></i>
                        <span class="title">الأبحاث والتقارير </span>
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



          {{--      <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-compass"></i>
                        <span class="title">الخطة الزمنية </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('searcherPlan')}}" class="nav-link ">
                                <span class="title"> لائحة التسجيلات </span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('addPlan')}}" class="nav-link ">
                                <span class="title">اضافة تسجيل</span>
                            </a>
                        </li>
                    </ul>
                </li>--}}


                <li class="nav-item  ">
                    <a href="{{route('searcherAcademic')}}" class="nav-link nav-toggle">
                        <i class="fa fa-graduation-cap"></i>
                        <span class="title">معلوماتي الأكاديمية </span>
                        <span class="arrow"></span>
                    </a>
                </li>


                <li class="nav-item  ">
                    <a href="{{route('searcherProfile')}}" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">معلوماتي الشخصية</span>
                        <span class="arrow"></span>
                    </a>
                </li>


                <li class="nav-item  ">
                    <a href="{{route('allbookssearcher')}}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">المصادر العلمية</span>
                        <span class="arrow"></span>
                    </a>
                </li>







{{--

                    <li class="nav-item  ">
                        <a href="{{route('allHelp')}}" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">تنبيهات الإدارة</span>
                                <span class="arrow"></span>
                            </a>
                    </li>
--}}



{{--


                     <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
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

--}}



                      
                     @endif
              </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->