@extends('site.layout')
@section('content')
<div class="wrapper">
				<div class="banar text-center">
					<div class="container">
						<h1>إن هذا القرآن يهدي للتي هي أقوم</h1>
						<h2>الموسوعة العالمية للهدايات القرآنية</h2>

						<h5>موسوعة علمية عالمية في مجال الهدايات القرآنية يتم إنجازها من خلال رسائل أكاديمية
						</h5>		</div>
				</div>
					<div class="container ">
					<br>
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
							<li class="breadcrumb-item"><a href="#">المؤتمرات</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
						  </ol>
						</nav>
						<div class="s-news">
							<br>
							<hr>
							<h3 class="text-center">{{$news->title}}</h3>
							<hr>

							{!! $news->details	 !!}
							<br>
														
							<div class="soch text-center">

							</div>
						</div>
					</div>	

					
					
				
				
					
				</div>
				<div class="clearfex"></div>
@stop