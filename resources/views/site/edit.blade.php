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
 @if ($message = Session::get('success'))
				<div class="alert alert-success alert-block col-md-11">
					<button type="button" class="close" data-dismiss="alert">×</button>
				        <strong>{{ $message }}</strong>
				</div>
				@endif
				
				@if (count($errors) > 0)
				    
				    <div class="col-md-2"></div>
				    <div class="alert alert-danger col-md-8">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>

				@endif
				
          <div class="col-xs-2"></div>
          <div class="col-xs-8">

          <h1> تعديل الخبر </h1>
          <br />
      {{Form::open(['url'=>'edit/'.$news->id,'files'=>true,'class'=>'form-horizontal'])}}

  <div class="form-group">
    <label for="exampleInputEmail1">عنوان الخبر</label>
    <input type="text" name='title' value="{{$news->title}}" class="form-control" placeholder="من فضلك أدخل عنوان الخبر"  required />
    
    </div><div class="form-group">
    <label for="exampleInputEmail1">تعديل صورة الخبر</label>
    <input type="file" name='image' class="form-control"/>
    <img src="{{asset('uploads/'.$news->image)}}" class="img-responsive" style="max-height: 200;max-width: 250px;margin: 25px;">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">تفاصيل الخبر</label>
    <textarea name='details' class="form-control" required="" >{{$news->details}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">تعديل </button>
{{Form::close()}}
        </div>
        </div>
        </section>
    </body>
</html>
