@extends('back-end.layout.app')

@section('title')
    تعديل بيانات الموقع
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
            تعديل بيانات الموقع
        @endslot
    @endcomponent

    <div class="row" style="  padding-right: 10%;">


            <div class="col-md-10">
                {{-- <div class="panel panel-default"> --}}

                    <div class="panel-body">
                        <form class="form-horizontal ls_form ls_form_horizontal" action="{{route('configrations.update', ['id' => $row])}}" method="POST">
                            @csrf
                            {{ method_field('put') }}

                            @php $input = "title"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">اسم الموقع</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control" required>
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "en_title"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label"> اسم الموقع بالانجليزي</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control" required>
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "email"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">البريد</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "home_description"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">وصف الرئيسيه</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "en_home_description"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label"> وصف الرئيسيه بالانجليزي</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>



                            @php $input = "phone"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">الهاتف</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "video"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">رابط الفديو الأول</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                             @php $input = "video2"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">رابط الفديو الثاني</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                             @php $input = "youtube"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">رابط قناة اليوتيوب</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "facebook"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">facebook account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "twitter"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">twitter account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>
                            @php $input = "instagram"; @endphp
                            <div class="form-group">
                                <label class="col-lg-2 control-label">instagram account</label>

                                <div class="col-lg-10">
                                    <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
                                      class="form-control">
                                      @error($input)
                                      <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                            </div>    


                            <label class="col-md-2 control-label">من نحن</label><br><br>
                            @php $input = "description"; @endphp
                            <div class="panel-body no-padding" >
                                       <textarea class="summernote"style="margin-right: 25%"  name="{{ $input }}"  id="demo"  rows="10" cols="100" >
                                                {{ isset($row) ? $row->{$input} : '' }}
                               </textarea>
                            </div><br><br><br>
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="col-md-2 control-label">من نحن بالانجليزي</label><br><br>
                            @php $input = "en_description"; @endphp
                            <div class="panel-body no-padding" >
                                       <textarea class="summernote"style="margin-right: 25%"  name="{{ $input }}"  id="demo"  rows="10" cols="100" >
                                                {{ isset($row) ? $row->{$input} : '' }}
                               </textarea>
                            </div><br>
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button  class="btn btn-primary" type="submit">تحديث</button>
                                </div>
                            </div>
                        </form>
                    </div>
                {{-- </div> --}}
            </div>
    </div>

    {{-- @component('back-end.shared.edit' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
        <form action="{{ route($routeName.'.update' , ['id' => $row]) }}" method="POST">
            {{ method_field('put') }}
            @include('back-end.'.$folderName.'.form')
            <button type="submit" class="btn btn-primary pull-right">Update {{ $moduleName }}</button>
            <div class="clearfix"></div>
        </form>
    @endcomponent --}}


    {{-- @push('js')
     <!--Masked Library Script Start-->
     <script src="{{asset('panel/assets/js/jquery.maskedinput.min.js')}}"></script>
     <script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
     <!--Masked Library Script End-->

     <!--validationEngine Library Script Start-->
     <script src="{{asset('panel/assets/js/validationEngine/languages/jquery.validationEngine-en.js')}}"></script>
     <script src="{{asset('panel/assets/js/validationEngine/jquery.validationEngine.js')}}"></script>
     <!--validationEngine Library Script End-->

     <!--bootstrap validation Library Script Start-->
     <script src="{{asset('panel/assets/js/bootstrapvalidator/bootstrapValidator.js')}}"></script>
     <!--bootstrap validation Library Script End-->

     <!--Demo form validation  Script Start-->
     <script src="{{asset('panel/assets/js/pages/formValidation.js')}}"></script>
     <!--Demo form validation  Script End-->
    @endpush

   @push('css')
   <link rel="stylesheet" href="assets/css/rtl-css/plugins/fileinput-rtl.css">
   @endpush
    --}}
    @push('css')
          <!-- Responsive Style For-->
      <link href="{{asset('panel/assets/css/rtl-css/responsive-rtl.css')}}" rel="stylesheet">
      <!-- Responsive Style For-->
      <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/summernote-rtl.css')}}">
      <!-- Custom styles for this template -->


        <!-- Plugin Css Put Here -->

        <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/fileinput-rtl.css')}}">
    @endpush
    @push('js')
        <script>
           console.log("test");
            document.getElementById('date').valueAsDate = new Date();
        </script>
         <!--Upload button Script Start-->
       <script src="{{asset('panel/assets/js/fileinput.min.js')}}"></script>
       <!--Upload button Script End-->

    <!--Auto resize  text area Script Start-->
    <script src="{{asset('panel/assets/js/jquery.autosize.js')}}"></script>
     <!--Auto resize  text area Script Start-->
    <script src="{{asset('panel/assets/js/pages/sampleForm.js')}}"></script>


    <!-- summernote Editor Script For Layout start-->
    <script src="{{asset('panel/assets/js/summernote.min.js')}}"></script>
    <!-- summernote Editor Script For Layout End-->

    <!-- Demo Ck Editor Script For Layout Start-->
    <script src="{{asset('panel/assets/js/pages/editor.js')}}"></script>
    <!-- Demo Ck Editor Script For Layout ENd-->
    @endpush
@endsection
