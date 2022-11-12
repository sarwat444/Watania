@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.project_approve')@endslot
@endcomponent


            <div class="card">
                <div class="card-body">

                    <div class="form-group row">
                               <div class="col-md-6">
                                   <label for="example-text-input" >عدد أسكرينات  المشروع  </label>
                                    <input class="form-control" type="number"  id="example-text-input">
                                </div>
                          <div class="col-md-6">
                                  <label for="example-datetime-local-input" >تاريخ الارسال </label>
                                    <input class="form-control" type="date"  id="example-date-input">
                          </div>
      
                       </div>

                 <div class="form-group  row">
                       <div class="col-md-6">
                            <label for="example-datetime-local-input" >تاريخ قبول  المشروع   </label>
                            <input class="form-control" type="date"  id="example-date-input">
                        </div>
                  <div class="col-md-6">
                            <label for="example-datetime-local-input" >تاريخ الانتهاء </label>
                            <input class="form-control" type="date"  id="example-date-input">
                  </div>
      
                </div>

 <div class="controls field_wrapper">
 <label for="example-datetime-local-input" class="col-form-label">الاشخاص  العاملين  على  المشروع   </label>

         <div class="form-group row">
                     
                   <a href="javascript:void(0);" class="add_button" title="Add field"><i class="mdi mdi-plus text-success"></i></a>
                                          <div class="col-md-3">
                        
                            <input class="form-control" required title="Required" type="text" name="name[]" id="sku" placeholder="الأسم  " >
                        </div>
                        <div class="col-md-3">
                           
                              <input class="form-control" required title="Required" type="text" name="email[]" id="size" placeholder="البريد الالكترونى  " >
                         </div>
                        <div class="col-md-3">
                           
                              <input class="form-control"  required title="Required" type="text" name="job[]" id="price" placeholder="الوظيفه  " >
                         </div>



                              <label>دائن  </label> 
                              <input type="checkbox"  placeholder="دائن  " name="check1" onclick="dynInput(this);" />

                              <label> مدين  </label> 
                              <input type="checkbox"  placeholder="مدين   " name="check2" onclick="dynInput(this);" />
                              <p id="insertinputs"></p>
               
                            </div>
              </div>
         </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                <label for="example-datetime-local-input" class="col-form-label">أضافه  ملفات المشروع  </label>
                      
                            <input class="form-control" type="file"  id="example-date-input">
                        </div>
                    </div>
                  
                 
                   <button type="submit" class="btn btn-primary mb-2 btn-submit">أضافه المقال  </button>
                
                </div>
            </div>

    <!-- end row -->


    
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>
    <script>
     
        function dynInput(cbox) {
      if (cbox.checked) {
        var input = document.createElement("input");
        input.type = "text";
        var div = document.createElement("div");
        div.id = cbox.name;
        div.innerHTML =  cbox.placeholder;
        div.appendChild(input);
        document.getElementById("insertinputs").appendChild(div);
      } else {
        document.getElementById(cbox.name).remove();
      }
    }


        </script>
@endsection
