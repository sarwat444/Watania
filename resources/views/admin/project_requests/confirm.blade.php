@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.confirm_project')
@endsection
@section('css')

    <link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.confirm_project')@endslot
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
            <div id="addproduct-accordion" class="custom-accordion">
                 <form id="form" action="{{url('admin/confirm-projectrequest/'.$project->id )}}" method="post"  enctype="multipart/form-data">
                 @csrf
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

                

                             <!--Form Data Hear --> 
              
                                 
                                    <div class="form-group  row">
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >سعر المشروع </label>
                           <input class="form-control" name="price" type="number" value="{{$project->price}}" id="price-input">
                        </div>
                  <div class="col-md-6">
                          <label for="example-datetime-local-input" >عدد الاسكرينات  </label>
                          <input class="form-control" type="number" name="number_of_screens"  value="{{$project->number_of_screens}}" id="number-of-screens-input">
                        </div>
      
                </div>
                <div class="form-group  row">
                        
                       <div class="col-md-6">
                           <label for="example-datetime-local-input" >حاله المشروع    </label>
                           <select name="project_status_id" class="form-control select2">
                            <option value="">حاله  المشروع </option>
                            @foreach($projectStatuses as $status)
                                <option value="{{$status->id}}" @if($project->project_status_id == $status->id) selected @endif>{{$status->name}} </option>
                            @endforeach
                        </select>
                                   
                        </div>
                        
 
                       <div class="col-md-6">
                 
                                <div class="form-group">
                                    <label>تاريخ البدايه والانتهاء  </label>
                                    <div>
                                        <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                            <input type="text" class="form-control" value="{{$project->start_date}}" name="start_date" />
                                            <input type="text" class="form-control" value="{{$project->end_date}}" name="end_date" />
                                        </div>
                                    </div>
                                </div>
                       </div>
      
                    </div>


                <div class="repeater">
                    <div data-repeater-list="teams">
                        @if(count($project->teams) > 0)
                            @foreach ($project->teams as $pTeam)
                                <div data-repeater-item class="row">
                                    <div class="form-group col-lg-4">
                                        <select name="data[*][team_id]" class="form-control select2">
                                            <option value="">اختر اعضاء الفريق  </option>
                                            @foreach($teams as $team)
                                                <option value="{{$team->id}}" @if($pTeam->pivot->team_id == $team->id) selected @endif>{{$team->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div  class="form-group col-lg-4">

                                    <select name="team_status_id" class="form-control select2">
                                        <option value="">اختر التخصص</option>
                                        @foreach($teamStatuses as $status)
                                            <option value="{{$status->id}}" @if($pTeam->pivot->team_status_id == $status->id) selected @endif>{{$status->name}} </option>
                                        @endforeach
                                    </select>

                                    </div>

                                    <div  class="form-group col-lg-4">
                                        <input class="form-control" type="number" name="data[*][price]" value="{{$pTeam->pivot->price}}"  placeholder="السعر" >
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <input type="number" id="debtor" name="data[*][debtor]"  value="{{$pTeam->pivot->debtor}}"  placeholder="داين  " class="form-control"/>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <input type="number" id="creditor" name="data[*][creditor]"  value="{{$pTeam->pivot->creditor}}" placeholder="مدين    " class="form-control"/>
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <input type="file"  name="data[*][path]" class="form-control"/>
                                        {{-- <span>{{$pTeam->pivot->path}}</span> --}}
                                    </div>

                                    <div class="form-group col-lg-1 align-self-center">
                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="حذف  "/>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div data-repeater-item class="row">
                                <div class="form-group col-lg-4">
                                    <select name="data[*][team_id]" class="form-control select2">
                                        <option value="">أعضاء الفريق </option>
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div  class="form-group col-lg-4">

                                <select name="data[*][team_status_id]" class="form-control select2">
                                    <option value="">تصنيف  الفريق </option>
                                    @foreach($teamStatuses as $status)
                                        <option value="{{$status->id}}">{{$status->name}} </option>
                                    @endforeach
                                </select>

                                </div>

                                <div  class="form-group col-lg-4">
                                    <input class="form-control" type="number" name="data[*][price]"  placeholder="السعر " >
                                </div>

                                <div class="form-group col-lg-4">
                                    <input type="number" id="debtor" name="data[*][debtor]"  placeholder="داين  " class="form-control"/>
                                </div>

                                <div class="form-group col-lg-4">
                                    <input type="number" id="creditor" name="data[*][creditor]" placeholder="مدين    " class="form-control"/>
                                </div>

                                <div class="form-group col-lg-3">
                                    <input type="file"  name="data[*][path]" class="form-control"/>
                                    {{-- <span>{{$pTeam->pivot->path}}</span> --}}
                                </div>

                                <div class="form-group col-lg-1 align-self-center">
                                    <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="حذف  "/>
                                </div>
                            </div>
                        @endif
                    </div>
                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="أضافة مستخدم اخر"/>
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
                                    <h5 class="font-size-16 mb-1"> @lang('translation.add_files') </h5>
                    
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
                            
                        </div>
                    </a>

                    
                    
                    
                    <div id="addproduct-img-collapse" class="collapse" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <div action="#" class="dropzone" id="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>
                                    
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.add')</button>
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
            <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>


    <script>
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
            maxFiles: 10,
            addRemoveLinks: true,

            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
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
                    url:"{{url('admin/delete-tmp-media')}}",
                    data:{name:name},
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success(response){
                        // console.log(response);
                    }
                });
            },

            // The setting up of the dropzone
            init: function() {

                var myDropzone = this;

                @if(isset($project) && $project->files)

            var files =
                {!! json_encode($project->files) !!}
                for (var i in files) {
                    var file = files[i]
                    const baseUrl = "{{config('app.url')}}";
                    var mockFile = { name: file.path};

                    myDropzone.emit("addedfile", mockFile);
                    // myDropzone.emit("thumbnail", mockFile, baseUrl + "/uploads/projects/" + file.path);
                    myDropzone.emit("complete", mockFile);
                    $('#form').append('<input type="hidden" name="document[]" value="' + file.path + '">')
                }
            @endif

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
                        uploadedDocumentMap[file.name] = img.name
                    })
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









