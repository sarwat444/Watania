<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
    @lang('translation.Basic_Elements')
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
        @slot('title') تعديل الموقف التنفيذى   @endslot
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form id="create-form" action="{{url('admin/edit_mawkef_tanfezy/'.$mawkef_tanfezy_details->id)}}" method="POST" enctype="multipart/form-data">
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
                                        <h5 class="font-size-16 mb-1">بيانات الموقف  التنفيذى @if($mawkef_tanfezy_details->status == 0 ) 'للمالك' @else 'للياطن    ' @endif </h5>
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
                                            <label for="example-text-input" > الشركات   </label>
                                            <input class="form-control" type="text"  id="example-text-input" name="project_contents" value="{{$mawkef_tanfezy_details->project_contents}}">
                                            <input class="form-control" type="hidden"  id="example-text-input" name="status" value="{{$mawkef_tanfezy_details->status}}">
                                            <input class="form-control" type="hidden"  id="example-text-input" name="project_id" value="{{$projectDetails->id}}">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>تاريخ البدء ونهايه المشروع  </label>
                                                <div>
                                                    <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                                        <input type="text" class="form-control" name="project_start" value="{{$mawkef_tanfezy_details->project_start}}"/>
                                                        <input type="text" class="form-control" name="project_end" value="{{$mawkef_tanfezy_details->project_end}}" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div  class="form-group  row">
                                        <div class="col-md-6">
                                            <label for="contract_value" > قيمه التعاقد </label>
                                            <input class="form-control" type="number"  id="example-text-input" name="contract_value" value="{{$mawkef_tanfezy_details->contract_value}}">
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contract_date">تاريخ التعاقد  </label>
                                                <div>
                                                    <input class="form-control" type="date"  id="example-text-input" name="contract_date" value="{{$mawkef_tanfezy_details->contract_date}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group  row">

                                        <div class="col-md-6">
                                            <label for="execuation_percent" > نسبه التنفيذ  </label>
                                            <input class="form-control" type="number"  id="example-text-input" name="execuation_percent" value="{{$mawkef_tanfezy_details->execuation_percent}}">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="monsarf" >المنصرف  - باطن   </label>
                                            <input class="form-control" type="number"  id="monsarf" name="monsarf" value="{{$mawkef_tanfezy_details->monsarf}}">
                                        </div>
                                    </div>
                                    <div class="form-group  row">

                                        <div class="col-md-6">
                                            <label for="monsarf_percent" > نسبه الصرف  </label>
                                            <input class="form-control" type="number"  id="example-text-input" name="monsarf_percent" value="{{$mawkef_tanfezy_details->monsarf_percent}}">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="estechary_office" > المكتب  الاستشاري   </label>
                                            <input class="form-control" type="text"  id="estechary_office" name="estechary_office" value="{{$mawkef_tanfezy_details->estechary_office}}">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="example-month-input" class="col-form-label"> ملاحظات  </label>
                                            <textarea id="classic-editor" class="summernote" name="notes" >{{$mawkef_tanfezy_details->notes}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="submit-form" class="btn btn-primary mb-2 btn-submit">أضافه  بيانات  الموقف التنفيذى </button>
            </form>
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
            </script>


            <script>

                //get  data from  links  and  append  it  to hidden  input

                //upload 2

                var uploadedDocumentMap2 = {}
                Dropzone.options.dropzone2 = { // The camelized version of the ID of the form element
                    // The configuration we've talked about above
                    autoProcessQueue: true,
                    url: "store-media",
                    uploadMultiple: true,
                    parallelUploads: 100,
                    maxFiles: 5,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function (file, response) {
                        response.data.forEach(function(img) {
                            $('#create-form').append('<input type="hidden" name="document[]" value="' + img.name + '">')
                            uploadedDocumentMap2[file.name] = img.name
                        })
                    },
                    removedfile: function (file) {
                        file.previewElement.remove()
                        var name = ''
                        if (typeof file.name !== 'undefined' && (!uploadedDocumentMap2[file.name])) {
                            name = file.name
                        } else {
                            name = uploadedDocumentMap2[file.name]
                        }
                        $('#create-form').find('input[name="document[]"][value="' + name + '"]').remove()
                        // ajax request to delete tmp media
                        $.ajax({
                            type:"POST",
                            url:"admin/delete-media",
                            data:{name:name},
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            success(response){
                                console.log(response);
                            }
                        });
                    },

                    // The setting up of the dropzone
                    init: function() {
                        console.log('test2') ;
                        var myDropzone = this;

                        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                        // of the sending event because uploadMultiple is set to true.
                        this.on("sendingmultiple", function() {
                            // Gets triggered when the form is actually being sent.
                            // Hide the success button or the complete form.
                        });
                        this.on("successmultiple", function(files, response) {
                            // Gets triggered when the files have successfully been sent.
                            // Redirect user or notify of success.
                            // console.log("uploaded success");
                        });

                        // this.on("maxfilesexceeded", function(file) {
                        //     this.removeAllFiles();
                        //     this.addFile(file);
                        // });

                        this.on("errormultiple", function(files, response) {
                            // Gets triggered when there was an error sending the files.
                            // Maybe show form again, and notify user of error
                        });
                    }
                }


                $(function(){
                    $("#create-form").on('submit', function(e) {
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
                });



            </script>

@endsection
