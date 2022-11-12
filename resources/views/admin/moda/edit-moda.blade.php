
<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
تعديل  بيانات المده الاضافيه
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
    @slot('title') تعديل بيانات المده الاضافيه @endslot
@endcomponent

  <div class="row">
        <div class="col-lg-12">
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

            <form id="form" action="{{url('admin/edit-moda/'.$modaedafa->id)}}" method="POST" enctype="multipart/form-data">
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
                                        <h5 class="font-size-16 mb-1">بيانات  المده الاضافيه   </h5>

                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                            <div class="p-4 border-top">


                                <div class="card-body">


                                    <div class="form-group  row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>تاريخ البدايه ونهايه المشروع الجديده  </label>
                                                        <div>
                                                            <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                                                <input type="text" class="form-control" name="project_start" value="{{ $modaedafa-> project_start}}" />
                                                                <input type="text" class="form-control" name="project_end"  value="{{ $modaedafa-> project_end }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                     </div>


                                    <div class="form-group  row">

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label> المده الاضافيه للمشروع  </label>
                                                        <div>
                                                            <input type="text" class="form-control" name="time_added"  value="{{ $modaedafa->time_added}}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>   تاريخ الاستلام الابتدائي   </label>
                                                        <div>
                                                            <input type="date" class="form-control" name="estlam_date"  value="{{ $modaedafa->estlam_date }}"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>   تاريخ الاستلام الفعلى   </label>
                                                        <div>
                                                            <input type="date" class="form-control" name="estlam_fely"   value="{{ $modaedafa->estlam_fely }}" />
                                                        </div>
                                                    </div>
                                                </div>


                                     </div>

                                       <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label  for="example-month-input" class="col-form-label">   قيمه الأعمال  المنفذه  </label>
                                                                 <input type="text" class="form-control" name="amalmonfazavaliue"    value="{{ $modaedafa->amalmonfazavaliue }}" />

                                                        </div>
                                                         <div class="col-md-4">
                                                            <label  for="example-month-input" class="col-form-label"> أجمالى قيمه الاعمال  كامله    </label>
                                                                 <input type="text" class="form-control" name="egmalykemaamal"  value="{{ $modaedafa->egmalykemaamal }}" />

                                                        </div>
                                                         <div class="col-md-4">
                                                            <label  for="example-month-input" class="col-form-label"> نسبه التنفيذ  </label>
                                                                 <input type="text" class="form-control" name="nesbatanfeez"  value="{{ $modaedafa->nesbatanfeez }}" />
                                                        </div>
                                        </div>
                                          <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <label  for="example-month-input" class="col-form-label"> البرنامج الزمنى المعدل </label>
                                                                <textarea id="programe" class="summernote form-control" name="programe" >{{$modaedafa->programe}}</textarea>
                                                                 <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />

                                                            </div>
                                        </div>

                    </div>
                            </div>
                        </div>
                </div>


    </form>
{{-- end of row --}}
<button onclick="submitForm()" class="btn btn-primary mb-2 btn-submit">تعديل  بيانات  المده الأضافيه    </button>

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
