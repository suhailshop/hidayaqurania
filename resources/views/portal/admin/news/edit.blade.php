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
                        <i class="fa fa-angle-left"></i>

                    </li>
                    <li>
                        <i class="fa fa-edit"></i>
                        <span>تعديل الخبر</span>
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
                                <span class="caption-subject bold uppercase">تعديل الخبر الالكتروني</span>
                            </div>
                            <div class="tools"> </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block col-md-11">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        @if (count($errors) > 0)
                            <div class="alert alert-danger col-md-8">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                         <div class="portlet-body">





                                     {{Form::open(['route' => array('updateNews', $news->id)  ,'files'=>true,'class'=>'form-body'])}}



                                            <div class="form-group">
                                            <label for="exampleInputEmail1">عنوان الخبر</label>
                                            <input type="text" name='title' value="{{$news->title}}" class="form-control" placeholder="من فضلك أدخل عنوان الخبر"  required />
                                            </div>



                                            <div class="form-group">
                                            <label for="exampleInputEmail1">تعديل صورة الخبر</label>
                                            <input type="file" name='image' class="form-control"/>
                                            <img src="{{asset('/project/public/uploads/'.$news->image)}}" class="img-responsive" style="max-height: 200;max-width: 250px;margin: 25px;">
                                            </div>



                                            <div class="form-group">
                                            <label  >تفاصيل الخبر</label>
                                                 <textarea name='details' class="form-control" required="" >{{$news->details}}</textarea>

                                            </div>

                                            <button type="submit" class="btn btn-primary">حفظ التعديلات </button>

                                      {{Form::close()}}
                         </div>
                    </div>

                   </div>
                 </div>


                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

@endsection

