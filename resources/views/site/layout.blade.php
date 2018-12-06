<html xmlns="http://www.w3.org/1999/xhtml"><head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="{{ URL::asset('template/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

   
		<link rel="stylesheet" href="{{ URL::asset('template/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('template/css/owl.theme.css') }}">		
		<link href="{{ URL::asset('template/css/style.css') }}" rel="stylesheet" type="text/css">
		<style>
		@import url(http://fonts.googleapis.com/earlyaccess/notosanskufiarabic.css);
		</style>	


		<!--[if lt IE 7]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		<!--[if lt IE 8]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->

		
	</head>
	


	<body style="overflow-x: hidden;">
			<header>
			
			
				<nav class="navbar  navbar-default nav-up" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					 <div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					       
						<img src="{{ URL::asset('template/img/logo.png') }}">
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
					  <ul class="nav navbar-nav navbar-left">
						<li><a href="{{url('/')}}">الرئيسية</a></li>
						<li><a href="#about">عن الموسوعة</a></li>
						<li><a href="#akhbar">الأخبار</a></li>
						<li><a href="">الأهداف</a></li>
						 <li><a href="">المخرجات</a></li>
						  <li><a href="">الاتصال بنا</a></li>
						  <li style="display: block;  background-color: #87744e; font-size: small ;"><a href="{{url('/portal')}}">البوابة الالكترونية</a></li>




					  </ul>
					  </div>
					</div><!-- /.navbar-collapse -->
				  </nav>
				</header>
				 @yield('content')
				
		
					<div class="clearfex"></div>
		
				<footer>
					<div class="container">
						<div class="col-md-4 col-sm-6 col-xs-12">
								<img class="img-responsive logo" src="{{ URL::asset('template/img/logo1.png') }}">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="list-unstyled soch">
								<h5>شبكات التواصل الاجتماعي</h5>
								<li><a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-f fa-2x"></i></a></li>
								<li><a href=""><i class="fab fa-youtube fa-2x"></i></a></li>
								<li><a href=""><i class="fab fa-snapchat-ghost fa-2x"></i></a></li>
								
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="list-unstyled address">
							<h5>الموسوعة العالمية للهدايات القرآنية</h5>
								<li><i class="fas fa-map-marker-alt"></i><span>:</span> XXXXXXX</li>
								<li><i class="fas fa-phone"></i><span>:</span> XXXXXXX</li>
								<li><i class="far fa-envelope"></i><span>:</span> XXXXXXX</li>
							</div>
						</div>
						
						
					</div>
					<div class="copy text-center">
						<h6>© جميع الحقوق محفوظة للموسوعة العالمية للهدايات القرانية 2018</h6>
					</div>					
				</footer>	
			  
			  <!-- Start Scroller -->
			
				<div id="elevator_item" style="display: block;"> 
						<a id="elevator" onclick="return false;" title="Back To Top"></a> 
				</div>
			
			<!-- End Scroller -->
			<script src="{{ URL::asset('template/js/jquery.js') }}"></script>
			<script src="{{ URL::asset('template/js/bootstrap.min.js') }}"></script>
			<script src="{{ URL::asset('template/js/owl.carousel.js') }}"></script>
			<script src="{{ URL::asset('template/js/plug.js') }}"></script>


			<script>

				$("a[href^=#]").click(function(e) { e.preventDefault(); var dest = $(this).attr('href'); $('html,body').animate({ scrollTop: $(dest).offset().top -100}, 'slow'); });

			</script>
			

	
</body></html>