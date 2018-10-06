@include('auth.layout.login_header')

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
        <a href="{{route('portalwelcome')}}">
                <img src="{!! asset('assets/pages/img/logona.png') !!}" alt="" style="width: 7%" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                <h3 class="form-title font-green">تسجيل الدخول</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> المرجو ادخال معلومات حسابكم  </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="البريد الالكتروني" name="email" /> 
                  </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password" /> 
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ 'البريد الالكتروني او كلمة المرور خاطئة' }}</strong>
                    </span>
                @endif
                </div>
                
                    <div class="form-actions">
                    <button type="submit" class="btn green uppercase">دخول</button>
                    
                    <a href="{{route('password.request')}}" id="forget-password" class="forget-password">نسيت كلمة المرور ؟</a>
                </div>
                
                <div class="create-account">
                    <p>
                    <a href="{{route('register')}}" id="register-btn" class="uppercase">أنشئ حساب جديد</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            
        </div>
       
        @include('auth.layout.login_footer')