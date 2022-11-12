<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
المستخلصات
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
    @slot('title') تعديل  المستخلص  @endslot
@endcomponent

  <div class="row">
            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
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

                <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                    <form id="form" method="post" action="{{url('admin/add_mostaklas/'.$mostaklas->id)}}" enctype="multipart/form-data">
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
                                        <h5 class="font-size-16 mb-1">بيانات المستخلصات </h5>

                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                            <div class="p-4 border-top">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />
                                            <input type="hidden" name="status" value="{{$mostaklas->status}}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="date" > تاريخ الأستحاق  </label>
                                            <input  id="date" type="date" name="date" class="form-control" placeholder="تاريخ الاستحقاق " value="{{$mostaklas->date}}" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="value" >  التكلفه الماليه   </label>
                                            <input  id="value" type="number" name="value" class="form-control" placeholder=" التكلفه الماديه  " value="{{$mostaklas->value}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="value" > الموقع عليه   </label>
                                            <input id="value" type="text" name="signature_name" class="form-control" placeholder=" الموقع عليه  " value="{{$mostaklas->signature_name}}" />
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
                                    <h5 class="font-size-16 mb-1">ملفات المستخلصات   </h5>

                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>
                    </a>

                    <div id="addproduct-img-collapse" class="collapse" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                               <input name="files[]" type="file" multiple="multiple">
                        </div>
                    </div>

                    </form>

                </div>
            </div>
            </form>
            <button id="submit-form" onclick="submitForm()" type="submit" class="btn btn-primary mb-2 btn-submit">تعديل  بيانات  المستخلص  </button>

    </div>

@endsection
@section('script')
    {{--<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('assets/js/pages/ecommerce-add-product.init.js')}}"></script>--}}
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#classic-editor' ) )
            .catch( error => {
                console.error( error );
            } );

            function submitForm() {
            $("#form").submit();
        }
    </script>

@endsection
