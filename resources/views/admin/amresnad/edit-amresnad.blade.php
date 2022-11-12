<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.edit_project')
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
    @slot('title') @lang('translation.edit_project')@endslot
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

            <form id="form" action="{{url('admin/edit-amresnad/'.$amresnadDetails->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
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

                    <div class="form-group  row">

                                <div class="col-md-6">
                                  <label for="example-text-input" >رقم أمر الأسناد  </label>
                                  <input  name="esnad_number"  value="{{$amresnadDetails->esnad_number}}" class="form-control" type="number"  id="example-text-input">
                              </div>



                              <div class="col-lg-6">
                                 <div class="form-group">
                                          <label>تاريخ البدايه والانتهاء  </label>
                                            <div>
                                                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                                    <input type="text" class="form-control" name="start_project"  value="{{$amresnadDetails->start_project}}"/>
                                                    <input type="text" class="form-control" name="end_project"  value="{{$amresnadDetails->end_project}}" />


                                                </div>
                                          </div>
                              </div>
                           </div>

                    </div>

                    <div class="form-group  row">

                            <div class="col-md-6">
                                    <label for="example-text-input" >جهه  الصادر </label>
                                   <input class="form-control" value="{{$amresnadDetails->geha_sader}}" type="text"  id="example-text-input" name="geha_sader">
                    </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> القيمه  التعاقديه</label>
                                <div>
                                    <input class="form-control" type="text" value="{{$amresnadDetails->contract_value}}"  id="example-text-input" name="contract_value">
                                </div>
                            </div>
                        </div>


                 </div>

                 <div class="form-group  row">

                            <div class="col-md-6">
                               <label for="example-text-input" > تاريخ  الأمر   </label>
                                <input class="form-control" type="date"  id="example-text-input" name="date" value="{{$amresnadDetails->date}}">
                            </div>

                         </div>

                    </div>
                </div>
                        </div>
                    </div>
                </div>


            </div>

    </div>
    {{-- end of col-12 --}}
</div>
{{-- end of row --}}
<button onclick="submitForm()" class="btn btn-primary mb-2 btn-submit">تعديل  بيانات أمر الأسناد  </button>

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

    function submitForm() {
        $("#form").submit();
    }


</script>

<script>
$(function(){
    $("#form").on('submit', function(e) {
        let links = [];
        $(".inner-in").each(function(ind, elm) {
            console.log(elm.value);
            links.push(elm.value)
        });
        $("#links").val(JSON.stringify(links));
        let icons = [];
        $(".inner-select").each(function(ind, elm) {
            console.log(elm.value);
            icons.push(elm.value)
        });
        $("#icons").val(JSON.stringify(icons));

    })
})
</script>



@endsection
