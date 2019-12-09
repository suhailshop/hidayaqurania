@extends('site.layout')
@section('content')
<div class="wrapper">


				 <div class="text-center">
					<div class="container">
						<br>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
								<li class="breadcrumb-item"><a href="#">منشورات الكرسي</a></li>
							</ol>
						</nav>

					</div>
				 </div>

				 <div class="container ">

					<br><br>

					 <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
						<li class="breadcrumb-item"><a href="#">منشورات الكرسي</a></li>
					  </ol>
					</nav>

					 <h3 class="text-center">المنشورات والمطبوعات</h3>

					 <div class="team">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#anagement" aria-controls="anagement" role="tab" data-toggle="tab">الكتيبات</a></li>
{{--								<li role="presentation"><a href="#advisory" aria-controls="advisory" role="tab" data-toggle="tab">الهيئه الاستشارية</a></li>--}}
 							</ul>

							<!-- Tab panes -->
							<div class="tab-content">


								<div role="tabpanel" class="tab-pane text-center active" id="anagement">


									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=14KPkUx7Ryk8Q0Q8UyOTe_Hgwcvh_uRw4" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/hayat-al-ensan.JPG')}}"/>
                                        </a>
										<h4 class="gold">حقوق الإنسان</h4>
										<h4>في ضوء القرآن</h4>
										<h5>إعداد / أ.د يحيى بن محمد زمزمي</h5>
									</div>


                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1vJtyT8OaaphwYLvogXZbVUR_HFuFqkKI" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/sorat-al-fatha.jpeg')}}"/>
                                        </a>
										<h4 class="gold">الهدايات القرآنية</h4>
										<h4>في سورة الفاتحة</h4>
										<h5>إعداد / عادل بن سليمان ضحوي</h5>
									</div>



                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1H00BGviWFo2mhMh3I7yZ8no7x51KO9xf" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/mosharakat-malaysia.JPG')}}"/>
                                        </a>
										<h4 class="gold">مشاركات دولية</h4>
										<h4>أبحاث المؤتمر القرآني</h4>
										<h5>أبحاث مؤتمر مقدس 3</h5>
									</div>


                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1iI8yUZGbiGoHTg64fJihKGi-bO-T7l-l" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/mosharakt-bronai.JPG')}}"/>
                                        </a>
										<h4 class="gold">مشاركات دولية</h4>
										<h4>أبحاث المؤتمر القرآني</h4>
										<h5>جامعة السلطان الشريف علي - بروناي</h5>
									</div>




                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
                                        <a href="https://drive.google.com/open?id=1zzkzUvVnacikjXFq3dXbDzuf9qQoVSeH" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/msharee-bahtheya.jpg')}}"/>
                                        </a>
                                        <h4 class="gold">المشاريع البحثية</h4>
                                        <h4>في الدراسات القرآنية</h4>
                                        <h5>إعداد / الفريق البحثي بكرسي الملك عبدالله</h5>
                                    </div>


                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1QjKGzbNdxK1ht_S5ICS2MBzKvFSMEewZ" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/sharaka-mojtamaeya.jpg')}}"/>
                                        </a>
										<h4 class="gold">الشراكة المجتمعية</h4>
										<h4>بين المؤسسات القرآنية</h4>
										<h5>إعداد / الفريق البحثي بكرسي الملك عبدالله</h5>
									</div>


                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1RxfiUkkNxxq_QWc9ze74G_2PpI9OoXAg" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/musharakat-dollya.PNG')}}"/>
                                        </a>
										<h4 class="gold">مشاركات دولية</h4>
										<h4>إعداد / أ.د يحيى زمزمي</h4>
										<h5>مراجعة/ أ. حسني مرسي</h5>
									</div>



                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1nJx5-slQ5t377KV6RJ6hoUebqnTJiR7_" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/tafseer-haza-alquran.PNG')}}"/>
                                        </a>
										<h4 class="gold">تفسير "إن هذا القرآن"</h4>
										<h4>من كتاب أضواء البيان</h4>
										<h5>للشيخ/ محمد الشنقيطي رحمه الله </h5>
									</div>



                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1_yfGCjkCMPZI-58rIQZJ4KKKhE6JeZ75" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/hidayat1.jpg')}}"/>
                                        </a>
										<h4 class="gold">الهدايات القرآنية</h4>
										<h4>دراسة تأصيلية - المجلد الأول</h4>
										<h5>إعداد / الفريق البحثي </h5>
									</div>

 



									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank">
                                         </a>
										 
									</div>


									
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1fnV_ohqNVRTnJb7QMy_c0FFEHTk9O-YW" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/hidayat2.jpg')}}"/>
                                        </a>
										<h4 class="gold">الهدايات القرآنية</h4>
										<h4>دراسة تأصيلية - المجلد الثاني</h4>
										<h5>إعداد / الفريق البحثي </h5>
									</div>
									

									
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/open?id=1Bao0UlyM_-j4Wo-DCo2sw6PARuPSPref" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/story.jpg')}}"/>
                                        </a>
										<h4 class="gold">قصة مؤتمر</h4>
										<h4>تقرير وثائقي عن المشاركة في</h4>
										<h5> المؤتمر القرآني السنوي مقدس</h5>
									</div>


 
								
								


								</div>





