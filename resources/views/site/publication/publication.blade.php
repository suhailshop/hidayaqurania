@extends('site.layout')
@section('thePageTitle', 'منشورات الكرسي')
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
										<a href="https://drive.google.com/file/d/1aPNlvJRCFGvCv-fgiZGebiHBFEUKFGXh/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/kutaeeb.png')}}"/>
                                        </a>
										<h4 class="gold">الهدايات القرآنية</h4>
										<h4>كتيب الموسوعة العالمية للهدايات القرآنية</h4>
										<h5>إعداد / الفريق البحثي </h5>
									</div>
									
									


                                    <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1bMTUeW6GQb6HluwDVSV_kjsepdaExNPx/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/hidayat1.jpg')}}"/>
                                        </a>
										<h4 class="gold">الهدايات القرآنية</h4>
										<h4>دراسة تأصيلية - المجلد الأول</h4>
										<h5>إعداد / الفريق البحثي </h5>
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
									
									
				
									 
									 
									 		
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1wyEzQdpMWwpVQlXMxDT-zDJnA10CA7Pv/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jlalaquran.PNG')}}"/>
                                        </a>
										<h4 class="gold">جلال القرآن الكريم</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
									
									
									 		
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1y13uo8VnNxCADjqXzJCfto4XKZh76HSe/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/mqased_kubra.jpeg')}}"/>
                                        </a>
										<h4 class="gold">المقاصد الكبرى للقرآن</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1zx7CA7wo23c6VnzzuKlw5cX0HP9IrahY/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/inheraf.png')}}"/>
                                        </a>
										<h4 class="gold">الانحراف الفكري</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
													
													
																					
			
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
										</div>
	


											
 				
			
									
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1HJCvUq59iS8XmS-fleenpqJxuGCDs2GM/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/ta3zeem.png')}}"/>
                                        </a>
										<h4 class="gold">تعظيم الله تعالى</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
 					
									
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1o9VZzy673YO2CySrtW5ToFsiLWKboUQH/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/troqelolama.png')}}"/>
                                        </a>
											<h4 class="gold">طرق العلماء في استخراج الهدايات</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
									
									
									
									
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1oimq7_lf0kSjGmZrd1s3UYE5Ziyjeo_T/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/zawabet.png')}}"/>
                                        </a>
									

										<h4 class="gold">ضوابط تنزيل الهدايات القرآنية على الواقع</h4>
										<h4>د. فخر الدين بن الزبير المحسي</h4>
										<h5>كلية الدراسات القضائية والأنظمة</h5>
									</div>
									
									
									
									
									
														
									
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1T6zTC4G2ixzLADzw0-9nfqboVW3rM8YB/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/etesamBook.png')}}"/>
                                        </a>
									

										<h4 class="gold">الاعتصام في هدي الكتاب والسنة</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
									
									
									
									
									
															
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1KgcomiR_QXeutAkhiq4nosHWrzQ_48XH/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/tafser_ikhlas.png')}}"/>
                                        </a>
									

										<h4 class="gold">تفسير وهدايات سورة الإخلاص</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
									
									
									
									
									
															
											
									  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1juZzGZhtcGwHET_Mab5swhlyX8CiiPD1/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/tahreer.png')}}"/>
                                        </a>
									

										<h4 class="gold">التحرير في أصول التفسير</h4>
										<h4>أ.د طه عابدين طه</h4>
										<h5>أستاذ التفسير وعلوم القرآن</h5>
									</div>
									
									
									
									
										
									
									
									
									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1MQeTVyo0BmOpPtMKwJaJh1exgvOlj3t0/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/ketab-bena-akhlaq.PNG')}}"/>
                                        </a>
										<h4 class="gold">بناء الأخلاق</h4>
										<h4>على هدى القرآن</h4>
										<h5>إعداد / أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
									
									<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1Wecm3hYLxsQf9NqTArOfRpCzLOtVOcdo/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/ketab-eman.PNG')}}"/>
                                        </a>
										<h4 class="gold">الإيمان بالقرآن الكريم</h4>
										<h4>حقيقته ولوازمه</h4>
										<h5>إعداد / أ.د طه عابدين طه</h5>
									</div>
									
									
									
										


									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1dcjf5B_mlQnLpMppd2IUGdrZ6-DgN16M/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-fatha.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة الفاتحة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
																		
																								
															
						
			
			
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
										</div>
	

				
			
					
																	

									
									
											  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1nWk4Tv_k1p1Cnx1IqFOV1lkKqu8MzWe3/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-h1.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>الحزب الأول من سورة البقرة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1wjoZ0ZnHbpYeEX_Pdrq8b3Jg1JD3DcIY/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-h2.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>الحزب الثاني من سورة البقرة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>








			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1o2TKrtDLr9WfEmEZ7_BkcdbQys4aujAG/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-h3.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>الحزب الثالث من سورة البقرة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>




								




			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1pOENP0i2NAvmxCjJXyo-A3T4f_5y7JX-/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-h4.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>الحزب الرابع من سورة البقرة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									 
         
				 



			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1ywWcijspOUNLbi51qvNqYJUBPyV9eN5M/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/jh-h5.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>الحزب الخامس من سورة البقرة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
									
									
            				
									
									
									


			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1CnCVS6i35LGkOXy08TkpSyiA9DAmBmzk/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/alEmran.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة آل عمران</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
																								
			
			
			
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
										</div>
	
	
			
								
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/19-CFmNMgNVibGGf8u2uLRyjsQil8YT4s/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/niSsa1.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة النساء 1</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
									
									
									
									
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1t7ZNVft9n5r3nbtWdE3YUHr5BCq7X0Fp/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/niSsa2.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة النساء 2</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
							
							
						
									
									
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1jEaK1J_oYW2AhDTvs1Rz7VgLWf1P6mRk/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/maEdah.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة المائدة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
							
													
						
			
			
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
										</div>
	


																
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1TDqO8FzQeK3wYwijQqxmTmpsZsC-w1BA/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/an3am.jpeg')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة الأنعام</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
						
		 
 
									
																
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1bYnK7bIZ9yu_3rJOpW4ntrOHDv1Tds3k/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/a3raf.jpeg')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة الأعراف</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
								
									
																
									
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1QlQUVX1kH6hKU-Rk6gykQEDA6KFhZbo2/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/anfal.jpeg')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة الأنفال</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
								
								
								
										
						
						
									
									
									
															
									

			  <div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="https://drive.google.com/file/d/1Y2SpxQoi849_jUHeT5xJZ3-6eunAd7PR/view?usp=sharing" target="_blank">
                                            <img class="img-responsive" src="{{asset('template/publication/tawbaah.PNG')}}"/>
                                        </a>
										<h4 class="gold">الجامع في الهدايات القرآنية</h4>
										<h4>سورة التوبة</h4>
										<h5>إشراف أ.د طه عابدين طه</h5>
									</div>
									
									
									
									
							 
							
											
							 
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
										</div>
	

				
				
											
							 
								<div class="col-md-4 col-sm-4 col-xs-6 team-pic">
										<a href="" target="_blank"> </a>
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