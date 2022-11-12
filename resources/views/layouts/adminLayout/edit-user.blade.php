@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.edit_user')@endslot
@endcomponent

            <div class="card">
                <div class="card-body">


                    <div class="form-group  row">
                       <div class="col-md-4">
                           <label for="example-datetime-local-input" >الأسم  </label>
                            <input class="form-control" type="text"  id="example-date-input">
                        </div>
                  <div class="col-md-4">
                          <label for="example-datetime-local-input" > البريد الالكترونى  </label>
                            <input class="form-control" type="text"  id="example-date-input">
                     </div>

                       <div class="col-md-4">
                           <label for="example-datetime-local-input" >الباسورد    </label>
                            <input class="form-control" type="text"  id="example-date-input">
                        </div>
      
                    </div>

           



                </div>
</div>
               <button type="submit" class="btn btn-primary mb-2 btn-submit">@lang('translation.edit_user')</button>
   
                </div>
            </div>
      

    <!-- end row -->






    
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>


@endsection
