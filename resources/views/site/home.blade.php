@extends('site.layout')
@section('content')
	<div class="wrapper">
					<div class="banar text-center">
						<div class="container">
							<h1>إن هذا القرآن يهدي للتي هي أقوم</h1>
							<h2>الموسوعة العالمية للهدايات القرآنية</h2>
												
							<h5>موسوعة علمية عالمية في مجال الهدايات القرآنية يتم إنجازها من خلال رسائل أكاديمية
                            </h5>
						</div>

					</div>
  					<div class=" about" id="about">
						<br>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">	
									<img class="img-responsive" src="template/img/about.jpg">
								</div>
								<div  class="col-md-6 col-sm-6 col-xs-12">
							
									<div style="text-align: center"><h3 class="text-center">عن الموسوعة</h3></div>

									<p>الفكرة : إعداد موسوعة علمية عالمية في مجال الهدايات القرآنية يتم إنجازها من خلال رسائل أكاديمية بمرحلة الدكتوراه
 في شتى جامعات العالم وفق نظام المشاريع البحثية</p>

									<p>رؤيتنا: المرجع الأول في تعليم القرآن الكريم وإقرائه وفق أعلى معايير الجودة و تطبيق أفضل أساليب تعليم كتاب الله تعالى على يد ذوي الخبرة من المتخصصين لمختلف شرائح المسلمين، وإعادة الأمة إلى كتاب ربها تلاوة وحفظا وعملا.</p>
									<a class="more pull-left" href=""> تحميل الكتيب التعريفي بالموسوعة <i class="fa fa-download"></i> </a>
								</div>
							</div>
						</div>
					</div>	
				
				<div class="news" id="akhbar">

					<h3 class="text-center">:: اخبار الموسوعة :: </h3>


					 <div id="owl-demo3" class="owl-carousel text-center" style="direction: ltr;">

						@forelse($news as $new)
							<div class="item "><a href="{{url('/details/'.$new->id)}}">
							  <div class="boximg ">
								<div class="top">
									<p>{{str_limit($new->title,50)}}</p>
								</div>
							    <img src="{{asset('uploads/'.$new->image)}}" alt="{{$new->title}}">
								<span class="more" >مشاهدة المزيد</span>
							</div></a>
							</div>
						@empty
                          
                        @endforelse   
                 	


							
						</div>
							</div>
							
						<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
						
					
					<div class="charts text-center">
						<div class="container">
							<div class="row">
                                <h3 class="text-center">:: أهداف الموسوعة :: </h3>

                                <div class="col-md-4 col-sm-4 col-xs-12">
									<div class="out-line">
										<i class="fas fa-graduation-cap fa-3x"></i>
										<h4>عدد رساءل الدكتوراه</h4>
										<h2>60</h2>
										<span>رسالة</span>
										
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="out-line">
										<i class="far fa-clock fa-3x"></i>
										<h4>مدة التنفيذ</h4>
										<h2>5</h2>
										<span>سنوات</span>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="out-line">
										<i class="fa fa-university fa-3x"></i>
										<h4>الجامعات المستهدفة</h4>
										<h2>40</h2>
										<span>جامعة</span>
										
										
										
									</div>
								</div>
															
							</div>
						</div>

					</div>
					<div class="vedio text-center">
						<div class="container">
							<div class="row">
								
								<div class="right">
									<h3>فيديو تعريفي</h3>
								</div>	
								<div class="play">
									<input type="button" value="" id="popup__toggle">
									<i class="fa fa-play fa-2x"></i>
								</div>
								<div class="left">
									<h3>بالموسوعة العلمية</h3>
									<div class="popup__overlay">
										<div class="popup"> <a href="#" class="popup__close">X</a> https://developers.google.com/youtube/player_parameters?hl=ru
											<br> https://developers.google.com/youtube/iframe_api_reference?hl=ru
										</div>
									</div>

									<!--  http://stackoverflow.com/questions/8667882/how-to-pause-a-youtube-player-when-hiding-the-iframe  -->
									<!-- BG color #352416 - screen is at 95% opacity -->
									<!-- <iframe width="420" height="315" src="https://www.youtube.com/embed/TRGoy0XLrUA" frameborder="0" allowfullscreen></iframe> -->

									<div class="popup__overlay">
									  <div class="popup" id="popupVid">
										<a href="#" class="popup__close">X</a>
										<!-- <iframe width="640" height="480" src="https://www.youtube.com/embed/TRGoy0XLrUA?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe> -->
										<iframe src="https://www.youtube.com/embed/GnEc1Hp8nxo" frameborder="0" allowfullscreen=""></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="features text-center">
						<div class="container">
							<div class="row">
								<h3>:: المخرجات المتوقعة من الموسوعة :: </h3>
									<h4 class="title">أولاً / المخرجات العلمية </h4>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box dark">
										<h4>انتاج اول موسوعه عالميه<br>في الهدايات القرانية</h4>
										<p>60</p>
										<h4>مجلد</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box">
										<h4>استنباط اكثر من<br><span>استنباط اكثر من</span></h4>
										
										<p>200.000</p>
										<h4>هدايه قرانية</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box light">
										<h4>تفعيل نحو</h4>
										<p>40</p>
										<h4>جامعة في العالم<br>لخدمة هدايات القران</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box light">
										<h4>مشاركة نحو<br><span>مشاركة نحو</span></h4>
										<p>30</p>
										<h4>دوله في اعداد الموسوعة</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box dark pic">
										<img class="img-responsive" src="template/img/5.jpg">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box ">
										<h4>تصميم</h4>
										<p>6</p>
										<h4>حقائب علمية تدريبية<br>للمختصين والرواد</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box ">
										<h4>ترجمة مختصر<br>الموسوعة ب:</h4>
										<p>10</p>
										<h4>لغات عالمية</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box light">
										<h4>نشر</h4>
										<p>60</p>
										<h4>بحث محكم من<br>مخرجات الموسوعة</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box dark">
										<h4>تنظيم عدد</h4>
										<p>2</p>
										<h4>مؤتمر عالمي في<br>الهدايات القرانية</h4>
									</div>
								</div>
								<h4 class="title">ثانياً / المخرجات البشرية</h4>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box dark">
										<h4>اعداد</h4>
										<p>60</p>
										<h4>استاذ جامعي<br>الهدايات القرانية</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box ">
										<h4>استقطاب</h4>
										<p>60</p>
										<h4>مشرف اكاديمي لخدمة<br>الهدايات القرانية</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box light">
										<h4>اعداد</h4>
										<p>20</p>
										<h4>مدرب محترف في<br>الهدايات القرانية</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box light">
										<h4>تدريب</h4>
										<p>2000</p>
										<h4>طالب دراسات عليا في<br>الجامعات الشريكة</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box pic dark">
										<img class="img-responsive" src="template/img/6.jpg">
									</div>
								</div>
								
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="dash-box ">
										<h4>تدريب</h4>
										<p>400</p>
										<h4>استاذ اكاديمي في<br>الجامعات الشريكة</h4>
									</div>
								</div>
								<div class="col-md-4 col-md-pull-2 col-sm-4 col-sm-pull-2 col-xs-12">
									<div class="dash-box ">
										<h4>نشر ثقافة<br>الهدايات ل</h4>
										<p>6000</p>
										<h4>مستفيد</h4>
									</div>
								</div>
								
								<div class="col-md-4 col-md-pull-2 col-sm-4 col-sm-pull-2 col-xs-12">
									<div class="dash-box light">
										<h4>نشر ثقافة<br>الهدايات ل</h4>
										<p>6000</p>
										<h4>اكاديمي</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="how-work text-center">
						<div class="container">
							<div class="row">
								<h3>:: آلية وخطوات تنفيذ الموسوعة ::</h3>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>1</span>
											<h4>التنسيق مع الملحقيات الثقافية</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>2</span>
											<h4>اللقاء التعريفي</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>3</span>
											<h4>التسجيل</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>4</span>
											<h4>تطبيق المعايير العلمية</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>5</span>
											<h4>الترشيح المبدئي للمقبولين</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon six">
											<span>6</span>
											<h4>الاختبار التحريري</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>7</span>
											<h4>البحث التطبيقي</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>8</span>
											<h4>المقابلة الشخصية</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>9</span>
											<h4>توقيع عقود الطلاب والمشرفين</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>10</span>
											<h4>متابعة الانجاز والجودة</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon">
											<span>11</span>
											<h4>مناقشة الرسالة واعتمادها</h4>
										</div>
										
									</div>	
							    </div>
								<div class="col-md-2 col-sm-4 col-xs-12">
									<div class="circle">
										<div class="circle-icon last-icon">
											<span>12</span>
											<h4>اصدار الموسوعة</h4>
										</div>
										
									</div>	
							    </div>
							</div>
						</div>
								
					</div>					
						
	@stop

