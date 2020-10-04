@extends('layout.master')
@section('pageTitle', 'الموسوعة العالمية للهدايات القرآنية')
@section('pageStyle')
   {{--include here the style of the current page--}}
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <link href="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')!!}" rel="stylesheet" type="text/css" />
   <link href="{!! asset('assets/pages/css/profile-rtl.min.css')!!}" rel="stylesheet" type="text/css" />

   <link href="{!! asset('assets/pages/css/print.css')!!}" rel="stylesheet" type="text/css" />


   <!-- END PAGE LEVEL PLUGINS -->
   <link href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
   <link href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />

   <link href="{!! asset('assets/global/scripts/jquery.print-preview.js') !!}" rel="stylesheet" type="text/css" />


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

   <style type="text/css">
      @media screen {
         #printSection {
            display: none;
         }
      }



      @media print {


         body {transform: scale(.5); size: A4}
         table {page-break-inside: avoid;}

         body > *:not(#printSection) {
            display: none;
         }
         #printSection, #printSection * {
            visibility: visible;
         }
         #printSection {
            position:absolute;
            left:0;
            top:0;
         }
      }


      .wrapper {
         position: relative;
         width: 500px;
         height: 200px;
         -moz-user-select: none;
         -webkit-user-select: none;
         -ms-user-select: none;
         user-select: none;
      }

      .signature-pad {
         position: absolute;
         left: 0;
         top: 0;
         width:500px;
         height:200px;
      }

   </style>






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
                  <li class="nav-item  ">
                     <i class="icon-chemistry"></i>
                     <a href="#" class="nav-link ">
                        <span class="title"> نماذج التخرج </span>
                     </a>
                     <i class="fa fa-angle-left"></i>
                  </li>

               <li>
                  <i class="icon-paper-plane"></i>
                  <span>نموذج تسليم الرسالة قبل المناقشة</span>
               </li>
            </ul>
         </div>
         <!-- END PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="col-md-12">
                  <!-- BEGIN PROFILE CONTENT -->
                  <div class="profile-content">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="portlet light ">
                              <div class="portlet-title tabbable-line">
                                 <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                 </div>
                                 <ul class="nav nav-tabs navbar-left">
                                    <li class="active">
                                       <a href="#tab_1_1" data-toggle="tab">نموذج تسليم الرسالة قبل المناقشة</a>
                                    </li>



                                 </ul>
                              </div>
                              <div class="portlet-body">
                                 <div class="tab-content" >
                                    <!-- معلومات البحث -->
                                    <div class="tab-pane active" id="tab_1_1">

                                       <button type="button" class="btn btn-primary" onclick="printDiv('print-me1');">طباعة</button>


                                       <form action="{{route('b4graduatoinFormSubmit')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                          @csrf

                                          <br> <br>

                                          <center><h2 class="block myfont">::: نموذج إقرار :::</h2></center>
                                          <hr>

                                          <h4 class="block myfont">معلومات الطالب</h4>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">اسم الطالب</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large"  value="{{$student->Fistname}}" readonly class="form-control placeholder-no-fix" type="text"   />
                                                </div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">رقم الطالب</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large"  value="{{$student->Code}}" readonly  class="form-control placeholder-no-fix" type="text"   />
                                                </div>
                                             </div>
                                          </div>


                                          <input   value="{{$student->ID}}"  type="text" hidden name="searcherID"  />
                                          <input   value="{{$supervisorData->ID}}"  type="text" hidden name="supervisorID"  />


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">الجامعة </label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large"  value="{{$university->Name}}" readonly  class="form-control placeholder-no-fix" type="text"   />
                                                </div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">المشرف على الطالب </label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large"  value="{{$supervisorData->Fistname}}" readonly  class="form-control placeholder-no-fix" type="text"   />
                                                </div>
                                             </div>
                                          </div>

                                          <hr>
                                          <h4 class="block myfont">معلومات الرسالة</h4>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">إجمالي الهدايات القرآنية (الجزئية) التي تضمنتها رسالتك؟</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large" name="totalPartialHidayat"  value="@if($submitted){{$myformData->totalPartialHidayat}} @endif"  @if($submitted) readonly @endif  class="form-control placeholder-no-fix" type="text"  required />
                                                </div>
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">إجمالي الهدايات القرآنية (الكلية) التي تضمنتها رسالتك؟</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input style="font-size:large" name="totalFullHidayat"  value="@if($submitted) {{$myformData->totalFullHidayat}} @endif"  @if($submitted) readonly @endif  class="form-control placeholder-no-fix" type="text"  required />
                                                </div>
                                             </div>
                                          </div>


                                          @if($submitted == true)

                                             <div class="form-group">
                                                <label class="col-md-2 control-label" style="font-size:large">تحميل ملف الرسالة الكاملة</label>
                                                <div class="col-md-8">
                                                   <div class="input-icon right">
                                                      <a style="font-size:large" class="btn btn-primary btn-lg" target="_blank" href="{{url('project/storage/app/public/searchs/'.$myformData->searchURL)}}"> تحميل الملف </a>
                                                   </div>
                                                </div>
                                             </div>

                                          @elseif($submitted == false)

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">الرجاء رفع الرسالة الكاملة الخاصة بك بصيغة PDF :</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <input  class="form-control" required name="searchURLb4" type="file"  />
                                                </div>
                                             </div>
                                          </div>

                                          @endif

                                          <hr>

                                          <h4 class="block myfont">إقرار</h4>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">المستند الرسمي </label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <p style="font-size: large; text-align: justify; line-height: 40px;">
                                                      إشارة الى العقد المبرم مع الباحثين بشأن إنجاز مشروع بحثي ضمن (الموسوعة
                                                      العالمية للهدايات القرآنية) ، وبناء على آلية الكرسي في متابعة الإنجاز والجودة
                                                      والتأكد من التزام الباحث بضوابط البحث العلمي ومعايير التحكيم المعتمدة
                                                      بالكرسي مع الالتزام بالخطة العلمية الزمنية والمحددة بــ ( سنتين )
                                                   </p>                                                </div>
                                             </div>
                                          </div>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">الموضوع </label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <p style="font-size: large; text-align: justify; line-height: 40px;"> تسليم الرسالة بالكامل للجنة العلمية بكرسي الهدايات القرآنية بعنوان
                                                      <b style="color: darkred;"> {{$thesis->Title}} </b>.
                                                   </p>
                                                </div>
                                             </div>
                                          </div>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">المطلوب (ضع علامة صح) </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox" @if($submitted == true) disabled @endif
                                                                            @if($submitted)
                                                                            @foreach($conditions as $condition)
                                                                               @if($condition == 'شرط1') checked  value="{{$condition}}" @endif

                                                                            @endforeach
                                                                            @else  value="شرط1"   @endif required
                                                                             /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                مراجعة البحث وتدقيقه علمياً ومنهجياً ولغوياً وطباعة
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large"> </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox"  @if($submitted == true) disabled @endif
                                                @if($submitted)
                                                @foreach($conditions as $condition)
                                                @if($condition == 'شرط2') checked  value="{{$condition}}" @endif

                                                        @endforeach
                                                @else  value="شرط2"   @endif required /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                الالتزام بدليل الكتابة ومنهجيات الكتابة الصادرة من الكرسي .
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large"> </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox" @if($submitted == true) disabled @endif
                                                                            @if($submitted)
                                                @foreach($conditions as $condition)
                                                @if($condition == 'شرط3') checked  value="{{$condition}}" @endif

                                                        @endforeach
                                                        @else  value="شرط3"   @endif required /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                مراجعة جميع تقارير اللجنة العلمية الصادرة بشأن تقييم وتقويم الرسالة ،
                                                والتأكد من تطبيق ما فيها من ملاحظات
                                             </div>
                                          </div>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large"> </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox" @if($submitted == true) disabled @endif
                                                                            @if($submitted)
                                                                            @foreach($conditions as $condition)
                                                                            @if($condition == 'شرط4') checked  value="{{$condition}}" @endif

                                                                            @endforeach
                                                                            @else  value="شرط4"   @endif  required
                                                /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                عرض الرسالة على المشرف ، والاخذ بتوجيهاته وملاحظاته
                                             </div>
                                          </div>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large"> </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox" @if($submitted == true) disabled @endif
                                                                            @if($submitted)
                                                                            @foreach($conditions as $condition)
                                                                            @if($condition == 'شرط1') checked  value="{{$condition}}" @endif

                                                                            @endforeach
                                                                            @else  value="شرط5"   @endif
                                                                            required /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                توقيع النموذج من قبل الطالب والمشرف
                                             </div>
                                          </div>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large"> </label>
                                             <div class="col-md-1">  <input class="form-control right" name="conditions[]" type="checkbox" @if($submitted == true) disabled @endif
                                                                            @if($submitted)
                                                                            @foreach($conditions as $condition)
                                                                           @if($condition == 'شرط6') checked  value="{{$condition}}" @endif
                                                                            @endforeach
                                                                            @else  value="شرط6"   @endif required /></div>
                                             <div class="col-md-9" style="font-size: large; text-align: right; line-height: 40px;">
                                                يتم رفع البحث بالكامل بالبوابة الالكترونية بالتنسيق مع السكرتارية
                                             </div>
                                          </div>

                                          <hr>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">إقرار الطالب</label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   <p style="font-size: large; text-align: justify; line-height: 40px;"> أقر أنا الطالب :
                                                      <b style="color: darkred;"> {{$student->Fistname}} </b>
                                                      بالالتزام التام على ما تم التنبيه عليه في هذا
                                                      النموذج والالتزام بتوجيهات إدارة الكرسي وفق المعايير المتبعة في مشروع <b style="color: darkred;"> (الموسوعة العالمية للهدايات القرآنية) </b> بموجب العقد المبرم ، ويحق لإدارة الكرسي إرجاع الرسالة لاستيفاء
                                                      وإجراء التعديلات المطلوبة بمدة زمنية تحددها إدارة الكرسي والله الموفق .
                                                   </p>
                                                </div>
                                             </div>
                                          </div>

                                          <br>

                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">توقيع الطالب</label>
                                             الرجاء التوقيع في المربع أدناه ومن ثم اضغط على زر الاعتماد لحفظ التوقيع قبل الإرسال

                                             <div class="col-md-8">
                                                <div class="input-icon right">


                                                   <div>

                                                      @if($submitted == true)
                                                         <div>
                                                            <img src="{{$myformData->studentAgreement}}"  />
                                                         </div>

                                                      @endif

                                                      @if($submitted == false)
                                                      <div class="wrapper">
                                                         <canvas id="signature-pad-std" class="signature-pad"  width=400 height=200></canvas>
                                                      </div>

                                                      <button type="button"  class="btn btn-primary" id="save-png-std">اضغطه هنا لاعتماد التوقيع</button>
                                                      <button type="button"  class="btn btn-warning" id="clear-std">مسح</button>
                                                      <br><br>
                                                      <label id="notyetstd" class="badge" style="color: red; background-color: yellow; display: block"> لم يتم اعتماد التوقيع</label>
                                                      <label id="yesconfirmstd" class="badge" style="color: white; background-color: blue; display: none"> تم اعتماد وحفظ التوقيع</label>

                                                      <input type="text" hidden style="font-size:large" id="stdsign"  value=""  name="studentAgreement" />
                                                      @endif
                                                   </div>

                                                </div>
                                             </div>
                                          </div>


                                          <div class="form-group">
                                             <label class="col-md-2 control-label" style="font-size:large">التاريخ : </label>
                                             <div class="col-md-8">
                                                <div class="input-icon right">
                                                   @if($submitted == true)
                                                      <label class="control-label" style="font-size:large"> تم الإرسال بتاريخ :  {{$myformData->studentAgreementDate}} </label>

                                                   @endif

                                                   @if($submitted == false)
                                                   <input  value=""   class="form-control placeholder-no-fix" name="studentAgreementDate" type="date" required  />                                                </div>
                                                   @endif
                                             </div>
                                             </div>
                                          </div>

                                          <button type="submit" @if($submitted == true) disabled @endif class="btn btn-primary">موافقة وإرسال</button>

                                       </form>
                                       <br><br><hr>


                                    <center><h4 class="control-label myfont" style="font-size:large;">:: خاص بالمشرف ::</h4></center>



                                       <br> <br>
                                    <!-- قسم المشرف فورم التحديث -->

                                 <div class="form-group" style="@if(!$isSupervisor)  pointer-events: none; opacity: 0.6; @endif">


                                    <form action="{{route('b4graduatoinFormSubmitUpdate')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                       @csrf

                                       <input type="hidden" name="formID" value="@if(isset($myformData->ID)){{$myformData->ID}} @endif">
                                       <input type="hidden" name="stdID" value="@if(isset($studentId)){{$studentId}}@endif">


                                       <div class="form-group">
                                          <label class="col-md-2 control-label" style="font-size:large">موافقة المشرف</label>
                                          <div class="col-md-8">
                                             <div class="input-icon right">
                                                <p style="font-size: large; text-align: justify; line-height: 40px;">
                                                   المشرف على الطالب : {{$supervisorData->Fistname}}  ، لا مانع لدينا بمناقشة رسالة الدكتوراه
                                                   المقدمة من الطالب : {{$student->Fistname}}
                                                </p>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="form-group">
                                          <label class="col-md-2 control-label" style="font-size:large">اسم المشرف</label>
                                          <div class="col-md-8">
                                             <div class="input-icon right">
                                                <input style="font-size:large"  value="{{$supervisorData->Fistname}}" readonly  class="form-control placeholder-no-fix" type="text"   />
                                             </div>
                                          </div>
                                       </div>


                                       <div class="form-group">
                                          <label class="col-md-2 control-label" style="font-size:large">التوقيع</label>
                                          الرجاء التوقيع في المربع أدناه ومن ثم اضغط على زر الاعتماد لحفظ التوقيع قبل الإرسال
                                          <div class="col-md-8">
                                             <div class="input-icon right">
                                                <div>
                                                   @if($submitted == true && isset($myformData->supervisorAgreement))
                                                      <div>
                                                         <img src="{{$myformData->supervisorAgreement}}"  />
                                                      </div>

                                                   @endif


                                                   @if(! isset($myformData->supervisorAgreement))
                                                   <div class="wrapper">
                                                      <canvas id="signature-pad-sup" class="signature-pad"  width=400 height=200></canvas>
                                                   </div>

                                                   <button type="button" class="btn btn-primary" id="save-png-sup">اضغطه هنا لاعتماد التوقيع</button>
                                                   <button type="button" class="btn btn-warning" id="clear-sup">مسح</button>
                                                   <br><br>
                                                   <label id="notyetsup" class="badge" style="color: red; background-color: yellow; display: block"> لم يتم اعتماد التوقيع</label>
                                                   <label id="yesconfirmsup" class="badge" style="color: white; background-color: blue; display: none"> تم اعتماد وحفظ التوقيع</label>

                                                   <input type="text" hidden style="font-size:large" id="supsign"  value=""  name="supervisorAgreement" />
                                                   @endif
                                                </div>
                                             </div>
                                          </div>
                                       </div>


                                       <div class="form-group">
                                          <label class="col-md-2 control-label" style="font-size:large">التاريخ : </label>
                                          <div class="col-md-8">
                                             <div class="input-icon right">
                                                @if($submitted && $myformData->supervisorAgreementDate != null)
                                                   <label class="control-label" style="font-size:large"> تمت الموافقة بتاريخ :  {{$myformData->supervisorAgreementDate}} </label> </div>

                                             @endif

                                                @if($submitted == false || $myformData->supervisorAgreementDate == null)
                                                      <input  value=""    class="form-control placeholder-no-fix" name="supervisorAgreementDate" type="date" required  />                                              </div>
                                             @endif


                                       </div>

                                       </div>

                                       <button  @if($submitted && $myformData->supervisorAgreementDate != null) disabled @endif type="submit" class="btn btn-primary ">موافقة وإرسال</button>
                                       <br />
                                    </form>

                                 </div>



                                 <!-- end of tab portlet -->
                               </div>


                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END PROFILE CONTENT -->
               </div>
            </div>
         </div>
         <!-- END CONTENT BODY -->
      </div>
      <!-- END CONTENT -->
   @section('pageScript')
      <!-- BEGIN PAGE LEVEL PLUGINS -->
         <script src="{!! asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/global/plugins/jquery.sparkline.min.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/profile.min.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/global/scripts/datatable.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/global/plugins/datatables/datatables.min.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')!!}" type="text/javascript"></script>
         <script src="{!! asset('assets/pages/scripts/table-datatables-responsive.min.js')!!}" type="text/javascript"></script>
         <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

         <!-- END PAGE LEVEL PLUGINS -->



         <script>



            var canvas1 = document.getElementById('signature-pad-std');  // for student
            var canvas2 = document.getElementById('signature-pad-sup');  // for supervisor

            // Adjust canvas coordinate space taking into account pixel ratio,
            // to make it look crisp on mobile devices.
            // This also causes canvas to be cleared.
            function resizeCanvas() {
               // When zoomed out to less than 100%, for some very strange reason,
               // some browsers report devicePixelRatio as less than 1
               // and only part of the canvas is cleared then.
               var ratio =  Math.max(window.devicePixelRatio || 1, 1);

               if(canvas1){
                  canvas1.width = canvas1.offsetWidth * ratio;
                  canvas1.height = canvas1.offsetHeight * ratio;
                  canvas1.getContext("2d").scale(ratio, ratio);
               }


               if(canvas2){
                  canvas2.width = canvas2.offsetWidth * ratio;
                  canvas2.height = canvas2.offsetHeight * ratio;
                  canvas2.getContext("2d").scale(ratio, ratio);
               }

            }

            window.onresize = resizeCanvas;
            resizeCanvas();

            // student

            if(canvas1) {

               var signaturePad1 = new SignaturePad(canvas1, {
                  backgroundColor: 'rgb(250, 250, 250)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
               });
            }


            var savestd = document.getElementById('save-png-std');

            if(savestd) {
               savestd.addEventListener('click', function () {
                  if (signaturePad1.isEmpty()) {
                     return alert("الرجاء التوقيع في المربع الخاص بالتوقيع");
                  }

                  var data = signaturePad1.toDataURL('image/png');

                  var stdsign = document.getElementById("stdsign");
                  if(stdsign){stdsign.value = data;}

                  var notyetstd = document.getElementById("notyetstd");
                  if(notyetstd){notyetstd.style.display = "None"}

                  var yestcnofirm = document.getElementById("yesconfirmstd");
                  if(yestcnofirm){yestcnofirm.style.display = "block"}

                  return false ;

               });
            }


            var clearstd = document.getElementById('clear-std');

            if(clearstd) {
               clearstd.addEventListener('click', function () {
                  signaturePad1.clear();
                  document.getElementById("notyetstd").style.display = "block";
                  document.getElementById("yesconfirmstd").style.display = "None";
                  return false ;
               });
            }


            // supervisro



            if(canvas2) {
               var signaturePad2 = new SignaturePad(canvas2, {
                  backgroundColor: 'rgb(250, 250, 250)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
               });
            }


            var savesup = document.getElementById('save-png-sup');

            if(savesup) {

               savesup.addEventListener('click', function () {
                  if (signaturePad2.isEmpty()) {
                     return alert("الرجاء التوقيع في المربع الخاص بالتوقيع");
                  }

                  var data2 = signaturePad2.toDataURL('image/png');
                  console.log(data2) ;
                  document.getElementById("supsign").value = data2;
                  document.getElementById("notyetsup").style.display = "None";
                  document.getElementById("yesconfirmsup").style.display = "block";

                  return false ;

               });

            }



            var clearsup = document.getElementById('clear-sup');

            if(clearsup){
               clearsup.addEventListener('click', function () {
                  signaturePad2.clear();
                  document.getElementById("notyetsup").style.display = "block";
                  document.getElementById("yesconfirmsup").style.display = "None";
                  return false ;

               });
            }




         </script>

         <script>
            function printDiv(div) {
               // Create and insert new print section
               var elem = document.getElementById("tab_1_1");
               var domClone = elem.cloneNode(true);
               var $printSection = document.createElement("div");
               $printSection.id = "printSection";
               $printSection.appendChild(domClone);
               document.body.insertBefore($printSection, document.body.firstChild);

               window.print();

               // Clean up print section for future use
               var oldElem = document.getElementById("printSection");
               if (oldElem != null) { oldElem.parentNode.removeChild(oldElem); }
               //oldElem.remove() not supported by IE

               return true;
            }
            $('#table12').DataTable( {
               "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
               },
               "dom": 'T<"clear">lfrtip',
               "tableTools": {
                  "aButtons": [
                     "copy",
                     "save"
                  ]
               }
            } );
            $('#table13').DataTable( {
               "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
               },
               "dom": 'T<"clear">lfrtip',
               "tableTools": {
                  "aButtons": [
                     "copy",
                     "save"
                  ]
               }
            } );
         </script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
         <!-- END PAGE LEVEL PLUGINS -->
         @if ($message = Session::get('success_add'))
            <script>
               $.confirm({
                  title: 'تهانينا!',
                  content: '<?php echo Session::get("success_add"); ?>',
                  type: 'green',
                  typeAnimated: true,autoClose: 'tryAgain|3000',
                  buttons: {
                     tryAgain: {
                        text: 'اغلاق',
                        btnClass: 'btn-green',
                        action: function(){
                        }
                     }
                  }
               });
            </script>


   <?php Session::forget('success_add');?>
   @endif
@endsection
@endsection