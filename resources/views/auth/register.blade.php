@include('auth.layout.login_header')

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="{!! asset('assets/pages/img/logona.png') !!}" alt="" style="width: 7%" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="{{ route('register') }}" method="POST" style="display: initial !important" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <h3 class="font-green">حساب جديد</h3>
                <p class="hint">  معلومات شخصية: </p>
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">الاسم العائلي</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="الاسم العائلي" name="firstname" />
                    @if ($errors->has('firstname'))
                    <span class="help-block">
                        <strong>{{ 'المرجو ادخال الاسم العائلي'}}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">الاسم الشخصي</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="الاسم الشخصي" name="lastname" /> 
                    @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ 'المرجو ادخال الاسم الشخصي'}}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الجنس</label>
                    <select name="gender" class="form-control">
                        <option value="ذكر"> ذكر</option>
                        <option value="أنثى"> أنثى</option>
                    </select></div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">تاريخ الولادة</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="تاريخ الولادة" name="birthdate" />
                    
                </div>
                <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">مكان الولادة</label>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="مكان الولادة" name="BirthCity" /> </div>
                
                <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">الجنسية</label>
                        <select name="nationalitie" class="form-control">
                            @foreach($nationalities as $nationalitie)
                        <option value="{{$nationalitie->ID}}">{{$nationalitie->Name}}</option>
                        @endforeach
                        </select>
                    </div>
                <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">رقم جواز السفر</label>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="رقم جواز السفر" name="PassportNumber" /> </div>
                <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">الرقم الوطني</label>
                            <input class="form-control placeholder-no-fix" type="text" placeholder="الرقم الوطني" name="NationalNumber" /> </div>
               
                    <div class="form-group last">
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                 <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%; height: 100%;max-width: 200px; max-height: 150px;"> 
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                </div>
                                <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new"> اختر صورة </span>
                                        <input type="file" name="PictureURL"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <p class="hint">  معلومات الاقامة : </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                    <select name="countrie" class="form-control">
                        @foreach($countries as $countrie)
                    <option value="{{$countrie->ID}}">{{$countrie->Name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="المدينة" name="city1" /> </div>
                <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">العنوان</label>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="العنوان" name="location" /> </div>
               
                <p class="hint">  معلومات دراسية : </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الجامعة</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="الجامعة" name="University" /> </div>              

                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الكلية</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="الكلية" name="Faculty" /> </div>
                 
                <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">نوع الشهادة</label>
                            <input class="form-control placeholder-no-fix" type="text" placeholder="نوع الشهادة" name="CertificateType" /> </div>
               
                <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">درجة الشهادة</label>
                            <input class="form-control placeholder-no-fix" type="text" placeholder="درجة الشهادة" name="CertificateDegree" /> </div>
                <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">تاريخ التسجيل</label>
                            <input class="form-control placeholder-no-fix" type="date" placeholder="تاريخ التسجيل" name="InscriptionDate" /> </div>
                                            
                <p class="hint">  معلومات الاتصال : </p>
                <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 1 </label>
                                <input class="form-control placeholder-no-fix" type="number" placeholder="رقم الهاتف 1" name="Phonne1" /> </div>              
            
                <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">رقم الهاتف 2</label>
                                <input class="form-control placeholder-no-fix" type="number" placeholder="رقم الهاتف 2" name="Phonne2" /> </div>
                            

                <p class="hint">  معلومات الحساب : </p>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                    <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="البريد الالكتروني" name="email" />
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ 'المرجو ادخال البريد الالكتروني'}}</strong>
                    </span>
                    @endif
                 </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="كلمة المرور" name="password" /> 
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ 'المرجو ادخال كلمة المرور'}}</strong>
                    </span>
                    @endif
                </div>
               
                <div class="form-actions">
                    <a href="{{route('login')}}" id="register-back-btn" class="btn green btn-outline">تسجيل الدخول</a>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">تأكيد</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
       
        @include('auth.layout.login_footer')