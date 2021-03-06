@include('auth.layout.login_header')

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
        <a href="{{route('portalwelcome')}}">
                <img src="{!! asset('assets/pages/img/logona.png') !!}" alt="" style="width: 7%" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content myfont">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ route('login') }}" method="POST">
                   @csrf
                <h3 class="form-title font-yellow myfont">تسجيل الدخول</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> المرجو ادخال معلومات حسابكم  </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" style="font-size: large; color: black"  id="email" autocomplete="off" placeholder="البريد الالكتروني" name="email" /> 
                  </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password" /> 
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ 'البريد الالكتروني او كلمة المرور خاطئة' }}</strong>
                    </span>
                    @endif
                    @if($errors->has('notactive'))
                        <span class="help-block">
                            <strong>{{ 'تم استقبال طلبكم وجاري العمل عليه' }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember_me" /> تذكرني ؟
                </div>
                
                    <div class="form-actions">
                    <button type="submit" class="btn yellow uppercase">دخول</button>
                    
                    <a href="{{route('password.request')}}" id="forget-password" class="forget-password">نسيت كلمة المرور ؟</a>
                </div>
                
                <div class="create-account">
                    <p>
{{--
                    <a href="{{route('register')}}" id="register-btn" class="uppercase">أنشئ حساب جديد</a>
--}}
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            
        </div>
        
        
        <script src="{!! asset('assets/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>


<script>

    var EmailDomainSuggester = {

        domains: ["hidayatqurania.org"],

        bindTo: $('#email'),

        init: function() {
            this.addElements();
            this.bindEvents();
        },

        addElements: function() {
            // Create empty datalist
            this.datalist = $("<datalist />", {
                id: 'email-options'
            }).insertAfter(this.bindTo);
            // Corelate to input
            this.bindTo.attr("list", "email-options");
        },

        bindEvents: function() {
            this.bindTo.on("keyup", this.testValue);
        },

        testValue: function(event) {
            var el = $(this),
                    value = el.val();

            // email has @
            // remove != -1 to open earlier
            if (value.indexOf("@") != -1) {
                value = value.split("@")[0];
                EmailDomainSuggester.addDatalist(value);
            } else {
                // empty list
                EmailDomainSuggester.datalist.empty();
            }

        },

        addDatalist: function(value) {
            var i, newOptionsString = "";
            for (i = 0; i < this.domains.length; i++) {
                newOptionsString +=
                        "<option value='" +
                        value +
                        "@" +
                        this.domains[i] +
                        "'>";
            }

            // add new ones
            this.datalist.html(newOptionsString);
        }

    }

    EmailDomainSuggester.init();

    </script>
    
       
        @include('auth.layout.login_footer')