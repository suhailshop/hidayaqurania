@extends('layout.master')

@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
	{{--include here the style of the current page--}}
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


@endsection

@section('pageTitle', 'الرئيسية')


@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->


			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="{{route('portalwelcome')}}">الرئيسية</a>
						<i class="fa fa-angle-left"></i>
					</li>
					<li>
						<i class="icon-docs"></i>
						<span>إدارة أخبار الموقع الالكتروني</span>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->


			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption font-dark">
								<i class="icon-graduation font-dark"></i>
								<span class="caption-subject bold uppercase">قائمة أخبار الموقع الالكتروني</span>
							</div>
							<div class="tools"> </div>
						</div>
						<a href="{{route('addNews')}}" class="btn btn-success">إضافة خبر جديد</a>
						<br><br>
						<div class="portlet-body">



   @if ($message = Session::get('success'))
				<div class="alert alert-success alert-block col-md-11">
					<button type="button" class="close" data-dismiss="alert">×</button>
				        <strong>{{ $message }}</strong>
				</div>
				@endif


       <table class='table table-striped table-bordered bootstrap-datatable datatable' dir="rtl">

	
        	<thead>
        		<th>رقم الخبر</th>
        		<th>عنوان الخبر</th>
        		<th>تاريخ الاضافة</th>
        		<th>تاريخ التحديث</th>
        		<th colspan="2"> خيارات</th>
        	</thead>
        	<tbody>
        	@forelse($news as $new)
        		<tr>
        			<td>{{$new->id}}</td>
        			<td>{{$new->title}}</td>
        			<td>{{$new->created_at}}</td>
        			<td>{{$new->updated_at}}</td>
        			<td><a class="btn btn-warning" href="{{route('editNews', [$new->id])}}"  >تعديل</a></td>
        			<td>

						{!! Form::open(['route' => array('deleteNews', $new->id)]) !!}
						{!! Form::submit('حذف', ['onclick' => 'return confirm("هل أنت متأكد من الحذف؟ لايمكنك التراجع");', 'class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}


					</td>
        		</tr>
        	@empty
                          
                          @endforelse   
                 	
        	</tbody>
        </table>

        </div>
        </div>



				</div>
			</div>
			<!-- END CONTENT BODY -->
		</div>
		<!-- END CONTENT -->

@endsection

