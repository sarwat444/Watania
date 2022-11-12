@extends('layouts.master')
@section('title')
@lang('translation.add_user')
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
    @slot('title') @lang('translation.add_user')@endslot
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
                                    <h5 class="font-size-16 mb-1">@lang('translation.user_info')</h5>
             
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
                       <div class="col-md-12">
                           <label for="example-datetime-local-input" >الأسم  </label>
                            <input class="form-control" type="text"  id="example-date-input">
                        </div>        
                                 
                                 </div>
                      
                    <div class="form-group  row">
               
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" > البريد الالكترونى  </label>
                            <input class="form-control" type="text"  id="example-date-input">
                     </div>

                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >الباسورد    </label>
                            <input class="form-control" type="text"  id="example-date-input">
                        </div>
      
                    </div>
                     
<div class="privalidges">

  <h4>أضافه الصلاحيات  : </h4>
                     <div class="row">
 
           
                               
                        <div class="col-md-3">
                       
                       <div class="custom-control custom-checkbox mb-3">
                                          <label class="custom-control-label" for="customCheck1">Custom checkbox Right</label>
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                            
                                </div>


                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Custom checkbox Right</label>
                                  </div>

               <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Custom checkbox Right</label>
                                </div>


                            

                        </div>




                     
       



           
                    </div>

                        </div>
                
                        </div>
                    </div>
                </div>
                
                
                

            </div>
        </div>




                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.add_user')</button>
                



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
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>



    <script>
        ClassicEditor
        .create( document.querySelector( '#classic-editor' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
@endsection
