@extends('layouts.master')
@section('title')
@lang('translation.confirm_project')
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.confirm_project')@endslot
@endcomponent

  <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                        <div class="p-4">
                            
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h5 class="font-size-16 mb-1">@lang('translation.project_info')</h5>
             
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
                            
                        </div>
                    </a>

                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">                      
                             <div class="card-body">

                

                             <!--Form Data Hear --> 
              
                                 
                                    <div class="form-group  row">
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >?????? ?????????????? </label>
                            <input class="form-control" type="number"  id="example-date-input">
                        </div>
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" >?????? ????????????????????  </label>
                            <input class="form-control" type="number"  id="example-date-input">
                        </div>
      
                </div>



                    <div class="form-group  row">
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >?????????? ??????????  </label>
                            <input class="form-control" type="date"  id="example-date-input">
                        </div>
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" >?????????? ???????????????? </label>
                            <input class="form-control" type="date"  id="example-date-input">
                        </div>
      
                </div>


              
                <div class="form-group  row">
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >???????? ??????????????    </label>
                           <select  class="form-control">
                                  <option value="">.........</option>
                                  <option value="1">???????? </option>
                                  <option value="2">???????? </option>
                                
                            </select> 
                </div>
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" >???????? ???????????? </label>
                           <input class="form-control" type="file"  id="example-date-input">
                     </div>
      
                </div>




              <div class="control-group">
                <label class="control-label"></label>
                <div class="controls field_wrapper2">
                 <div class="form-group  row">
                       <div class="col-md-4">

                            <input class="form-control" type="text"  placeholder="??????????  " name="sku[]"  id="example-date-input">
                        </div>
                  <div class="col-md-4">
                        
                            <select  class="form-control" name="status[]">
                                  <option value="">.........</option>
                                  <option value="1">???????? </option>
                                  <option value="2">???????? </option>
                                  <option value="3">????????  ??????????  </option>
                            
                            </select> 

                  </div>
                  <div class="col-md-4">

                            <input class="form-control" type="text"  placeholder="??????????  " name="sku[]"  id="example-date-input">
                        </div>


                       
                </div>




                 <div class="form-group  row">
                    
                      
                               <div class="col-md-4">
                            <input class="form-control" type="number"  placeholder="????????   " name="sku[]"  id="example-date-input">
                        </div>
                  
                        
                           
                             <div class="col-md-4">
                            <input class="form-control" type="number"  placeholder="????????  " name="sku[]"  id="example-date-input">

                  </div>
                  <div class="col-md-4">

                              <input class="form-control" type="file"  placeholder="??????????  " name="sku[]"  id="example-date-input">
                        </div>

                         <a href="javascript:void(0);" class="add_button2" title="Add field"><i class="uil-plus"></i>
                  </a>
      
                </div>



                
                </div>
              </div>



                        </div>
                
                        </div>
                    </div>
                </div>
                
                
                
                

                <div class="card">
                    <a href="#addproduct-img-collapse" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="addproduct-img-collapse">
                        <div class="p-4">
                            
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            02
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h5 class="font-size-16 mb-1"> @lang('translation.project_image') </h5>
                    
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
                            
                        </div>
                    </a>

                    
                    
                    
                    <div id="addproduct-img-collapse" class="collapse" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form action="#" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>
                                    
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>



                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.add_project')</button>
                



    <!-- end row -->






    
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-add-product.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
            <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>



@endsection
