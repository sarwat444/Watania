@php
$projectsidebar = '' ;
@endphp
@extends('layouts.adminLayout.master')
@section('title')
مقايسه  جديده 
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
    @slot('title') أضافه مقايسه جديده @endslot
@endcomponent

  <div class="row">
        <div class="col-lg-12">
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

   @if($status == 0)
                <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                            <form id="form" method="post" action="{{url('/admin/addmokaysaowner/'.$projectDetails->id.'/0')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

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
                                                    <h5 class="font-size-16 mb-1">  بيانات ملاك المقايسات    </h5>
                                                </div>
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>
                                    </a>

                                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <label  for="example-month-input" class="col-form-label">   أدخال أسم المالك   </label>
                                                                  <input type="text" name="owner_name"  placeholder="أسم المالك " class="form-control" />
                                                                 <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />
                                                                 <input type="hidden" name="status" value="{{$status}}" />
                                                        </div>

                                                      

                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                        </div>

                    </div>
                 
                    <button id="submit-form" onclick="submitForm()" type="submit" class="btn btn-primary mb-2 btn-submit">أضافه  بيانات المالك   </button>


    <!-- end row -->
  
  @else 
       <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                            <form id="form" method="post" action="{{url('/admin/addmokaysaowner/'.$projectDetails->id.'/0')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

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
                                                    <h5 class="font-size-16 mb-1">  بيانات الباطن  المقايسات    </h5>
                                                </div>
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>
                                    </a>

                                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="card-body">
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <label  for="example-month-input" class="col-form-label">   أدخال أسم الباطن   </label>
                                                                  <input type="text" name="owner_name"  placeholder="أسم الباطن " class="form-control" />
                                                                 <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />
                                                                 <input type="hidden" name="status" value="{{$status}}" />
                                                        </div> 

                                                      

                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                        </div>

                    </div>
                 
                    <button id="submit-form" onclick="submitForm()" type="submit" class="btn btn-primary mb-2 btn-submit">أضافه  بيانات الباطن   </button>


    <!-- end row -->
  

  @endif 

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

        function submitForm() {
            $("#form").submit();
        }
    </script>




@endsection
