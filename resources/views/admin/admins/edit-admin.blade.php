@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.edit_user')
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
    @slot('title') @lang('translation.edit_user')@endslot
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
                <div class="card">
            <form  action="{{url('admin/edit-admin/'. $admin->id)}}" method="post"  >
            @csrf
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
                                    <h5 class="font-size-16 mb-1">@lang('translation.user_info')</h5>

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
                               <label for="example-datetime-local-input1" >الأسم  </label>
                                <input class="form-control" type="text"  id="example-date-input1" name="name" value="{{$admin->name}}">
                            </div>
                              <div class="col-md-6">
                                 <label for="example-datetime-local-input2" > البريد الالكترونى  </label>
                                 <input class="form-control" type="text"  id="example-date-input2" name="email"  value="{{$admin->email}}" >
                              </div>
                    </div>

                                 <div class="form-group  row">
                                     <div class="col-md-6">
                                         <label for="example-datetime-local-input1" >الرقم  السرى  </label>
                                         <input class="form-control" type="text"  id="example-date-input1" name="password">
                                     </div>
                                     <div class="col-md-6">
                                         <label for="example-datetime-local-input2" >  القطاع  </label>
                                         <select name="sector_id" class="form-control">
                                             @foreach($sectors as $sector)
                                                 <option value="{{$sector->id}}" {{ $sector->id == $admin->sector_id ? 'selected' : ''    }}>{{$sector->sector_name}}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                 <label for="example-datetime-local-input2" >  الصلاحيات   </label>
                                         <select name="role_id" class="form-control">
                                             <option value="1" @if($admin->role_id  == 1 ) selected @endif >السوبر أدمن </option>
                                             <option value="2" @if($admin->role_id == 2 ) selected @endif > الأدمن   </option>
                                             <option value="3" @if($admin->role_id == 3 ) selected @endif> wccs   </option>
                                             <option value="4" @if($admin->role_id == 4 ) selected @endif> زائر    </option>
                                             <option value="5" @if($admin->role_id == 5 ) selected @endif> custom    </option>

                                        </select>
                                    </div>



                             <!-- Nav tabs -->



                              </div>
                        </div>

            </div>
            </div>
                   <button type="submit" class="btn btn-primary mb-2 btn-submit">تعديل   بيانات  المستخدم </button>


            </div>



            </form>
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



@endsection
