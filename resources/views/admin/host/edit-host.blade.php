@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.edit_host')
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
    @slot('title') @lang('translation.edit_host')@endslot
@endcomponent

  <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif   
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
                <form id="create-form" method="post" enctype="multipart/form-data" action="{{url('admin/edit-host/'.$hostDetails->id)}}">
                    @csrf
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                        <div class="p-4">
                            <input type="hidden" name="services" id="services">
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <h5 class="font-size-16 mb-1">@lang('translation.host_info')</h5>
             
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
                            
                        </div>
                    </a>

                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">                      
                             <div class="card-body">

    <div class="form-group row">
                        
                    </div>
                    <div class="form-group  row">
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >أسم الاستضافه  </label>
                            <input class="form-control" type="text"  name="name" value="{{$hostDetails->name}}" id="example-date-input">
                        </div>
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" >سعر الباقه   </label>
                            <input class="form-control" type="number" value="{{$hostDetails->price}}" id="example-date-input">
                        </div>
        
                   </div>


             <div class="outer-repeater">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="inner-repeater mb-12">
                               
                                    <div data-repeater-list="inner-group" class="inner form-group">
                                        @foreach ($hostDetails->services as $service )
                                        <div data-repeater-item class="inner mb-3 row">
                                            <div class="col-md-10 col-4">
                                                <input type="text" class="inner form-control inner-in"  name="services" value="{{$service->name}}" placeholder="أضافه أسم الخدمه"/>
                                            </div>
                                          
                                            <div class="col-md-2 col-4">
                                                <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="حذف"/>
                                            </div>
                                            
                                        </div>
                                        @endforeach 
                                    </div>
                              
                                    <input data-repeater-create type="button" class="btn btn-success inner" value="أضافه رابط جديد "/>
                                </div>
                            </div>
                        </div>
                    </div>

                        


                        </div>
                
                        </div>
                    </div>
                </div>
                
                
                
                

                
            </div>
  



                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.edit_host')</button>
        </form>
                </div>
            </div>


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
        $(function(){
            $("#create-form").on('submit', function(e) {
                let services = [];
                // var fd = new FormData($("#create-form"))
                $(".inner-in").each(function(ind, elm) {
                    // fd.append('services[]',elm.value);
                    services.push(elm.value)
                });
                $("#services").val(JSON.stringify(services));

                // return false;
            })
        })
    </script>


@endsection