{{--								<div role="tabpanel" class="tab-pane text-center" id="advisory">--}}

{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										 <img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										 <h4 class="gold">رئبس الهيئه الاستشارية</h4>--}}
{{--										<h5>د/ فيصل بن جميل غزاوي</h5>--}}
{{--										<h6>أستاذ مشارك. عميد كلية الدعوة وأصول الدين</h6>--}}
{{--									</div>--}}

{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>د/ خالد بن علي الغامدي</h5>--}}
{{--										<h6>أستاذ مشارك. عضو هيئة تدريس بكلية الدعوة وأصول الدين</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>أ.د/ عبدالرحمن بن معاضة الشهري</h5>--}}
{{--										<h6>أستاذ. عضو هيئة التدريس بجامعة الملك سعود</h6>--}}
{{--									</div>--}}




{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>أ.د/ أحمد بن علي السديس</h5>--}}
{{--										<h6>أستاذ. عميد كلية القرآن الكريم بالجامعة الإسلامية بالمدينة المنورة</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/prof-taha.jpeg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>أ.د/ طه عابدين طه</h5>--}}
{{--										<h6>أستاذ التفسير، جامعة أم القرى، رئيس اللجنة العلمية بالكرسي</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/prof-yahya.jpeg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>أ.د/ يحيى بن محمد زمزمي</h5>--}}
{{--										<h6>أستاذ. عضو هيئة تدريس بجامعة أم القرى. أستاذ كرسي الهدايات القرآنية.</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>د/ محمد بن عبدالله الربيعة</h5>--}}
{{--										<h6>أستاذ مشارك. ممثل الداعم مؤسسة النبأ العظيم الوقفية.</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/default.jpg')}}"/>--}}
{{--										<h4 class="gold">عضو الهيئه الاستشارية</h4>--}}
{{--										<h5>د/ عبدالإله بن أحمد الغامدي</h5>--}}
{{--										<h6>أستاذ مشارك. وكيل عمادة البحث العلمي للكراسي البحثية.</h6>--}}
{{--									</div>--}}


{{--									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">--}}
{{--										<img class="img-responsive" src="{{asset('template/team/dr-yaseen.jpeg')}}"/>--}}
{{--										<h4 class="gold">أمين الهيئه الاستشارية</h4>--}}
{{--										<h5>د/ ياسين بن حافظ قاري</h5>--}}
{{--										<h6>أستاذ مشارك. وكيل كلية الدعوة وأصول الدين.</h6>--}}
{{--									</div>--}}



{{--								</div>--}}



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