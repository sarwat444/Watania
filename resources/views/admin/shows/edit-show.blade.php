@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.edit_show')
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
    @slot('title') @lang('translation.edit_show')@endslot
@endcomponent


        <div class="col-lg-12">
            <form action="{{url('admin/edit-offer/'.$offerDetails->id )}}" method="post" enctype="multipart/form-data" >
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
                                    <h5 class="font-size-16 mb-1">@lang('translation.show_info')</h5>
             
                                </div>
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>
                            
                        </div>
                    </a>

                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                        <div class="p-4 border-top">                      
                             <div class="card-body">
     
                <div class="form-group  row">
                       <div class="col-md-4">
                           <label for="example-datetime-local-input" >الأسم     </label>
                            <input class="form-control" type="text" name="title" value="{{$offerDetails->title}}"  id="example-date-input">
                        </div>
                  <div class="col-md-8">
                              
                                <div class="form-group">
                                    <label>تاريخ البدايه والانتهاء  </label>
                                    <div>
                                        <div class="input-daterange input-group" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                            <input type="text" class="form-control" value="{{old('start_date', $offerDetails->start_date)}}" name="start_date" />
                                            <input type="text" class="form-control" value="{{old('end_date', $offerDetails->end_date)}}" name="end_date" />
                                        </div>
                                    </div>
                                </div>
             
                      
                    </div>
                </div>
                
                <div class="form-group  row">
                       <div class="col-md-12">
                           <label for="example-datetime-local-input" >تفاصيل العرض  </label>
                           <div id="classic-editor" class="summernote" name="description" >{{$offerDetails->description}}</div>
                        </div>
                      </div>
                                 

                        </div>
                
                        </div>
                    </div>
                </div>
                   <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.edit_show')</button>
                
                </div>
            </div>

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
        .catch( error => {
            console.error( error );
        } );
        </script>
@endsection
