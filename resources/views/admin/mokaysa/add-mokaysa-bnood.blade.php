
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
    @slot('title') أضافه  بنود المقايسه    @endslot
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

               <form id="create-form" action="{{url('admin/add-mokaysa-bnod/'.$mokaysa->id)}}" method="POST" enctype="multipart/form-data">
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
                                        <h5 class="font-size-16 mb-1">بيانات بنود  المقايسه </h5>

                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                            <div class="p-4 border-top">


                                <div class="card-body">


                                    <div class="form-group  row">

                                                <div class="col-md-12">
                                                    <label for="example-text-input" >   بيانات العنصر   </label>
                                                    <input type="hidden" name="mokaysa_id" value="{{$mokaysa->id}}">
                                                    <textarea  class="form-control" name="element" placeholder="بيانات العنصر"  cols="6" rows="6" required  ></textarea>
                                               </div>
                                     </div>
                                  <div class="form-group  row">
                                          <div class="col-md-6">
                                              <label for="example-text-input" >  الوحده   </label>
                                              <input class="form-control" type="text"  id="example-text-input" placeholder="الوحده"  name="unit" required>
                                          </div>
                                       <div class="col-lg-6">
                                           <label for="example-datetime-local-input1" > الكميه  </label>
                                           <input class="form-control" type="number"  id="example-text-input"  placeholder="الكميه" name="quantity" required>
                                       </div>
                               </div>
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <label for="example-text-input" > الفئه  </label>
                                            <input class="form-control" type="number"  id="example-text-input"  placeholder="الفئه" name="feka" required>
                                        </div>
                                           <div class="col-md-6">
                                            <label for="example-text-input" > الاجمالى  </label>
                                            <input class="form-control" type="number"  id="example-text-input"  placeholder="الأجمالى " name="total" required>
                                        </div>
                                    </div>

                    </div>
                            </div>
                        </div>
                </div>

        <button id="submit-form" class="btn btn-primary mb-2 btn-submit">أضافه بنود المقايسه    </button>
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

/*
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

          */
              $(function(){
                  $("#create-form").on('submit', function(e) {
                      let testowners = [];
                      // var fd = new FormData($("#create-form"))
                      $(".inner-in").each(function(ind, elm) {
                          // fd.append('services[]',elm.value);
                          testowners.push(elm.value)
                      });
                      $("#owners").val(JSON.stringify(testowners));


                      // return false;
                  })
              });

    $(function(){
        $("#create-form").on('submit', function(e) {
            let consults = [];
            // var fd = new FormData($("#create-form"))
            $(".inner-in2").each(function(ind, elm) {
                // fd.append('services[]',elm.value);
                consults.push(elm.value)
            });
            $("#consults").val(JSON.stringify(consults));


            // return false;
        })
    })




</script>

@endsection
