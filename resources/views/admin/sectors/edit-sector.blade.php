@extends('layouts.adminLayout.master')
@section('title')
    تعديل  القطاع
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
        @slot('title') تعديل  القطاع  @endslot
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
            <form id="form" action="{{url('admin/edit-sector/'.$sectordetails->id)}}" method="POST" enctype="multipart/form-data">
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
                                            <label for="example-text-input" >اسم القطاع   </label>
                                            <input  name="sector_name"  value="{{$sectordetails->sector_name}}" class="form-control" type="text"  id="example-text-input">
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> ترتيب القطاع </label>
                                                <input  name="ordering"  value="{{$sectordetails->ordering}}" class="form-control" type="text"  id="example-text-input">
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
    <button onclick="submitForm()" class="btn btn-primary mb-2 btn-submit">تعديل  بيانات القطاع  </button>

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
            .then(editor => {

            })
            .catch( error => {
                console.error( error );
            } );

        function submitForm() {
            $("#form").submit();
        }

        var uploadedDocumentMapImgs = {}

        Dropzone.options.dropzone= { // The camelized version of the ID of the form element
            // The configuration we've talked about above
            autoProcessQueue: true,
            url: "{{url('admin/store-media')}}",
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 10,
            addRemoveLinks: true,

            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.name !== 'undefined' && (!uploadedDocumentMapImgs[file.name])) {
                    name = file.name
                } else {
                    name = uploadedDocumentMapImgs[file.name]
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
                        console.log('success');
                    }
                });
            },

            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function() {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                });
                this.on("successmultiple", function(file, response) {
                    // Gets triggered when the files have successfully been sent.
                    // Redirect user or notify of success.
                    // console.log("uploaded success");
                    response.data.forEach(function(img) {
                        $('#form').append('<input type="hidden" name="document[]" value="' + img.name + '">')
                        uploadedDocumentMapImgs[img.name] = img.name
                    })
                });

                @if(isset($projectDetails) && $projectDetails->images)

                var files =
                    {!! json_encode($projectDetails->images) !!}
                    for (var i in files) {
                    var file = files[i]
                    const baseUrl = "{{config('app.url')}}";
                    var mockFile = { name: file.image};

                    myDropzone.emit("addedfile", mockFile);
                    // myDropzone.emit("thumbnail", mockFile, baseUrl + "uploads/portofolios/" + file.image);
                    myDropzone.emit("complete", mockFile);
                    $('#form').append('<input type="hidden" name="document[]" value="' + file.image + '">')
                }
                @endif

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
