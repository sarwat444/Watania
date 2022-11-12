
@extends('layouts.adminLayout.master')
@section('title')
أضافه المكاتبه
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
    @slot('title')  تعديل  بيانات المكاتبه   @endslot
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
                    <form id="form" method="post" action="{{url('/admin/edit-fax/'.$faxdetails->id)}}" enctype="multipart/form-data">
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
                                            <h5 class="font-size-16 mb-1">بيانات المكاتبه </h5>

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
                                            <div class="col-md-6">
                                                <label for="example-text-input" >خاص بالجهه </label>
                                                    <input class="form-control" type="text" name="khas_geha"  id="example-text-input" value="{{$faxdetails->khas_geha }}">
                                                    <input class="form-control" type="hidden" name="addedby"  id="example-text-input" value="{{Auth::user()->id}}">
                                             </div>
                                             <div class="col-md-6">
                                                <label for="example-text-input" > رقم القيد  </label>
                                                    <input class="form-control" type="text" name="kaed"  id="example-text-input" value="{{$faxdetails->kaed }}" >
                                             </div>
                                       </div>

                                       <div class="form-group  row">
                                            <div class="col-md-6">
                                                <label for="example-text-input" > جهه الاختصاص  </label>
                                                    <select name="geha_ekhtesas" class="form-control">
                                                    @foreach ($gehas as $geha)
                                                      <option value="{{$geha->id}}" @if($geha->id ==  $faxdetails->geha_ekhtesas)  selected  @endif >{{$geha->sector_name}}</option>
                                                    @endforeach
                                                    </select>

                                             </div>
                                             <div class="col-md-6">
                                                <label for="example-text-input" > وجهه الفاكس </label>
                                                    <select class="form-control" name="waght_fax">
                                                       <option value="0" @if($faxdetails->waght_fax == 0 )  selected  @endif  >صادر </option>
                                                       <option value="1" @if( $faxdetails->waght_fax == 1)  selected  @endif  >وارد </option>
                                                    </select>
                                             </div>
                                       </div>

                                       <div class="form-group  row">
                                            <div class="col-md-6">
                                                <label for="example-text-input" >  رقم صادر الجهه  </label>
                                                    <input class="form-control" type="text" name="sader_elgeha_number"  id="example-text-input" value="{{$faxdetails->sader_elgeha_number}}" >
                                             </div>
                                             <div class="col-md-6">
                                                <label for="example-text-input" >  تاريخ صادر الجهه </label>
                                                    <input class="form-control" type="date" name="sader_elgeha_date"  id="example-text-input" value="{{$faxdetails->sader_elgeha_date}}"  >
                                             </div>
                                       </div>


                                       <div class="form-group  row">
                                            <div class="col-md-6">
                                                <label for="example-text-input" >    تاريخ الاصدار   </label>
                                                    <input class="form-control" type="date" name="esdar_date"  id="example-text-input" value="{{$faxdetails->esdar_date}}" >
                                             </div>
                                             <div class="col-md-6">
                                                <label for="example-text-input" >  جهه الفاكس    </label>
                                                    <input class="form-control" type="text" name="geha_fax"  id="example-text-input"  value="{{$faxdetails->geha_fax}}" >
                                             </div>
                                       </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label  for="example-month-input" class="col-form-label">  تفاصيل  الفاكس   </label>
                                                <textarea id="description-input" class="summernote form-control" name="description"  >  {{$faxdetails->description}}  </textarea>
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
                                    <h5 class="font-size-16 mb-1"> ملفات الفاكس </h5>

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



                </div>
            </div>
        </div>
    </form>
       <button id="submit-form" onclick="submitForm()" type="submit" class="btn btn-primary mb-2 btn-submit">أدراج المكاتبه </button>



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
        let myeditor;
        ClassicEditor
        .create( document.querySelector( '#description-input' ) )
        .then(editor => {
            myeditor = editor;
        })
        .catch( error => {
            console.error( error );
        } );

        function submitForm() {
            $("#form").submit();
        }

        var uploadedDocumentMap = {}

        Dropzone.options.dropzone = { // The camelized version of the ID of the form element
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
    </script>




@endsection
