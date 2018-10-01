@include('auth.layout.login_header')

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logona.png" alt="" style="width: 7%" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="{{ route('password.email') }}" method="post"  style="display: initial !important">
                <h3 class="font-green">نسيت كلمة المرور ؟</h3>
                <p> قم بادخال البريد الاكتروني و سيتم اعادة ارسال كلمة المرور  </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix"  type="text" autocomplete="off" placeholder="الريد الالكتروني" name="email" /> </div>
                <div class="form-actions">
                    <a href="{{route('login')}}" id="back-btn" class="btn green btn-outline">تسجيل الدخول</a>
                    <button type="submit" class="btn btn-success uppercase pull-right">تأكيد</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            
        </div>
       
        @include('auth.layout.login_footer')