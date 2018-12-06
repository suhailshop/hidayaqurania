<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ URL::asset('template/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
    <section class="content"  >

         

          <div class="row" >

          <div class="col-xs-2"></div>
          <div class="col-xs-8">
   @if ($message = Session::get('success'))
				<div class="alert alert-success alert-block col-md-11">
					<button type="button" class="close" data-dismiss="alert">×</button>
				        <strong>{{ $message }}</strong>
				</div>
				@endif
				<br />
				<br />
				<br />
          <h1> لوحة التحكم</h1>
       <table class='table table-striped table-bordered bootstrap-datatable datatable' dir="rtl">

	
        	<thead>
        		<th>#</th>
        		<th>عنوان الخبر</th>
        		<th>تاريخ الاضافة</th>
        		<th>تاريخ التحديث</th>
        		<th colspan="2"> <a href="{{url('/add')}}" class="btn btn-success">إضافة خبر جديد</a></th>
        	</thead>
        	<tbody>
        	@forelse($news as $new)
        		<tr>
        			<td>{{$new->id}}</td>
        			<td>{{$new->title}}</td>
        			<td>{{$new->created_at}}</td>
        			<td>{{$new->updated_at}}</td>
        			<td><a href="{{url('/edit/'.$new->id)}}"  >تعديل</a></td>
        			<td><a href="{{url('/delete/'.$new->id)}}" onclick="return confirm('هل تريد حذف هذا الخبر ؟');"  >حذف</a></td>
        		</tr>
        	@empty
                          
                          @endforelse   
                 	
        	</tbody>
        </table>
        </div>
        </div>
        </section>
    </body>
</html>
