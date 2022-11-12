<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
المقايسات
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
    @slot('title') أضافه مقايسه جديده    @endslot
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
                            <form id="form" method="post" action="{{url('/admin/add-mokaysa')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="owners" id="owners">
                                <input type="hidden" name="values" id="values">
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
                                                    <h5 class="font-size-16 mb-1">ملفات المقايسه   </h5>
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
                                                        <label  for="example-month-input" class="col-form-label">اسم  المقايسه  </label>
                                                            <input  class=" form-control" name="name" placeholder="أسم المقايسه "/>
                                                             <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />
                                                             <input type="hidden" name="status" value="{{$status}}" />
                                                        </div>
                                                </div>



                                                <div class="form-group row">



                                                <div class="col-md-12">
                                                        <div  class="outer-repeater">
                                                            <div data-repeater-list="outer-group" class="outer">
                                                                <div data-repeater-item class="outer">

                                                                    <div class="inner-repeater mb-12">
                                                                        <div data-repeater-list="inner-group" class="inner form-group">
                                                                            <div data-repeater-item class="inner mb-3 row">

                                                                                <div class="col-md-6 col-4">
                                                                                    <input type="text" class="inner form-control  inner-in" name="owners" placeholder="أضافه أسم  {{ $status == 0? 'المالك ' : ' الباطن   '  }} "/>
                                                                                </div>

                                                                                <div class="col-md-2 col-4">
                                                                                    <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="حذف"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <input data-repeater-create type="button" class="btn btn-success inner" value="أضافه  {{ $status == 0? 'مالك ' : ' باطن   '  }} جديد"/>
                                                                    </div>

                                                                </div>
                                                            </div>
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
                                            <h5 class="font-size-16 mb-1">ملفات المقايسه   </h5>

                                        </div>
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>
                            </a>

                            <div id="addproduct-img-collapse" class="collapse" data-parent="#addproduct-accordion">
                                <div class="p-4 border-top">
                                <label  for="example-month-input" class="col-form-label"> ملفات المقايسه  </label>
                                 <input name="files[]" type="file" multiple="multiple">
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    </form>
                    <button id="submit-form" onclick="submitForm()" type="submit" class="btn btn-primary mb-2 btn-submit">أظافه بيانات  المقايسه </button>


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
          $("#form").on('submit', function(e) {
              let owners = [];

              // var fd = new FormData($("#create-form"))
              $(".inner-in").each(function(ind, elm) {
                  // fd.append('services[]',elm.value);
                  owners.push(elm.value)
              });


              $("#owners").val(JSON.stringify(owners));
              // return false;
          })
      })
  </script>


   <script>
        let myeditor;
        ClassicEditor
        .create( document.querySelector( '#description-input' ) )
        .then(editor => {
            myeditor = editor;
        })
        .catch( error => {
            console.error( error );
        });


        function submitForm() {
            $("#form").submit();
        }
        var uploadedDocumentMap = {}

        Dropzone.options.dropzone = { // The camelized version of the ID of the form element
            // The configuration we've talked about above
            autoProcessQueue: true,
            url: "{{url('admin/store-media')}}",
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 20,
            addRemoveLinks: true,

            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
            success: function (file, response) {
                response.data.forEach(function(img) {
                    $('#form').append('<input type="hidden" name="document[]" value="' + img.name + '">')
                    uploadedDocumentMap[file.name] = img.name
                })
            },
                 removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.name !== 'undefined' && (!uploadedDocumentMap[file.name])) {
                    name = file.name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('#form').find('input[name="document[]"][value="' + name + '"]').remove()
                // ajax request to delete tmp media
                $.ajax({
                    type:"POST",
                    url:"{{url('admin/delete-media')}}",
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

                var myDropzone = this;
                @if(isset($service) && $service->images)

                var files =
                    {!! json_encode($service->images) !!}
                    for (var i in files) {
                        var file = files[i]
                        const baseUrl = "{{config('app.url')}}";
                        var mockFile = { name: file.image};

                        myDropzone.emit("addedfile", mockFile);
                       // myDropzone.emit("thumbnail", mockFile, baseUrl + "/public/uploads/services/" + file.image);
                        myDropzone.emit("complete", mockFile);
                        $('#form').append('<input type="hidden" name="document[]" value="' + file.image + '">')
                    }
                @endif

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function() {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                });
                this.on("successmultiple", function(files, response) {
                    // Gets triggered when the files have successfully been sent.
                    // Redirect user or notify of success.
                    // console.log("success");
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
    </script>




@endsection
