@extends('site.layout')
@section('content')
<div class="wrapper">


				 <div class="text-center">
					<div class="container">
						<br>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
								<li class="breadcrumb-item"><a href="#">هيئات الكرسي</a></li>
							</ol>
						</nav>

					</div>
				 </div>

				 <div class="container ">

					<br><br>

					 <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
						<li class="breadcrumb-item"><a href="#">هيئات كرسي الهدايات القرآنية</a></li>
					  </ol>
					</nav>

					 <h3 class="text-center">هيئات الكرسي</h3>

					 <div class="team">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#anagement" aria-controls="anagement" role="tab" data-toggle="tab">الفريق الإداري للكرسي</a></li>
								<li role="presentation"><a href="#advisory" aria-controls="advisory" role="tab" data-toggle="tab">الهيئه الاستشارية</a></li>
{{--								<li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">فريق الموسوعة</a></li>--}}
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">


								<div role="tabpanel" class="tab-pane text-center active" id="anagement">



									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/prof-yahya.jpeg')}}"/>
										<h4 class="gold">أستاذ الكرسي</h4>
										<h4>أ.د / يحيى بن محمد زمزمي</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-yaseen.jpeg')}}"/>
										<h4 class="gold">نائب أستاذ الكرسي</h4>
										<h4>د/ ياسين بن حافظ قاري</h4>
									</div>


									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/prof-taha.jpeg')}}"/>
										<h4 class="gold">رئيس اللجنة العلمية</h4>
										<h4>أ.د / طه عابدين طه</h4>
									</div>


									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-salem.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ.د / سالم بن غرم الله الزهراني</h4>
									</div>


									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-ahmed.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>د/ أحمد بن عبدالله الفريح</h4>
									</div>


									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-fakhr.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>د/ فخر الدين الزبير علي الزبير</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-yusuf.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>د/ يوسف بن عبدالله الباحوث</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-alal.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>د/ علال عبدالقادر بندويش</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/emad.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ/ عماد الدين حسين الكناني</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/hosni.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ/ حسني بكر مرسي</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/ahmed.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ/ أحمد بن محمد الحاج</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/hisham.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ/ هشام أبو الهاشم محمد كالو</h4>
									</div>

									<div class="col-md-3 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/rami.jpeg')}}"/>
										<h4 class="gold">عضو الفريق الإداري</h4>
										<h4>أ/ رامي بن محمد الحاج</h4>
									</div>

								</div>



								<div role="tabpanel" class="tab-pane text-center" id="advisory">

									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										 <img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										 <h4 class="gold">رئبس الهيئه الاستشارية</h4>
										<h5>د/ فيصل بن جميل غزاوي</h5>
										<h6>أستاذ مشارك. عميد كلية الدعوة وأصول الدين</h6>
									</div>

									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>د/ خالد بن علي الغامدي</h5>
										<h6>أستاذ مشارك. عضو هيئة تدريس بكلية الدعوة وأصول الدين</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>أ.د/ عبدالرحمن بن معاضة الشهري</h5>
										<h6>أستاذ. عضو هيئة التدريس بجامعة الملك سعود</h6>
									</div>




									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>أ.د/ أحمد بن علي السديس</h5>
										<h6>أستاذ. عميد كلية القرآن الكريم بالجامعة الإسلامية بالمدينة المنورة</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/prof-taha.jpeg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>أ.د/ طه عابدين طه</h5>
										<h6>أستاذ التفسير، جامعة أم القرى، رئيس اللجنة العلمية بالكرسي</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/prof-yahya.jpeg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>أ.د/ يحيى بن محمد زمزمي</h5>
										<h6>أستاذ. عضو هيئة تدريس بجامعة أم القرى. أستاذ كرسي الهدايات القرآنية.</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>د/ محمد بن عبدالله الربيعة</h5>
										<h6>أستاذ مشارك. ممثل الداعم مؤسسة النبأ العظيم الوقفية.</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>
										<h4 class="gold">عضو الهيئه الاستشارية</h4>
										<h5>د/ عبدالإله بن أحمد الغامدي</h5>
										<h6>أستاذ مشارك. وكيل عمادة البحث العلمي للكراسي البحثية.</h6>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<img class="img-responsive" src="{{asset('template/team/dr-yaseen.jpeg')}}"/>
										<h4 class="gold">أمين الهيئه الاستشارية</h4>
										<h5>د/ ياسين بن حافظ قاري</h5>
										<h6>أستاذ مشارك. وكيل كلية الدعوة وأصول الدين.</h6>
									</div>



								</div>



{{--								<div role="tabpanel" class="tab-pane text-center" id="team">--}}

{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic two">--}}
{{--										<img class="img-responsive" src="img/team2.jpg">--}}
{{--										<h4 class="gold">رئبس الهيئه الاشرافية للمقراة</h4>--}}
{{--										<h4>د/عبد الرحمن السديس</h4>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic ">--}}
{{--										<img class="img-responsive" src="img/team1.jpg">--}}
{{--										<h4 class="gold">رئبس الهيئه الاشرافية للمقراة</h4>--}}
{{--										<h4>د/عبد الرحمن السديس</h4>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic two">--}}
{{--										<img class="img-responsive" src="img/team2.jpg">--}}
{{--										<h4 class="gold">رئبس الهيئه الاشرافية للمقراة</h4>--}}
{{--										<h4>د/عبد الرحمن السديس</h4>--}}
{{--									</div>--}}

{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic two">--}}
{{--										<img class="img-responsive" src="img/team2.jpg">--}}
{{--										<h4 class="gold">رئبس الهيئه الاشرافية للمقراة</h4>--}}
{{--										<h4>د/عبد الرحمن السديس</h4>--}}
{{--									</div>--}}

{{--								</div>--}}


							</div>


					</div>

				 </div>
					

					
</div>

@stop