@extends('site.layout')
@section('content')
<div class="wrapper">
				<div class="banar text-center">
					<div class="container">
						<h1>يتلونه حق تلاوته</h1>
						<h2>تعليم قراءة القرآن الصحيحة</h2>
											
						<h4>الآن يمكنك تعلم القراءة الصحيحة للقرآن الكريم من خلال الاستماع إلى القرّاء المجيدين عن بعد وعلي مدار الساعة</h4>
					</div>
				</div>
					<div class="container ">
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
							<li class="breadcrumb-item"><a href="#">الاخبار</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
						  </ol>
						</nav>
						<div class="s-news">
							<h3 class="text-center">{{$news->title}}</h3>
							<span class="text-center"><i class="fa fa-clock-o"></i>{{$cdate}}</span>
							<div class="text-center" style="direction: ltr;">

								<div class="item ">
									
											<img src="{{asset('uploads/'.$news->image)}}" alt="slide1" style="max-width:50%">
						
										
								</div>
									 
										
							</div>
							{{	$news->details	}}							
							<div class="soch text-center">
								<h4>يمكنك نشر الخبر عبر الشبكات الاجتماعية</h4>
								<a class="twe btn" href="">twitter<i class="fa fa-twitter fa-lg"> </i> </a>
								<a class="face btn" href="">facebook<i class="fa fa-facebook fa-lg"> </i></a>
							
							</div>
						</div>
					</div>	

					
					
				
				
					
				</div>
				<div class="clearfex"></div>
@stop		