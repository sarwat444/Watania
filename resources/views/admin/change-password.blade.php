@extends('layouts.master')
@section('title')
@lang('translation.change_password')
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
    @slot('title') @lang('translation.change_password')@endslot
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
                                    <h5 class="font-size-16 mb-1">@lang('translation.password_info')</h5>
             
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
                           <label for="example-datetime-local-input" >كلمه السر  القديمه  </label>
                            <input class="form-control" type="password"  id="example-date-input">
                           </div>      
                                 </div>
                                    
                                    
                    
                <div class="form-group  row">
                       <div class="col-md-6">
               
                           <label for="example-datetime-local-input" >كلمه السر  الجديده    </label>
                            <input class="form-control" type="password"  id="example-date-input">
                
                        </div>
                    
                             <div class="col-md-6">
                          <label for="example-datetime-local-input" >تاكيد كلمه السر    </label>
                            <input class="form-control" type="password"  id="example-date-input">
                        </div>
                    
                    
                      </div>
                             

      
             

     

                                 


                        </div>
                
                        </div>
                    </div>
                </div>
                
                
                
                

                    
                </div>
            </div>
        </div>
   


                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.change_password')</button>
                



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
