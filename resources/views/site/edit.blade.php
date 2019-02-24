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

        <script type="text/javascript" src="{{url('')}}/template/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                // General options
                mode : "textareas",
                theme : "advanced",
                plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

                // Theme options
                theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
                theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true,

                // Example content CSS (should be your site CSS)
                content_css : "{{url('')}}/template/tinymce/examples/css/content.css",

                // Drop lists for link/image/media/template dialogs
                template_external_list_url : "{{url('')}}/template/tinymce/examples/lists/template_list.js",
                external_link_list_url : "{{url('')}}/template/tinymce/examples/lists/link_list.js",
                external_image_list_url : "{{url('')}}/template/tinymce/examples/lists/image_list.js",
                media_external_list_url : "{{url('')}}/template/tinymce/examples/lists/media_list.js",

                // Style formats
                style_formats : [
                    {title : 'Bold text', inline : 'b'},
                    {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
                    {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
                    {title : 'Example 1', inline : 'span', classes : 'example1'},
                    {title : 'Example 2', inline : 'span', classes : 'example2'},
                    {title : 'Table styles'},
                    {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
                ],

                // Replace values for the template plugin
                template_replace_values : {
                    username : "Some User",
                    staffid : "991234"
                }
            });
        </script>
        <!-- /TinyMCE -->


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
